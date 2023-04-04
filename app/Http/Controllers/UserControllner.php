<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserControllner extends Controller
{
    //

    public function list()
    {


        $data = User::all();





        return view('admin.users.list', compact('data'));
    }

    public function create()
    {

        $data = DB::table('users')->WhereNotIn('id', DB::table('admins')->select('user_id'))
            ->get();
        return view('admin.users.create', compact('data'));
    }
}
