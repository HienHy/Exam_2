@extends('guest.layout')
@section('content-header')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thời Sự</li>
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
                                @foreach($thoi_su as $thoi_su)
                                    <div class="col-lg-6">
                                        <div class="mn-img">
                                            <img src="{{$thoi_su->image}}" />
                                        </div>
                                        <div class="mn-content">
                                            <a class="mn-title"  href="{{url("single-page",["newspaper"=>$thoi_su->slug])}}">{{$thoi_su->name}}</a>
                                            <a class="mn-date" href=""><i class="far fa-clock"></i>{{$thoi_su->publish_date}}</a>
                                            <p>
                                                {{$thoi_su->description}}                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-lg-6">
                                    @foreach($thoi_su_news as $thoi_su_news)
                                        <div class="mn-list">
                                            <div class="mn-img">
                                                <img src="{{$thoi_su_news->image}}" />
                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title" href="{{url("single-page",["newspaper"=>$thoi_su_news->slug])}}">{{$thoi_su_news->name}}</a>
                                                <a class="mn-date" href=""><i class="far fa-clock"></i>{{$thoi_su_news->publish_date}}</a>
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
                    @foreach($thoi_su_all as $thoi_su_all)
                        <div class="mn-list">
                            <div class="mn-img">
                                <img src="{{$thoi_su_all->image}}" />
                            </div>
                            <div class="mn-content">
                                <a class="mn-title" href="{{url("single-page",["newspaper"=>$thoi_su_all->slug])}}">{{$thoi_su_all->name}}</a>
                                <a class="mn-date" href=""><i class="far fa-clock"></i>{{$thoi_su_all->publish_date}}</a>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="col-lg-1"></div>


            </div>

        </div>
    </div>

@endsection
