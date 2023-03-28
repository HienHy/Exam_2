<div class="cat-news">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h2><i class="fas fa-align-justify"></i>Thời Sự</h2>
                <div class="row cn-slider">
                  @foreach($top_thoisu as $item)
                    <div class="col-md-6">
                        <div class="cn-img">
                            <img src="{{$item->image}}"  height="169px" />
                            <div class="cn-content">
                                <div class="cn-content-inner">
                                    <a class="cn-date" href="{{url("single-page",["newspaper"=>$item->slug])}}"><i class="far fa-clock"></i>{{$item->created_at}}</a>
                                    <a class="cn-title" href="{{url("single-page",["newspaper"=>$item->slug])}}">{{$item->name}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6">
                <h2><i class="fas fa-align-justify"></i>Thế Giới</h2>
                <div class="row cn-slider">
                    @foreach($top_thegioi as $item)
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="{{$item->image}}" height="169px" />
                                <div class="cn-content">
                                    <div class="cn-content-inner">
                                        <a class="cn-date" href="{{url("single-page",["newspaper"=>$item->slug])}}"><i class="far fa-clock"></i>{{$item->created_at}}</a>
                                        <a class="cn-title" href="{{url("single-page",["newspaper"=>$item->slug])}}">{{$item->name}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div><div class="cat-news">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h2><i class="fas fa-align-justify"></i>Pháp Luật</h2>
                <div class="row cn-slider">
                    @foreach($top_phapluat as $item)
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="{{$item->image}}" height="169px" />
                                <div class="cn-content">
                                    <div class="cn-content-inner">
                                        <a class="cn-date" href="{{url("single-page",["newspaper"=>$item->slug])}}"><i class="far fa-clock"></i>{{$item->created_at}}</a>
                                        <a class="cn-title" href="{{url("single-page",["newspaper"=>$item->slug])}}">{{$item->name}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6">
                <h2><i class="fas fa-align-justify"></i>Kinh Doanh</h2>
                <div class="row cn-slider">
                    @foreach($top_kinhdoanh as $item)
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="{{$item->image}}" height="169px" />
                                <div class="cn-content">
                                    <div class="cn-content-inner">
                                        <a class="cn-date" href="{{url("single-page",["newspaper"=>$item->slug])}}"><i class="far fa-clock"></i>{{$item->created_at}}</a>
                                        <a class="cn-title" href="{{url("single-page",["newspaper"=>$item->slug])}}">{{$item->name}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach                </div>
            </div>
        </div>
    </div>
</div><div class="cat-news">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h2><i class="fas fa-align-justify"></i>Công Nghệ</h2>
                <div class="row cn-slider">
                    @foreach($top_congnghe as $item)
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="{{$item->image}}" height="169px" />
                                <div class="cn-content">
                                    <div class="cn-content-inner">
                                        <a class="cn-date" href="{{url("single-page",["newspaper"=>$item->slug])}}"><i class="far fa-clock"></i>{{$item->created_at}}</a>
                                        <a class="cn-title" href="{{url("single-page",["newspaper"=>$item->slug])}}">{{$item->name}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach                </div>
            </div>
            <div class="col-md-6">
                <h2><i class="fas fa-align-justify"></i>Xe</h2>
                <div class="row cn-slider">
                    @foreach($top_xe as $item)
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="{{$item->image}}" height="169px" />
                                <div class="cn-content">
                                    <div class="cn-content-inner">
                                        <a class="cn-date" href="{{url("single-page",["newspaper"=>$item->slug])}}"><i class="far fa-clock"></i>{{$item->created_at}}</a>
                                        <a class="cn-title" href="{{url("single-page",["newspaper"=>$item->slug])}}">{{$item->name}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach                </div>
            </div>
        </div>
    </div>
</div><div class="cat-news">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h2><i class="fas fa-align-justify"></i>Du Lịch</h2>
                <div class="row cn-slider">

                @foreach($top_dulich as $item)
                    <div class="col-md-6">
                        <div class="cn-img">
                            <img src="{{$item->image}}" height="169px" />
                            <div class="cn-content">
                                <div class="cn-content-inner">
                                    <a class="cn-date" href="{{url("single-page",["newspaper"=>$item->slug])}}"><i class="far fa-clock"></i>{{$item->created_at}}</a>
                                    <a class="cn-title" href="{{url("single-page",["newspaper"=>$item->slug])}}">{{$item->name}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
            <div class="col-md-6">
                <h2><i class="fas fa-align-justify"></i>Văn Hoá</h2>
                <div class="row cn-slider">
                    @foreach($top_vanhoa as $item)
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="{{$item->image}}" height="169px"  />
                                <div class="cn-content">
                                    <div class="cn-content-inner">
                                        <a class="cn-date" href="{{url("single-page",["newspaper"=>$item->slug])}}"><i class="far fa-clock"></i>{{$item->created_at}}</a>
                                        <a class="cn-title" href="{{url("single-page",["newspaper"=>$item->slug])}}">{{$item->name}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="cat-news">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h2><i class="fas fa-align-justify"></i> Giải Trí</h2>
                <div class="row cn-slider">
                    @foreach($top_giaitri as $item)
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="{{$item->image}}" height="169px" />
                                <div class="cn-content">
                                    <div class="cn-content-inner">
                                        <a class="cn-date" href="{{url("single-page",["newspaper"=>$item->slug])}}"><i class="far fa-clock"></i>{{$item->created_at}}</a>
                                        <a class="cn-title" href="{{url("single-page",["newspaper"=>$item->slug])}}">{{$item->name}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach                </div>
            </div>
            <div class="col-md-6">
                <h2><i class="fas fa-align-justify"></i>Thể Thao</h2>
                <div class="row cn-slider">
                    @foreach($top_thethao as $item)
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="{{$item->image}}" height="169px" />
                                <div class="cn-content">
                                    <div class="cn-content-inner">
                                        <a class="cn-date" href="{{url("single-page",["newspaper"=>$item->slug])}}"><i class="far fa-clock"></i>{{$item->created_at}}</a>
                                        <a class="cn-title" href="{{url("single-page",["newspaper"=>$item->slug])}}">{{$item->name}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach                </div>
            </div>
        </div>
    </div>
</div>
<!-- Category News End-->
