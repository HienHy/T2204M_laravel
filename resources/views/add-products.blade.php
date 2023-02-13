@extends("admin.layout")
<!-- tham so 1 lua chon, tham so 2 thay doi -->
@section("title","Add Products")


@section("content-header")


    <h1 class="text-center h1 display-3  bg-blue text-white" > Add products</h1>



        <section class="panel  panel-default">
            <div class="panel-body">
                <form action="#" class="form-horizontal" role="form">


                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Product Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Product Name">
                        </div>
                    </div> <!-- form-group // -->
                    <div class="form-group">
                        <label for="thumbnail" class="col-sm-3 control-label">Thumbnail</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="thumbnail" id="thumbnail" placeholder="Thumbnail" required>
                        </div>
                    </div> <!-- form-group // -->
                    <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control " name="description" id="description" placeholder="Description"></textarea>
                        </div>
                    </div> <!-- form-group // -->
                    <div class="form-group">
                        <label for="qty" class="col-sm-3 control-label">Qty</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" name="qty" id="qty" placeholder="Qty">
                        </div>
                    </div> <!-- form-group // -->
                    <div class="form-group">
                        <label for="unit" class="col-sm-3 control-label">Unit</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="unit" id="unit" placeholder="Unit">
                        </div>
                    </div> <!-- form-group // -->
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Images</label>
                        <div class="col-sm-3">
                            <label class="control-label small"  for="file_img">Images (jpg/png):</label> <input type="file" name="file_img">
                        </div>
                    </div> <!-- form-group // -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div> <!-- form-group // -->
                </form>

            </div><!-- panel-body // -->
        </section><!-- panel// -->


@endsection

