@extends('guest.layout')
@section('content-header')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Kinh Doanh</li>
        </ol>
    </nav>
@endsection
@section('main-content')
    <div class="main-news">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <h2><i class="fas fa-align-justify"></i>Mới Nhất</h2>
                            <div class="row">
                                @foreach($kinh_doanh as $kinh_doanh)
                                    <div class="col-lg-6">
                                        <div class="mn-img">
                                            <img src="{{$kinh_doanh->image}}" />
                                        </div>
                                        <div class="mn-content">
                                            <a class="mn-title" href="{{url("single-page",["newspaper"=>$kinh_doanh->slug])}}">{{$kinh_doanh->name}}</a>
                                            <a class="mn-date" href=""><i class="far fa-clock"></i>{{$kinh_doanh->publish_date}}</a>
                                            <p>
                                                {{$kinh_doanh->description}}                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-lg-6">
                                    @foreach($kinh_doanh_news as $kinh_doanh_news)
                                        <div class="mn-list">
                                            <div class="mn-img">
                                                <img src="{{$kinh_doanh_news->image}}" />
                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title" href="{{url("single-page",["newspaper"=>$kinh_doanh_news->slug])}}">{{$kinh_doanh_news->name}}</a>
                                                <a class="mn-date" href=""><i class="far fa-clock"></i>{{$kinh_doanh_news->publish_date}}</a>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>

                <div class="col-lg-10 ">
                    @foreach($kinh_doanh_all as $kinh_doanh_all)
                        <div class="mn-list">
                            <div class="mn-img">
                                <img src="{{$kinh_doanh_all->image}}" />
                            </div>
                            <div class="mn-content">
                                <a class="mn-title" href="{{url("single-page",["newspaper"=>$kinh_doanh_all->slug])}}">{{$kinh_doanh_all->name}}</a>
                                <a class="mn-date" href=""><i class="far fa-clock"></i>{{$kinh_doanh_all->publish_date}}</a>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="col-lg-1"></div>


            </div>

        </div>
    </div>

@endsection

