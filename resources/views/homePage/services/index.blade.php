@extends('layouts.app')
@section('title')
{{$website->name}}
@endsection
@section('content') 

<!-- 
=============================================
    Inner Banner
============================================== 
-->
<div class="inner-banner-three inner-banner text-center z-1 position-relative">
    <div class="bg-wrapper overflow-hidden position-relative z-1" style="background-image: url({{asset('assets')}}/images/media/img_51.jpg);">
        <div class="container position-relative z-2">
            <h2 class="mb-35 xl-mb-20 md-mb-10 pt-15 font-garamond text-white">Services</h2>
            <ul class="theme-breadcrumb style-none d-inline-flex align-items-center justify-content-center position-relative z-1 bottom-line">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>/</li>
                <li> Services</li>
            </ul>
        </div>
        <img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/shape/shape_35.svg" alt="" class="lazy-img shapes shape_01">
        <img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/shape/shape_36.svg" alt="" class="lazy-img shapes shape_02">
    </div>    
</div>
<!-- /.inner-banner-three -->

<!-- 
=============================================
    BLock Feature Eleven
============================================== 
-->
<div class="block-feature-eleven mt-150 xl-mt-100">
    <div class="container container-large">
        <div class="row">
            <div class="col-lg-5">
                <div class="title-one md-mb-40">
                    <h3>1,230+ <span>Companies <img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/shape/title_shape_10.svg" alt="" class="lazy-img"></span>Trust by us.</h3>
                </div>
                <!-- /.title-one -->
            </div>
            <div class="col-xxl-6 col-lg-7 ms-auto">
                <p class="fs-24 lh-lg mb-30 color-dark">Your leading real estate advocate, transforming houses into dreams. Trust us to expertly guide you home.  745,000 apartments & home for sell, rent & mortgage.</p>
                <div class="d-inline-flex flex-wrap align-items-center">
                    <a href="{{ route('home.about') }}" class="btn-five md rounded-0 mt-20 me-5"><span>More Details</span></a>
                    <a href="{{ route('home.contact') }}" class="btn-three mt-20"><span>Request a Callback</span> <i class="fa-light fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.block-feature-eleven -->



 <!--
=====================================================
    BLock Feature Seven
=====================================================
-->
<div class="block-feature-seven position-relative z-1 mt-150 xl-mt-120 lg-mt-100">
    <div class="container container-large">
        <div class="position-relative">
            <div class="text-center wow fadeInUp">
                <div class="title-one">
                    <h3><span>We’r Here <img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/shape/title_shape_10.svg" alt="" class="lazy-img"></span>to help you</h3>
                    <p class="fs-22 mt-xs">Explore featured properties for sale.</p>
                </div>
                <!-- /.title-one -->
            </div>

            <div class="wrapper position-relative z-1 mt-45 lg-mt-20 mb-100 lg-mb-50">
                <div class="row gx-xxl-5">
                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="card-style-two overflow-hidden position-relative z-1 mt-30">
                            <img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/media/img_19.jpg" alt="" class="lazy-img w-100 tran5s">
                            <div class="content text-center">
                                <div class="btn-line tran3s fw-500 text-uppercase">BUY PROPERTY</div>
                                <h4 class="mt-15 mb-35">Explore Home & Buy</h4>
                                <a href="{{ route('home.service.properties')}}" class="btn-four rounded-circle m-auto"><i class="bi bi-arrow-up-right"></i></a>
                            </div>
                            <!-- /.content -->
                        </div>
                        <!-- /.card-style-two -->
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card-style-two overflow-hidden position-relative z-1 mt-30">
                            <img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/media/img_20.jpg" alt="" class="lazy-img w-100 tran5s">
                            <div class="content text-center">
                                <div class="btn-line tran3s fw-500 text-uppercase">HMOs</div>
                                <h4 class="mt-15 mb-35">List & Sell Quickly</h4>
                                <a href="{{ route('home.service.homs')}}" class="btn-four rounded-circle m-auto"><i class="bi bi-arrow-up-right"></i></a>
                            </div>
                            <!-- /.content -->
                        </div>
                        <!-- /.card-style-two -->
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="card-style-two overflow-hidden position-relative z-1 mt-30">
                            <img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/media/img_21.jpg" alt="" class="lazy-img w-100 tran5s">
                            <div class="content text-center">
                                <div class="btn-line tran3s fw-500 text-uppercase">Consultation</div>
                                <h4 class="mt-15 mb-35">Discover & get Rental</h4>
                                <a href="{{ route('home.service.consultation')}}" class="btn-four rounded-circle m-auto"><i class="bi bi-arrow-up-right"></i></a>
                            </div>
                            <!-- /.content -->
                        </div>
                        <!-- /.card-style-two -->
                    </div>
                </div>
            </div>
            <!-- /.wrapper -->
        </div>
    </div>
</div>
<!-- /.block-feature-seven -->

 <!--
    =====================================================
        BLock Feature Seventeen
    =====================================================
    -->
    <div class="block-feature-seventeen dark-bg position-relative z-1 pt-120 xl-pt-80 pb-140 xl-pb-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 m-auto">
                    <div class="title-one text-center wow fadeInUp mb-40 lg-mb-20">
                        <h3 class="text-white">Core <span>Services<img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/shape/title_shape_07.svg" alt="" class="lazy-img"></span></h3>
                        <p class="fs-22 color-dark text-white">Over 745K listings of apartments, lots, plots - available today.</p>
                    </div>
                    <!-- /.title-one -->
                </div>
            </div>
            <div class="row gx-xxl-5">
                <div class="col-lg-4 col-md-6 d-flex mt-40 wow fadeInUp">
                    <div class="card-style-ten rounded-0 d-flex align-items-start flex-column w-100 h-100">
                        <div class="icon d-flex align-items-center justify-content-center rounded-circle tran3s"><img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/icon/icon_69.svg" alt="" class="lazy-img"></div>
                        <h6>Properties</h6>
                        <p>
                            Aside development of properties for individuals (residential & commercial), we also have numbers of our own residential development across Nigeria.
                        </p>
                        <a href="#" class="btn-twelve sm mt-auto">Buy Home</a>
                    </div>
                    <!-- /.card-style-ten -->
                </div>
                <div class="col-lg-4 col-md-6 d-flex mt-40 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card-style-ten rounded-0 d-flex align-items-start flex-column w-100 h-100">
                        <div class="icon d-flex align-items-center justify-content-center rounded-circle tran3s"><img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/icon/icon_70.svg" alt="" class="lazy-img"></div>
                        <h6>Shortlets </h6>
                        <p>
                            We have created magical spaces to spark love, joy, happiness and reunion between you and your loved ones. We would love to host you.
                        </p>
                        <a href="#" class="btn-twelve sm mt-auto">Rent Home</a>
                    </div>
                    <!-- /.card-style-ten -->
                </div>
                <div class="col-lg-4 col-md-6 d-flex mt-40 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card-style-ten rounded-0 d-flex align-items-start flex-column w-100 h-100">
                        <div class="icon d-flex align-items-center justify-content-center rounded-circle tran3s"><img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/icon/icon_71.svg" alt="" class="lazy-img"></div>
                        <h6>HMOs</h6>
                        <p> We specialize in beautiful, budget-friendly homes for professionals and Long-term, lucrative returns for our partners</p>
                        <a href="#" class="btn-twelve sm mt-auto">Sell Home</a>
                    </div>
                    <!-- /.card-style-ten -->
                </div>
                <div class="col-lg-4 col-md-6 d-flex mt-40 wow fadeInUp">
                    <div class="card-style-ten rounded-0 d-flex align-items-start flex-column w-100 h-100">
                        <div class="icon d-flex align-items-center justify-content-center rounded-circle tran3s"><img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/icon/icon_69.svg" alt="" class="lazy-img"></div>
                        <h6>Furniture</h6>
                        <p>Design, manufacture, restoration, custom solutions, expert craftsmanship and delivery of high-quality furniture for residential and commercial spaces.</p>
                        <a href="#" class="btn-twelve sm mt-auto">Buy Home</a>
                    </div>
                    <!-- /.card-style-ten -->
                </div>
                <div class="col-lg-4 col-md-6 d-flex mt-40 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card-style-ten rounded-0 d-flex align-items-start flex-column w-100 h-100">
                        <div class="icon d-flex align-items-center justify-content-center rounded-circle tran3s"><img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/icon/icon_70.svg" alt="" class="lazy-img"></div>
                        <h6>Construction</h6>
                        <p>Property development, repair, and renovations for residential and commercial structures.</p>
                        <a href="#" class="btn-twelve sm mt-auto">Rent Home</a>
                    </div>
                    <!-- /.card-style-ten -->
                </div>
                <div class="col-lg-4 col-md-6 d-flex mt-40 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card-style-ten rounded-0 d-flex align-items-start flex-column w-100 h-100">
                        <div class="icon d-flex align-items-center justify-content-center rounded-circle tran3s"><img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/icon/icon_71.svg" alt="" class="lazy-img"></div>
                        <h6>Interiors</h6>
                        <p>Planning, and execution of stunning interiors for residential and commercial spaces, custom solutions, space optimization, etc.</p>
                        <a href="#" class="btn-twelve sm mt-auto">Sell Home</a>
                    </div>
                    <!-- /.card-style-ten -->
                </div>
            </div>
        </div>
        <img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/shape/shape_75.svg" alt="" class="lazy-img shapes shape_01">
        <img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/shape/shape_76.svg" alt="" class="lazy-img shapes shape_02">
    </div>
    <!-- /.block-feature-seventeen -->


    <!--
    =====================================================
        Fancy Banner Two
    =====================================================
    -->
    <div class="fancy-banner-two position-relative z-1 pt-90 lg-pt-50 pb-90 lg-pb-50">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="title-one text-center text-lg-start md-mb-40 pe-xl-5">
                        <h3 class="text-white m0">Start your <span>Journey<img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/shape/title_shape_06.svg" alt="" class="lazy-img"></span> As a Retailer.</h3>
                    </div>
                    <!-- /.title-one -->
                </div>
                <div class="col-lg-6">
                    <div class="form-wrapper me-auto ms-auto me-lg-0">
                        <form action="#">
                            <input type="email" placeholder="Email address" class="rounded-0">
                            <button class="rounded-0">Get Started</button>
                        </form>
                        {{-- <div class="fs-16 mt-10 text-white">Already a Agent? <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Sign in.</a></div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.fancy-banner-two -->

@endsection