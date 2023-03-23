<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserControllner extends Controller
{
    //

    public function list(){


        $data= User::all();

return view('admin.users.list',compact('data'));
    }
}
