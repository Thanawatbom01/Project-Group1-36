<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use Illuminate\Support\Str;
use Image;
use File;
use Auth;

class FrontendController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('welcome', compact('rooms'));
    }
}
