<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use Illuminate\Support\Str;
use Image;
use File;
use Auth;

class RoomController extends Controller

{
    public function index()
    {
        $room = Room::all();
        return view('admin.Room.index', compact('room'));
    }

    public function create(Request $request)
    {
        $validateData = $request->validate(
            [

                'name' => 'required',
                'room_member' => 'required',
                'image' => 'mimes:jpeg,jpg,bmp,png|file|max:12040',
            ],
            [
                'room_member.required' => 'กรุณาป้อนเลขห้องพัก',
                'name.required' => 'กรุณาป้อนรายละเอียดห้องพัก',
                'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,jpg,png เท่านั้น',
                'image.file' => 'อัพโหลดเฉพาะไฟล์ภาพ',
                'image.max' => 'อัพโหลดขนาดไม่เกิน 10MB',

            ]
        );

        //dd($request);
        $room = new Room();
        $room->name = $request->name;
        $room->room_member = $request->room_member;
        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/img/', $filename);
            Image::make(public_path() . '/admin/img/' . $filename);
            $room->image = $filename;
        } else {
            $room->image = 'NOPIC.png';
        }


        $room->id_user = Auth::user()->id;
        $room->save();
        return redirect()->route('index');
    }

    public function edit($id)
    {
        $editroom = Room::find($id);
        return view('admin.Room.edit', compact('editroom'));
    }


    public function update(Request $request, $id)
    {
        $validateData = $request->validate(
            [

                'name' => 'required',
                'room_member' => 'required',
                'image' => 'mimes:jpeg,jpg,bmp,png|file|max:12040',
            ],
            [
                'room_member.required' => 'กรุณาป้อนเลขห้องพัก',
                'name.required' => 'กรุณาป้อนรายละเอียดห้องพัก',
                'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,jpg,png เท่านั้น',
                'image.file' => 'อัพโหลดเฉพาะไฟล์ภาพ',
                'image.max' => 'อัพโหลดขนาดไม่เกิน 10MB',

            ]
        );

        if ($request->hasFile('image')) {
            $room = Room::find($id);
            if ($room->image != 'NOPIC.png') {
                File::delete(public_path() . '/admin/img/' . $room->image);
            }
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/img/', $filename);
            Image::make(public_path() . '/admin/img/' . $filename);
            $room->image = $filename;

            $room->name = $request->name;
            $room->room_member = $request->room_member;
        } else {
            $room = Room::find($id);
            $room->name = $request->name;
            $room->room_member = $request->room_member;
        }
        $room->save();
        return redirect()->route('index');
    }

    //delete
    public function delete($id)
    {
        $delete = Room::find($id);
        if ($delete->image != 'NOPIC.png') {
            File::delete(public_path() . '/admin/img/'.$delete->image);
        }
        $delete->delete();
        return redirect('/admin/index');
    }
}
