<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use http\Client\Response;
use Illuminate\Http\Request;
use App\Models\Comment;
use mysql_xdevapi\Exception;
use Symfony\Component\Console\Input\Input;

class CommentControllner extends Controller
{
    //

    public function  list()
    {

        $data = Comment::all();

        return view('admin.comment.list', compact('data'));


    }

    public function delete(Comment $comment)
    {

        $comment->delete();
        return redirect()->to('/admin/comment/list');

    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',

        ], [

            'required' => 'Vui lòng nhập nội dung'

        ]);

        try {
            $data = $request->get('content');
            $newspaper_id = $request->get('newspaper_id');
            $parent_id = $request->get('parent_id');
            $user = auth()->user()->id;

            Comment::create([
                'content' => $data,
                'newspaper_id' => $newspaper_id,
                'user_id' => $user,
                'parent_id' => $parent_id
            ]);
            return back();

        } catch (\Throwable $e) {

            return redirect()->back()->with("error", $e->getMessage());
        }

    }

    public function demoAjax(Request $request)
    {
        //
        if ($request->get('content') !== null) {

        }

        return response()->json(['data' => true]);
    }


}
