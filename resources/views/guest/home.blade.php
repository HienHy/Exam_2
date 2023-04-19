@extends('guest.layout')

@section('main-content')

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <h3 class="color-aqua"><a href="blog-category-01.html" title="">Mới nhất</a></h3>
                    </div><!-- end title -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height: 600px">
                            @foreach($news_thoisu as $item)

                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="single.html" title="">
                                            <img src="{{$item->image}}" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta big-meta">
                                        <h4><a href="single.html" title="">{{$item->name}}</a></h4>
                                        <p>{{$item->description}}</p>
                                        <small><a href="blog-category-01.html"
                                                  title="">{{$item->Title->name}}</a></small>
                                        <small><a href="single.html" title="">{{$item->publish_date}}</a></small>
                                        <small><a href="blog-author.html" title="">by {{$item->User->name}}</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            @endforeach


                            <hr class="invis">

                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end col -->


                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <h3 class="color-pink"><a href="blog-category-01.html" title="">Fashion</a></h3>
                    </div><!-- end title -->
                    <div class="row">
                        @foreach($news_thoisu1 as $item)

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="single.html" title="">
                                            <img src="{{$item->image}}" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta">
                                        <h4><a href="single.html" title="">{{$item->name}}</a></h4>
                                        <small><a href="blog-category-01.html"
                                                  title="">{{$item->Title->name}}</a></small>
                                        <small><a href="blog-category-01.html"
                                                  title="">{{$item->publish_date}}</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                                <hr class="invis">

                            </div><!-- end col -->

                        @endforeach

                    </div><!-- end row -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="invis1">

            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="banner-spot clearfix">
                        <div class="banner-img">
                            <img src="/assets/upload/banner_01.jpg" alt="Quang cáo" class="img-fluid">
                        </div><!-- end banner-img -->
                    </div><!-- end banner -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="invis1">

            <div class="row">
                <div class="col-lg-9">
                    <div class="blog-list clearfix">
                        <div class="section-title">
                            <h3 class="color-green"><a href="blog-category-01.html" title="">Travel</a></h3>
                        </div><!-- end title -->
                        @foreach($index_thoisu as $item)

                            <div class="blog-box row">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a href="single.html" title="">
                                            <img src="{{$item -> image}}" alt="" class="img-fluid">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-8">

                                    <h4><a href="single.html" title="">{{$item->name}}</a></h4>

                                    <p>{{$item->description}}</p>                            <small><a
                                            href="blog-category-01.html" title="">{{$item->Title->name}}</a></small>
                                    <small><a href="single.html" title="">{{$item->publish_date}}</a></small>
                                    <small><a href="blog-author.html" title="">by {{$item->User->name}}</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                            <hr class="invis">


                    </div><!-- end blog-list -->
                    @endforeach

                    <hr class="invis">

                    <div class="blog-list clearfix">
                        <div class="section-title">
                            <h3 class="color-red"><a href="blog-category-01.html" title="">Food</a></h3>
                        </div><!-- end title -->

                        <div class="blog-box row">
                            <div class="col-md-4">
                                <div class="post-media">
                                    <a href="single.html" title="">
                                        <img src="/assets/upload/blog_square_05.jpg" alt="" class="img-fluid">
                                        <div class="hovereffect"></div>
                                    </a>
                                </div><!-- end media -->
                            </div><!-- end col -->

                            <div class="blog-meta big-meta col-md-8">
                                <h4><a href="single.html" title="">Banana-chip chocolate cake recipe</a></h4>
                                <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                    pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh,
                                    maximus ac felis nec, maximus tempor odio.</p>
                                <small><a href="blog-category-01.html" title="">Food</a></small>
                                <small><a href="single.html" title="">11 July, 2017</a></small>
                                <small><a href="blog-author.html" title="">by Matilda</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->

                        <hr class="invis">

                        <div class="blog-box row">
                            <div class="col-md-4">
                                <div class="post-media">
                                    <a href="single.html" title="">
                                        <img src="/assets/upload/blog_square_06.jpg" alt="" class="img-fluid">
                                        <div class="hovereffect"></div>
                                    </a>
                                </div><!-- end media -->
                            </div><!-- end col -->

                            <div class="blog-meta big-meta col-md-8">
                                <h4><a href="single.html" title="">10 practical ways to choose organic vegetables</a>
                                </h4>
                                <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                    pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh,
                                    maximus ac felis nec, maximus tempor odio.</p>
                                <small><a href="blog-category-01.html" title="">Food</a></small>
                                <small><a href="single.html" title="">10 July, 2017</a></small>
                                <small><a href="blog-author.html" title="">by Matilda</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->

                        <hr class="invis">

                        <div class="blog-box row">
                            <div class="col-md-4">
                                <div class="post-media">
                                    <a href="single.html" title="">
                                        <img src="/assets/upload/blog_square_07.jpg" alt="" class="img-fluid">
                                        <div class="hovereffect"></div>
                                    </a>
                                </div><!-- end media -->
                            </div><!-- end col -->

                            <div class="blog-meta big-meta col-md-8">
                                <h4><a href="single.html" title="">We are making homemade ravioli</a></h4>
                                <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                    pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh,
                                    maximus ac felis nec, maximus tempor odio.</p>
                                <small><a href="blog-category-01.html" title="">Food</a></small>
                                <small><a href="single.html" title="">09 July, 2017</a></small>
                                <small><a href="blog-author.html" title="">by Matilda</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                    </div><!-- end blog-list -->
                </div><!-- end col -->

                <div class="col-lg-3">
                    <div class="section-title">
                        <h3 class="color-yellow"><a href="blog-category-01.html" title="">Vlogs</a></h3>
                    </div><!-- end title -->

                    <div class="blog-box">
                        <div class="post-media">
                            <a href="single.html" title="">
                                <img src="/assets/upload/blog_10.jpg" alt="" class="img-fluid">
                                <div class="hovereffect">
                                    <span class="videohover"></span>
                                </div><!-- end hover -->
                            </a>
                        </div><!-- end media -->
                        <div class="blog-meta">
                            <h4><a href="single.html" title="">We are guests of ABC Design Studio - Vlog</a></h4>
                            <small><a href="blog-category-01.html" title="">Videos</a></small>
                            <small><a href="blog-category-01.html" title="">21 July, 2017</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->

                    <hr class="invis">

                    <div class="blog-box">
                        <div class="post-media">
                            <a href="single.html" title="">
                                <img src="/assets/upload/blog_11.jpg" alt="" class="img-fluid">
                                <div class="hovereffect">
                                    <span class="videohover"></span>
                                </div><!-- end hover -->
                            </a>
                        </div><!-- end media -->
                        <div class="blog-meta">
                            <h4><a href="single.html" title="">Nostalgia at work</a></h4>
                            <small><a href="blog-category-01.html" title="">Videos</a></small>
                            <small><a href="blog-category-01.html" title="">20 July, 2017</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->

                    <hr class="invis">

                    <div class="blog-box">
                        <div class="post-media">
                            <a href="single.html" title="">
                                <img src="/assets/upload/blog_12.jpg" alt="" class="img-fluid">
                                <div class="hovereffect">
                                    <span class="videohover"></span>
                                </div><!-- end hover -->
                            </a>
                        </div><!-- end media -->
                        <div class="blog-meta">
                            <h4><a href="single.html" title="">How to become a good vlogger</a></h4>
                            <small><a href="blog-category-01.html" title="">Beauty</a></small>
                            <small><a href="blog-category-01.html" title="">20 July, 2017</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->

                    <hr class="invis">

                    <div class="section-title">
                        <h3 class="color-grey"><a href="blog-category-01.html" title="">Health</a></h3>
                    </div><!-- end title -->

                    <div class="blog-box">
                        <div class="post-media">
                            <a href="single.html" title="">
                                <img src="/assets/upload/blog_07.jpg" alt="" class="img-fluid">
                                <div class="hovereffect">
                                    <span></span>
                                </div><!-- end hover -->
                            </a>
                        </div><!-- end media -->
                        <div class="blog-meta">
                            <h4><a href="single.html" title="">Opened the doors of the Istanbul spa center</a></h4>
                            <small><a href="blog-category-01.html" title="">Spa</a></small>
                            <small><a href="blog-category-01.html" title="">21 July, 2017</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->

                    <hr class="invis">

                    <div class="blog-box">
                        <div class="post-media">
                            <a href="single.html" title="">
                                <img src="/assets/upload/blog_08.jpg" alt="" class="img-fluid">
                                <div class="hovereffect">
                                    <span></span>
                                </div><!-- end hover -->
                            </a>
                        </div><!-- end media -->
                        <div class="blog-meta">
                            <h4><a href="single.html" title="">2017 trends in health tourism</a></h4>
                            <small><a href="blog-category-01.html" title="">Health</a></small>
                            <small><a href="blog-category-01.html" title="">20 July, 2017</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->

                    <hr class="invis">

                    <div class="blog-box">
                        <div class="post-media">
                            <a href="single.html" title="">
                                <img src="/assets/upload/blog_09.jpg" alt="" class="img-fluid">
                                <div class="hovereffect">
                                    <span></span>
                                </div><!-- end hover -->
                            </a>
                        </div><!-- end media -->
                        <div class="blog-meta">
                            <h4><a href="single.html" title="">Experience the effects of miraculous stones</a></h4>
                            <small><a href="blog-category-01.html" title="">Beauty</a></small>
                            <small><a href="blog-category-01.html" title="">20 July, 2017</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="invis1">

            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="banner-spot clearfix">
                        <div class="banner-img">
                            <img src="/assets/upload/banner_02.jpg" alt="" class="img-fluid">
                        </div><!-- end banner-img -->
                    </div><!-- end banner -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

@endsection

{{--@section('main-content')--}}
{{--    <div class="main-news">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-12">--}}
{{--                            <h2><i class="fas fa-align-justify"></i>Mới Nhất</h2>--}}
{{--                            <div class="row">--}}
{{--                                @foreach($last_news1 as $last_news1)--}}
{{--                                    <div class="col-lg-6">--}}
{{--                                        <div class="mn-img">--}}
{{--                                            <img src="{{$last_news1->image}}"/>--}}
{{--                                        </div>--}}
{{--                                        <div class="mn-content">--}}
{{--                                            <a class="mn-title"--}}
{{--                                               href="{{url("single-page",["newspaper"=>$last_news1->slug])}}">{{$last_news1->name}}</a>--}}
{{--                                            <a class="mn-date" href=""><i--}}
{{--                                                    class="far fa-clock"></i>{{$last_news1->publish_date}}</a>--}}
{{--                                            <p>--}}
{{--                                                {{$last_news1->description}}                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                                <div class="col-lg-6">--}}
{{--                                    @foreach($last_news as $last_news)--}}
{{--                                        <div class="mn-list">--}}
{{--                                            <div class="mn-img">--}}
{{--                                                <img src="{{$last_news->image}}"/>--}}
{{--                                            </div>--}}
{{--                                            <div class="mn-content">--}}
{{--                                                <a class="mn-title"--}}
{{--                                                   href="{{url("single-page",["newspaper"=>$last_news->slug])}}">{{$last_news->name}}</a>--}}
{{--                                                <a class="mn-date" href=""><i--}}
{{--                                                        class="far fa-clock"></i>{{$last_news->publish_date}}</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    @endforeach--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--    @include('guest.html.categoryNew')--}}
{{--    @include('guest.html.topNew')--}}

{{--@endsection--}}
