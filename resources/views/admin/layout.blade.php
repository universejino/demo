<!DOCTYPE html>
<html>

<!-- meta contains meta taga, css and fontawesome icons etc -->
@include('admin.meta')
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed sidebar-collapse">

<div class="wrapper">
<nav class="main-header navbar navbar-expand navbar-dark navbar-light">
    <!-- header contains top navbar -->
@include('admin.header')
<!-- ./end of header -->

    <!-- left sidebar -->
@include('admin.sidebar')
<!-- ./end of left sidebar -->

    <!-- dynamic content -->
@yield('content')
<!-- ./end of dynamic content -->

<!-- ./right sidebar -->
    @include('admin.footer')
</div>
<!-- ./wrapper -->

<!-- The actual snackbar -->

<!-- all js scripts including custom js -->
@include('admin.scripts')
<!-- ./end of js scripts -->

</body>
</html>
