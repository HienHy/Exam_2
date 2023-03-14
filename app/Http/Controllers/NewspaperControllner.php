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


       $title =Title::all();


       $data = Newspaper::Search("%$search%")->orderBy("id", "asc")->paginate(20);

       return view('admin.newspaper.list',compact('data','title'));
   }


}
