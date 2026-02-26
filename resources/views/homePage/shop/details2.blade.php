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
<div class="inner-banner-two inner-banner z-1 pt-160 lg-pt-130 pb-160 xl-pb-120 md-pb-80 position-relative" 
style="background-image: url({{asset('assets')}}/images/media/img_49.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="mb-35 xl-mb-20 pt-15">Shop</h3>
                <ul class="theme-breadcrumb style-none d-inline-flex align-items-center justify-content-center position-relative z-1 bottom-line">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>/</li>
                    <li><a href="{{ route('home.shop') }}">Shop</a></li>
                    <li>/</li>
                    <li>Rhea - Ottoman</li>
                </ul>
            </div>
            <div class="col-lg-6">
                {{-- <p class="sub-heading">Over 745,000 listings, apartments, lots and  plots available now!</p> --}}
            </div>
        </div>
    </div>
</div>
<!-- /.inner-banner-two -->




<!--
=====================================================
    Project Details One
=====================================================
-->
<div class="project-details-one mt-150 xl-mt-100 mb-170 xl-mb-100">
    <div class="container">
        <div class="row gx-xxl-5">
            <div class="col-lg-6 order-lg-first">
                <figure class="image-wrapper">
                    <img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/project/img_01.jpg" alt="" class="lazy-img w-100">
                </figure>
                {{-- <figure class="image-wrapper">
                    <img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/project/img_29.jpg" alt="" class="lazy-img w-100">
                </figure>
                <figure class="image-wrapper">
                    <img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/project/img_30.jpg" alt="" class="lazy-img w-100">
                </figure> --}}
            </div>
            <div class="col-lg-6">
                <div class="details-text ps-xxl-5 md-mt-40">
                    {{-- <div class="tag fw-500 text-uppercase">Apartments</div> --}}
                    <h3>Rhea - Ottoman</h3>
                    <div class="d-flex justify-content-between align-items-center">
                            <span class="price"><h4>₦415,074</h4></span>
                        </div>
                    <p class="fs-24 pt-45 xl-pt-30 pb-45 xl-pb-30">
                        Rhea redefines elegance with its soft eggnog hue and versatile design. Perfect for lounging, styling or seating for extra guests. A timeless touch for any space.
                     </p>
                    <!-- /.project-info-outline -->
                    

                    <div class="page-pagination mt-45 pt-50">
                        <div class="d-flex align-items-center justify-content-between">
                            
                            <a href="{{ route('home.contact') }}" class="btn-nine text-uppercase rounded-3 w-50 mb-10">Make Enquire Now</a>
							
                        </div>
                    </div>
                    <!-- /.page-pagination -->
                </div>
                <!-- /.details-text -->
            </div>
        </div>
    </div>
</div>
<!-- /.project-details-one -->


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