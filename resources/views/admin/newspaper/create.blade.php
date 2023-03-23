@extends('admin.layout')

@section('main-content')
<form role="form" action="{{url('admin/newspaper/create')}}" method="post" enctype="multipart/form-data">
    @csrf
    <select name="title_id" class="mr-1">
        <option value="0">Choose Title..</option>

        @foreach($title as $item)
            <option @if(app("request")->input("title_id")==$item->id) selected @endif  value="{{$item->id}}"> {{$item->name}}

            </option>
        @endforeach


    </select>

    <input name="name" type="text" placeholder="name" required>


{{--    <div class="form-group">--}}
{{--        <label for="exampleInputFile">Thumbnail</label>--}}
{{--        <div class="input-group">--}}
{{--            <div class="custom-file">--}}
{{--                <input name="image" type="file" class="custom-file-input" id="exampleInputFile">--}}
{{--                <label class="custom-file-label" for="exampleInputFile">Choose file</label>--}}
{{--            </div>--}}
{{--            <div class="input-group-append">--}}
{{--                <span class="input-group-text" id="">Upload</span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}



    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                               Create a Newspaper
                            <small>Simple and fast</small>
                        </h3>
                        <!-- tools box -->
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">
                                <i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                                    title="Remove">
                                <i class="fas fa-times"></i></button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body pad">
                        <div class="mb-3">
                <textarea name="content" class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->
    </section>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>


</form>
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

<script type="text/javascript" src ="/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src ="/ckfinder/ckfinder.js"></script>
<script>
    CKEDITOR.replace('content');

</script>
@endsection
