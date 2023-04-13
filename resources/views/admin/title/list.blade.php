

@extends("admin.layout")
@section("title","Danh sách chủ đề")
@section("content-header")
    <div class="row mb-2">
        <div class="col-sm-12">
            <h1 class="text-center h1 display-3  bg-blue text-white" >Danh sách chủ đề</h1>
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
                    <th>Tên </th>
                    <th>Ảnh</th>
                    <th style="width: 40px">Trạng thái</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td><img src="../{{$item->icon}}" alt="" srcset="" width="80" height="80"> </td>
                        <td>
                            @if($item->status)
                                <span class="badge bg-success">Hoạt động</span>
                            @else
                                <span class="badge bg-warning">Không hoạt động</span>

                            @endif
                        </td>
{{--                        <td>--}}
{{--                            <a href="{{route("category_edit",["category"=>$item->id])}}" class="btn-outline-info btn">Edit</a>--}}
{{--                            <form method="post" action="{{route("category_delete",['category'=>$item->id])}}">--}}
{{--                                @method("DELETE")--}}
{{--                                @csrf--}}
{{--                                <button type="submit" onclick=" return confirm('ban chac muon xoa category nay')" class="btn btn-outline-warning">--}}
{{--                                    Delete--}}

{{--                                </button>--}}
{{--                        </td>--}}

                    </tr>

                @endforeach

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->

    </div>

@endsection

