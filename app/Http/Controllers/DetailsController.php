<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Details;
use Illuminate\Support\Str;
use Image;
use File;
use Auth;

class DetailsController extends Controller
{
    public function index()
    {
        $detail = Details::all();
        return view('admin.details.index', compact('detail'));
    }

    public function create(Request $request)
    {
        $validateData = $request->validate(
            [

                'headtext' => 'required',
                'text' => 'required',
                'image' => 'mimes:jpeg,jpg,bmp,png|file|max:12040',
            ],
            [
                'headtext.required' => 'กรุณาป้อนหัวข้อ',
                'text.required' => 'กรุณาป้อนรายละเอียด',
                'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,jpg,png เท่านั้น',
                'image.file' => 'อัพโหลดเฉพาะไฟล์ภาพ',
                'image.max' => 'อัพโหลดขนาดไม่เกิน 10MB',

            ]
        );

        //dd($request);
        $details = new Details();
        $details->headtext = $request->headtext;
        $details->text = $request->text;
        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/img/', $filename);
            Image::make(public_path() . '/admin/img/' . $filename);
            $details->image = $filename;
        } else {
            $details->image = 'NOPIC.png';
        }


        $details->id_user = Auth::user()->id;
        $details->save();
        return redirect()->route('details');
    }

    public function edit($id)
    {
        $edit_details = Details::find($id);
        return view('admin.details.edit', compact('edit_details'));
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate(
            [

                'headtext' => 'required',
                'text' => 'required',
                'image' => 'mimes:jpeg,jpg,bmp,png|file|max:12040',
            ],
            [
                'headtext.required' => 'กรุณาป้อนหัวข้อ',
                'text.required' => 'กรุณาป้อนรายละเอียด',
                'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,jpg,png เท่านั้น',
                'image.file' => 'อัพโหลดเฉพาะไฟล์ภาพ',
                'image.max' => 'อัพโหลดขนาดไม่เกิน 10MB',

            ]
        );

        if ($request->hasFile('image')) {
            $details = Details::find($id);
            if ($details->image != 'NOPIC.png') {
                File::delete(public_path() . '/admin/img/' . $details->image);
            }
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/img/', $filename);
            Image::make(public_path() . '/admin/img/' . $filename);
            $details->image = $filename;

            $details->headtext = $request->headtext;
            $details->text = $request->text;
        } else {
            $details = Details::find($id);
            $details->headtext = $request->headtext;
            $details->text = $request->text;
        }
        $details->save();
        return redirect()->route('details');
    }

    //delete
    public function delete($id)
    {
        $delete = Details::find($id);
        if ($delete->image != 'NOPIC.png') {
            File::delete(public_path() . '/admin/img/' . $delete->image);
        }
        $delete->delete();
        return redirect('/admin/Details/index');
    }
}
