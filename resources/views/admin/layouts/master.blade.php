<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/admin/images/favicon.ico">

    <title>Superieur Admin - Dashboard</title>

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="/admin/assets/vendor_components/bootstrap/dist/css/bootstrap.css">

    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="/admin/css/bootstrap-extend.css">

    <!-- theme style -->
    <link rel="stylesheet" href="/admin/css/master_style.css">

    <!-- Superieur Admin skins -->
    <link rel="stylesheet" href="/admin/css/skins/_all-skins.css">

    <!-- daterange picker -->
    <link rel="stylesheet" href="/admin/assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css">

    <!-- Morris charts -->
    <link rel="stylesheet" href="/admin/assets/vendor_components/morris.js/morris.css">

    <!-- Data Table-->
    <link rel="stylesheet" type="text/css" href="/admin/assets/vendor_components/datatable/datatables.min.css"/>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body class="hold-transition skin-info-light sidebar-mini rtl">
<div class="wrapper">

    @include('admin.layouts.main-header')
    @include('admin.layouts.main-sidebar')
    <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="page-title">@yield('title')</h3>
                    </div>
                    <div class="right-title w-170">
                    <span class="subheader_daterange font-weight-600" id="dashboard_daterangepicker">
                        <span class="subheader_daterange-label">
                            <span class="subheader_daterange-title"></span>
                            <span class="subheader_daterange-date text-primary"></span>
                        </span>
                        <a href="#" class="btn btn-sm btn-primary">
                            <i class="fa fa-angle-down"></i>
                        </a>
                    </span>
                    </div>
                </div>
            </div>
            <!-- Main content -->
            <section class="content">
                @yield('content')
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    @include('admin.layouts.main-footer')
    @include('admin.layouts.control-sidebar')
</div>
<!-- ./wrapper -->



<!-- jQuery 3 -->
<script src="/admin/assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>

<!-- jQuery UI 1.11.4 -->
<script src="/admin/assets/vendor_components/jquery-ui/jquery-ui.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>

<!-- popper -->
<script src="/admin/assets/vendor_components/popper/dist/popper.min.js"></script>

<!-- date-range-picker -->
<script src="/admin/assets/vendor_components/moment/min/moment.min.js"></script>
<script src="/admin/assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Bootstrap 4.0-->
<script src="/admin/assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>

<!-- ChartJS -->
<script src="/admin/assets/vendor_components/chart.js-master/Chart.min.js"></script>

<!-- Slimscroll -->
<script src="/admin/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- FastClick -->
<script src="/admin/assets/vendor_components/fastclick/lib/fastclick.js"></script>

<!-- Morris.js charts -->
<script src="/admin/assets/vendor_components/raphael/raphael.min.js"></script>
<script src="/admin/assets/vendor_components/morris.js/morris.min.js"></script>

<!-- This is data table -->
<script src="/admin/assets/vendor_components/datatable/datatables.min.js"></script>

<!-- Superieur Admin App -->
<script src="/admin/js/template.js"></script>

<!-- Superieur Admin dashboard demo (This is only for demo purposes) -->
<script src="/admin/js/pages/dashboard.js"></script>

<!-- Superieur Admin for demo purposes -->
<script src="/admin/js/demo.js"></script>


</body>
</html>
