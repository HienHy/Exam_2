<?php

namespace App\Http\Controllers;

use App\Models\Newspaper;
use App\Models\Title;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewspaperControllner extends Controller
{
    //

   public function list(Request $request){
       $search = $request->get('search');
       $title_id=$request->get('title_id');


       $title =Title::all();


       $data = Newspaper::where('status','=','1')->TitleFiler($title_id)->Search("%$search%")->orderBy("id", "desc")->paginate(20);

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

       $slug = Str::slug($request->name).random_int(1,10000);





        Newspaper::create
       ([
           'content'=>$data,
           'name'=>$name,
           'title_id'=>$title,
           'user_id'=>$user->id,
            'slug'=>$slug,


       ]);


       return redirect()->to('/admin/newspaper/list');

   }

   public function choDuyet(Request $request){
       $search = $request->get('search');
       $title_id=$request->get('title_id');


       $title =Title::all();


       $data = Newspaper::where('status', '=' ,'0')->TitleFiler($title_id)->Search("%$search%")->orderBy("id", "asc")->paginate(10);

       return view('admin.newspaper.choDuyet',compact('data','title'));
   }



   public function details(Newspaper $newspaper){


       return view('admin.newspaper.details',compact('newspaper'));

   }

   public function  duyetBai(Newspaper $newspaper){


       $newspaper->update([
           'status'=>1
       ]);

    return   redirect()->to('/admin/newspaper/list');

   }

//
//
//   public function update(Newspaper $newspaper){
//
//
//   }


}
