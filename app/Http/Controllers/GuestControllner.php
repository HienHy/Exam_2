<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Newspaper;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GuestControllner extends Controller
{

    public function index()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $dt->toDayDateTimeString();

        $news_thoisu = Newspaper::where('title_id', '=', '4')->orderBy("created_at", 'desc')->limit(1)->get();
        $news_thoisu1 = Newspaper::where('title_id', '=', '9')->orderBy("created_at", 'desc')->limit(1)->get();
        $news_thoisu2 = Newspaper::where('title_id', '=', '2')->orderBy("created_at", 'desc')->limit(1)->get();
        $news_thoisu3 = Newspaper::where('title_id', '=', '1')->orderBy("created_at", 'desc')->limit(1)->get();
        $news_thoisu4 = Newspaper::where('title_id', '=', '10')->orderBy("created_at", 'desc')->limit(1)->get();
        $last_news = Newspaper::orderBy("created_at", 'desc')->limit(5)->get();
        $last_news1 = Newspaper::orderBy("publish_date", 'desc')->limit(1)->get();


        $top_thoisu = Newspaper::where('title_id', '=', '1')->orderBy("created_at", 'desc')->limit(3)->get();
        $top_thegioi = Newspaper::where('title_id', '=', '2')->orderBy("created_at", 'desc')->limit(3)->get();
        $top_phapluat = Newspaper::where('title_id', '=', '3')->orderBy("created_at", 'desc')->limit(3)->get();
        $top_kinhdoanh = Newspaper::where('title_id', '=', '4')->orderBy("created_at", 'desc')->limit(3)->get();
        $top_congnghe = Newspaper::where('title_id', '=', '5')->orderBy("created_at", 'desc')->limit(3)->get();
        $top_xe = Newspaper::where('title_id', '=', '6')->orderBy("created_at", 'desc')->limit(3)->get();
        $top_dulich = Newspaper::where('title_id', '=', '7')->orderBy("created_at", 'desc')->limit(3)->get();
        $top_vanhoa = Newspaper::where('title_id', '=', '9')->orderBy("created_at", 'desc')->limit(3)->get();
        $top_giaitri= Newspaper::where('title_id', '=', '10')->orderBy("created_at", 'desc')->limit(3)->get();
        $top_thethao = Newspaper::where('title_id', '=', '11')->orderBy("created_at", 'desc')->limit(3)->get();






        return view('guest.home', compact('last_news1','dt', 'last_news', 'news_thoisu', 'news_thoisu1', 'news_thoisu2', 'news_thoisu3', 'news_thoisu4','top_thoisu'
        ,'top_thegioi','top_xe','top_giaitri','top_phapluat','top_kinhdoanh','top_congnghe','top_congnghe','top_dulich','top_vanhoa','top_thethao'));
    }


    public function singlePage(Newspaper $newspaper)
    {


        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $dt->toDayDateTimeString();

        $related_newspaper = Newspaper::where('title_id',$newspaper->title_id)
            ->where('id','<>',$newspaper->id)
            ->orderBy('created_at', 'desc')->limit(2)->get();


        $top_views = Newspaper::orderBy("views_count", 'desc')->limit(5)->get();


        $views = $newspaper->views_count + 1;



//dd($related_newspaper);


        $newspaper->update([
            'views_count' => $views
        ]);










        return view('guest.single-page', compact('dt', 'newspaper', 'related_newspaper', 'top_views'));


    }







    public function thoiSuPage()
    {



        return view('guest.thoi-su');
    }

    public function congNghePage()
    {

        return view('guest.cong-nghe');
    }

    public function duLichPage()
    {

        return view('guest.du-lich');
    }

    public function giaiTriPage()
    {

        return view('guest.giai-tri');
    }

    public function giaoDucPage()
    {

        return view('guest.giao-duc');
    }

    public function kinhDoanhPage()
    {

        return view('guest.kinh-doanh');
    }

    public function phapLuatPage()
    {

        return view('guest.phap-luat');
    }

    public function theGioiPage()
    {

        return view('guest.the-gioi');
    }

    public function theThaoPage()
    {

        return view('guest.the-thao');
    }

    public function vanHoaPage()
    {

        return view('guest.van-hoa');
    }

    public function xePage()
    {

        return view('guest.xe');
    }


    //
}
