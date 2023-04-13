@extends('admin.layout')
@section("title","Danh sách bình luận")
@section("content-header")
    <div class="row mb-2">
        <div class="col-sm-12">
            <h1 class="text-center h1 display-3  bg-blue text-white">Danh Sách Bình Luận</h1>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection
@section("main-content")
    <div class="card">

        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Người bình luận</th>
                    <th>Tên bài báo</th>

                    <th>Nội dung</th>
                    <th>Hành động</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->user->name}}</td>
                        <td>{{($item->newspaper->name)}}</td>

                        <td>{{$item->content}}</td>


                        <td>
                            <form method="post" action="{{route("comment.xoabinhluan",["comment"=>$item->id])}}">
                                @method("DELETE")
                                @csrf
                                <button type="submit" onclick=" return confirm('Bạn có chắc muốn xoá bình luận này???')" class="btn btn-outline-warning">
                                    Xoá bình luận

                                </button>

                            </form>
                        </td>

                    </tr>

                @endforeach

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        {{--        <div class="card-footer clearfix">--}}
        {{--            {!! $data->appends(app("request")->input())->links("pagination::bootstrap-4") !!}--}}
        {{--        </div>--}}
    </div>


@endsection
