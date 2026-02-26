<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="Real estate, Property sale, Property buy">
	<meta name="description" content="hamujhomes is a webiste designed for Real Estate.">
    <meta property="og:site_name" content="hamujhomes">
    <meta property="og:url" content="http://hamujhomes.com">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Hamuj Home | Your top choice">
	{{-- <meta name='og:image' content='{{asset('static')}}/assets/images/assets/ogg.png'> --}}
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
	<title>Hamuj Home | Your top choice</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="{{asset('assets')}}/images/fav-icon/icon.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/bootstrap.min.css" media="all">
	<!-- Main style sheet -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/style.min.css" media="all">
	<!-- responsive style sheet -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/responsive.css" media="all">
 
	<!-- Fix Internet Explorer ______________________________________-->
	<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->
</head>

<body>
     <div class="main-page-wrapper">
        <!-- ===================================================
            Loading Transition
        ==================================================== -->
        {{-- <div id="preloader">
            <div id="ctn-preloader" class="ctn-preloader">
                <div class="icon"><img src="{{asset('assets')}}/images/fav-icon/icon.png" alt="" class="m-auto d-block" width="64"></div>
            </div>
        </div> --}}
        @include('homePage.inc.header2')
     </div>
 
    <!-- Start Main content -->
   @yield('content')
    <!-- End Main content -->

    <!-- Footer Start-->
    @include('homePage.inc.footer')
    
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
