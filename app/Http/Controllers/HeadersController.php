<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;
use Illuminate\Support\Str;
use Image;
use File;
use Auth;

class HeadersController extends Controller
{
    public function index()
    {
        $header = Header::all();
        return view('admin.Headers.index', compact('header'));
    }

    public function create(Request $request)
    {
        $validateData = $request->validate(
            [

                'text' => 'required',
                'image' => 'mimes:jpeg,jpg,bmp,png|file|max:12040',
            ],
            [
                'text.required' => 'กรุณาป้อนรายละเอียด',
                'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,jpg,png เท่านั้น',
                'image.file' => 'อัพโหลดเฉพาะไฟล์ภาพ',
                'image.max' => 'อัพโหลดขนาดไม่เกิน 10MB',

            ]
        );

        //dd($request);
        $header = new Header();
        $header->text = $request->text;

        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/img/', $filename);
            Image::make(public_path() . '/admin/img/' . $filename);
            $header->image = $filename;
        } else {
            $header->image = 'NOPIC.png';
        }


        $header->id_user = Auth::user()->id;
        $header->save();
        return redirect()->route('header');
    }

    public function updateStatus(Request $request)
    {
        $headers = Header::findOrFail($request->id_header);
        $headers->status = $request->status;
        $headers->save();

        return response()->json(['success'=>'Status change successfully.']);
    }

    public function edit($id)
    {
        $editheader = Header::find($id);
        return view('admin.Headers.edit', compact('editheader'));
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate(
            [

                'text' => 'required',
                'image' => 'mimes:jpeg,jpg,bmp,png|file|max:12040',
            ],
            [
                'text.required' => 'กรุณาป้อนรายละเอียด',
                'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,jpg,png เท่านั้น',
                'image.file' => 'อัพโหลดเฉพาะไฟล์ภาพ',
                'image.max' => 'อัพโหลดขนาดไม่เกิน 10MB',

            ]
        );

        if ($request->hasFile('image')) {
            $header = Header::find($id);
            if ($header->image != 'NOPIC.png') {
                File::delete(public_path() . '/admin/img/' . $header->image);
            }
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/img/', $filename);
            Image::make(public_path() . '/admin/img/' . $filename);
            $header->image = $filename;

            $header->text = $request->text;


        } else {
            $header = header::find($id);
            $header->text = $request->text;
        }
        $header->save();
        return redirect()->route('header');
    }

        //delete
        public function delete($id)
        {
            $delete = Header::find($id);
            if ($delete->image != 'NOPIC.png') {
                File::delete(public_path() . '/admin/img/'.$delete->image);
            }
            $delete->delete();
            return redirect('/admin/Headers/index');
        }
}
