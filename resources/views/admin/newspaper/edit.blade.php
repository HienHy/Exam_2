@extends('admin.layout')
@section('after-css')
    <style>
        .card-footer {
            display: flex;
        }


    </style>

@endsection
@section('main-content')

    <form role="form" action="{{route('newspaper.update',['newspaper'=>$newspaper->id])}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="form-group col-6">
                <select name="title_id" class="mr-2 custom-select" style="width: 45%">
                    <option value="0">Chọn Chủ Đề</option>

                    @foreach($title as $item)
                        <option @if($newspaper->title_id==$item->id) selected
                                @endif  value="{{$item->id}}"> {{$item->name}}

                        </option>
                    @endforeach
                    @error("title_id")
                    <p class="text-danger">{{$message}}</p>
                    @enderror


                </select>


                <select name="author_id" class="mr-2 custom-select" style="width: 45%">
                    <option value="0">Chọn Tác Giả</option>

                    @foreach($author as $item)
                        <option @if($newspaper->user_id==$item->id) selected
                                @endif  value="{{$item->id}}"> {{$item->name}}

                        </option>
                    @endforeach

                    @error("author_id")
                    <p class="text-danger">{{$message}}</p>
                    @enderror



                </select>


                <input style="margin-top: 15px;" class="form-control" id="exampleFormControlTextarea1" name="name"
                          placeholder="Tiêu Đề" rows="3" required>{{$newspaper->name}}</input>
                @error("name")
                <p class="text-danger">{{$message}}</p>
                @enderror

            </div>


            <div class="col-6">
                <div class="form-group">

                    <label for="exampleInputFile">Ảnh Minh Hoạ

                        <a href="{{$newspaper->image}}" target="_blank">
                            <img src="{{$newspaper->image}}" class="img-bordered-sm" alt="" srcset="" width="100" height="100">
                        </a>

                    </label>
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
                <textarea placeholder="Mô tả" name="description" class="form-control" id="exampleFormControlTextarea2"
                          rows="3">{{$newspaper->description}}</textarea>
                @error("description")
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body pad">
                            <div class="mb-3">
                <textarea name="content" class="textarea" placeholder="Place some text here" required
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$newspaper->content}}</textarea>
                            </div>

                            @error("content")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- /.col-->
            </div>
            <!-- ./row -->
        </section>
        @if(auth()->user()->Admin->role == \App\Models\Admin::ADMIN || auth()->user()->Admin->role == \App\Models\Admin::BTV)

            <div class="col-6">

                <select name="nxb_date" class="mr-2 custom-select" id="click" onchange="onTypeChange(this.value)">
                    <option selected value="0">
                        Xuất bản ngay
                    </option>
                    <option value="2">
                        Lên lịch xuất bản
                    </option>
                </select>
                <input class="form-control float-right" type="datetime-local" name="publish_date" id="aaaa">
            </div>
        @endif
        @error('publish_date') {{$message}} @enderror
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Cập Nhật</button>
        </div>


    </form>

    {{--    <form method="post" action="{{url("publish.xuatBanNgay")}}">--}}

    {{--        @csrf--}}
    {{--        <button type="submit" onclick=" return confirm('Bạn có chắc muốn xuất bản bài viết này?')"--}}
    {{--                class="btn btn-primary">--}}
    {{--            Xuất Bản Ngay--}}

    {{--        </button>--}}

    {{--    </form>--}}

    {{--    <form method="post" action="{{url("lenlich.lenLich")}}">--}}
    {{--        @csrf--}}
    {{--        <input type="date" name="publish_date">--}}
    {{--        <button type="submit" onclick=" return confirm('Bạn có chắc muốn lên lịch cho bài viết này?')"--}}
    {{--                class="btn btn-primary">--}}
    {{--            Lên Lịch Xuất Bản--}}
    {{--        </button>--}}
    {{--    </form>--}}


    <!-- /.content -->
@endsection
@section('after_js')

    {{--    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>--}}

    {{--    <script>--}}
    {{--        ClassicEditor--}}
    {{--            .create( document.querySelector( '#editor' ) )--}}
    {{--            .then( editor => {--}}
    {{--                console.log( editor );--}}
    {{--            } )--}}
    {{--            .catch( error => {--}}
    {{--                console.error( error );--}}
    {{--            } );--}}
    {{--    </script>--}}
    <!-- Summernote -->

    <script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="/ckfinder/ckfinder.js"></script>
    <script>
        CKEDITOR.replace('content');
        var publish_date = $('#aaaa');

        const onTypeChange = (value) => {

            if (value ==='1' ) {
                publish_date.show();
            }else    if ( value ==='0') {
                publish_date.hide();
            }

        }
        onTypeChange("0");
    </script>
@endsection
