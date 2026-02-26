@extends('layouts.app')
@section('title')
{{$website->name}}
@endsection
@section('content') 

<!--
=====================================================
    Contact Us
=====================================================
-->
<div class="contact-us border-top mt-130 xl-mt-100 pt-80 lg-pt-60">
    <div class="container">
        <div class="row">
            <div class="col-xxl-9 col-xl-8 col-lg-10 m-auto">
                <div class="title-one text-center wow fadeInUp">
                    <h3>Questions? Feel Free to Reach Out Via Message.</h3>
                </div>
                <!-- /.title-one -->
            </div>
        </div>
    </div>
    <div class="address-banner wow fadeInUp mt-60 lg-mt-40">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-center justify-content-lg-between">
                <div class="block position-relative z-1 mt-25">
                    <div class="d-xl-flex align-items-center">
                        <div class="icon rounded-circle d-flex align-items-center justify-content-center">
                            <img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/icon/icon_39.svg" alt="" class="lazy-img"></div>
                        <div class="text">
                            <p class="fs-22">We’r always happy to help.</p>
                            <a href="#" class="tran3s">customerservice@hamujhomes.com</a>
                        </div>
                        <!-- /.text -->
                    </div>
                </div>
                <!-- /.block -->
                <div class="block position-relative skew-line z-1 mt-25">
                    <div class="d-xl-flex align-items-center">
                        <div class="icon rounded-circle d-flex align-items-center justify-content-center">
                            <img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/icon/icon_39.svg" alt="" class="lazy-img"></div>
                        <div class="text">
                            <p class="fs-22">Our hotline number</p>
                            <a href="#" class="tran3s">+234 9061433049</a>
                            {{-- <a href="#" class="tran3s">&nbsp; +991 377 9731</a> --}}
                        </div>
                        <!-- /.text -->
                    </div>
                </div>
                <!-- /.block -->
                <div class="block position-relative z-1 mt-25">
                    <div class="d-xl-flex align-items-center">
                        <div class="icon rounded-circle d-flex align-items-center justify-content-center">
                            <img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/icon/icon_39.svg" alt="" class="lazy-img"></div>
                        <div class="text">
                            <p class="fs-22">Address</p>
                            <a href="#" class="tran3s">
                                7, Julius Kayode street, <br/>Unity homes, Thomas estate,<br/> Ajah, Lagos.
                            </a>
                        </div>
                        <!-- /.text -->
                    </div>
                </div>
                <!-- /.block -->
            </div>
        </div>
    </div>
    <!-- /.address-banner -->

    <div class="bg-pink mt-150 xl-mt-120 md-mt-80">
        <div class="row">
            <div class="col-xl-7 col-lg-6">
                <div class="form-style-one wow fadeInUp">
                    <form action="" id="contact-form" data-toggle="validator">
                        <h3>Send Message</h3>
                        <div class="messages"></div>
                        <div class="row controls">
                            <div class="col-12">
                                <div class="input-group-meta form-group mb-30">
                                    <label for="">Name*</label>
                                    <input type="text" placeholder="Your Name*" name="name" required="required" data-error="Name is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group-meta form-group mb-40">
                                    <label for="">Email*</label>
                                    <input type="email" placeholder="Email Address*" name="email" required="required" data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group-meta form-group mb-35">
                                    <textarea placeholder="Your message*" name="message" required="required" data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-12"><button class="btn-nine text-uppercase rounded-3 fw-normal w-100">Send Message</button></div>
                        </div>
                    </form>
                </div> <!-- /.form-style-one -->
            </div>
            <div class="col-xl-5 col-lg-6 d-flex order-lg-first">
                <div class="contact-map-banner w-100">
                    <div class="gmap_canvas h-100 w-100">
                        <iframe class="gmap_iframe h-100 w-100"  width="600" height="450" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d899.0398054758722!2d3.5781083174310813!3d6.47437781157674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf799bb67cdcb%3A0xf8895a46dc9ef263!2sUnity%20Homes%2C%20Thomas%20Estate!5e0!3m2!1sen!2sng!4v1772078897466!5m2!1sen!2sng"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.contact-us -->


@endsection