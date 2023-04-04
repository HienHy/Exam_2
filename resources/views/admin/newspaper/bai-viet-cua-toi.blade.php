@extends('admin.layout')
@section("title","List Newspaper")
@section("content-header")
    <div class="row mb-2">
        <div class="col-sm-12">
            <h1 class="text-center h1 display-3  bg-blue text-white" >Bài Viết Của Tôi</h1>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection
@section("main-content")

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Bordered Table</h3>


            <div class="card-tools">
                <form action="{{url("/admin/newspaper/bai-viet-cua-toi")}}" method="get">



                    <div class="input-group input-group-sm" style="width: 550px;">

                        <select name="title_id" class="mr-1">
                            <option value="0">Choose Title..</option>

                            @foreach($title as $item)
                                <option @if(app("request")->input("title_id")==$item->id) selected @endif  value="{{$item->id}}"> {{$item->name}}

                                </option>
                            @endforeach


                        </select>


                        <input type="text" value="{{app("request")->input("search")}}" name="search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                    </div>

                </form>

            </div>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    {{--                    <th>Content</th>--}}
                    <th>Image</th>
                    <th>Author</th>
                    <th>Title</th>
                                        <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        {{--                        <td>{{$item->content}}</td>--}}
                        <td><img src="{{$item->image}}" alt="" srcset="" width="80" height="80"> </td>
                        <td>{{$item->User->name}}</td>
                        <td>{{$item->Title->name}}</td>
                        <td>
                            @switch($item->status)
                                @case(1)
                                    <span class="badge bg-warning">Chưa duyệt</span>
                                    @break;
                                @case(2)

                                    <span class="badge bg-warning">Chưa xuất bản</span>
                                    @break;
                                @case(3)

                                    <span class="badge bg-success">Đã xuất bản</span>
                                    @break;
                                @default
                                    @break;

                            @endswitch
                        </td>

                        <td><a href="{{route("newspaper.details",["newspaper"=>$item->slug])}}" class="btn-outline-info btn">Chi Tiết</a>
                        <a href="{{route("newspaper.edit",["newspaper"=>$item->id])}}" class="btn-outline-info btn">Chỉnh Sửa</a>
                        </td>

                    </tr>

                @endforeach

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            {!! $data->appends(app("request")->input())->links("pagination::bootstrap-4") !!}
        </div>
    </div>

@endsection
