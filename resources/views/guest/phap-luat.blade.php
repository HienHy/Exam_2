@extends('guest.layout')
@section('content-header')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pháp Luật</li>
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
                                @foreach($phap_luat as $phap_luat)
                                    <div class="col-lg-6">
                                        <div class="mn-img">
                                            <img src="{{$phap_luat->image}}" />
                                        </div>
                                        <div class="mn-content">
                                            <a class="mn-title" href="{{url("single-page",["newspaper"=>$phap_luat->slug])}}">{{$phap_luat->name}}</a>
                                            <a class="mn-date" href=""><i class="far fa-clock"></i>{{$phap_luat->publish_date}}</a>
                                            <p>
                                                {{$phap_luat->description}}                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-lg-6">
                                    @foreach($phap_luat_news as $phap_luat_news)
                                        <div class="mn-list">
                                            <div class="mn-img">
                                                <img src="{{$phap_luat_news->image}}" />
                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title" href="{{url("single-page",["newspaper"=>$phap_luat_news->slug])}}">{{$phap_luat_news->name}}</a>
                                                <a class="mn-date" href=""><i class="far fa-clock"></i>{{$phap_luat_news->publish_date}}</a>
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
                    @foreach($phap_luat_all as $phap_luat_all)
                        <div class="mn-list">
                            <div class="mn-img">
                                <img src="{{$phap_luat_all->image}}" />
                            </div>
                            <div class="mn-content">
                                <a class="mn-title" href="{{url("single-page",["newspaper"=>$phap_luat_all->slug])}}">{{$phap_luat_all->name}}</a>
                                <a class="mn-date" href=""><i class="far fa-clock"></i>{{$phap_luat_all->publish_date}}</a>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="col-lg-1"></div>


            </div>

        </div>
    </div>

@endsection

