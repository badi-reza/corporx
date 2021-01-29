<?php

namespace App\Http\Controllers;

use App\Models\Admin\Setting;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{

    public function index()
    {
        $comment=DB::table('comments')->get();
        return view('Admin.page1.contact.index',compact('comment'));
    }


    public function store(Request $request)
    {
        $comment=new Comment();
        $comment->name=$request->name;
        $comment->email=$request->email;
        $comment->des=$request->des;
        $comment->save();
        return redirect()->route('contact');

    }


    public function destroy($comment)
    {
        Comment::destroy($comment);
        return redirect()->route('comment.index');
    }
}
