<!DOCTYPE html>
<html  class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/Front/img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Karma Shop</title>
    <!--
        CSS
        ============================================= -->
    <link rel="stylesheet" href="/Front/css/linearicons.css">
    <link rel="stylesheet" href="/Front/css/font-awesome.min.css">
    <link rel="stylesheet" href="/Front/css/themify-icons.css">
    <link rel="stylesheet" href="/Front/css/bootstrap.css">
    <link rel="stylesheet" href="/Front/css/owl.carousel.css">
    {{--<link rel="stylesheet" href="/Front/css/nice-select.css">
    --}}<link rel="stylesheet" href="/Front/css/nouislider.min.css">
    <link rel="stylesheet" href="/Front/css/ion.rangeSlider.css" />
    <link rel="stylesheet" href="/Front/css/ion.rangeSlider.skinFlat.css" />
    <link rel="stylesheet" href="/Front/css/magnific-popup.css">
    <link rel="stylesheet" href="/Front/css/main.css">
    @stack('css')
</head>
<body>
@include('Front.Block.header')
@yield('content')
@include('Front.Block.footer')

<script src="/Front/js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
<script src="/Front/js/vendor/bootstrap.min.js"></script>
<script src="/Front/js/jquery.ajaxchimp.min.js"></script>
{{--<script src="/Front/js/jquery.nice-select.min.js"></script>--}}
<script src="/Front/js/jquery.sticky.js"></script>
<script src="/Front/js/nouislider.min.js"></script>
<script src="/Front/js/jquery.magnific-popup.min.js"></script>
<script src="/Front/js/owl.carousel.min.js"></script>
<script src="/Front/js/main.js"></script>
@stack('js')
</body>
</html>

