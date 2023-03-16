<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestControllner extends Controller
{

    public function index(){
         $today =today();
        $newDate = date("d-m-Y", strtotime($today));

        return view('guest.home',compact('newDate'));
    }


    public function singlePage(){
        $today =today();
        $newDate = date("d-m-Y", strtotime($today));

        return view('guest.single-page',compact('newDate'));


    }
    //
}
