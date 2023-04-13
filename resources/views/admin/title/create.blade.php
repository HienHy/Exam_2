

@extends("admin.layout")
@section("title","Thêm mới chủ đề")

@section('after-css')
@endsection
@section("content-header")
    <div class="row mb-2">
        <div class="col-sm-12">
            <h1 class="text-center h1 display-3  bg-blue text-white" >Thêm mới chủ đề</h1>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection
@section("main-content")
<div class="container">
    <form >
        <input type="text" name="name" id="">

        <div class="form-group">
            <div class="input-group">
                <div class="custom-file">
                    <input name="image" type="file" class="custom-file-input" id="exampleInputFile" required
                           size="1000000">
                    <label class="custom-file-label" for="exampleInputFile">Chọn Ảnh Bìa</label>
                    @error('image') <p class="text-danger">{{$message}}</p> @enderror
                </div>
                <div class="input-group-append">
                    <span class="input-group-text" id="">Upload</span>
                </div>
            </div>
        </div>
    </form>


</div>


@endsection

