@extends("admin.layout")
<!-- tham so 1 lua chon, tham so 2 thay doi -->
@section("title","Ve chung toi")

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
            <form role="form" method="post" action="{{url('/admin/product/create')}}">

                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label >Product Name</label>
                        <input type="text" class="form-control" name="name"  placeholder="Enter email">
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
                        <input type="number" class="form-control" name="price"  placeholder="Price">
                    </div>
                    <div class="form-group">
                        <label >Qty</label>
                        <input type="number" class="form-control" name="qty"  placeholder="Qty">
                    </div>
                    <div class="form-group">
                        <label >Unit</label>
                        <input type="text" class="form-control" name="unit"  placeholder="Unit">
                    </div>
                    <div class="form-group">
                        <label >Description</label>
                        <textarea type="text" class="form-control" name="description"  placeholder="Description"> </textarea>
                    </div>

                    <div class="form-group">
                        <label >Category</label>
                        <select name="category_id" class="form-control">
                            @foreach($categories as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>

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

