@extends('guest.layout')

@section('after-css')
    <style>
        img{
            width: 100%;
            object-fit: cover;
        }
        .mn-list{
            padding: 15px 0;
        }
        .mn-title{
            font-size: 16px;
            font-weight: bold;
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

@endsection
@section('main-content')
<div class="container">
    <div style="display: flex;width: 60%">
        <h6><i class="fa fa-user mx-4"></i>{{$newspaper->User->name}} </h6>
        <h6><i class="fa fa-eye mx-4" ></i>{{$newspaper->views_count}} </h6>
        <h6 class="mn-date mx-4"><i class="far fa-clock"></i>{{$newspaper->publish_date}}</h6>
    </div>
    <!-- Single News Start-->
    <div class="single-news">
        <div class="container-fluid">
            <h1 style="font-weight: bold">{{$newspaper->name}}</h1>



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
                <textarea class="form-control" name="content" required id="content"></textarea>
                @error('content') <p class="text-danger">{{$message}}</p> @enderror

                <input type="hidden" name="newspaper_id" value="{{ $newspaper->id }}" required />


            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Bình Luận" />
            </div>
        </form>
{{--        <button type="botton" class="btn  btn-primary" id="click-comment">Comment</button>--}}
    </div>


</div>


@endsection
