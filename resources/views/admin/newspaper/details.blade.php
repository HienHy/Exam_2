@extends('admin.layout')
@section("title","List Newspaper")
@section("content-header")
    <div class="row mb-2">
        <div class="col-sm-12">
            <h1 class="text-center h1 display-3  bg-blue text-white">Chi Tiết</h1>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection
@section("main-content")

    {!! $newspaper->content !!}
    @if($newspaper -> status === 1 || $newspaper -> status === 2 )

        <button class="btn btn-outline-primary"><a
                href="{{route("newspaper.khongduyet",['newspaper'=>$newspaper->id])}}">
                Không duyệt và yêu cầu chỉnh sửa

            </a>
        </button>
        <form method="post" action="{{route("newspaper_lenlich",['newspaper'=>$newspaper->id])}}">

            @method('PUT')
            @csrf

            <div class="col-6">
                <select name="nxb_date" class="mr-2 custom-select" id="click" onchange="onTypeChange(this.value)">

                    <option selected value="0">
                        Xuất bản ngay
                    </option>
                    <option value="1">
                        Lên lịch xuất bản
                    </option>
                </select>
                <input class="form-control float-right" type="datetime-local" name="publish_date" id="aaaa">
            </div>
            <button type="submit" onclick=" return confirm('Bạn có chắc muốn xuất bản bài viết này?')"
                    class="btn btn-outline-primary">
                Xuất bản

            </button>

        </form>



    @endif

@endsection

@section('after_js')
    <script>
        var publish_date = $('#aaaa');

        const onTypeChange = (value) => {

            if (value ==='1' ) {
                publish_date.show();
            }else    if (value ==='0') {
                publish_date.hide();
            }

        }
        onTypeChange("0");
    </script>

@endsection
