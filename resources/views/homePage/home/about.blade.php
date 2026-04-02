@extends('layouts.app')
@section('title')
{{$website->name}}
@endsection
@section('content') 
<style>
    .about-hamuj-section .why-choose-box {
    background: #ffffff;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    border: 1px solid #eee;
}

.about-hamuj-section .why-choose-box ul li {
    list-style: none;
}

.about-hamuj-section .mission-box,
.about-hamuj-section .vision-box {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.about-hamuj-section .mission-box:hover,
.about-hamuj-section .vision-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.1);
}
</style>

<!-- 
=============================================
    Inner Banner
============================================== 
-->
<div class="inner-banner-three inner-banner text-center z-1 position-relative">
    <div class="bg-wrapper overflow-hidden position-relative z-1" style="background-image: url({{asset('assets')}}/images/media/img_51.jpg);">
        <div class="container position-relative z-2">
            <h2 class="mb-35 xl-mb-20 md-mb-10 pt-15 font-garamond text-white">About us</h2>
            <ul class="theme-breadcrumb style-none d-inline-flex align-items-center justify-content-center position-relative z-1 bottom-line">
                <li><a href="#">Home</a></li>
                <li>/</li>
                <li> About us</li>
            </ul>
        </div>
        <img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/shape/shape_35.svg" alt="" class="lazy-img shapes shape_01">
        <img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/shape/shape_36.svg" alt="" class="lazy-img shapes shape_02">
    </div>    
</div>
<!-- /.inner-banner-three -->

    <!--
    =====================================================
        About Hamuj Homes Section
    =====================================================
    -->
    <div class="about-hamuj-section mt-150 xl-mt-100 pb-150">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInLeft">
                    <div class="about-content pe-xl-5">
                        <h2 class="font-garamond mb-30">About <span style="color: #ff4a17;">Hamuj Homes</span></h2>
                        <p class="fs-22 mb-30">
                            HAMUJ HOMES is a premier real estate brand redefining property investment and lifestyle experiences in Nigeria. Since its establishment in 2020, the company has built a reputation for excellence, integrity, and innovation in delivering high-value real estate solutions.
                        </p>
                        <p class="fs-22 mb-30">
                            We specialize in premium land and property acquisition, bespoke property management, and strategic investment advisory tailored to discerning clients. Beyond real estate, we elevate living standards through curated interior décor and high-quality furniture solutions, transforming spaces into refined environments of comfort and elegance.
                        </p>
                        <p class="fs-22 mb-30">
                            At HAMUJ HOMES, we combine market expertise with a client-centric approach to deliver seamless, sophisticated, and rewarding real estate experiences.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight">
                    <div class="why-choose-box bg-white p-40 rounded-4 shadow-sm">
                        <h3 class="font-garamond mb-25">Why Choose <span style="color: #ff4a17;">HAMUJ HOMES</span></h3>
                        <ul class="style-none">
                            <li class="d-flex align-items-center mb-20">
                                <i class="fas fa-check-circle text-primary me-3" style="color: #ff4a17 !important; font-size: 24px;"></i>
                                <span class="fs-18">Trusted and transparent processes</span>
                            </li>
                            <li class="d-flex align-items-center mb-20">
                                <i class="fas fa-check-circle text-primary me-3" style="color: #ff4a17 !important; font-size: 24px;"></i>
                                <span class="fs-18">Deep knowledge of the Nigerian real estate market</span>
                            </li>
                            <li class="d-flex align-items-center mb-20">
                                <i class="fas fa-check-circle text-primary me-3" style="color: #ff4a17 !important; font-size: 24px;"></i>
                                <span class="fs-18">Client-focused approach</span>
                            </li>
                            <li class="d-flex align-items-center mb-20">
                                <i class="fas fa-check-circle text-primary me-3" style="color: #ff4a17 !important; font-size: 24px;"></i>
                                <span class="fs-18">Strong investment insight and advisory</span>
                            </li>
                            <li class="d-flex align-items-center mb-20">
                                <i class="fas fa-check-circle text-primary me-3" style="color: #ff4a17 !important; font-size: 24px;"></i>
                                <span class="fs-18">End-to-end real estate solutions</span>
                            </li>
                            <li class="d-flex align-items-center mb-20">
                                <i class="fas fa-check-circle text-primary me-3" style="color: #ff4a17 !important; font-size: 24px;"></i>
                                <span class="fs-18">Commitment to quality and integrity</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Mission and Vision Row -->
            <div class="row mt-80 xl-mt-60 g-4">
                <div class="col-md-6 wow fadeInUp">
                    <div class="mission-box p-40 rounded-4 text-center h-100" style="background: #f8f9fa;">
                        <div class="icon mb-25">
                            <i class="fas fa-bullseye" style="font-size: 50px; color: #ff4a17;"></i>
                        </div>
                        <h3 class="font-garamond mb-20">Our Mission</h3>
                        <p class="fs-18">
                            To provide reliable and innovative real estate solutions that empower clients to build wealth and secure their future through property ownership and investment.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="vision-box p-40 rounded-4 text-center h-100" style="background: #f8f9fa;">
                        <div class="icon mb-25">
                            <i class="fas fa-eye" style="font-size: 50px; color: #ff4a17;"></i>
                        </div>
                        <h3 class="font-garamond mb-20">Our Vision</h3>
                        <p class="fs-18">
                            To become a leading real estate brand in Nigeria and globally known for excellence, trust, and value creation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--
    =====================================================
        BLock Feature Sixteen
    =====================================================
    -->
    <div class="block-feature-sixteen">
        <div class="bg-pink-two position-relative z-1 pt-140 xl-pt-100 lg-pt-80 pb-150 xl-pb-120 lg-pb-100">
            <div class="container">
                <div class="title-one text-center mb-70 xl-mb-40 lg-mb-20">
                    <h2 class="font-garamond star-shape"><span class="star-shape">
                        <img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/shape/shape_37.svg" alt="" class="lazy-img"></span> Buy, Rend & Sell</h2>
                    <p class="fs-22 mt-xs color-dark">Over 745K listings of apartments, lots, plots - available today.</p>
                </div> 
                <!-- /.title-one -->
                <div class="row justify-content-center gx-xxl-5">
                    <div class="col-lg-4 col-md-6 mt-30 d-flex wow fadeInUp">
                        <div class="card-style-five text-center d-inline-flex flex-column align-items-center tran3s h-100 w-100">
                            <img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/icon/icon_23.svg" alt="" class="lazy-img icon">
                            <h5 class="mt-35 mb-20">Buy a home</h5>
                            <p class="fs-22 mb-50">Explore homy’s 2 million+ homes and uncover your ideal living space.</p>
                            <a href="listing_10.html" class="btn-twelve mt-auto">Find Home</a>
                        </div>
                        <!-- /.card-style-five -->
                    </div>
                    <div class="col-lg-4 col-md-6 mt-30 d-flex wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card-style-five text-center d-inline-flex flex-column align-items-center tran3s h-100 w-100">
                            <img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/icon/icon_24.svg" alt="" class="lazy-img icon">
                            <h5 class="mt-35 mb-20">Rent a home</h5>
                            <p class="fs-22 mb-50">Discover a rental you'll love on homy, thanks to 35+ filters and tailored keywords.</p>
                            <a href="listing_10.html" class="btn-twelve mt-auto">Rent Home</a>
                        </div>
                        <!-- /.card-style-five -->
                    </div>
                    <div class="col-lg-4 col-md-6 mt-30 d-flex wow fadeInUp" data-wow-delay="0.2s">
                        <div class="card-style-five text-center d-inline-flex flex-column align-items-center tran3s h-100 w-100">
                            <img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/icon/icon_25.svg" alt="" class="lazy-img icon">
                            <h5 class="mt-35 mb-20">Sell property</h5>
                            <p class="fs-22 mb-50">List, sell, thrive – with our top-notch real estate agency. It’s super easy & fun.</p>
                            <a href="listing_10.html" class="btn-twelve mt-auto">Sell Property</a>
                        </div>
                        <!-- /.card-style-five -->
                    </div>
                </div>
            </div>
            <img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/shape/shape_71.svg" alt="" class="lazy-img shapes shape_01 wow fadeInDown">
            <img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/shape/shape_39.svg" alt="" class="lazy-img shapes shape_02 wow fadeInUp">
        </div>
        <div class="block-feature-fourteen pt-150 xl-pt-120 lg-pt-100 pb-150 xl-pb-120 lg-pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="title-one md-mb-30 pe-xxl-4 wow fadeInLeft">
                            <h2 class="font-garamond text-white star-shape">Easily Purchase, Sell, or Lease listings. <span class="star-shape">
                                <img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/shape/shape_37.svg" alt="" class="lazy-img"></span></h2>
                        </div>
                        <!-- /.title-one -->
                    </div>
                    <div class="col-xxl-5 col-lg-6 ms-auto">
                        <p class="text-white fs-24 m0 lh-lg  wow fadeInRight">Your leading real estate advocate, transforming houses into dreams. Trust us to expertly guide you home</p>
                    </div>
                </div>

                <div class="wow fadeInUp mt-70 xl-mt-50">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card-style-eight mt-45 wow fadeInUp">
                                <div class="d-flex pe-xxl-5">
                                    <img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/icon/icon_40.svg" alt="" class="lazy-img icon">
                                    <div class="text">
                                        <h5 class="text-white">Property Insurance</h5>
                                        <p>Elit esse cillum dol fug nulla tur nos ullamo.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-style-eight -->
                        </div>
                        <div class="col-lg-4">
                            <div class="card-style-eight mt-45 wow fadeInUp">
                                <div class="d-flex pe-xxl-2 ps-xxl-2">
                                    <img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/icon/icon_41.svg" alt="" class="lazy-img icon">
                                    <div class="text">
                                        <h5 class="text-white">Easy Payments</h5>
                                        <p>quis nostrud exerct ulla security finibus ne derived.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-style-eight -->
                        </div>
                        <div class="col-lg-4">
                            <div class="card-style-eight mt-45 wow fadeInUp">
                                <div class="d-flex ps-xxl-5">
                                    <img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/icon/icon_42.svg" alt="" class="lazy-img icon">
                                    <div class="text">
                                        <h5 class="text-white">Quick Process</h5>
                                        <p>Duis aute irure do reprehe de Cicero's voluptat velit.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-style-eight -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.block-feature-fourteen -->
    </div>
    <!-- /.block-feature-sixteen -->


  <!--
		=====================================================
			Agent Section One
		=====================================================
		-->
		<div class="agent-section-one position-relative z-1 mt-150 xl-mt-120">
			<div class="container">
				<div class="position-relative">
					<div class="title-one mb-85 lg-mb-50 wow fadeInLeft">
						<h3>Our <span>Agents<img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/shape/title_shape_05.svg" alt="" class="lazy-img"></span></h3>
						{{-- <p class="fs-22 mt-xs">Lorem  is placeholder text commonly used  graphic </p> --}}
					</div>
					<!-- /.title-one -->

					<div class="wrapper position-relative z-1">
						<div class="agent-slider-one">
							<div class="item">
								<div class="agent-card-one position-relative">
									<div class="img border-20">
										<img src="{{asset('assets')}}/images/agent/Babatunde-Toheeb.jpg" alt="" class="w-100 tran5s">
									</div>
									<div class="text-center">
										<h6>Idowu Babatunde Toheeb</h6>
										<a href="#" class="stretched-link">Chief Executive Officer</a>
									</div>
								</div>
								<!-- /.agent-card-one -->
							</div>
							<div class="item">
								<div class="agent-card-one position-relative">
									<div class="img border-20">
										<img src="{{asset('assets')}}/images/agent/hamuj_COO.jpg" alt="" class="w-100 tran5s">
									</div>
									<div class="text-center">
										<h6>Olawale Daminola Emmanuel</h6>
										<a href="#" class="stretched-link">Chief Operating Officer</a>
									</div>
								</div>
								<!-- /.agent-card-one -->
							</div>
							<div class="item">
								<div class="agent-card-one position-relative">
									<div class="img border-20">
										<img src="{{asset('assets')}}/images/agent/hamuj_MD.jpg" alt="" class="w-100 tran5s">
									</div>
									<div class="text-center">
										<h6>Erohogo Petra Uchechukwu</h6>
										<a href="#" class="stretched-link">Managing Director </a>
									</div>
									
								</div>
								<!-- /.agent-card-one -->
							</div>
						</div>
					</div>
					<!-- /.wrapper -->

					
				</div>
			</div>
		</div>
		<!-- /.agent-section-one -->



@endsection