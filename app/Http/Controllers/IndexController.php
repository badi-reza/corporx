<?php

namespace App\Http\Controllers;

use App\Models\Admin\About;
use App\Models\Admin\Check;
use App\Models\Admin\Hero;
use App\Models\Admin\Setting;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $setting=Setting::orderBy('id','desc')->take(1)->skip(0)->get();
        $hero=Hero::all();
        $check=Check::all();
        $about=About::all();
        return view('site.home_page1',compact(['setting','hero','check','about']));
    }
}
