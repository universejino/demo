<!DOCTYPE html>
<html>

<!-- meta contains meta taga, css and fontawesome icons etc -->
@include('admin.meta')
<!-- ./end of meta -->

<body class="hold-transition login-page">


    <!-- dynamic content -->
    @yield('content')
    <!-- ./end of dynamic content -->


<!-- all js scripts including custom js -->
@include('admin.scripts')
<!-- ./end of js scripts -->

</body>
</html>
