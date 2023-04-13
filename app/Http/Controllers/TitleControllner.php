<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Illuminate\Http\Request;

class TitleControllner extends Controller
{


    public  function list(){
        $data=Title::all();

        return view('admin.title.list',compact('data'));
    }


    public function create()
    {
        return view('admin.title.create');
    }    //
}
