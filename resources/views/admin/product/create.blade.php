@extends("admin.layout")
<!-- tham so 1 lua chon, tham so 2 thay doi -->
@section("title","Create product")
@section("before_css")

    <link rel="stylesheet" href="/admin/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
@endsection
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
                <h3 class="card-title">Product Infor</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{url('/admin/product/create')}}" enctype="multipart/form-data" >

                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label >Product Name</label>
                        <input value="{{old("name")}}" type="text" class="form-control @error("name") is-invalid @enderror" name="name"   required>

                        @error("name")
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Thumbnail</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input name="thumbnail" type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text" id="">Upload</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label >Price</label>
                        <input type="number" value="{{old("price")}}" class="form-control @error("price") is-invalid @enderror " name="price"  placeholder="Price" required>
                        @error("price")
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label >Qty</label>
                        <input type="number" value="{{old("qty")}}" class="form-control @error("qty") is-invalid @enderror" name="qty"  placeholder="Qty" required>
                        @error("qty")
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label >Unit</label>

                        <select class="form-control" name="unit">
                            <option @if(old("unit")=='Item') selected @endif value="Item">Item</option>
                            <option  @if(old("unit")=='Box') selected @endif value="Box">Box</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label >Description</label>
                        <textarea type="text" class="form-control" name="description"  placeholder="Description">
                      {{old("description")}}
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label >Category</label>
                        <select name="category_id" class="form-control select2bs4">
                            @foreach($categories as $item)
                                <option @if(old("category_id")== $item->id) selected @endif value="{{$item->id}}">

                                    {{$item->name}}
                                </option>
                            @endforeach


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
@section("after_js")

    <script src="/admin/plugins/select2/js/select2.full.min.js"></script>

    <script type="text/javascript">

        //Initialize select2 elements
        $('.select2bs4').select2({
            theme:'bootstrap4'
        })

    </script>

@endsection

