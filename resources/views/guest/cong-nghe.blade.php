@extends('guest.layout')

@section('content-header')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Công Nghệ</li>
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
                                @foreach($cong_nghe as $cong_nghe)
                                    <div class="col-lg-6">
                                        <div class="mn-img">
                                            <img src="{{$cong_nghe->image}}" />
                                        </div>
                                        <div class="mn-content">
                                            <a class="mn-title" href="{{url("single-page",["newspaper"=>$cong_nghe->slug])}}">{{$cong_nghe->name}}</a>
                                            <a class="mn-date" href=""><i class="far fa-clock"></i>{{$cong_nghe->publish_date}}</a>
                                            <p>
                                                {{$cong_nghe->description}}                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-lg-6">
                                    @foreach($cong_nghe_news as $cong_nghe_news)
                                        <div class="mn-list">
                                            <div class="mn-img">
                                                <img src="{{$cong_nghe_news->image}}" />
                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title" href="{{url("single-page",["newspaper"=>$cong_nghe_news->slug])}}">{{$cong_nghe_news->name}}</a>
                                                <a class="mn-date" href=""><i class="far fa-clock"></i>{{$cong_nghe_news->publish_date}}</a>
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
                    @foreach($cong_nghe_all as $cong_nghe_all)
                        <div class="mn-list">
                            <div class="mn-img">
                                <img src="{{$cong_nghe_all->image}}" />
                            </div>
                            <div class="mn-content">
                                <a class="mn-title" href="{{url("single-page",["newspaper"=>$cong_nghe_all->slug])}}">{{$cong_nghe_all->name}}</a>
                                <a class="mn-date" href=""><i class="far fa-clock"></i>{{$cong_nghe_all->publish_date}}</a>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="col-lg-1"></div>


            </div>

        </div>
    </div>

@endsection
