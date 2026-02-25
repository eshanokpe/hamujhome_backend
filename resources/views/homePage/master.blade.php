<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="Real estate, Property sale, Property buy">
	<meta name="description" content="Homy is a beautiful website template designed for Real Estate Agency.">
    <meta property="og:site_name" content="Homy">
    <meta property="og:url" content="https://creativegigstf.com">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Homy-Real Estate HTML5 Template & Dashboard">
	<meta name='og:image' content='images/assets/ogg.png'>
	<!-- For IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- For Resposive Device -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- For Window Tab Color -->
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#0D1A1C">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#0D1A1C">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#0D1A1C">
	<title>Homy-Real Estate HTML5 Template & Dashboard</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="{{asset('static')}}images/fav-icon/icon.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="all">
	<!-- Main style sheet -->
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all">
	<!-- responsive style sheet -->
	<link rel="stylesheet" type="text/css" href="css/responsive.css" media="all">
</head>

<body>
     <div class="main-page-wrapper">
        <!-- ===================================================
            Loading Transition
        ==================================================== -->
        <div id="preloader">
            <div id="ctn-preloader" class="ctn-preloader">
                <div class="icon"><img src="images/loader.gif" alt="" class="m-auto d-block" width="64"></div>
            </div>
        </div>
        @include('homePage.inc.header')
     </div>
 
    <!-- Start Main content -->
   @yield('content')
    <!-- End Main content -->

    <!-- Footer Start-->
    @include('homePage.inc.footer')
    <!-- End Footer -->
    <div class="dark-mark"></div>
    <!-- Vendor JS-->
    <script src="{{asset('static')}}/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="{{asset('static')}}/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{asset('static')}}/assets/js/vendor/popper.min.js"></script>
    <script src="{{asset('static')}}/assets/js/vendor/bootstrap.min.js"></script>
    <script src="{{asset('static')}}/assets/js/vendor/jquery.slicknav.js"></script>
    <script src="{{asset('static')}}/assets/js/vendor/slick.min.js"></script>
    <script src="{{asset('static')}}/assets/js/vendor/wow.min.js"></script>
    <script src="{{asset('static')}}/assets/js/vendor/jquery.ticker.js"></script>
    <script src="{{asset('static')}}/assets/js/vendor/jquery.vticker-min.js"></script>
    <script src="{{asset('static')}}/assets/js/vendor/jquery.scrollUp.min.js"></script>
    <script src="{{asset('static')}}/assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="{{asset('static')}}/assets/js/vendor/jquery.magnific-popup.js"></script>
    <script src="{{asset('static')}}/assets/js/vendor/jquery.sticky.js"></script>
    <script src="{{asset('static')}}/assets/js/vendor/perfect-scrollbar.js"></script>
    <script src="{{asset('static')}}/assets/js/vendor/waypoints.min.js"></script>
    <script src="{{asset('static')}}/assets/js/vendor/jquery.theia.sticky.js"></script>
    <!-- NewsBoard JS -->
    <script src="{{asset('static')}}/assets/js/main.js"></script>
    <script src="{{asset('frontEnd')}}/iziToast/dist/js/iziToast.min.js"></script>


    @if($errors->any())
        @foreach($errors->all() as $error)
            <script>
                iziToast.error({
                    title: '',
                    position:'topRight',
                    message: '{{$error}}',
                });
            </script>
        @endforeach
    @endif

    @if(session()->get('success'))
        <script>
            iziToast.success({
                title: '',
                position:'topRight',
                message: '{{session()->get('success')}}',
            });
        </script>
    @endif

</body>
</html>
