<?php

namespace App\Http\Controllers;

use App\Http\Requests\createSettingRequest;
use App\Models\Admin\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{

    public function index()
    {
        $setting=DB::table('settings')->get();
        return view('Admin.page1.setting.index',compact('setting'));
    }


    public function create()
    {
        return view('Admin.page1.setting.setting');
    }


    public function store(Request $request)
    {
        $setting=new Setting();
        $setting->title=$request->title;
        $setting->author=$request->author;
        $setting->keywords=$request->keywords;
        $setting->description=$request->description;
        $setting->save();
        return redirect()->route('setting.create');
    }


    public function show(Setting $setting)
    {
        $setting=DB::table('settings')->where('id');
    }


    public function edit(Setting $setting)
    {
        //
    }


    public function update(Request $request, Setting $setting)
    {
        //
    }


    public function destroy($setting)
    {
        Setting::destroy($setting);
        return redirect()->route('setting.index');
    }
}
