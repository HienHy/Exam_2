@extends('admin.layout')
@section("title","List Newspaper")
@section("content-header")
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="text-center h1 display-3  bg-blue text-white" >List Newspaper</h1>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection
@section("main-content")


    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Bordered Table</h3>


            <div class="card-tools">
                <form action="{{url("/admin/newspaper/list")}}" method="get">



                    <div class="input-group input-group-sm" style="width: 550px;">

                        <select name="category_id" class="mr-1">
                            <option value="0">Choose Title..</option>

                            @foreach($title as $item)
                                <option @if(app("request")->input("title_id")==$item->id) selected @endif  value="{{$item->id}}"> {{$item->name}}

                                </option>
                            @endforeach


                        </select>


                        <input type="text" value="{{app("request")->input("search")}}" name="search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                    </div>

                </form>

            </div>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th>Content</th>
                    <th>Image</th>
                    <th>User_id</th>
                    <th>Title_id</th>
                    <th>Views_count</th>
                    <th style="width: 40px">Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->content}}</td>
                        <td><img src="{{$item->image}}" alt="" srcset="" width="80" height="80"> </td>
                        <td>{{$item->user_id}}</td>
                        <td>{{$item->Title->name}}</td>
                        <td>{{$item->views_count}}</td>
                        <td>
                            @if($item->status)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-warning">Inactive</span>

                            @endif
                        </td>

{{--                        <td>--}}
{{--                            <a href="{{route("product_edit",["product"=>$item->id])}}" class="btn-outline-info btn">Edit</a>--}}
{{--                            <form method="post" action="{{route("product_delete",['product'=>$item->id])}}">--}}
{{--                                @method("DELETE")--}}
{{--                                @csrf--}}
{{--                                <button type="submit" onclick=" return confirm('ban chac muon xoa san pham')" class="btn btn-outline-warning">--}}
{{--                                    Delete--}}

{{--                                </button>--}}

{{--                            </form>--}}

{{--                        </td>--}}
                    </tr>

                @endforeach

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            {!! $data->appends(app("request")->input())->links("pagination::bootstrap-4") !!}
        </div>
    </div>

@endsection
