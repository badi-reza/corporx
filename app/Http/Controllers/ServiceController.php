<?php

namespace App\Http\Controllers;

use App\Models\Admin\Setting;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function indexService(){
        $setting=Setting::orderBy('id','desc')->take(1)->skip(0)->get();
        return view('site.servie',compact('setting'));
    }
}
