<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Comment;
use App\Models\Newspaper;
use App\Models\Title;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WebControllner extends Controller
{
    //
    public function home(){

        $today = Carbon::now('Asia/Ho_Chi_Minh');
        $today->toDayDateTimeString();

        $soLuongBaiVietChuaDuyet=Newspaper::where('status','=','1')->count();
        $soLuongBaiViet=Newspaper::count('id');
        $soLuongPhongVien = Admin::where('role','=','PV')->count();
        $soLuongBinhLuan = Comment::count('id');

        $newspaper_count = Newspaper::count();



        $categories_data=Title::withCount("Newspaper")->get();
        $categories_names = [];
        $category_products_counts=[];
        foreach ($categories_data as $item){
            $categories_names[] = $item->name;
            $category_products_counts[] = $item->newspaper_count;
        }

        $categories_names = json_encode($categories_names);
        $category_products_counts = json_encode($category_products_counts);










        return view("welcome",compact('soLuongBaiVietChuaDuyet','today','soLuongBaiViet','soLuongPhongVien','soLuongBinhLuan','categories_names','category_products_counts','newspaper_count'));
    }

}
