<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard --|-- MyShop</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="/Back/img/favicon.ico">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="/Back/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="/Back/css/font-awesome.min.css">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="/Back/css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="/Back/css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="/Back/css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="/Back/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="/Back/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="/Back/css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="/Back/css/normalize.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="/Back/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="/Back/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="/Back/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="materialdesign">
<!-- Header top area start-->
<div class="wrapper-pro">
  @include('Back.Block.left-sideabr')
    <div class="content-inner-all">
     @include('Back.Block.header')
        @yield('content')
    </div>
</div>
@include('Back.Block.footer')
<!-- Footer End-->
<!-- jquery
    ============================================ -->
<script src="/Back/js/vendor/jquery-1.11.3.min.js"></script>
<!-- bootstrap JS
    ============================================ -->
<script src="/Back/js/bootstrap.min.js"></script>
<!-- meanmenu JS
    ============================================ -->
<script src="/Back/js/jquery.meanmenu.js"></script>
<!-- mCustomScrollbar JS
    ============================================ -->
<script src="/Back/js/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- sticky JS
    ============================================ -->
<script src="/Back/js/jquery.sticky.js"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="/Back/js/jquery.scrollUp.min.js"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="/Back/js/wow/wow.min.js"></script>
<!-- counterup JS
    ============================================ -->
<script src="/Back/js/counterup/jquery.counterup.min.js"></script>
<script src="/Back/js/counterup/waypoints.min.js"></script>
<script src="/Back/js/counterup/counterup-active.js"></script>
<!-- peity JS
    ============================================ -->
<script src="/Back/js/peity/jquery.peity.min.js"></script>
<script src="/Back/js/peity/peity-active.js"></script>
<!-- data table JS
    ============================================ -->
<script src="/Back/js/data-table/bootstrap-table.js"></script>
<script src="/Back/js/data-table/tableExport.js"></script>
<script src="/Back/js/data-table/data-table-active.js"></script>
<script src="/Back/js/data-table/bootstrap-table-editable.js"></script>
<script src="/Back/js/data-table/bootstrap-table-resizable.js"></script>
<script src="/Back/js/data-table/colResizable-1.5.source.js"></script>

<!-- main JS
    ============================================ -->
<script src="/Back/js/main.js"></script>
@stack('js')
</body>

</html>
