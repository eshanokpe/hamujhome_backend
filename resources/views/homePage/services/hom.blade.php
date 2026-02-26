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
    <div class="inner-banner-two inner-banner z-1 pt-170 xl-pt-150 md-pt-130 pb-100 xl-pb-80 md-pb-50 position-relative" style="background-image: url({{asset('assets')}}/images/media/img_49.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="title-one mb-30 md-mb-20">
                        <h3>Find Your <span>Home <img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/shape/title_shape_02.svg" alt="" class="lazy-img"></span></h3>
                    </div>
                    <!-- /.title-one -->
                    <ul class="theme-breadcrumb style-none d-inline-flex align-items-center justify-content-center position-relative z-1 bottom-line">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>/</li>
                        <li><a href="#">Service</a></li>
                        <li>/</li>
                        <li>HOMs</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <p class="sub-heading">Over 745,000 listings, apartments, lots and  plots available now!</p>
                </div>
            </div>
            
            <!-- /.search-wrapper-one -->
        </div>
    </div>
    <!-- /.inner-banner-two -->


    <!--
		=====================================================
			Property Listing Six
		=====================================================
		-->
		<div class="property-listing-six pt-150 xl-pt-100 pb-170 xl-pb-120">
			<div class="container">
				<div class="listing-header-filter d-sm-flex justify-content-between align-items-center mb-40 lg-mb-30">
                    <div>Showing <span class="color-dark fw-500">1–3</span> of <span class="color-dark fw-500">3</span> results</div>
                    <div class="d-flex align-items-center xs-mt-20">
                        <div class="short-filter d-flex align-items-center">
                            <div class="fs-16 me-2">Short by:</div>
                            <select class="nice-select">
                                <option value="0">Newest</option>
                                <option value="1">Best Seller</option>
                                <option value="2">Best Match</option>
                                <option value="3">Price Low</option>
                                <option value="4">Price High</option>
                            </select>
                        </div>
                        <a href="listing_12.html" class="tran3s layout-change rounded-circle ms-auto ms-sm-3" data-bs-toggle="tooltip" title="Switch To List View"><i class="fa-regular fa-bars"></i></a>
                    </div>
                </div>
                <!-- /.listing-header-filter -->

                <div class="row gx-xxl-5">
                    <div class="col-lg-4 col-md-6 d-flex mb-50 wow fadeInUp">
                        <div class="listing-card-one border-layout border-25 h-100 w-100">
                            <div class="img-gallery p-15">
                                <div class="position-relative border-25 overflow-hidden">
                                    <div class="tag border-25">FOR RENT</div>
                                    <a href="#" class="fav-btn tran3s"><i class="fa-light fa-heart"></i></a>
                                    <div id="carousel1" class="carousel slide">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carousel1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carousel1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carousel1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="{{asset('assets')}}/images/listing/img_01.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="{{asset('assets')}}/images/listing/img_01.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="{{asset('assets')}}/images/listing/img_01.jpg" class="w-100" alt="..."></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.img-gallery -->
                            <div class="property-info p-25">
                                <a href="#" class="title tran3s">Lagos</a>
                                <div class="address">Terrace</div>
                                <ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
                                    <li class="d-flex align-items-center">
                                        <img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/icon/icon_04.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">6 Months</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/icon/icon_05.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">5 Bedroom</span>
                                    </li>
                                    {{-- <li class="d-flex align-items-center">
                                        <img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/icon/icon_06.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">02 bath</span>
                                    </li> --}}
                                </ul>
                                <div class="pl-footer top-border d-flex align-items-center justify-content-between">
                                    <strong class="price fw-500 color-dark">₦213,280.00</strong>
                                    {{-- <a href="#" class="btn-four rounded-circle"><i class="bi bi-arrow-up-right"></i></a> --}}
                                </div>
                            </div>
                            <!-- /.property-info -->
                        </div>
                        <!-- /.listing-card-one -->
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex mb-50 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="listing-card-one border-layout border-25 h-100 w-100">
                            <div class="img-gallery p-15">
                                <div class="position-relative border-25 overflow-hidden">
                                    <div class="tag sale border-25">FOR SELL</div>
                                    <a href="#" class="fav-btn tran3s"><i class="fa-light fa-heart"></i></a>
                                    <div id="carousel2" class="carousel slide">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carousel2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carousel2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carousel2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="{{asset('assets')}}/images/listing/img_02.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="{{asset('assets')}}/images/listing/img_02.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="{{asset('assets')}}/images/listing/img_02.jpg" class="w-100" alt="..."></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.img-gallery -->
                            <div class="property-info p-25">
                                <a href="#" class="title tran3s">Luxe Estate, Lekki Peninsula II, Lagos</a>
                                <div class="address">Terraced Duplexes</div>
                                <ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
                                    <li class="d-flex align-items-center">
                                        <img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/icon/icon_04.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">Freehold</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/icon/icon_05.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">Terraced Duplexes</span>
                                    </li>
                                   
                                </ul>
                                <div class="pl-footer top-border d-flex align-items-center justify-content-between">
                                    <strong class="price fw-500 color-dark">₦28,100.00</strong>
                                    {{-- <a href="#" class="btn-four rounded-circle"><i class="bi bi-arrow-up-right"></i></a> --}}
                                </div>
                            </div>
                            <!-- /.property-info -->
                        </div>
                        <!-- /.listing-card-one -->
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex mb-50 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="listing-card-one border-layout border-25 h-100 w-100">
                            <div class="img-gallery p-15">
                                <div class="position-relative border-25 overflow-hidden">
                                    <div class="tag sale border-25">FOR SELL</div>
                                    <a href="#" class="fav-btn tran3s"><i class="fa-light fa-heart"></i></a>
                                    <div id="carousel3" class="carousel slide">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carousel3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carousel3" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carousel3" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="{{asset('assets')}}/images/listing/img_03.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="{{asset('assets')}}/images/listing/img_02.jpg" class="w-100" alt="..."></a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="1000000">
                                                <a href="#" class="d-block"><img src="{{asset('assets')}}/images/listing/img_01.jpg" class="w-100" alt="..."></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.img-gallery -->
                            <div class="property-info p-25">
                                <a href="#" class="title tran3s">Cedar Luxury Estate, Lagos</a>
                                <div class="address">Apartments</div>
                                <ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
                                    <li class="d-flex align-items-center">
                                        <img src="images/lazy.svg" data-src="{{asset('assets')}}/images/icon/icon_04.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">Apartments</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <img src="images/lazy.svg" data-src="{{asset('assets')}}/images/icon/icon_05.svg" alt="" class="lazy-img icon me-2">
                                        <span class="fs-16">Freehold</span>
                                    </li>
                                </ul>
                                <div class="pl-footer top-border d-flex align-items-center justify-content-between">
                                    <strong class="price fw-500 color-dark">₦42,500.00</strong>
                                    {{-- <a href="#" class="btn-four rounded-circle"><i class="bi bi-arrow-up-right"></i></a> --}}
                                </div>
                            </div>
                            <!-- /.property-info -->
                        </div>
                        <!-- /.listing-card-one -->
                    </div>
                   
                </div>
                {{-- <div class="pt-50 md-pt-20 text-center">
                    <ul class="pagination-two d-inline-flex align-items-center justify-content-center style-none">
                        <li><a href="#"><i class="fa-regular fa-chevron-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><span>...</span></li>
                        <li><a href="#">13</a></li>
                        <li><a href="#"><i class="fa-regular fa-chevron-right"></i></a></li>
                    </ul>
                </div> --}}
			</div>
		</div>
		<!-- /.property-listing-six -->


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