<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.User.index', compact('users'));
    }

    public function edit($id)
    {
        $edit_users = User::find($id);
        return view('admin.User.edit', compact('edit_users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'address' => 'required',
                'phone' => 'required',
            ],
            [
                'name.required' => 'กรุณาป้อนชื่อ',
                'email.required' => 'กรุณาป้อนอีเมล',
                'address.required' => 'กรุณาป้อนที่อยู่',
                'phone.required' => 'กรุณาป้อนเบอร์โทรศัทพ์',
            ]
        );

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->save();
        return redirect()->route('user');
    }

    //delete
    public function delete($id)
    {
        $delete = User::find($id);
        $delete->delete();
        return redirect('/admin/User/index');
    }
}
