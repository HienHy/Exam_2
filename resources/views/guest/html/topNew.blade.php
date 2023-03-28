<div class="top-news">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 tn-left">
                @foreach($news_thoisu as $newspaper)
                <div class="tn-img">
                    <img src="{{$newspaper->image}}" />
                    <div class="tn-content">
                        <div class="tn-content-inner">
                            <a class="tn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                            <a class="tn-title-name" href="{{url('/kinh-doanh')}}">{{$newspaper->Title->name}}</a>
                            <a class="tn-title" href="{{url("single-page",["newspaper"=>$newspaper->slug])}}">{{$newspaper->name}}</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="col-md-6 tn-right">
                <div class="row">
                    <div class="col-md-6">
                        @foreach($news_thoisu1 as $newspaper1)
                        <div class="tn-img">
                            <img src="{{$newspaper1->image}}"height="260px"/>
                            <div class="tn-content">
                                <div class="tn-content-inner">
                                    <a class="tn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                    <a class="tn-title-name" href="{{url('/van-hoa')}}">{{$newspaper1->Title->name}}</a>

                                    <a class="tn-title" href="{{url("single-page",["newspaper"=>$newspaper1->slug])}}">{{$newspaper1->name}}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <div class="col-md-6">

                        @foreach($news_thoisu2 as $newspaper2)

                        <div class="tn-img">
                            <img src="{{$newspaper2->image}}"height="260px" />
                            <div class="tn-content">
                                <div class="tn-content-inner">
                                    <a class="tn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                    <a class="tn-title-name" href="{{url('/the-gioi')}}">{{$newspaper2->Title->name}}</a>

                                    <a class="tn-title" href="{{url("single-page",["newspaper"=>$newspaper2->slug])}}">{{$newspaper2->name}}</a>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>
                    <div class="col-md-6">

                        @foreach($news_thoisu3 as $newspaper3)

                        <div class="tn-img">
                            <img src="{{$newspaper3->image}}" height="260px" />
                            <div class="tn-content">
                                <div class="tn-content-inner">
                                    <a class="tn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                    <a class="tn-title-name" href="{{url('/thoi-su')}}">{{$newspaper3->Title->name}}</a>
                                    <a class="tn-title" href="{{url("single-page",["newspaper"=>$newspaper3->slug])}}">{{$newspaper3->name}}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-md-6">

                        @foreach($news_thoisu4 as $newspaper4)

                        <div class="tn-img">
                            <img src="{{$newspaper4->image}}"height="260px" />
                            <div class="tn-content">
                                <div class="tn-content-inner">
                                    <a class="tn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                    <a class="tn-title-name" href="{{url('/giai-tri')}}">{{$newspaper4->Title->name}}</a>

                                    <a class="tn-title" href="{{url("single-page",["newspaper"=>$newspaper4->slug])}}">{{$newspaper4->name}}</a>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
