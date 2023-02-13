

@extends("admin.layout")
<!-- tham so 1 lua chon, tham so 2 thay doi -->
@section("title","List Products")

@section("content-header")


    <h1 class="text-center h1 display-3  bg-blue text-white" >List products</h1>
    <table class="table">
        <thead >
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Name</th>
            <th scope="col">Thumbnail</th>
            <th scope="col">Price</th>
            <th scope="col">Qty</th>
            <th scope="col">Description</th>
            <th scope="col">Unit</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
        </tr>
        </tbody>
    </table>

@endsection

