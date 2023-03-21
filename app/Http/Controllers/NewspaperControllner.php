<?php

namespace App\Http\Controllers;

use App\Models\Newspaper;
use App\Models\Title;
use Illuminate\Http\Request;

class NewspaperControllner extends Controller
{
    //

   public function list(Request $request){
       $search = $request->get('search');
       $title_id=$request->get('title_id');


       $title =Title::all();


       $data = Newspaper::TitleFiler($title_id)->Search("%$search%")->orderBy("id", "asc")->paginate(20);

       return view('admin.newspaper.list',compact('data','title'));
   }


   public  function create(Request $request){

       $title =Title::all();



       return view('admin.newspaper.create',compact('title'));
   }


   public function save(Request $request){

       $request->validate([

           'name'=>'required|string|min:6',

           'content'=>'required',

           'title_id'=>'required',


       ],[

           'required'=>'Vui lòng nhập nội dung'

           ]
       );


       $data=$request->get('content');
       $name=$request->get('name');
       $title=$request->get('title_id');
        $user= auth()->user();

//        $data = htmlentities('content');



        Newspaper::create
       ([
           'content'=>$data,
           'name'=>$name,
           'title_id'=>$title,
           'user_id'=>$user->id,


       ]);


       return redirect()->to('/admin/newspaper/list');

   }

   public function update(Newspaper $newspaper){

   }


}
