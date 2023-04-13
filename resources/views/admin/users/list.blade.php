@extends('admin.layout')
@section("title","List Newspaper")
@section("content-header")
    <div class="row mb-2">
        <div class="col-sm-12">
            <h1 class="text-center h1 display-3  bg-success text-white">Danh sách phóng viên</h1>
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
                    <th>Tên</th>
                    <th>Email</th>
                    <th>Vai trò</th>
                    <th>Hành Động</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{($item->role)}}</td>
                        <td>
                            <form method="post" action="{{route("user.xoaphongvien",["user"=>$item->id])}}">
                                @method("DELETE")
                                @csrf
                                <button type="submit" onclick=" return confirm('Bạn có chắc muốn xoá bài viết???')"
                                        class="btn btn-outline-warning">
                                    Xoá phóng viên

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
