<?php

namespace App\Http\Controllers;

use App\Models\Admin\About;
use App\Models\Admin\Setting;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function indexAboutUs(){
        $setting=Setting::orderBy('id','desc')->take(1)->skip(0)->get();
        $about=About::all();
        return view('site.aboutUs',compact(['setting','about']));
    }
}
