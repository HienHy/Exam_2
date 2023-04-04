@extends('guest.layout')
@section('content-header')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Văn Hoá</li>
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
                                @foreach($van_hoa as $van_hoa)
                                    <div class="col-lg-6">
                                        <div class="mn-img">
                                            <img src="{{$van_hoa->image}}" />
                                        </div>
                                        <div class="mn-content">
                                            <a class="mn-title" href="">{{$van_hoa->name}}</a>
                                            <a class="mn-date" href=""><i class="far fa-clock"></i>{{$van_hoa->publish_date}}</a>
                                            <p>
                                                {{$van_hoa->description}}                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-lg-6">
                                    @foreach($van_hoa_news as $van_hoa_news)
                                        <div class="mn-list">
                                            <div class="mn-img">
                                                <img src="{{$van_hoa_news->image}}" />
                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title" href="{{url("single-page",["newspaper"=>$van_hoa_news->slug])}}">{{$van_hoa_news->name}}</a>
                                                <a class="mn-date" href=""><i class="far fa-clock"></i>{{$van_hoa_news->publish_date}}</a>
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
                    @foreach($van_hoa_all as $van_hoa_all)
                        <div class="mn-list">
                            <div class="mn-img">
                                <img src="{{$van_hoa_all->image}}" />
                            </div>
                            <div class="mn-content">
                                <a class="mn-title" href="{{url("single-page",["newspaper"=>$van_hoa_all->slug])}}">{{$van_hoa_all->name}}</a>
                                <a class="mn-date" href=""><i class="far fa-clock"></i>{{$van_hoa_all->publish_date}}</a>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="col-lg-1"></div>


            </div>

        </div>
    </div>

@endsection
