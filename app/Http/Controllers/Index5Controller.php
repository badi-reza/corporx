<?php

namespace App\Http\Controllers;

use App\Models\Admin\Setting;
use Illuminate\Http\Request;

class Index5Controller extends Controller
{
    public function index5(){
        $setting=Setting::orderBy('id','desc')->take(1)->skip(0)->get();
        return view('site.home_page5',compact('setting'));
    }
}
