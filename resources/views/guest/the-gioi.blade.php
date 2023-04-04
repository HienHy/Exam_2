@extends('guest.layout')
@section('content-header')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thế Giới</li>
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
                                @foreach($the_gioi as $the_gioi)
                                    <div class="col-lg-6">
                                        <div class="mn-img">
                                            <img src="{{$the_gioi->image}}" />
                                        </div>
                                        <div class="mn-content">
                                            <a class="mn-title" href="">{{$the_gioi->name}}</a>
                                            <a class="mn-date" href=""><i class="far fa-clock"></i>{{$the_gioi->publish_date}}</a>
                                            <p>
                                                {{$the_gioi->description}}                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-lg-6">
                                    @foreach($the_gioi_news as $the_gioi_news)
                                        <div class="mn-list">
                                            <div class="mn-img">
                                                <img src="{{$the_gioi_news->image}}" />
                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title" href="{{url("single-page",["newspaper"=>$the_gioi_news->slug])}}">{{$the_gioi_news->name}}</a>
                                                <a class="mn-date" href=""><i class="far fa-clock"></i>{{$the_gioi_news->publish_date}}</a>
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
                    @foreach($the_gioi_all as $the_gioi_all)
                        <div class="mn-list">
                            <div class="mn-img">
                                <img src="{{$the_gioi_all->image}}" />
                            </div>
                            <div class="mn-content">
                                <a class="mn-title" href="{{url("single-page",["newspaper"=>$the_gioi_all->slug])}}">{{$the_gioi_all->name}}</a>
                                <a class="mn-date" href=""><i class="far fa-clock"></i>{{$the_gioi_all->publish_date}}</a>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="col-lg-1"></div>


            </div>

        </div>
    </div>

@endsection
