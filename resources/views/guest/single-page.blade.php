@extends('guest.layout')

@section('after-css')
    <style>
        img{
            width: 100%;
            height: 100%;
        }
        .mn-list{
            padding: 15px 0;
        }
        .mn-title{
            font-size: 14px;
        }
    </style>
@endsection
@section('content-header' )

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$newspaper->Title->name}}</li>
        </ol>
    </nav>
    <h5><i class="fa fa-eye"></i>{{$newspaper->views_count}} </h5>
    <h6><i class="fa fa-user"></i>{{$newspaper->User->name}} </h6>
@endsection
@section('main-content')


    <!-- Single News Start-->
    <div class="single-news">
        <div class="container-fluid">
            <div class="row">
                <div  class="col-md-8 ">
                        {!!$newspaper->content!!}
                </div>

                <div class="col-md-4">
                    <div class="sidebar">
                        <div class="sidebar-widget">
                            <h5><i class="fas fa-align-justify"></i>Bài Viết Cùng Chủ Đề</h5>
                            <div class="category">
                                        @foreach($related_newspaper as $views)
                                            <div class=" mn-list" style="display: flex">
                                                <div class="col-6 mn-img">
                                                    <img src="../{{$views->image}}" width="100%" height="100px"/>
                                                </div>
                                                <div class="col-6 mn-content">
                                                    <a class="mn-title" href="{{url("single-page",["newspaper"=>$views->slug])}}">{{$views->name}}</a>
                                                    <a class="mn-date" href=""><i class="far fa-clock"></i>{{$views->created_at}}</a>
                                                </div>
                                            </div>
                                        @endforeach


                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <h5><i class="fas fa-align-justify"></i>Bài Viết Nổi Bật</h5>
                            <div class="category">
                                @foreach($top_views as $views)
                                    <div class="mn-list" style="display: flex">
                                        <div class="col-6 mn-img">
                                            <img src="../{{$views->image}}" width="100%" height="100px"/>
                                        </div>
                                        <div class=" col-6 mn-content">
                                            <a class="mn-title" href="{{url("single-page",["newspaper"=>$views->slug])}}">{{$views->name}}</a>
                                            <a class="mn-date" href=""><i class="far fa-clock"></i>{{$views->created_at}}</a>
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
    <div class="col-6">
        <h4>Bình Luận</h4>


        @include('guest.commentDisplay', ['comments' => $newspaper->comments, 'newspaper_id' => $newspaper->id])

        <hr />
        <form method="post" action="{{url('/aa')}}">
            @csrf
            <div class="form-group">
                <textarea class="form-control" name="content" required></textarea>
                <input type="hidden" name="newspaper_id" value="{{ $newspaper->id }}" required />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Bình Luận" />
            </div>
        </form>
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


        </div>
    </div>


@endsection
@section('after-js')

@endsection
