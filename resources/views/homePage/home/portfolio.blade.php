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
            <h2 class="mb-35 xl-mb-20 md-mb-10 pt-15 font-garamond text-white">About Agency</h2>
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
        BLock Feature Fifteen
    =====================================================
    -->
    <div class="block-feature-fifteen mt-150 xl-mt-100 mb-140 xl-mb-80">
        <div class="container">
            <div class="row gx-xl-5">
                <div class="col-xl-6 col-lg-7 order-lg-last wow fadeInRight">
                    <div class="ms-xxl-5 ps-xl-4 ps-lg-5 md-mb-50">
                        <div class="title-one mb-45 lg-mb-20">
                            <h2 class="font-garamond star-shape">Find Your Preferable Match Easily. <span class="star-shape">
                                <img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/shape/shape_37.svg" alt="" class="lazy-img"></span></h2>
                        </div>
                        <!-- /.title-one -->
                        <div class="accordion-style-three">
                            <div class="accordion" id="accordionThree">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneA" aria-expanded="false" aria-controls="collapseOneA">
                                           Our History
                                        </button>
                                        </h2>
                                        <div id="collapseOneA" class="accordion-collapse collapse show" data-bs-parent="#accordionThree">
                                        <div class="accordion-body">
                                            <p class="fs-22">
                                                Hamuj Homes Ltd., established in 2017, we began as a wood exporting company, sourcing and delivering quality wood worldwide. We expanded into home furniture in 2020, offering TV units, wardrobes, closets, and kitchen cabinets. By 2021, we achieved N150 million ($113,670) in revenue, allowing us to diversify into real estate and start acquiring properties from our profits.

                                                In 2022, we transitioned into a full-time interior design company, completing over 3,000 homes across Nigeria and serving a diverse clientele, including celebrities, government officials, and private organization founders. By 2024, we acquired N400 million ($303,000) in real estate and other assets. Currently, we are constructing Terrace apartments, fully funded by our profits, as we progress toward evolving into a comprehensive group of companies under the Hamuj Group umbrella.
                                            </p>
                                        </div>
                                        </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoA" aria-expanded="false" aria-controls="collapseTwoA">
                                           Our Mission
                                        </button>
                                    </h2>
                                    <div id="collapseTwoA" class="accordion-collapse collapse" data-bs-parent="#accordionThree">
                                        <div class="accordion-body">
                                            <p class="fs-22">
                                                Our mission is to build expansive, vibrant communities across Africa, fostering connections among people of diverse tribes, languages, religions, and cultures.
                                                We aim to create an inclusive environment where individuals from various backgrounds can come together, share their unique perspectives, and celebrate their rich cultural heritage. By bridging these differences, we hope to promote understanding, unity, and cooperation throughout the continent
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeA" aria-expanded="true" aria-controls="collapseThreeA">
                                            Our vision
                                        </button>
                                    </h2>
                                    <div id="collapseThreeA" class="accordion-collapse collapse" data-bs-parent="#accordionThree">
                                        <div class="accordion-body">
                                            <p class="fs-22">
                                                <ul className="principle-1 lists flex flex-col gap-y-7 max-w-[70%]">
                                                    <li>
                                                        To Combine luxury and affordability for the average Nigerian.
                                                    </li>
                                                    <li>Enable fast and time-bound project delivery.</li>
                                                    <li>
                                                        To become a multinational real estate group and solve trending and existing real estate issues
                                                        across Africa.
                                                    </li>
                                                </ul>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsevalues" aria-expanded="true" aria-controls="collapseThreeA">
                                            Our values
                                        </button>
                                    </h2>
                                    <div id="collapsevalues" class="accordion-collapse collapse" data-bs-parent="#accordionThree">
                                        <div class="accordion-body">
                                            <p class="fs-22">
                                                <ul className="principle-2 lists flex flex-col gap-y-3 max-w-[70%]">
                                                    <li>Excellence</li>
                                                    <li>Quality</li>
                                                    <li>Tranquility</li>
                                                    <li>Impeccability</li>
                                                    <li>Integrity</li>
                                                </ul>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.accordion-style-three -->
                        <a href="contact.html" class="btn-five mt-75 lg-mt-50">Contact us</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5 d-lg-flex wow fadeInLeft">
                    <div class="media-block h-100 w-100 pe-xl-5">
                        <div class="bg-img position-relative" style="background-image: url({{asset('assets')}}/images/media/img_52.jpg);">
                       
                        </div>
                    </div>
                    <!-- /.media-block -->
                </div>
            </div>
          
        </div>
        
    </div>
    <!-- /.block-feature-fifteen -->


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
						<h3>Our <span>Agents<img src="{{asset('assets')}}/images/lazy.svg" data-src="images/shape/title_shape_05.svg" alt="" class="lazy-img"></span></h3>
						<p class="fs-22 mt-xs">Lorem  is placeholder text commonly used  graphic </p>
					</div>
					<!-- /.title-one -->

					<div class="wrapper position-relative z-1">
						<div class="agent-slider-one">
							<div class="item">
								<div class="agent-card-one position-relative">
									<div class="img border-20">
										<img src="{{asset('assets')}}/images/agent/img_01.jpg" alt="" class="w-100 tran5s">
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
										<img src="{{asset('assets')}}/images/agent/img_02.jpg" alt="" class="w-100 tran5s">
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
										<img src="{{asset('assets')}}/images/agent/img_03.jpg" alt="" class="w-100 tran5s">
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