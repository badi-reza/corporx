<?php

namespace App\Http\Controllers;

use App\Models\Admin\About;
use App\Models\Admin\Check;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{

    public function index()
    {
        $about=DB::table('abouts')->get();
        return view('Admin.page1.about.index',compact('about'));
    }


    public function create()
    {
        return view('Admin.page1.about.create');
    }

    public function store(Request $request)
    {
        $about=new About();
        $about->name=$request->name;
        $about->title=$request->title;
        $about->des=$request->des;
        $file=$request->file('image');
        if (!empty($file)) {
            $image=$file->getClientOriginalName();
            $pathImage="images/about/".$image;
            if (file_exists($pathImage)) {
                $image=bin2hex(random_bytes(10)).$image;
            }
            $file->move("images/about",$image);
            $about->image=$image;
        }
        $about->save();
        return redirect()->route('about.create');
    }


    public function show(About $about)
    {
        //
    }


    public function edit($abou)
    {
        $about=About::findOrFail($abou);
        return view('Admin.page1.about.edit',compact('about'));
    }


    public function update(Request $request,$abou)
    {
        $about=About::findOrFail($abou);
        $about->name=$request->name;
        $about->title=$request->title;
        $about->des=$request->des;
        $file=$request->file('image');
        if (empty($file)) {
            $image=$about->image;
            $about->image=$image;
        }else{
            $imageRecent=$about->image;
            $pathDelete="images/about/".$imageRecent;
            unlink($pathDelete);
            $imageNow=$file->getClientOriginalName();
            $path="images/about/".$imageNow;
            if (file_exists($path)) {
                $imageNow=bin2hex(random_bytes(10)).$imageNow;
            }

            $file->move("images/about/",$imageNow);
            $about->image=$imageNow;
        }

        $about->save();
        session()->flash("update","Update operation performed successfully");
        return redirect()->route('about.index');
    }


    public function destroy($aboutId)
    {
        $about=About::findOrFail($aboutId);
        $pathImage="images/about/".$about->image;
        unlink($pathImage);
        About::destroy($aboutId);
        session()->flash("delete","Clear operation performed successfully");
        return redirect()->route('about.index');
    }
}
