<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GmapController extends Controller
{
    public function indexMap(){
        return view('site.map');
    }
}
