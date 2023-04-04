@extends('guest.layout')
@section('content-header')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Giải Trí</li>
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
                                @foreach($giai_tri as $giai_tri)
                                    <div class="col-lg-6">
                                        <div class="mn-img">
                                            <img src="{{$giai_tri->image}}" />
                                        </div>
                                        <div class="mn-content">
                                            <a class="mn-title" href="">{{$giai_tri->name}}</a>
                                            <a class="mn-date" href=""><i class="far fa-clock"></i>{{$giai_tri->publish_date}}</a>
                                            <p>
                                                {{$giai_tri->description}}                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-lg-6">
                                    @foreach($giai_tri_news as $giai_tri_news)
                                        <div class="mn-list">
                                            <div class="mn-img">
                                                <img src="{{$giai_tri_news->image}}" />
                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title" href="{{url("single-page",["newspaper"=>$giai_tri_news->slug])}}">{{$giai_tri_news->name}}</a>
                                                <a class="mn-date" href=""><i class="far fa-clock"></i>{{$giai_tri_news->publish_date}}</a>
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
                    @foreach($giai_tri_all as $giai_tri_all)
                        <div class="mn-list">
                            <div class="mn-img">
                                <img src="{{$giai_tri_all->image}}" />
                            </div>
                            <div class="mn-content">
                                <a class="mn-title" href="{{url("single-page",["newspaper"=>$giai_tri_all->slug])}}">{{$giai_tri_all->name}}</a>
                                <a class="mn-date" href=""><i class="far fa-clock"></i>{{$giai_tri_all->publish_date}}</a>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="col-lg-1"></div>


            </div>

        </div>
    </div>

@endsection

