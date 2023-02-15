@extends("admin.layout")
<!-- tham so 1 lua chon, tham so 2 thay doi -->
@section("title","Create Category")

@section("content-header")
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Create</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"></li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection

@section('main-content')
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Category Infor</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{url('/admin/category/create')}}">

                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label >Category Name</label>
                        <input type="text" class="form-control" name="name"  placeholder="Category name">
                    </div>
                    <div class="form-group">
                        <label >Icon</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input name="icon" type="file" class="custom-file-input" >
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text" id="">Upload</span>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.card -->


    </div>

@endsection

