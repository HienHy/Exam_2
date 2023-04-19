<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Newspaper;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuestControllner extends Controller
{

    public function index()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $dt->toDayDateTimeString();

        $news_thoisu = Newspaper::
            where('status', '=', '3')
            ->where('publish_date', '<=', $dt)
            ->orderBy("publish_date", 'desc')->limit(1)->get();
        $news_thoisu1 = Newspaper::where('id', '<>', $news_thoisu->first()->id)
            ->where('status', '=', '3')
            ->where('publish_date', '<=', $dt)->orderBy("publish_date", 'desc')->limit(4)->get();
        $index_thoisu = Newspaper::where('title_id', '=', '1')
            ->where('status', '=', '3')
            ->where('publish_date', '<=', $dt)->orderBy("publish_date", 'desc')->limit(3)->get();
        $news_thoisu3 = Newspaper::where('title_id', '=', '1')
            ->where('status', '=', '3')
            ->where('publish_date', '<=', $dt)->orderBy("publish_date", 'desc')->limit(1)->get();
        $news_thoisu4 = Newspaper::where('title_id', '=', '10')
            ->where('status', '=', '3')
            ->where('publish_date', '<=', $dt)
            ->orderBy("publish_date", 'desc')->limit(1)->get();


        $last_news1 = Newspaper::where('status', '=', '3')
            ->where('publish_date', '<=', $dt)->orderBy("publish_date", 'desc')->limit(1)->get();
        $last_news = Newspaper:: where('status', '=', '3')
            ->where('publish_date', '<=', $dt)->
            Where('id', '<>', $last_news1->first()->id)
            ->orderBy("publish_date", 'desc')
            ->limit(7)->get();


        $top_thoisu = Newspaper::where('title_id', '=', '1')->where('status', '=', '3')
            ->where('publish_date', '<=', $dt)->orderBy("publish_date", 'desc')->limit(3)->get();
        $top_thegioi = Newspaper::where('title_id', '=', '2')->where('status', '=', '3')
            ->where('publish_date', '<=', $dt)->orderBy("publish_date", 'desc')->limit(3)->get();
        $top_phapluat = Newspaper::where('title_id', '=', '3')->where('status', '=', '3')
            ->where('publish_date', '<=', $dt)->orderBy("publish_date", 'desc')->limit(3)->get();
        $top_kinhdoanh = Newspaper::where('title_id', '=', '4')->where('status', '=', '3')
            ->where('publish_date', '<=', $dt)->orderBy("publish_date", 'desc')->limit(3)->get();
        $top_congnghe = Newspaper::where('title_id', '=', '5')->where('status', '=', '3')
            ->where('publish_date', '<=', $dt)->orderBy("publish_date", 'desc')->limit(3)->get();
        $top_xe = Newspaper::where('title_id', '=', '6')->where('status', '=', '3')
            ->where('publish_date', '<=', $dt)->orderBy("publish_date", 'desc')->limit(3)->get();
        $top_dulich = Newspaper::where('title_id', '=', '7')->where('status', '=', '3')
            ->where('publish_date', '<=', $dt)->orderBy("publish_date", 'desc')->limit(3)->get();
        $top_vanhoa = Newspaper::where('title_id', '=', '9')->where('status', '=', '3')
            ->where('publish_date', '<=', $dt)->orderBy("publish_date", 'desc')->limit(3)->get();
        $top_giaitri = Newspaper::where('title_id', '=', '10')->where('status', '=', '3')
            ->where('publish_date', '<=', $dt)->orderBy("publish_date", 'desc')->limit(3)->get();
        $top_thethao = Newspaper::where('title_id', '=', '11')->where('status', '=', '3')
            ->where('publish_date', '<=', $dt)->orderBy("publish_date", 'desc')->limit(3)->get();


        return view('guest.home', compact('last_news1', 'dt', 'last_news', 'news_thoisu', 'news_thoisu1', 'index_thoisu', 'news_thoisu3', 'news_thoisu4', 'top_thoisu'
            , 'top_thegioi', 'top_xe', 'top_giaitri', 'top_phapluat', 'top_kinhdoanh', 'top_congnghe', 'top_congnghe', 'top_dulich', 'top_vanhoa', 'top_thethao'));
    }


    public function singlePage(Newspaper $newspaper)
    {


        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $dt->toDayDateTimeString();

        $related_newspaper = Newspaper::where('title_id', $newspaper->title_id)
            ->where('publish_date','<=',$dt)
            ->where('id', '<>', $newspaper->id)
            ->where('status', '=', '3')
            ->orderBy('publish_date', 'desc')->limit(4)->get();


        $top_views = Newspaper::where('status','=','3')
            ->where('publish_date','<=',$dt)->orderBy("views_count", 'desc')->limit(5)->get();


        $views = $newspaper->views_count + 1;


//dd($related_newspaper);


        $newspaper->update([
            'views_count' => $views
        ]);


        return view('guest.single-page', compact('dt', 'newspaper', 'related_newspaper', 'top_views'));


    }


    public function thoiSuPage()
    {

        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $dt->toDayDateTimeString();
        $thoi_su = Newspaper::where('title_id', '=', '1')
            ->where('status','=','3')
            ->where('publish_date','<=',$dt)
            ->orderBy("publish_date", 'desc')->limit(1)->get();

        $thoi_su_news = Newspaper::where('title_id', '=', '1')
            ->where('status','=','3')
            ->where('publish_date','<=',$dt)
            ->Where('id', '<>', $thoi_su->first()->id)
            ->orderBy("publish_date", 'desc')->limit(5)->get();
        $thoi_su_all = Newspaper::where('title_id', '=', '1')
            ->where('status','=','3')
            ->where('publish_date','<=',$dt)
            ->Where('id', '<>', $thoi_su->first()->id)
            ->orderBy("publish_date", 'desc')
            ->limit(10)
            ->get();


        return view('guest.thoi-su', compact('thoi_su', 'thoi_su_all', 'thoi_su_news'));
    }

    public function congNghePage()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $dt->toDayDateTimeString();

        $cong_nghe = Newspaper::where('title_id', '=', '5')->where('status','=','3')
            ->where('publish_date','<=',$dt)
            ->orderBy("publish_date", 'desc')->limit(1)->get();

        $cong_nghe_news = Newspaper::where('title_id', '=', '5')
            ->where('status','=','3')
            ->where('publish_date','<=',$dt)->Where('id', '<>', $cong_nghe->first()->id)
            ->orderBy("publish_date", 'desc')->limit(5)->get();


        $cong_nghe_all = Newspaper::where('title_id', '=', '5')->where('status','=','3')
            ->where('publish_date','<=',$dt)
            ->Where('id', '<>', $cong_nghe->first()->id)
            ->orderBy("publish_date", 'desc')
            ->limit(10)
            ->get();


        return view('guest.cong-nghe', compact('cong_nghe', 'cong_nghe_news', 'cong_nghe_all'));
    }

    public function duLichPage()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $dt->toDayDateTimeString();
        $du_lich = Newspaper::where('title_id', '=', '7')->where('status','=','3')
            ->where('publish_date','<=',$dt)->orderBy("publish_date", 'desc')->limit(1)->get();

        $du_lich_news = Newspaper::where('title_id', '=', '7')->where('status','=','3')
            ->where('publish_date','<=',$dt)->Where('id', '<>', $du_lich->first()->id)
            ->orderBy("publish_date", 'desc')->limit(5)->get();


        $du_lich_all = Newspaper::where('title_id', '=', '7')->where('status','=','3')
            ->where('publish_date','<=',$dt)
            ->Where('id', '<>', $du_lich->first()->id)
            ->orderBy("publish_date", 'desc')
            ->limit(10)
            ->get();
        return view('guest.du-lich', compact('du_lich', 'du_lich_all', 'du_lich_news'));
    }

    public function giaiTriPage()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $dt->toDayDateTimeString();
        $giai_tri = Newspaper::where('title_id', '=', '10')->where('status','=','3')
            ->where('publish_date','<=',$dt)->orderBy("publish_date", 'desc')->limit(1)->get();

        $giai_tri_news = Newspaper::where('title_id', '=', '10')->where('status','=','3')
            ->where('publish_date','<=',$dt)->Where('id', '<>', $giai_tri->first()->id)
            ->orderBy("publish_date", 'desc')->limit(5)->get();


        $giai_tri_all = Newspaper::where('title_id', '=', '10')->where('status','=','3')
            ->where('publish_date','<=',$dt)
            ->Where('id', '<>', $giai_tri->first()->id)
            ->orderBy("publish_date", 'desc')
            ->limit(10)
            ->get();

        return view('guest.giai-tri', compact('giai_tri', 'giai_tri_news', 'giai_tri_all'));
    }

    public function giaoDucPage()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $dt->toDayDateTimeString();
        $giao_duc = Newspaper::where('title_id', '=', '12')->where('status','=','3')
            ->where('publish_date','<=',$dt)->orderBy("publish_date", 'desc')->limit(1)->get();

        $giao_duc_news = Newspaper::where('title_id', '=', '12')->where('status','=','3')
            ->where('publish_date','<=',$dt)->Where('id', '<>', $giao_duc->first()->id)
            ->orderBy("publish_date", 'desc')->limit(5)->get();


        $giao_duc_all = Newspaper::where('title_id', '=', '12')->where('status','=','3')
            ->where('publish_date','<=',$dt)
            ->Where('id', '<>', $giao_duc->first()->id)
            ->orderBy("publish_date", 'desc')
            ->limit(10)
            ->get();

        return view('guest.giao-duc', compact('giao_duc', 'giao_duc_all', 'giao_duc_news'));
    }

    public function kinhDoanhPage()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $dt->toDayDateTimeString();
        $kinh_doanh = Newspaper::where('title_id', '=', '4')->where('status','=','3')
            ->where('publish_date','<=',$dt)->orderBy("publish_date", 'desc')->limit(1)->get();

        $kinh_doanh_news = Newspaper::where('title_id', '=', '4')->where('status','=','3')
            ->where('publish_date','<=',$dt)->Where('id', '<>', $kinh_doanh->first()->id)
            ->orderBy("publish_date", 'desc')->limit(5)->get();


        $kinh_doanh_all = Newspaper::where('title_id', '=', '4')->where('status','=','3')
            ->where('publish_date','<=',$dt)
            ->Where('id', '<>', $kinh_doanh->first()->id)
            ->orderBy("publish_date", 'desc')
            ->limit(10)
            ->get();

        return view('guest.kinh-doanh', compact('kinh_doanh', 'kinh_doanh_news', 'kinh_doanh_all'));
    }

    public function phapLuatPage()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $dt->toDayDateTimeString();
        $phap_luat = Newspaper::where('title_id', '=', '3')->where('status','=','3')
            ->where('publish_date','<=',$dt)->orderBy("publish_date", 'desc')->limit(1)->get();

        $phap_luat_news = Newspaper::where('title_id', '=', '3')->where('status','=','3')
            ->where('publish_date','<=',$dt)->Where('id', '<>', $phap_luat->first()->id)
            ->orderBy("publish_date", 'desc')->limit(5)->get();


        $phap_luat_all = Newspaper::where('title_id', '=', '3')->where('status','=','3')
            ->where('publish_date','<=',$dt)
            ->Where('id', '<>', $phap_luat->first()->id)
            ->orderBy("publish_date", 'desc')
            ->limit(10)
            ->get();

        return view('guest.phap-luat', compact('phap_luat', 'phap_luat_all', 'phap_luat_news'));
    }

    public function theGioiPage()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $dt->toDayDateTimeString();
        $the_gioi = Newspaper::where('title_id', '=', '2')->where('status','=','3')
            ->where('publish_date','<=',$dt)->orderBy("publish_date", 'desc')->limit(1)->get();

        $the_gioi_news = Newspaper::where('title_id', '=', '2')->where('status','=','3')
            ->where('publish_date','<=',$dt)->Where('id', '<>', $the_gioi->first()->id)
            ->orderBy("publish_date", 'desc')->limit(5)->get();


        $the_gioi_all = Newspaper::where('title_id', '=', '2')->where('status','=','3')
            ->where('publish_date','<=',$dt)
            ->Where('id', '<>', $the_gioi->first()->id)
            ->orderBy("publish_date", 'desc')
            ->limit(10)
            ->get();

        return view('guest.the-gioi', compact('the_gioi', 'the_gioi_all', 'the_gioi_news'));
    }

    public function theThaoPage()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $dt->toDayDateTimeString();
        $the_thao = Newspaper::where('title_id', '=', '11')->where('status','=','3')
            ->where('publish_date','<=',$dt)->orderBy("publish_date", 'desc')->limit(1)->get();

        $the_thao_news = Newspaper::where('title_id', '=', '11')->where('status','=','3')
            ->where('publish_date','<=',$dt)->Where('id', '<>', $the_thao->first()->id)
            ->orderBy("publish_date", 'desc')->limit(5)->get();


        $the_thao_all = Newspaper::where('title_id', '=', '11')->where('status','=','3')
            ->where('publish_date','<=',$dt)
            ->Where('id', '<>', $the_thao->first()->id)
            ->orderBy("publish_date", 'desc')
            ->limit(10)
            ->get();

        return view('guest.the-thao', compact('the_thao', 'the_thao_all', 'the_thao_news'));
    }

    public function vanHoaPage()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $dt->toDayDateTimeString();
        $van_hoa = Newspaper::where('title_id', '=', '9')->where('status','=','3')
            ->where('publish_date','<=',$dt)->orderBy("publish_date", 'desc')->limit(1)->get();

        $van_hoa_news = Newspaper::where('title_id', '=', '9')->where('status','=','3')
            ->where('publish_date','<=',$dt)->Where('id', '<>', $van_hoa->first()->id)
            ->orderBy("publish_date", 'desc')->limit(5)->get();


        $van_hoa_all = Newspaper::where('title_id', '=', '9')->where('status','=','3')
            ->where('publish_date','<=',$dt)
            ->Where('id', '<>', $van_hoa->first()->id)
            ->orderBy("publish_date", 'desc')
            ->limit(10)
            ->get();

        return view('guest.van-hoa', compact('van_hoa', 'van_hoa_all', 'van_hoa_news'));
    }

    public function xePage()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $dt->toDayDateTimeString();
        $xe = Newspaper::where('title_id', '=', '6')->where('status','=','3')
            ->where('publish_date','<=',$dt)->orderBy("publish_date", 'desc')->limit(1)->get();

        $xe_news = Newspaper::where('title_id', '=', '6')->where('status','=','3')
            ->where('publish_date','<=',$dt)->Where('id', '<>', $xe->first()->id)
            ->orderBy("publish_date", 'desc')->limit(5)->get();


        $xe_all = Newspaper::where('title_id', '=', '5')->where('status','=','3')
            ->where('publish_date','<=',$dt)
            ->Where('id', '<>', $xe->first()->id)
            ->orderBy("publish_date", 'desc')
            ->limit(10)
            ->get();

        return view('guest.xe', compact('xe', 'xe_all', 'xe_news'));
    }



    //
}
