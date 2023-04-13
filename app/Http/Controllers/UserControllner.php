<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Exception;

class UserControllner extends Controller
{
    //

    public function list()
    {


        $data = DB::table('users')->join('admins', 'admins.user_id', '=', 'users.id')
            ->where('role', '=', 'PV')
            ->get();

//dd($data);


        return view('admin.users.list', compact('data'));
    }

    public function create()
    {

        $data = DB::table('users')->WhereNotIn('id', DB::table('admins')->select('user_id'))
            ->get();
        return view('admin.users.create', compact('data'));
    }

    public function save(Request $request)
    {

        $user_id = $request->get('author_id');

        DB::table('admins')->insert([
            'user_id' => $user_id,
            'role' => 'PV'
        ]);

        redirect()->to('/admin/user/list');


    }
    public function delete(User $user){
        $user->Admin()->delete();

        return redirect()->to('/admin/user/list');
    }


}
