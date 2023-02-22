

@extends("admin.layout")
<!-- tham so 1 lua chon, tham so 2 thay doi -->
@section("title","List Orders")
@section("content-header")
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="text-center h1 display-3  bg-blue text-white" >List Orders</h1>
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
                    <th>Grand Total</th>
                    <th>Shipping Address</th>
                    <th>Customer Tell</th>

                    <th style="width: 40px">Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->grand_total}}</td>
                        <td>{{$item->shipping_address}}</td>
                        <td>{{$item->customer_tell}}</td>

                        <td>
                            @if($item->status)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-warning">Inactive</span>

                            @endif
                        </td>
                        <td>

                            <a href="{{route("order_details",["order"=>$item->id])}}" class="btn-outline-info btn">Details</a>

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

