@extends('admin.layout')
@section("title","List Newspaper")
@section("content-header")
    <div class="row mb-2">
        <div class="col-sm-12">
            <h1 class="text-center h1 display-3  bg-blue text-white" >Create</h1>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection
@section("main-content")





    <select name="author_id" class="mr-2 custom-select" style="width: 45%">
        <option value="0">Chọn Tác Giả</option>

        @foreach($data as $item)
            <option @if(app("request")->input("author_id")==$item->id) selected
                    @endif  value="{{$item->id}}"> {{$item->email}}

            </option>
        @endforeach

        @error("author_id")
        <p class="text-danger">{{$message}}</p>
        @enderror


    </select>


@endsection
