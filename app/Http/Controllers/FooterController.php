<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Footer;
use Illuminate\Support\Str;
use Image;
use File;
use Auth;


class FooterController extends Controller
{
    public function index(){
        $footer = Footer::all();
        return view('admin.Footer.index',compact('footer'));

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
        $footer = new Footer();
        $footer->text = $request->text;
        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/img/', $filename);
            Image::make(public_path() . '/admin/img/' . $filename);
            $footer->image = $filename;
        } else {
            $footer->image = 'NOPIC.png';
        }

        $footer->id_user = Auth::user()->id;
        $footer->save();
        return redirect()->route('footer');
    }

    public function edit($id)
    {
        $edit_footer = Footer::find($id);
        return view('admin.footer.edit', compact('edit_footer'));
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
            $footer = Footer::find($id);
            if ($footer->image != 'NOPIC.png') {
                File::delete(public_path() . '/admin/img/' . $footer->image);
            }
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/img/', $filename);
            Image::make(public_path() . '/admin/img/' . $filename);
            $footer->image = $filename;

            $footer->text = $request->text;
        } else {
            $footer = Footer::find($id);
            $footer->text = $request->text;
        }
        $footer->save();
        return redirect()->route('footer');
    }

        //delete
        public function delete($id)
        {
            $delete = Footer::find($id);
            if ($delete->image != 'NOPIC.png') {
                File::delete(public_path() . '/admin/img/'.$delete->image);
            }
            $delete->delete();
            return redirect('/admin/Footer/index');
        }
}
