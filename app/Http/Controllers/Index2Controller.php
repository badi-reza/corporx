<?php

namespace App\Http\Controllers;

use App\Models\Admin\Setting;
use Illuminate\Http\Request;

class Index2Controller extends Controller
{
    public function index2(){
        $setting=Setting::orderBy('id','desc')->take(1)->skip(0)->get();
        return view('site.home_page2',compact('setting'));
    }
}
