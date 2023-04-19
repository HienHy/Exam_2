@extends('admin.layout')
@section("title","List Newspaper")
@section("content-header")
    <div class="row mb-2">
        <div class="col-sm-12">
            <h1 class="text-center h1 display-3  bg-blue text-white">Danh Sách Bài Viết</h1>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection
@section("main-content")

    <div class="card">
        <div class="card-header">


            <div class="card-tools">
                <form action="{{url("/admin/newspaper/list")}}" method="get">


                    <div class="input-group input-group-sm" style="width: 550px;">

                        <select name="title_id" class="mr-1">
                            <option value="0">Chọn chủ đề..</option>

                            @foreach($title as $item)
                                <option @if(app("request")->input("title_id")==$item->id) selected
                                        @endif  value="{{$item->id}}"> {{$item->name}}

                                </option>
                            @endforeach


                        </select>


                        <input type="text" value="{{app("request")->input("search")}}" name="search"
                               class="form-control float-right" placeholder="Tìm kiếm">

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
                <tr style="font-size: 14px">
                    <th style="width: 10px">#</th>
                    <th>Tiêu Đề</th>
                    {{--                    <th>Content</th>--}}
                    <th>Ảnh bìa</th>
                    <th>Tác giả</th>
                    <th>Chuyên Mục</th>
                    <th>Ngày xuất bản</th>
                    <th>Trạng thái</th>
                    <th>Hành động</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        {{--                        <td>{{$item->content}}</td>--}}
                        <td><img src="/{{$item->image}}" alt="" srcset="" width="80" height="80"></td>
                        <td>{{$item->User->name}}</td>
                        <td>{{$item->Title->name}}</td>
                        <td>{{$item->publish_date}}</td>
                        <td>
                            @switch($item->status)
                                @case(1)
                                    <span class="badge bg-danger">Chờ duyệt</span>
                                    @break;
                                @case(2)

                                    <span class="badge bg-gradient-red">Chờ xuất bản</span>
                                    @break;
                                @case(3)

                                    <span class="badge bg-success">Đã xuất bản</span>
                                    @break;
                                @case(4)

                                    <span class="badge bg-warning">Đã gỡ bỏ</span>
                                    @break;
                                @default
                                    @break;

                            @endswitch
                        </td>
                        <td>
                            <a href="{{route("newspaper.details",["newspaper"=>$item->slug])}}"
                               class="btn-outline-info btn ">Chi Tiết</a>
                            @if($item->status == 4 || $item->status == 1)

                            <a href="{{route("newspaper.edit",["newspaper"=>$item->id])}}" class="btn-outline-info btn">Chỉnh
                                Sửa</a>
                            @endif
                            @if($item->status == 3)

                                <a href="{{route("newspaper.gobai",["newspaper"=>$item->id])}}"
                                   onclick=" return confirm('Bạn có chắc muốn gỡ bài viết???')"  class="btn-outline-info btn">Gỡ bài</a>
                            @endif
                            @if($item->status == 4 || $item->status == 1)
                                <form method="post" action="{{route("newspaper.xoabai",["newspaper"=>$item->id])}}">
                                    @method("DELETE")
                                    @csrf
                                    <button type="submit" onclick=" return confirm('Bạn có chắc muốn xoá bài viết???')" class="btn btn-outline-warning">
                                        Xoá bài viết

                                    </button>

                                </form>

                            @endif
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
