<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Content;
use Illuminate\Support\Str;
use Image;
use File;
use Auth;

class ContentsController extends Controller
{
    public function index()
    {
        $content = Content::all();
        return view('admin.contents.index', compact('content'));
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
        $content = new Content();
        $content->text = $request->text;
        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/img/', $filename);
            Image::make(public_path() . '/admin/img/' . $filename);
            $content->image = $filename;
        } else {
            $content->image = 'NOPIC.png';
        }


        $content->id_user = Auth::user()->id;
        $content->save();
        return redirect()->route('contents');
    }

    public function edit($id)
    {
        $edit_content = Content::find($id);
        return view('admin.contents.edit', compact('edit_content'));
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
            $content = Content::find($id);
            if ($content->image != 'NOPIC.png') {
                File::delete(public_path() . '/admin/img/' . $content->image);
            }
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/img/', $filename);
            Image::make(public_path() . '/admin/img/' . $filename);
            $content->image = $filename;

            $content->text = $request->text;
        } else {
            $content = Content::find($id);
            $content->text = $request->text;
        }
        $content->save();
        return redirect()->route('contents');
    }


    //delete
    public function delete($id)
    {
        $delete = Content::find($id);
        if ($delete->image != 'NOPIC.png') {
            File::delete(public_path() . '/admin/img/' . $delete->image);
        }
        $delete->delete();
        return redirect('/admin/Contents/index');
    }
}
