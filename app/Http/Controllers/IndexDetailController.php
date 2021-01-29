<?php

namespace App\Http\Controllers;

use App\Models\Admin\Setting;
use Illuminate\Http\Request;

class IndexDetailController extends Controller
{
    public function indexDetail(){
        $setting=Setting::orderBy('id','desc')->take(1)->skip(0)->get();
        return view('site.project-details',compact('setting'));
    }
}
