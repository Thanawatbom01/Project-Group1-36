<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Room;

class AdminController extends Controller
{
   public function index(){
        $room = Room::all();
        return view('admin.index',compact('room'));
    }
}
