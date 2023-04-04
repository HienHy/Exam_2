<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Newspaper;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WebControllner extends Controller
{
    //
    public function home(){

        $today = Carbon::now('Asia/Ho_Chi_Minh');
        $today->toDayDateTimeString();

        $tongLuongLuotXem=Newspaper::sum('views_count');
        $soLuongBaiViet=Newspaper::count('id');
        $soLuongPhongVien = Admin::count('role','=','PV');








        return view("welcome",compact('tongLuongLuotXem','today','soLuongBaiViet','soLuongPhongVien'));
    }

}
