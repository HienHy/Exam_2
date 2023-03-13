<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TitleControllner extends Controller
{


    public  function list(){
        
        return view('admin.title.list');
    }
    //
}
