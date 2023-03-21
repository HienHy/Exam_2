@extends('guest.layout')
@section('main-content')

    <!-- Single News Start-->
    <div class="single-news">
        <div class="container-fluid">
            <h1><i class="fa fa-eye"></i>{{$newspaper->views_count}} </h1>
            <div class="row">
                <div  class="col-md-8 ">
                        {!!$newspaper->content!!}
                </div>

                <div class="col-md-4">
                    <div class="sidebar">
                        <div class="sidebar-widget">
                            <h2><i class="fas fa-align-justify"></i>Category</h2>
                            <div class="category">
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="">National</a></li>
                                    <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="">International</a></li>
                                    <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="">Economics</a></li>
                                    <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="">Politics</a></li>
                                    <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="">Lifestyle</a></li>
                                    <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="">Technology</a></li>
                                    <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="">Trades</a></li>
                                </ul>
                            </div>
                        </div>

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
    </div>





@endsection
