@extends('guest.layout')
@section('main-content')
    <div class="main-news">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <h2><i class="fas fa-align-justify"></i>Mới Nhất</h2>
                            <div class="row">
                                @foreach($last_news1 as $last_news1)
                                    <div class="col-lg-6">
                                        <div class="mn-img">
                                            <img src="{{$last_news1->image}}"/>
                                        </div>
                                        <div class="mn-content">
                                            <a class="mn-title"
                                               href="{{url("single-page",["newspaper"=>$last_news1->slug])}}">{{$last_news1->name}}</a>
                                            <a class="mn-date" href=""><i
                                                    class="far fa-clock"></i>{{$last_news1->publish_date}}</a>
                                            <p>
                                                {{$last_news1->description}}                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-lg-6">
                                    @foreach($last_news as $last_news)
                                        <div class="mn-list">
                                            <div class="mn-img">
                                                <img src="{{$last_news->image}}"/>
                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title"
                                                   href="{{url("single-page",["newspaper"=>$last_news->slug])}}">{{$last_news->name}}</a>
                                                <a class="mn-date" href=""><i
                                                        class="far fa-clock"></i>{{$last_news->publish_date}}</a>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    @include('guest.html.categoryNew')
    @include('guest.html.topNew')

@endsection
