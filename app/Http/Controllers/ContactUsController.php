<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Admin\Setting;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function indexContact(){
        $setting=Setting::orderBy('id','desc')->take(1)->skip(0)->get();
        $comment=Comment::all();
        return view('site.contactUs',compact(['setting','comment']));
    }}
