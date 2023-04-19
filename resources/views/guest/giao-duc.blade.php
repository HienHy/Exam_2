@extends('guest.layout')
@section('content-header')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Giáo Dục</li>
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
                                @foreach($giao_duc as $giao_duc)
                                    <div class="col-lg-6">
                                        <div class="mn-img">
                                            <img src="{{$giao_duc->image}}" />
                                        </div>
                                        <div class="mn-content">
                                            <a class="mn-title" href="{{url("single-page",["newspaper"=>$giao_duc->slug])}}">{{$giao_duc->name}}</a>
                                            <a class="mn-date" href=""><i class="far fa-clock"></i>{{$giao_duc->publish_date}}</a>
                                            <p>
                                                {{$giao_duc->description}}                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-lg-6">
                                    @foreach($giao_duc_news as $giao_duc_news)
                                        <div class="mn-list">
                                            <div class="mn-img">
                                                <img src="{{$giao_duc_news->image}}" />
                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title" href="{{url("single-page",["newspaper"=>$giao_duc_news->slug])}}">{{$giao_duc_news->name}}</a>
                                                <a class="mn-date" href=""><i class="far fa-clock"></i>{{$giao_duc_news->publish_date}}</a>
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
                    @foreach($giao_duc_all as $giao_duc_all)
                        <div class="mn-list">
                            <div class="mn-img">
                                <img src="{{$giao_duc_all->image}}" />
                            </div>
                            <div class="mn-content">
                                <a class="mn-title" href="{{url("single-page",["newspaper"=>$giao_duc_all->slug])}}">{{$giao_duc_all->name}}</a>
                                <a class="mn-date" href=""><i class="far fa-clock"></i>{{$giao_duc_all->publish_date}}</a>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="col-lg-1"></div>


            </div>

        </div>
    </div>

@endsection

