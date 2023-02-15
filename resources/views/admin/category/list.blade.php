

@extends("admin.layout")
<!-- tham so 1 lua chon, tham so 2 thay doi -->
@section("title","List category")
@section("content-header")
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="text-center h1 display-3  bg-blue text-white" >List Category</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="{{url("/admin/category/create")}}">Create </a></li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection
@section("main-content")


    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Bordered Table</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Category Name</th>
                    <th>Icon</th>
                    <th style="width: 40px">Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td><img src="{{$item->icon}}" alt="" srcset="" width="80"> </td>
                        <td>
                            @if($item->status)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-warning">Inactive</span>

                            @endif
                        </td>
                    </tr>

                @endforeach

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            {!! $data->links("pagination::bootstrap-4") !!}
        </div>
    </div>

@endsection

