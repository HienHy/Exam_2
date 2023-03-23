<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use mysql_xdevapi\Exception;

class CommentControllner extends Controller
{
    //

    public function store(Request $request)
    {
        $request->validate([
            'content'=>'required',

        ],[

            'required'=>'Vui lòng nhập nội dung'

        ]);

        $data=$request->get('content');
        $newspaper_id=$request->get('newspaper_id');
        $parent_id=$request->get('parent_id');
            $user= auth()->user();
        Comment::create([
            'content'=>$data,
            'newspaper_id'=>$newspaper_id,
            'user_id'=>$user->id,
            'parent_id'=>$parent_id
        ]);

        return back();
    }
}
