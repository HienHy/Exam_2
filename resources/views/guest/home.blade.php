@extends('guest.layout')
@section('main-content')
    @include('guest.html.topNew')
    @include('guest.html.categoryNew')


    <div class="main-news">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12">
                            <h2><i class="fas fa-align-justify"></i>Latest News</h2>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mn-img">
                                        <img src="/assets/img/latest-news.jpg" />
                                    </div>
                                    <div class="mn-content">
                                        <a class="mn-title" href="">Cras commodo sem ut porta laoreet</a>
                                        <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed porta dui. Class aptent taciti sociosqu ad litora torquent per conubia nostra inceptos...
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    @foreach($last_news as $last_news)
                                    <div class="mn-list">
                                        <div class="mn-img">
                                            <img src="/assets/img/latest-news.jpg" />
                                        </div>
                                        <div class="mn-content">
                                            <a class="mn-title" href="{{url("single-page",["newspaper"=>$last_news->slug])}}">{{$last_news->name}}</a>
                                            <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h2><i class="fas fa-align-justify"></i>Popular News</h2>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mn-img">
                                        <img src="/assets/img/popular-news.jpg" />
                                    </div>
                                    <div class="mn-content">
                                        <a class="mn-title" href="">Phasellus gravida metus vitae laoreet aliquam</a>
                                        <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed porta dui. Class aptent taciti sociosqu ad litora torquent per conubia nostra inceptos...
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mn-list">
                                        <div class="mn-img">
                                            <img src="/assets/img/popular-news.jpg" />
                                        </div>
                                        <div class="mn-content">
                                            <a class="mn-title" href="">Nullam risus ante sempe</a>
                                            <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                        </div>
                                    </div>
                                    <div class="mn-list">
                                        <div class="mn-img">
                                            <img src="/assets/img/popular-news.jpg" />
                                        </div>
                                        <div class="mn-content">
                                            <a class="mn-title" href="">Pellentesque ultrices quam id ipsum tempor</a>
                                            <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                        </div>
                                    </div>
                                    <div class="mn-list">
                                        <div class="mn-img">
                                            <img src="/assets/img/popular-news.jpg" />
                                        </div>
                                        <div class="mn-content">
                                            <a class="mn-title" href="">Nam ex magna, commodo sed turpis rutrum</a>
                                            <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                        </div>
                                    </div>
                                    <div class="mn-list">
                                        <div class="mn-img">
                                            <img src="/assets/img/popular-news.jpg" />
                                        </div>
                                        <div class="mn-content">
                                            <a class="mn-title" href="">Aliquam condimentum metus</a>
                                            <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                        </div>
                                    </div>
                                    <div class="mn-list">
                                        <div class="mn-img">
                                            <img src="/assets/img/popular-news.jpg" />
                                        </div>
                                        <div class="mn-content">
                                            <a class="mn-title" href="">Ut ornare rutrum ligula erat volutpat</a>
                                            <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="sidebar">

                        <div class="sidebar-widget">
                            <h2><i class="fas fa-align-justify"></i>Tags</h2>
                            <div class="tags">
                                <a href="">National</a>
                                <a href="">International</a>
                                <a href="">Economics</a>
                                <a href="">Politics</a>
                                <a href="">Lifestyle</a>
                                <a href="">Technology</a>
                                <a href="">Trades</a>
                                <a href="">National</a>
                                <a href="">International</a>
                                <a href="">Economics</a>
                                <a href="">Politics</a>
                                <a href="">Lifestyle</a>
                                <a href="">Technology</a>
                                <a href="">Trades</a>
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <h2><i class="fas fa-align-justify"></i>Ads 1 column</h2>
                            <div class="image">
                                <a href=""><img src="/assets/img/adds-1.jpg" alt="Image"></a>
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <h2><i class="fas fa-align-justify"></i>Ads 2 column</h2>
                            <div class="image">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <a href=""><img src="/assets/img/adds-2.jpg" alt="Image"></a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href=""><img src="/assets/img/adds-2.jpg" alt="Image"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>@endsection
