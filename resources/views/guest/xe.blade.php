@extends('guest.layout')
@section('content-header')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Xe</li>
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
                                @foreach($xe as $xe)
                                    <div class="col-lg-6">
                                        <div class="mn-img">
                                            <img src="{{$xe->image}}" />
                                        </div>
                                        <div class="mn-content">
                                            <a class="mn-title" href="{{url("single-page",["newspaper"=>$xe->slug])}}">{{$xe->name}}</a>
                                            <a class="mn-date" href=""><i class="far fa-clock"></i>{{$xe->publish_date}}</a>
                                            <p>
                                                {{$xe->description}}                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-lg-6">
                                    @foreach($xe_news as $xe_news)
                                        <div class="mn-list">
                                            <div class="mn-img">
                                                <img src="{{$xe_news->image}}" />
                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title" href="{{url("single-page",["newspaper"=>$xe_news->slug])}}">{{$xe_news->name}}</a>
                                                <a class="mn-date" href=""><i class="far fa-clock"></i>{{$xe_news->publish_date}}</a>
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
                    @foreach($xe_all as $xe_all)
                        <div class="mn-list">
                            <div class="mn-img">
                                <img src="{{$xe_all->image}}" />
                            </div>
                            <div class="mn-content">
                                <a class="mn-title" href="{{url("single-page",["newspaper"=>$xe_all->slug])}}">{{$xe_all->name}}</a>
                                <a class="mn-date" href=""><i class="far fa-clock"></i>{{$xe_all->publish_date}}</a>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="col-lg-1"></div>


            </div>

        </div>
    </div>

@endsection
