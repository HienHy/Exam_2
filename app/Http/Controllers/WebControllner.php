<?php

namespace App\Http\Controllers;

use App\Models\Newspaper;
use Illuminate\Http\Request;

class WebControllner extends Controller
{
    //
    public function home(){
        $today=today();

        $tongLuongLuotXem=Newspaper::sum('views_count');
        $soLuongBaiViet=Newspaper::count('id');








        return view("welcome",compact('tongLuongLuotXem','today','soLuongBaiViet'));
    }

}
