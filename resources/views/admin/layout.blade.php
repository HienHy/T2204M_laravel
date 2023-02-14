<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <base href="/" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield("title","Trang quan tri he thong")</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield("before_css")

@include('admin.html.css')
    @yield("after_css")


</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    @include('admin.html.nav')



    @include('admin.html.aside')

    <!-- Main Sidebar Container -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                @yield("content-header")
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
              @yield('main-content')
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->

    <!-- /.control-sidebar -->
    @include('admin.html.footer')

</div>
<!-- ./wrapper -->
@yield("before_js")
@include('admin.html.js')
@yield("after_js")

<!-- jQuery -->
</body>
</html>
