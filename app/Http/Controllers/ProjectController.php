<?php

namespace App\Http\Controllers;

use App\Models\Admin\Check;
use App\Models\Admin\Product;
use App\Models\Admin\Setting;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function indexProject(){
        $setting=Setting::orderBy('id','desc')->take(1)->skip(0)->get();
        $product=Product::all();
        $check=Check::all();
        return view('site.project',compact(['setting','product','check']));
    }
}
