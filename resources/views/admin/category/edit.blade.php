@extends("admin.layout")
<!-- tham so 1 lua chon, tham so 2 thay doi -->
@section("title","Edit Category")

@section("content-header")
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit</h1>
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
            <form role="form" method="post" action="{{route("category_edit",["category"=>$category->id])}}" enctype="multipart/form-data">
                @method("PUT")

                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label >Category Name</label>
                        <input value="{{$category->name}}" type="text" class="form-control @error("name") is-invalid @enderror" name="name"  placeholder="Category name" required>
                        @error("name")
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label >Icon

                            <a href="{{$category->icon}}" target="_blank">
                                <img src="{{$category->icon}}" class="img-bordered-sm" alt="" srcset="" width="50" height="50">
                            </a>
                        </label>
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
                    <div class="form-group">
                        <label >Status</label>

                        <select class="form-control" name="status">
                            <option @if($category->status) selected @endif value="1">Active</option>
                            <option  @if(!$category->status) selected @endif value="0">Inactive</option>
                        </select>
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

