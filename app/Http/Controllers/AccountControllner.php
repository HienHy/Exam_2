<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountControllner extends Controller
{

    public function list(){


        return view('admin.account.list');
    }
    //
}
