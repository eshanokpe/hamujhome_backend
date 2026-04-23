@extends('layouts.master')
@section('title')
{{$website->name}}
@endsection
@section('content') 
			<style>
			
		.hero-banner-eight {
				overflow: hidden;
				background-size: contain;
				background: rgba(0,0,0,0.5);

			}

			#heroSlider {
				z-index: 0;
			}

			.hero-banner-eight .container {
				z-index: 2;

			}

			/* Optional dark overlay for readability */
			.hero-banner-eight::before {
				content: "";
				position: absolute;
				inset: 0;
				z-index: 1;
				height: 600px;

			}
			
			/* Video Section Styles */
			.video-showcase-section {
				position: relative;
				overflow: hidden;
			}
			
			.video-wrapper {
				position: relative;
				overflow: hidden;
				border-radius: 24px;
				box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
				transition: transform 0.3s ease, box-shadow 0.3s ease;
			}
			
			.video-wrapper:hover {
				transform: translateY(-5px);
				box-shadow: 0 30px 60px -12px rgba(0, 0, 0, 0.3);
			}
			
			.video-wrapper iframe {
				width: 100%;
				height: 100%;
				border: none;
				display: block;
			}
			
			.video-title {
				position: relative;
				display: inline-block;
				margin-bottom: 1.5rem;
			}
			
			.video-title::after {
				content: '';
				position: absolute;
				bottom: -10px;
				left: 0;
				width: 60px;
				height: 3px;
				background: linear-gradient(90deg, #ff4a17, #ff8a5c);
				border-radius: 2px;
			}
			
			@media (max-width: 768px) {
				.video-wrapper {
					border-radius: 16px;
				}
				
				.video-wrapper iframe {
					height: 300px;
				}
			}
			
			@media (max-width: 576px) {
				.video-wrapper iframe {
					height: 250px;
				}
			}

			/* Subscription Banner Styles */
			.subscription-banner {
				background: linear-gradient(135deg, #ff4a17 0%, #ff8a5c 100%);
				border-radius: 20px;
				padding: 40px;
				margin: 40px 0;
				box-shadow: 0 15px 35px rgba(255, 74, 23, 0.2);
				transition: transform 0.3s ease;
			}

			.subscription-banner:hover {
				transform: translateY(-5px);
			}

			.subscription-banner h3 {
				color: white;
				font-size: 2rem;
				font-weight: 700;
				margin-bottom: 15px;
			}

			.subscription-banner p {
				color: rgba(255, 255, 255, 0.95);
				font-size: 1.1rem;
				margin-bottom: 0;
			}

			.subscription-btn {
				background: white;
				color: #ff4a17;
				padding: 15px 35px;
				border-radius: 50px;
				font-weight: 600;
				text-decoration: none;
				display: inline-block;
				transition: all 0.3s ease;
				box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
			}

			.subscription-btn:hover {
				transform: translateY(-2px);
				box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
				background: #fff;
				color: #e63e0c;
			}

			@media (max-width: 768px) {
				.subscription-banner {
					padding: 30px 20px;
					text-align: center;
				}
				
				.subscription-banner h3 {
					font-size: 1.5rem;
				}
				
				.subscription-btn {
					margin-top: 15px;
					padding: 12px 25px;
				}
			}
		</style>
		<!-- 
=============================================
Hero Banner
============================================== 
-->
<div class="hero-banner-eight z-1 pt-250 xl-pt-200 pb-250 xl-pb-150 lg-pb-100 position-relative">
 
    <!-- BACKGROUND SLIDER (added) -->
    <div id="heroSlider" class="carousel slide position-absolute top-0 start-0 w-100 h-100" data-bs-ride="carousel">
        <div class="carousel-inner h-100">
			<div class="carousel-item active h-100">
                <img src="{{asset('assets')}}/images/slider/slide11.png" class="d-block w-100 h-100" style="object-fit: cover;">
            </div>
            <div class="carousel-item active h-100">
                <img src="{{asset('assets')}}/images/slider/slide1.jpg" class="d-block w-100 h-100" style="object-fit: cover;">
            </div>

            <div class="carousel-item h-100">
                <img src="{{asset('assets')}}/images/slider/slide2.jpg" class="d-block w-100 h-100" style="object-fit: cover;">
            </div>

            <div class="carousel-item h-100">
                <img src="{{asset('assets')}}/images/slider/slide3.jpg" class="d-block w-100 h-100" style="object-fit: cover;">
            </div>
			<div class="carousel-item h-100">
                <img src="{{asset('assets')}}/images/slider/slide4.jpg" class="d-block w-100 h-100" style="object-fit: cover;">
            </div>

        </div>
    </div>
    <!-- END SLIDER -->

    <!-- YOUR ORIGINAL CONTENT (UNCHANGED) -->
    <div class="container position-relative">
			<div class="row">
				<div class="col-xl-9 col-lg-10 col-md-10 m-auto">
					<h1 class="hero-heading text-white text-center wow fadeInUp">
						Find the Right <br> Home for Your Family
					</h1>
					<p class="fs-24 text-white text-center pt-35 wow fadeInUp" data-wow-delay="0.1s">
						We’ve more than 745,000 apartments, place & plot.
					</p>
				</div>
			</div> 

			<div class="search-wrapper-four me-auto ms-auto mt-45 lg-mt-20 position-relative">
				<nav class="d-flex justify-content-center">
					<div class="nav nav-tabs border-0" role="tablist">
						<!-- <button class="nav-link active" id="buy-tab" data-bs-toggle="tab" data-bs-target="#buy" type="button">Rent</button> -->
						<button class="nav-link active" id="rent-tab" data-bs-toggle="tab" data-bs-target="#rent" type="button">SAle</button>
					</div>
				</nav>

				<div class="bg-wrapper mt-30">
					<div class="tab-content">
						<div class="tab-pane fade show active" id="buy">
							<form action="#" class="position-relative z-1">
								<input type="text" placeholder="Type location name here...">
								<button class="tran3s">
									<img src="{{asset('assets')}}/images/icon/icon_75.svg" class="m-auto">
								</button>
							</form>
						</div>

						<div class="tab-pane fade" id="rent">
							<form action="#" class="position-relative z-1">
								<input type="text" placeholder="Type location name here...">
								<button class="tran3s">
									<img src="{{asset('assets')}}/images/icon/icon_75.svg" class="m-auto">
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /.search-wrapper-four -->
		</div>
	</div>
	<!-- /.hero-banner-eight -->

	<!-- 
=====================================================
    Property Interest Form Banner
=====================================================
-->
<div class="container">
    <div class="subscription-banner wow fadeInUp">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h3>Interested in Our Properties?</h3>
                <p>Fill out our quick form to get personalized property recommendations, exclusive deals, and expert guidance from our real estate team.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
				<div class="d-flex flex-wrap gap-3 justify-content-lg-end">
					<a href="https://docs.google.com/forms/d/e/1FAIpQLSewnaa_CWbmT4je0fSmND7oFKERbS_vHua3Wiio7nFjAXclNA/viewform?usp=publish-editor" 
					class="subscription-btn" 
					target="_blank" 
					rel="noopener noreferrer">
						<i class="fas fa-user-check me-2"></i>Share Your Details
					</a>
					<a href="{{asset('assets/documents/hamuj-homes-brochure.pdf')}}" 
					class="subscription-btn pdf-btn" 
					download
					style="background: transparent; border: 2px solid white; color: white;">
						<i class="fas fa-download me-2"></i>Download Brochure
					</a>
				</div>
			</div>
        </div>
    </div>
</div>


	<!-- 
		=====================================================
			Video Showcase Section (Added)
		=====================================================
		-->
		<div class="video-showcase-section mt-100 xl-mt-80 pt-50 pb-50">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 mb-4 mb-lg-0">
						<div class="pe-lg-5">
							<h3 class="video-title wow fadeInUp" style="font-size: 2.5rem; font-weight: 700;">
								See Our <span style="color: #ff4a17;">Properties</span> in Action
							</h3>
							<p class="fs-18 text-muted mb-4 wow fadeInUp" data-wow-delay="0.1s">
								Take a quick tour of our stunning properties and discover what makes us the leading real estate partner in Nigeria. From luxury apartments to commercial spaces, we have something for everyone.
							</p>
							<div class="d-flex gap-3 wow fadeInUp" data-wow-delay="0.2s">
								<div class="d-flex align-items-center">
									<div class="rounded-circle bg-primary bg-opacity-10 p-2 me-2">
										<i class="fas fa-home text-primary"></i>
									</div>
									<span>50+ Properties</span>
								</div>
								<div class="d-flex align-items-center">
									<div class="rounded-circle bg-primary bg-opacity-10 p-2 me-2">
										<i class="fas fa-smile text-primary"></i>
									</div>
									<span>1000+ Happy Clients</span>
								</div>
								<div class="d-flex align-items-center">
									<div class="rounded-circle bg-primary bg-opacity-10 p-2 me-2">
										<i class="fas fa-star text-primary"></i>
									</div>
									<span>4.9 Rating</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="video-wrapper wow fadeInUp" data-wow-delay="0.3s" style="min-height: 450px;">
							<!-- YouTube Shorts Embed -->
							<iframe 
								src="https://www.youtube.com/embed/IEUE3SDBi4I?autoplay=0&rel=0&modestbranding=1&showinfo=0" 
								title="Property Showcase Video"
								allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
								allowfullscreen
								style="width: 100%; height: 100%; min-height: 450px; border: none;">
							</iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.video-showcase-section -->

	

		<!--
		=====================================================
			BLock Feature One
		=====================================================
		-->
		<div class="block-feature-one mt-150 xl-mt-120">
			<div class="container container-large">
				<div class="title-one text-center mb-60 xl-mb-30 lg-mb-20 wow fadeInUp">
					<h3>Our Business Units</h3>
					<p class="fs-24">Your trusted real estate partner in every transaction.</p>
				</div>
				<!-- /.title-one -->
				
				<div class="row gx-xl-5">
					<div class="col-md-4">
						<div class="card-style-twelve text-center wow fadeInUp mt-20">
							<div class="icon d-flex align-items-center justify-content-center m-auto tran3s rounded-circle">
                                <img src="{{asset('assets')}}/images/icon/icon_76.svg" alt=""></div>
							<h6 class="fs-20 text-uppercase fw-bold">Asset & Property Management Solutions</h6>
							<p class="fs-22 ps-xxl-4 pe-xxl-4">
                                 HAMUJ HOMES provide comprehensive property management services designed to preserve and enhance the value of real estate assets. From maintenance coordination to tenant management, we ensure properties are efficiently managed and profitable. 
                			</p>
						</div>
						<!-- /.card-style-twelve -->
					</div>
					<div class="col-md-4">
						<div class="card-style-twelve text-center wow fadeInUp mt-20" data-wow-delay="0.1s">
							<div class="icon d-flex align-items-center justify-content-center m-auto tran3s rounded-circle">
                                <img src="{{asset('assets')}}/images/icon/icon_77.svg" alt=""></div>
							<h6 class="fs-20 text-uppercase fw-bold">Strategic Property Acquisition Services</h6>
							<p class="fs-24 ps-xxl-4 pe-xxl-4">
                                HAMUJ HOMES assist clients in identifying and securing high-potential land and housing opportunities. Our approach focuses on due diligence, location analysis, and long-term value to ensure safe and profitable investments
                            </p>
						</div>
						<!-- /.card-style-twelve -->
					</div>
					<div class="col-md-4">
						<div class="card-style-twelve text-center wow fadeInUp mt-20" data-wow-delay="0.2s">
							<div class="icon d-flex align-items-center justify-content-center m-auto tran3s rounded-circle">
                                <img src="{{asset('assets')}}/images/icon/icon_78.svg" alt=""></div>
							<h6 class="fs-20 text-uppercase fw-bold">Real Estate Sales & Advisory</h6>
							<p class="fs-24 ps-xxl-4 pe-xxl-4">
								HAMUJ HOMES offers professional support in buying and selling properties, ensuring seamless transactions and maximum value for our clients. We guide clients through every stage of the sales process with transparency and expertise.
                            </p>
						</div>
						<!-- /.card-style-twelve -->
					</div>
                    <div class="col-md-4">
						<div class="card-style-twelve text-center wow fadeInUp mt-20" data-wow-delay="0.2s">
							<div class="icon d-flex align-items-center justify-content-center m-auto tran3s rounded-circle">
                                <img src="{{asset('assets')}}/images/icon/icon_78.svg" alt=""></div>
							<h6 class="fs-20 text-uppercase fw-bold">Property Investment & Portfolio Trading</h6>
							<p class="fs-24 ps-xxl-4 pe-xxl-4">
                                We help clients build and manage real estate portfolios through strategic buying, selling, and asset optimization. Our goal is to create sustainable wealth through smart property investments.
                            </p>
						</div>
						<!-- /.card-style-twelve -->
					</div>
                    <div class="col-md-4">
						<div class="card-style-twelve text-center wow fadeInUp mt-20" data-wow-delay="0.2s">
							<div class="icon d-flex align-items-center justify-content-center m-auto tran3s rounded-circle">
                                <img src="{{asset('assets')}}/images/icon/icon_78.svg" alt=""></div>
							<h6 class="fs-20 text-uppercase fw-bold">Leasing & Tenancy Solutions</h6>
							<p class="fs-24 ps-xxl-4 pe-xxl-4">
                                Our leasing services connect property owners with qualified tenants while ensuring smooth tenancy management. We handle negotiations, documentation, and occupancy processes efficiently.
                            </p>
						</div>
						<!-- /.card-style-twelve -->
					</div>
                     <div class="col-md-4">
						<div class="card-style-twelve text-center wow fadeInUp mt-20" data-wow-delay="0.2s">
							<div class="icon d-flex align-items-center justify-content-center m-auto tran3s rounded-circle">
                                <img src="{{asset('assets')}}/images/icon/icon_78.svg" alt=""></div>
							<h6 class="fs-20 text-uppercase fw-bold">Real Estate Investment Advisory Services</h6>
							<p class="fs-24 ps-xxl-4 pe-xxl-4">
                                We provide expert guidance to help clients make informed real estate decisions. Whether you are a first-time buyer or a seasoned investor, we offer insights that align with your financial goals.
                            </p>
						</div>
						<!-- /.card-style-twelve -->
					</div>
				</div>
			</div>
		</div>
		<!-- /.block-feature-one -->



		<!-- 
		=============================================
			Property Listing One
		============================================== 
		-->
		<div class="property-listing-one mt-170 xl-mt-120">
			<div class="container container-large">
				<div class="position-relative">
					<div class="title-one text-center mb-25 lg-mb-10 wow fadeInUp">
						<h3>Featured Project</h3>
						<p class="fs-22 mt-xs">Explore Our Featured Project.</p>
					</div>
					<!-- /.title-one -->

					<div class="row gx-xxl-5">
						<div class="col-lg-4 col-md-6 mt-40 wow fadeInUp">
							<div class="listing-card-four overflow-hidden d-flex align-items-end position-relative z-1" style="background-image: url({{asset('assets')}}/images/listing/img_20.jpg);">
								<div class="tag fw-500">RENT</div>
								<div class="property-info tran3s w-100">
									<div class="d-flex align-items-center justify-content-between">
										<div class="pe-3">
											<a href="listing_details_04.html" class="title fw-500 tran4s">Blueberry villa.</a>
											<div class="address tran4s">Mirpur 10, Stadium dhaka 1208</div>
										</div>
										<a href="listing_details_04.html" class="btn-four inverse"><i class="bi bi-arrow-up-right"></i></a>
									</div>
									
									<div class="pl-footer tran4s">
										<ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
											<li>
												<strong class="color-dark fw-500">2137</strong> 
												<span class="fs-16">sqft</span>
											</li>
											<li>
												<strong class="color-dark fw-500">03</strong> 
												<span class="fs-16">bed</span>
											</li>
											<li>
												<strong class="color-dark fw-500">01</strong> 
												<span class="fs-16">kitchen</span>
											</li>
											<li>
												<strong class="color-dark fw-500">02</strong> 
												<span class="fs-16">bath</span>
											</li>
										</ul>
									</div>
								</div>
								<!-- /.property-info -->
							</div>
							<!-- /.listing-card-four -->
						</div>
						<div class="col-lg-4 col-md-6 mt-40 wow fadeInUp" data-wow-delay="0.1s">
							<div class="listing-card-four overflow-hidden d-flex align-items-end position-relative z-1" style="background-image: url({{asset('assets')}}/images/listing/img_21.jpg);">
								<div class="tag fw-500">SELL</div>
								<div class="property-info tran3s w-100">
									<div class="d-flex align-items-center justify-content-between">
										<div class="pe-3">
											<a href="listing_details_04.html" class="title fw-500 tran4s">Swimming Pool Villa</a>
											<div class="address tran4s">127 green road, California, USA</div>
										</div>
										<a href="listing_details_04.html" class="btn-four inverse"><i class="bi bi-arrow-up-right"></i></a>
									</div>
									
									<div class="pl-footer tran4s">
										<ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
											<li>
												<strong class="color-dark fw-500">2137</strong> 
												<span class="fs-16">sqft</span>
											</li>
											<li>
												<strong class="color-dark fw-500">03</strong> 
												<span class="fs-16">bed</span>
											</li>
											<li>
												<strong class="color-dark fw-500">01</strong> 
												<span class="fs-16">kitchen</span>
											</li>
											<li>
												<strong class="color-dark fw-500">02</strong> 
												<span class="fs-16">bath</span>
											</li>
										</ul>
									</div>
								</div>
								<!-- /.property-info -->
							</div>
							<!-- /.listing-card-four -->
						</div>
						<div class="col-lg-4 col-md-6 mt-40 wow fadeInUp" data-wow-delay="0.2s">
							<div class="listing-card-four overflow-hidden d-flex align-items-end position-relative z-1" style="background-image: url({{asset('assets')}}/images/listing/img_22.jpg);">
								<div class="tag fw-500">RENT</div>
								<div class="property-info tran3s w-100">
									<div class="d-flex align-items-center justify-content-between">
										<div class="pe-3">
											<a href="listing_details_04.html" class="title fw-500 tran4s">Modern Duplex</a>
											<div class="address tran4s">Twin tower, 32 street, Florida</div>
										</div>
										<a href="listing_details_04.html" class="btn-four inverse"><i class="bi bi-arrow-up-right"></i></a>
									</div>
									
									<div class="pl-footer tran4s">
										<ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
											<li>
												<strong class="color-dark fw-500">2137</strong> 
												<span class="fs-16">sqft</span>
											</li>
											<li>
												<strong class="color-dark fw-500">03</strong> 
												<span class="fs-16">bed</span>
											</li>
											<li>
												<strong class="color-dark fw-500">01</strong> 
												<span class="fs-16">kitchen</span>
											</li>
											<li>
												<strong class="color-dark fw-500">02</strong> 
												<span class="fs-16">bath</span>
											</li>
										</ul>
									</div>
								</div>
								<!-- /.property-info -->
							</div>
							<!-- /.listing-card-four -->
						</div>
						<div class="col-lg-4 col-md-6 mt-40 wow fadeInUp">
							<div class="listing-card-four overflow-hidden d-flex align-items-end position-relative z-1" style="background-image: url({{asset('assets')}}/images/listing/img_20.jpg);">
								<div class="tag fw-500">RENT</div>
								<div class="property-info tran3s w-100">
									<div class="d-flex align-items-center justify-content-between">
										<div class="pe-3">
											<a href="listing_details_04.html" class="title fw-500 tran4s">Blueberry villa.</a>
											<div class="address tran4s">Mirpur 10, Stadium dhaka 1208</div>
										</div>
										<a href="listing_details_04.html" class="btn-four inverse"><i class="bi bi-arrow-up-right"></i></a>
									</div>
									
									<div class="pl-footer tran4s">
										<ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
											<li>
												<strong class="color-dark fw-500">2137</strong> 
												<span class="fs-16">sqft</span>
											</li>
											<li>
												<strong class="color-dark fw-500">03</strong> 
												<span class="fs-16">bed</span>
											</li>
											<li>
												<strong class="color-dark fw-500">01</strong> 
												<span class="fs-16">kitchen</span>
											</li>
											<li>
												<strong class="color-dark fw-500">02</strong> 
												<span class="fs-16">bath</span>
											</li>
										</ul>
									</div>
								</div>
								<!-- /.property-info -->
							</div>
							<!-- /.listing-card-four -->
						</div>
						<div class="col-lg-4 col-md-6 mt-40 wow fadeInUp" data-wow-delay="0.1s">
							<div class="listing-card-four overflow-hidden d-flex align-items-end position-relative z-1" style="background-image: url({{asset('assets')}}/images/listing/img_21.jpg);">
								<div class="tag fw-500">SELL</div>
								<div class="property-info tran3s w-100">
									<div class="d-flex align-items-center justify-content-between">
										<div class="pe-3">
											<a href="listing_details_04.html" class="title fw-500 tran4s">Swimming Pool Villa</a>
											<div class="address tran4s">127 green road, California, USA</div>
										</div>
										<a href="listing_details_04.html" class="btn-four inverse"><i class="bi bi-arrow-up-right"></i></a>
									</div>
									
									<div class="pl-footer tran4s">
										<ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
											<li>
												<strong class="color-dark fw-500">2137</strong> 
												<span class="fs-16">sqft</span>
											</li>
											<li>
												<strong class="color-dark fw-500">03</strong> 
												<span class="fs-16">bed</span>
											</li>
											<li>
												<strong class="color-dark fw-500">01</strong> 
												<span class="fs-16">kitchen</span>
											</li>
											<li>
												<strong class="color-dark fw-500">02</strong> 
												<span class="fs-16">bath</span>
											</li>
										</ul>
									</div>
								</div>
								<!-- /.property-info -->
							</div>
							<!-- /.listing-card-four -->
						</div>
						<div class="col-lg-4 col-md-6 mt-40 wow fadeInUp" data-wow-delay="0.2s">
							<div class="listing-card-four overflow-hidden d-flex align-items-end position-relative z-1" style="background-image: url({{asset('assets')}}/images/listing/img_22.jpg);">
								<div class="tag fw-500">RENT</div>
								<div class="property-info tran3s w-100">
									<div class="d-flex align-items-center justify-content-between">
										<div class="pe-3">
											<a href="listing_details_04.html" class="title fw-500 tran4s">Modern Duplex</a>
											<div class="address tran4s">Twin tower, 32 street, Florida</div>
										</div>
										<a href="listing_details_04.html" class="btn-four inverse"><i class="bi bi-arrow-up-right"></i></a>
									</div>
									
									<div class="pl-footer tran4s">
										<ul class="style-none feature d-flex flex-wrap align-items-center justify-content-between">
											<li>
												<strong class="color-dark fw-500">2137</strong> 
												<span class="fs-16">sqft</span>
											</li>
											<li>
												<strong class="color-dark fw-500">03</strong> 
												<span class="fs-16">bed</span>
											</li>
											<li>
												<strong class="color-dark fw-500">01</strong> 
												<span class="fs-16">kitchen</span>
											</li>
											<li>
												<strong class="color-dark fw-500">02</strong> 
												<span class="fs-16">bath</span>
											</li>
										</ul>
									</div>
								</div>
								<!-- /.property-info -->
							</div>
							<!-- /.listing-card-four -->
						</div>
					</div>

					<div class="text-center mt-100 md-mt-60">
						<a href="listing_06.html" class="btn-eight"><span>Explore All</span> <i class="bi bi-arrow-up-right"></i></a>
					</div>
				</div>
			</div>
		</div>
		<!-- /.property-listing-one -->


		
		



		<!--
		=====================================================
			BLock Feature Fourteen
		=====================================================
		-->
		<div class="block-feature-fourteen pt-120 xl-pt-100 pb-140 xl-pb-100 mt-170 xl-mt-120">
			<div class="container container-large">
				<div class="title-one text-center wow fadeInUp">
					<h3 class="text-white">Why Choose Us</h3>
					<p class="fs-24 mt-xs text-white">Your leading real estate advocate, transforming houses into dreams. </p>
				</div>
				<!-- /.title-one -->

				<div class="card-bg-wrapper wow fadeInUp mt-70 lg-mt-50">
					<div class="row">
						<div class="col-lg-4">
							<div class="card-style-eight mt-45 wow fadeInUp">
								<div class="d-flex align-items-start pe-xxl-5">
									<img src="{{asset('assets')}}/images/lazy.svg" data-src="images/icon/icon_40.svg" alt="" class="lazy-img icon">
									<div class="text">
										<h5 class="text-white">Trusted and transparent processes</h5>
										<!-- <p>Elit esse cillum dol fug nulla tur nos ullamo.</p> -->
									</div>
								</div>
							</div>
							<!-- /.card-style-eight -->
						</div>
						<div class="col-lg-4">
							<div class="card-style-eight mt-45 wow fadeInUp">
								<div class="d-flex align-items-start pe-xxl-2 ps-xxl-2">
									<img src="{{asset('assets')}}/images/lazy.svg" data-src="images/icon/icon_41.svg" alt="" class="lazy-img icon">
									<div class="text">
										<h5 class="text-white">Deep knowledge of the Nigerian real estate market</h5>
										<!-- <p>quis nostrud exerct ulla security finibus ne derived.</p> -->
									</div>
								</div>
							</div>
							<!-- /.card-style-eight -->
						</div>
						<div class="col-lg-4">
							<div class="card-style-eight mt-45 wow fadeInUp">
								<div class="d-flex align-items-start ps-xxl-5">
									<img src="{{asset('assets')}}/images/lazy.svg" data-src="images/icon/icon_42.svg" alt="" class="lazy-img icon">
									<div class="text">
										<h5 class="text-white">Client-focused approach</h5>
									</div>
								</div>
							</div>
							<!-- /.card-style-eight -->
						</div>
						<div class="col-lg-4">
							<div class="card-style-eight mt-45 wow fadeInUp">
								<div class="d-flex align-items-start ps-xxl-5">
									<img src="{{asset('assets')}}/images/lazy.svg" data-src="images/icon/icon_42.svg" alt="" class="lazy-img icon">
									<div class="text">
										<h5 class="text-white">Strong investment insight and advisory</h5>
									</div>
								</div>
							</div>
							<!-- /.card-style-eight -->
						</div>
						<div class="col-lg-4">
							<div class="card-style-eight mt-45 wow fadeInUp">
								<div class="d-flex align-items-start ps-xxl-5">
									<img src="{{asset('assets')}}/images/lazy.svg" data-src="images/icon/icon_42.svg" alt="" class="lazy-img icon">
									<div class="text">
										<h5 class="text-white">End-to-end real estate solutions</h5>
									</div>
								</div>
							</div>
							<!-- /.card-style-eight -->
						</div>
						<div class="col-lg-4">
							<div class="card-style-eight mt-45 wow fadeInUp">
								<div class="d-flex align-items-start ps-xxl-5">
									<img src="{{asset('assets')}}/images/lazy.svg" data-src="images/icon/icon_42.svg" alt="" class="lazy-img icon">
									<div class="text">
										<h5 class="text-white">Commitment to quality and integrity</h5>
									</div>
								</div>
							</div>
							<!-- /.card-style-eight -->
						</div>
					</div>
				</div>
				<!-- /.card-bg-wrapper -->
			</div>
		</div>
		<!-- /.block-feature-fourteen -->



		<!-- 
		=============================================
			Category Section Two
		============================================== 
		-->
		<!-- <div class="category-section-two mt-170 xl-mt-120">
			<div class="container container-large">
                <div class="position-relative">
                    <div class="title-one text-center text-lg-start mb-60 xl-mb-40 lg-mb-20 wow fadeInUp">
						<h3>Popular Categories.</h3>
					</div>
					<div class="wrapper flex-wrap d-flex justify-content-center justify-content-md-between align-items-center">
						<div class="card-style-seven position-relative z-1 rounded-circle overflow-hidden d-flex align-items-center justify-content-center wow fadeInUp" style="background-image: url({{asset('assets')}}/images/media/img_38.jpg);">
							<a href="listing_03.html" class="title stretched-link"><h4 class="text-white tran3s">Properties</h4></a>
						</div>
						<div class="card-style-seven position-relative z-1 rounded-circle overflow-hidden d-flex align-items-center justify-content-center wow fadeInUp" style="background-image: url({{asset('assets')}}/images/media/img_39.jpg);" data-wow-delay="0.1s">
							<a href="listing_03.html" class="title stretched-link"><h4 class="text-white tran3s">HMOs</h4></a>
						</div>
						<div class="card-style-seven position-relative z-1 rounded-circle overflow-hidden d-flex align-items-center justify-content-center wow fadeInUp" style="background-image: url({{asset('assets')}}/images/media/img_40.jpg);" data-wow-delay="0.2s">
							<a href="listing_03.html" class="title stretched-link"><h4 class="text-white tran3s">Consultaion</h4></a>
						</div>
					</div>
                </div>
            </div>
		</div> -->
		<!-- /.category-section-two -->






		<!--
		=====================================================
			BLock Feature Four
		=====================================================
		-->
		<div class="block-feature-four mt-170 xl-mt-130 md-mt-40">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 d-flex order-lg-last">
						<div class="ps-xxl-5 ms-xl-4 pt-100 xl-pt-80 pb-45 w-100 h-100 wow fadeInRight">
							<div class="title-one mb-60 lg-mb-40">
								<h3>Get quick <span>estimate<img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/shape/title_shape_06.svg" alt="" class="lazy-img"></span> on your home.</h3>
								<p class="fs-24 color-dark">Master your property's valuation for a poised entry into the real estate market, armed with self-assurance and insight.</p>
							</div>
							<!-- /.title-one -->
							<form action="#" class="me-xl-4">
								<input type="email" placeholder="Your Email Address...">
								<button>Find out</button>
							</form>
							<div class="fs-16 mt-10 opacity-75">*For accurate info please <a href="contact.html" class="fst-italic color-dark text-decoration-underline">contact us.</a></div>
						</div>
					</div>
					<div class="col-lg-6 d-flex">
						<div class="img-gallery position-relative z-1 w-100 h-100 me-lg-5 wow fadeInLeft">
							<div class="img-bg" style="background-image: url({{asset('assets')}}/images/media/img_11.jpg);"></div>
							<div class="card-one">
								<div class="text text-center z-1">
									{{-- <h6>Your estimate is in!</h6>
									<h3>$378,30.00</h3> --}}
								</div>
								<img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/assets/screen_12.png" alt="" class="lazy-img w-100">
							</div>
						</div>
						<!-- /.img-gallery -->
					</div>
				</div>
			</div>
		</div>
		<!-- /.block-feature-four -->



		

	<!--
    =====================================================
        Blog Section One - Dynamic with Video Support
    =====================================================
	-->
	<div class="blog-section-one mt-150 xl-mt-120">
		<div class="container">
			<div class="position-relative">
				<!-- Section Title -->
				<div class="title-one mb-35 xl-mb-20 md-mb-10 wow fadeInUp">
					<h3>Latest <span>Blog <img src="{{asset('assets')}}/images/lazy.svg" 
							data-src="{{asset('assets')}}/images/shape/title_shape_01.svg" 
							alt="" class="lazy-img"></span>
					</h3>
					<p class="fs-20 mt-xs">Get the latest update, trips & tricks from our expert.</p>
				</div>

				<!-- Blog Posts Grid -->
				<div class="row gx-xl-5">
					@forelse($latest as $index => $post)
					<div class="col-md-4">
						<article class="blog-meta-one mt-35 wow fadeInUp position-relative" 
								@if($index > 0) data-wow-delay="{{0.1 * $index}}s" @endif>
							
							<!-- Post Image with Video Play Button -->
							<figure class="post-img position-relative rounded-5 m0" 
									style="background-image: url('{{ $post->post_image }}');">
								
								<!-- Video Play Button (only shows if post has video) -->
								@if($post->has_video)
								<a href="javascript:void(0)" 
								class="video-play-btn position-absolute top-50 start-50 translate-middle rounded-circle bg-white d-flex align-items-center justify-content-center"
								data-bs-toggle="modal" 
								data-bs-target="#videoModal{{ $post->id }}"
								style="width: 60px; height: 60px; z-index: 10; box-shadow: 0 10px 30px rgba(0,0,0,0.2);"
								onclick="event.preventDefault(); event.stopPropagation();">
									<i class="fas fa-play" style="color: #000; font-size: 20px; margin-left: 3px;"></i>
								</a>
								@endif

								<!-- Post Date -->
								<a href="{{ route('blog.details', $post->slug) }}" class="stretched-link date rounded-5 tran3s">
									{{ $post->created_at->format('d M') }}
								</a>
							</figure>
							
							<!-- Post Content -->
							<div class="post-data">
								<div class="post-info">
									<a href="{{ route('author.posts', $post->author->username ?? '#') }}">
										{{ $post->author->name ?? 'Unknown' }}
									</a> 
									. {{ $post->created_at->diffForHumans() }}
									
									@if($post->post_video)
									<span class="video-label ms-2">
										<i class="fas fa-video me-1"></i> Video
									</span>
									@endif
								</div>
								
								<div class="d-flex justify-content-between align-items-sm-center flex-wrap">
									<a href="{{ route('blog.details', $post->slug) }}" class="blog-title">
										<h4>{{ Str::limit($post->title, 50) }}</h4>
									</a>
									<a href="{{ route('blog.details', $post->slug) }}" 
									class="read-btn d-flex align-items-center justify-content-center tran3s rounded-circle">
										<i class="bi bi-arrow-up-right"></i>
									</a>
								</div> 
							</div>
						</article>

						<!-- Video Modal with .mov support -->
						@if($post->post_video)
						@php
							$videoPath = asset($post->post_video);
							$videoExtension = pathinfo($post->post_video, PATHINFO_EXTENSION);
						@endphp
						<div class="modal fade" id="videoModal{{ $post->id }}" tabindex="-1" 
							aria-labelledby="videoModalLabel{{ $post->id }}" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered modal-lg">
								<div class="modal-content bg-transparent border-0">
									<div class="modal-body p-0 position-relative">
										<button type="button" 
												class="btn-close btn-close-white position-absolute top-0 end-0 mt-3 me-3" 
												data-bs-dismiss="modal" 
												aria-label="Close">
										</button>
										
										<!-- Video player with multiple format support -->
										<video controls class="w-100 rounded-4" style="max-height: 70vh;" playsinline>
											<!-- Try multiple source formats for compatibility -->
											<source src="{{ $videoPath }}" type="video/{{ $videoExtension == 'mov' ? 'quicktime' : $videoExtension }}">
											<source src="{{ $videoPath }}" type="video/mp4">
											<source src="{{ $videoPath }}" type="video/quicktime">
											
											<!-- Fallback text -->
											<div class="text-center text-white p-4">
												<p>Your browser doesn't support HTML5 video.</p>
												<p>You can <a href="{{ $videoPath }}" class="text-white fw-bold" download>download the video</a> instead.</p>
											</div>
										</video>
									</div>
								</div>
							</div>
						</div>
						@endif
					</div>
					@empty
					<div class="col-12 text-center py-5">
						<p class="fs-4">No blog posts found.</p>
					</div>
					@endforelse
				</div>

				<!-- Explore All Button -->
				<div class="section-btn text-center md-mt-60">
					<a href="{{ route('home.blog') }}" class="btn-eight rounded-3">
						<span>Explore All</span> 
						<i class="bi bi-arrow-up-right"></i>
					</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Required CSS -->
	<style>
		/* Video Play Button Styles */
		.video-play-btn {
			transition: all 0.3s ease;
			cursor: pointer;
			opacity: 0.9;
			z-index: 10;
		}

		.video-play-btn:hover {
			transform: translate(-50%, -50%) scale(1.1);
			opacity: 1;
			box-shadow: 0 15px 40px rgba(0,0,0,0.3);
		}

		.post-img {
			position: relative;
			overflow: hidden;
			height: 250px;
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
		}

		.post-img::after {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: rgba(0,0,0,0.1);
			transition: all 0.3s ease;
		}

		.post-img:hover::after {
			background: rgba(0,0,0,0.2);
		}

		.video-label {
			font-size: 0.85rem;
			color: #ff4a17;
			font-weight: 500;
		}

		/* Modal Styles */
		.modal-content.bg-transparent {
			background: transparent !important;
		}

		.btn-close-white {
			filter: invert(1) grayscale(100%) brightness(200%);
			z-index: 1050;
			background-size: 1.5em;
			opacity: 1;
		}

		.btn-close-white:hover {
			opacity: 0.8;
		}

		/* Post Date Style */
		.date {
			position: absolute;
			bottom: 20px;
			left: 20px;
			background: rgba(255, 255, 255, 0.9);
			padding: 8px 15px;
			font-weight: 600;
			color: #000;
			text-decoration: none;
			z-index: 5;
		}

		.date:hover {
			background: #fff;
		}

		/* Blog Meta Styles */
		.blog-meta-one {
			transition: all 0.3s ease;
		}

		.blog-meta-one:hover {
			transform: translateY(-5px);
		}

		.post-info {
			margin: 15px 0 10px;
			color: #666;
		}

		.post-info a {
			color: #333;
			text-decoration: none;
			font-weight: 500;
		}

		.post-info a:hover {
			color: #ff4a17;
		}

		.blog-title {
			text-decoration: none;
			color: #333;
			flex: 1;
		}

		.blog-title h4 {
			font-size: 1.25rem;
			margin: 0;
			transition: color 0.3s ease;
		}

		.blog-title:hover h4 {
			color: #ff4a17;
		}

		.read-btn {
			width: 45px;
			height: 45px;
			background: #f8f9fa;
			color: #333;
			text-decoration: none;
			transition: all 0.3s ease;
		}

		.read-btn:hover {
			background: #ff4a17;
			color: #fff;
		}

		/* Video player styles */
		video {
			background: #000;
			max-height: 70vh;
			width: 100%;
		}
		
		/* Responsive */
		@media (max-width: 768px) {
			.post-img {
				height: 200px;
			}
			
			.blog-title h4 {
				font-size: 1.1rem;
			}
		}
	</style>


		<!--
		=====================================================
			Fancy Banner Five
		=====================================================
		-->
		<div class="fancy-banner-five position-relative z-1 pt-90 lg-pt-70 pb-110 lg-pb-70 mt-170 xl-mt-120">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 m-auto text-center">
						<div class="title-one mb-40 lg-mb-20">
							<h2 class="font-garamond fs-xl text-white">Any Inquiry? Feel free To contact Us.</h2>
						</div>
						<a href="contact.html" class="btn-nine text-uppercase"><span>SEND MESSAGE</span></a>
					</div>
				</div>
			</div>
			<img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/shape/shape_30.svg" alt="" class="lazy-img shapes shape_01">
		</div>
		<!-- /.fancy-banner-five -->

@endsection
@push('scripts')
<script>
// Handle video playback for different formats
document.addEventListener('DOMContentLoaded', function() {
    // Check if video can play .mov files
    var video = document.createElement('video');
    var canPlayMOV = video.canPlayType('video/quicktime') !== '';
    
    if (!canPlayMOV) {
        console.log('Browser may have limited .mov support');
    }
    
    // Fix for iOS .mov playback
    var videos = document.querySelectorAll('video');
    videos.forEach(function(video) {
        video.addEventListener('error', function(e) {
            console.log('Video error, trying fallback format');
            var sources = video.querySelectorAll('source');
            if (sources.length > 1) {
                // Try next source format
                for (var i = 1; i < sources.length; i++) {
                    if (sources[i].src) {
                        video.src = sources[i].src;
                        video.load();
                        video.play();
                        break;
                    }
                }
            }
        });
    });
});
</script>
@endpush