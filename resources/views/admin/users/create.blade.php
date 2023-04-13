@extends('admin.layout')
@section("title","List Newspaper")
@section("content-header")
    <div class="row mb-2">
        <div class="col-sm-12">
            <h1 class="text-center h1 display-3  bg-success text-white">Thêm mới phóng viên </h1>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection
@section("main-content")

    <form role="form" action="{{url('admin/user/create-a')}}" method="post" enctype="multipart/form-data">
        @csrf

        <select name="author_id" class="mr-2 custom-select" style="width: 45%">
            <option value="0">Chọn tài khoản</option>

            @foreach($data as $item)
                <option @if(app("request")->input("author_id")==$item->id) selected
                        @endif  value="{{$item->id}}"> {{$item->email}}

                </option>
            @endforeach

            @error("author_id")
            <p class="text-danger">{{$message}}</p>
            @enderror


        </select>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm mới</button>
        </div>
    </form>

@endsection
