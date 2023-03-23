@extends('admin.layout')
@section("title","List Newspaper")
@section("content-header")
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="text-center h1 display-3  bg-blue text-white" >Chi Tiết</h1>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection
@section("main-content")
{!! $newspaper->content !!}


<form method="post" action="{{route("newspaper_duyet",['newspaper'=>$newspaper->id])}}">

    @method('PUT')
    @csrf
    <button type="submit" onclick=" return confirm('Bạn có chắc muốn duyệt bài viết này?')" class="btn btn-outline-warning">
        Duyệt

    </button>

</form>

@endsection
