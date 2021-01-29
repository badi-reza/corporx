<?php

namespace App\Http\Controllers;

use App\Models\Admin\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HeroController extends Controller
{

    public function index()
    {
        $hero=DB::table('heroes')->get();
        return view('Admin.page1.hero.index',compact('hero'));
    }


    public function create()
    {
        return view('Admin.page1.hero.create');
    }


    public function store(Request $request)
    {
        $hero=new Hero();
        $hero->title=$request->title;
        $hero->brief=$request->brief;
        $file=$request->file('image');
        if (!empty($file)) {
            $image=$file->getClientOriginalName();
            $pathImage="images/hero/".$image;
            if (file_exists($pathImage)) {
                $image=bin2hex(random_bytes(10)).$image;
            }
            $file->move("images/hero",$image);
            $hero->image=$image;
        }
        $hero->save();
        return redirect()->route('hero.create');
    }


    public function show(Hero $hero)
    {
        //
    }


    public function edit( $her)
    {
        $hero=Hero::findOrFail($her);
        return view('Admin.page1.hero.edit',compact('hero'));
    }


    public function update(Request $request, $her)
    {
        $hero=Hero::findOrFail($her);
        $hero->title=$request->title;
        $hero->brief=$request->brief;
        $file=$request->file('image');
        if (empty($file)) {
            $image=$hero->image;
            $hero->image=$image;
        }else{
            $imageRecent=$hero->image;
            $pathDelete="images/hero/".$imageRecent;
            unlink($pathDelete);
            $imageNow=$file->getClientOriginalName();
            $path="images/hero/".$imageNow;
            if (file_exists($path)) {
                $imageNow=bin2hex(random_bytes(10)).$imageNow;
            }

            $file->move("images/hero/",$imageNow);
            $hero->image=$imageNow;
        }

        $hero->save();
        session()->flash("update","Update operation performed successfully");
        return redirect()->route('hero.index');

    }


    public function destroy($heroId)
    {
        $hero=Hero::findOrFail($heroId);
        $pathImage="images/hero/".$hero->image;
        unlink($pathImage);
        Hero::destroy($heroId);
        session()->flash("delete","Clear operation performed successfully");
        return redirect()->route('hero.index');
    }
}
