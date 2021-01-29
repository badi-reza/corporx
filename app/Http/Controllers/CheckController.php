<?php

namespace App\Http\Controllers;

use App\Models\Admin\Check;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckController extends Controller
{

    public function index()
    {
        $check=DB::table('checks')->get();
        return view('Admin.page1.check.index',compact('check'));
    }


    public function create()
    {
        return view('Admin.page1.check.create');
    }


    public function store(Request $request)
    {
        $check=new Check();
        $check->title_one=$request->title_one;
        $check->title_two=$request->title_two;
        $check->alt=$request->alt;
        $file=$request->file('image');
        if (!empty($file)) {
            $image=$file->getClientOriginalName();
            $pathImage="images/check/".$image;
            if (file_exists($pathImage)) {
                $image=bin2hex(random_bytes(10)).$image;
            }
            $file->move("images/check",$image);
            $check->image=$image;
        }
        $check->save();
        return redirect()->route('check.create');
    }


    public function show(Check $check)
    {
        //
    }


    public function edit( $chec)
    {
        $check=Check::findOrFail($chec);
        return view('Admin.page1.check.edit',compact('check'));
    }


    public function update(Request $request, $chec)
    {
        $check=Check::findOrFail($chec);
        $check->title_one=$request->title_one;
        $check->title_two=$request->title_two;
        $check->alt=$request->alt;
        $file=$request->file('image');
        if (empty($file)) {
            $image=$check->image;
            $check->image=$image;
        }else{
            $imageRecent=$check->image;
            $pathDelete="images/check/".$imageRecent;
            unlink($pathDelete);
            $imageNow=$file->getClientOriginalName();
            $path="images/check/".$imageNow;
            if (file_exists($path)) {
                $imageNow=bin2hex(random_bytes(10)).$imageNow;
            }

            $file->move("images/check/",$imageNow);
            $check->image=$imageNow;
        }

        $check->save();
        session()->flash("update","Update operation performed successfully");
        return redirect()->route('check.index');

    }


    public function destroy($checkId)
    {
        $check=Check::findOrFail($checkId);
        $pathImage="images/check/".$check->image;
        unlink($pathImage);
        Check::destroy($checkId);
        session()->flash("delete","Clear operation performed successfully");
        return redirect()->route('check.index');
    }
}
