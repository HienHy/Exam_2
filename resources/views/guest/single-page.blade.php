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
                            <h2><i class="fas fa-align-justify"></i>Xem Nhiều Trong Ngày</h2>
                            <div class="category">
                                <ul class="fa-ul">

                                    <div class="col-lg-6">
                                        @foreach($top_views as $views)
                                            <div class="mn-list">
                                                <div class="mn-img">
                                                    <img src="/assets/img/latest-news.jpg" />
                                                </div>
                                                <div class="mn-content">
                                                    <a class="mn-title" href="{{url("single-page",["newspaper"=>$views->slug])}}">{{$views->name}}</a>
                                                    <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
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
    <div class="col-6">
        <h4>Display Comments</h4>

        @include('guest.commentDisplay', ['comments' => $newspaper->comments, 'newspaper_id' => $newspaper->id])

        <hr />
        <h4>Add comment</h4>
        <form method="post" action="{{url('/aa')}}">
            @csrf
            <div class="form-group">
                <textarea class="form-control" name="content" required></textarea>
                <input type="hidden" name="newspaper_id" value="{{ $newspaper->id }}" required />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Add Comment" />
            </div>
        </form>
    </div>


@endsection
