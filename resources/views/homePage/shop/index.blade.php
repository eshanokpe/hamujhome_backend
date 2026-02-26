@extends('layouts.app')
@section('title')
{{$website->name}} - Shop
@endsection
@section('content') 

<!-- 
=============================================
    Inner Banner
============================================== 
-->
<div class="inner-banner-three inner-banner text-center z-1 position-relative">
    <div class="bg-wrapper overflow-hidden position-relative z-1" style="background-image: url({{asset('assets')}}/images/media/hamuj1.jpg);">
        <div class="container position-relative z-2">
            <h2 class="mb-35 xl-mb-20 md-mb-10 pt-15 font-garamond text-white">Shop</h2>
            <ul class="theme-breadcrumb style-none d-inline-flex align-items-center justify-content-center position-relative z-1 bottom-line">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>/</li>
                <li>Shop</li>
            </ul>
        </div>
        <img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/shape/shape_35.svg" alt="" class="lazy-img shapes shape_01">
        <img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/shape/shape_36.svg" alt="" class="lazy-img shapes shape_02">
    </div>    
</div>
<!-- /.inner-banner-three -->


<!--
    =====================================================
        Project Section One
    =====================================================
-->
<div class="project-section-one mt-150 xl-mt-100">
    <div class="container">
        <div class="filter-nav-one">
            <ul class="style-none d-flex justify-content-center flex-wrap isotop-menu-wrapper">
                <li class="is-checked" data-filter="*">All</li>
                <li data-filter=".house">New</li>
                <li data-filter=".villa">2 - seater</li>
                <li data-filter=".flat">Ottoman</li>
            </ul>
        </div>
        
        <div id="isotop-gallery-wrapper" class="grid-3column pt-40 xl-pt-10">
            <div class="grid-sizer"></div>
            
            <!-- Product 1 -->
            <div class="isotop-item house flat">
                <div class="project-block-one mt-50 lg-mt-30">
                    <figure class="image-wrapper m0 position-relative z-1 overflow-hidden">
                        <img src="{{asset('assets')}}/images/project/img_01.jpg" alt="Modern Luxury Villa" class="w-100">
                        
                        <a href="{{ route('home.shop.single', 'birch_sleek_sofa') }}" class="btn-four inverse rounded-circle"><i class="bi bi-arrow-up-right"></i></a>
                    </figure> 
                    <div class="product-info mt-20">
                        <h5 class="title"><a href="{{ route('home.shop.single', 'birch_sleek_sofa') }}">Birch -  Sleek Sofa</a></h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price">₦798,450</span>
                        </div>
                    </div>
                </div>
                <!-- /.project-block-one -->
            </div>
            <!-- /.isotop-item -->

            <!-- Product 2 -->
            <div class="isotop-item villa">
                <div class="project-block-one mt-50 lg-mt-30">
                    <figure class="image-wrapper m0 position-relative z-1 overflow-hidden">
                        <img src="{{asset('assets')}}/images/project/img_02.jpg" alt="Beachfront Paradise" class="w-100">
                         <a href="{{ route('home.shop.single', 'rhea_ottoman') }}" class="btn-four inverse rounded-circle"><i class="bi bi-arrow-up-right"></i></a>
                    </figure>
                    <div class="product-info mt-20">
                        <h5 class="title"><a href="{{ route('home.shop.single', 'rhea_ottoman') }}">Rhea - Ottoman</a></h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price">₦415,074</span>
                            {{-- <span class="location"><i class="bi bi-geo-alt"></i> Miami, Florida</span> --}}
                        </div>
                    </div>
                </div>
                <!-- /.project-block-one -->
            </div>
            <!-- /.isotop-item -->


            </div>
            <!-- /.isotop-item -->
        </div>
        <!-- /#isotop-gallery-wrapper -->
        
    </div>
</div>
<!-- /.project-section-one -->

<!--
    =====================================================
        Fancy Banner Three
    =====================================================
-->
<div class="fancy-banner-three position-relative text-center z-1 pt-140 xl-pt-100 md-pt-80 pb-150 xl-pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-md-8 m-auto">
                <div class="title-one mb-45 md-mb-30">
                    <h2>Any Inquiry? <span>Feel free<img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/shape/title_shape_08.svg" alt="" class="lazy-img"></span> To contact Us.</h2>
                </div>
                <!-- /.title-one -->
                <a href="{{ route('home.contact') }}" class="btn-five text-uppercase">SEND MESSAGE</a>
            </div>
        </div>
    </div>
</div>
<!-- /.fancy-banner-three -->

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
                        <input type="email" placeholder="Email address">
                        <button>Get Started</button>
                    </form>
                    {{-- <div class="fs-16 mt-10 text-white">Already a Agent? <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Sign in.</a></div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.fancy-banner-two -->

@endsection


@push('scripts')
<script>
    // Lazy load images
    document.addEventListener("DOMContentLoaded", function() {
        var lazyImages = [].slice.call(document.querySelectorAll("img.lazy-img"));
        
        if ("IntersectionObserver" in window) {
            let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        let lazyImage = entry.target;
                        lazyImage.src = lazyImage.dataset.src;
                        lazyImage.classList.remove("lazy-img");
                        lazyImageObserver.unobserve(lazyImage);
                    }
                });
            });
            
            lazyImages.forEach(function(lazyImage) {
                lazyImageObserver.observe(lazyImage);
            });
        }
    });
</script>
@endpush