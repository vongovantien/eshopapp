@include('admin.header')
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
    @include('admin.slidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            @yield('content')
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="/template/admin/vendor/jquery/jquery.min.js"></script>
    <script src="/template/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/template/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/template/admin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/template/admin/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/template/admin/js/demo/chart-area-demo.js"></script>
    <script src="/template/admin/js/demo/chart-pie-demo.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="/template/admin/js/main.js"></script>
</body>
</html>
