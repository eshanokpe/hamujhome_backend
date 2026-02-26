<!--
=====================================================
    Footer Three
=====================================================
-->
<div class="footer-three">
    <div class="container container-large">
        <div class="bg-wrapper position-relative z-1">
            <div class="row">
                <div class="col-xl-3 mb-40 lg-mb-60">
                    <div class="footer-intro pe-xxl-5 pe-xl-3">
                        <div class="logo mb-15">
                            <a href="index.html">
                                <img src="{{asset('assets')}}/images/fav-icon/icon.png" style="width: 60px" alt="">
                            </a>
                        </div> 
                        <!-- logo -->
                        <p class="mb-45 lg-mb-30">7, Julius Kayode street, Unity homes, Thomas estate, Ajah, Lagos, Nigeria</p>
                        <ul class="style-none d-flex align-items-center social-icon">
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        </ul>
                        <img src="{{asset('assets')}}/images/lazy.svg" data-src="{{asset('assets')}}/images/shape/shape_52.svg" alt="" class="lazy-img ms-auto d-none d-xl-block">
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-30">
                    <div class="footer-nav">
                        <h5 class="footer-title">Links</h5>
                        <ul class="footer-nav-link style-none">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="dashboard/membership.html" target="_blank">Membership</a></li>
                            <li><a href="about_us_01.html">About Company</a></li>
                            <li><a href="blog_01.html">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 mb-30">
                    <div class="footer-nav">
                        <h5 class="footer-title">New Listing</h5>
                        <ul class="footer-nav-link style-none">
                            <li><a href="listing_01.html">​Buy Apartments</a></li>
                            <li><a href="listing_02.html">Buy Condos</a></li>
                            <li><a href="listing_03.html">Rent Houses</a></li>
                            <li><a href="listing_04.html">Rent Industrial</a></li>
                            <li><a href="listing_05.html">Buy Villas</a></li>
                            <li><a href="listing_06.html">Rent Office</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 mb-30">
                    <div class="footer-nav">
                        <h5 class="footer-title">Legal</h5>
                        <ul class="footer-nav-link style-none">
                            <li><a href="faq.html">Terms & conditions</a></li>
                            <li><a href="faq.html">Cookie</a></li>
                            <li><a href="faq.html">Privacy policy</a></li>
                            <li><a href="faq.html">Faq’s</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                    <h5 class="footer-title">Newsletters</h5>
                    <p class="pt-5">Join & get important new regularly</p>
                    <form action="#" class="newsletter-form position-relative">
                        <input type="email" placeholder="Enter your email">
                        <button class="fw-500 fs-16 text-white tran3s">Send</button>
                    </form>
                    <span class="fs-14 opacity-75">We only send interesting and relevant emails.</span>
                </div>
            </div>
        </div> 
        <!-- /.bg-wrapper -->
        <div class="bottom-footer">
            <div class="d-md-flex justify-content-center justify-content-md-between align-items-center">
                <ul class="style-none bottom-nav d-flex justify-content-center">
                    <li><a href="faq.html">Privacy &amp; Terms</a></li>
                    <li><a href="{{ route('home.contact')}}">Contact Us</a></li>
                </ul>
                <p class="mb-15 text-center text-lg-start fs-16 order-md-first">Copyright @2026 Hamuj Homes.</p>
            </div>
        </div>
    </div>
</div> <!-- /.footer-three -->


<!-- ################### Login Modal ####################### -->
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen modal-dialog-centered">
        <div class="container">
            <div class="user-data-form modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="form-wrapper m-auto">
                    <ul class="nav nav-tabs w-100" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#fc1" role="tab">Login</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#fc2" role="tab">Signup</button>
                        </li>
                    </ul>
                    <div class="tab-content mt-30">
                        <div class="tab-pane show active" role="tabpanel" id="fc1">
                            <div class="text-center mb-20">
                                <h2>Welcome Back!</h2>
                                <p class="fs-20 color-dark">Still don't have an account? <a href="#">Sign up</a></p>
                            </div>
                            <form action="#">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-group-meta position-relative mb-25">
                                            <label>Email*</label>
                                            <input type="email" placeholder="Youremail@gmail.com">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group-meta position-relative mb-20">
                                            <label>Password*</label>
                                            <input type="password" placeholder="Enter Password" class="pass_log_id">
                                            <span class="placeholder_icon"><span class="passVicon"><img src="{{asset('assets')}}/images/icon/icon_68.svg" alt=""></span></span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="agreement-checkbox d-flex justify-content-between align-items-center">
                                            <div>
                                                <input type="checkbox" id="remember">
                                                <label for="remember">Keep me logged in</label>
                                            </div>
                                            <a href="#">Forget Password?</a>
                                        </div> <!-- /.agreement-checkbox -->
                                    </div>
                                    <div class="col-12">
                                        <button class="btn-two w-100 text-uppercase d-block mt-20">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" role="tabpanel" id="fc2">
                            <div class="text-center mb-20">
                                <h2>Register</h2>
                                <p class="fs-20 color-dark">Already have an account? <a href="#">Login</a></p>
                            </div>
                            <form action="#">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-group-meta position-relative mb-25">
                                            <label>Name*</label>
                                            <input type="text" placeholder="Zubayer Hasan">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group-meta position-relative mb-25">
                                            <label>Email*</label>
                                            <input type="email" placeholder="zubayerhasan@gmail.com">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group-meta position-relative mb-20">
                                            <label>Password*</label>
                                            <input type="password" placeholder="Enter Password" class="pass_log_id">
                                            <span class="placeholder_icon"><span class="passVicon"><img src="{{asset('assets')}}/images/icon/icon_68.svg" alt=""></span></span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="agreement-checkbox d-flex justify-content-between align-items-center">
                                            <div>
                                                <input type="checkbox" id="remember2">
                                                <label for="remember2">By hitting the "Register" button, you agree to the <a href="#">Terms conditions</a> & <a href="#">Privacy Policy</a></label>
                                            </div>
                                        </div> <!-- /.agreement-checkbox -->
                                    </div>
                                    <div class="col-12">
                                        <button class="btn-two w-100 text-uppercase d-block mt-20">Sign Up</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    
                    <div class="d-flex align-items-center mt-30 mb-10">
                        <div class="line"></div>
                        <span class="pe-3 ps-3 fs-6">OR</span>
                        <div class="line"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="#" class="social-use-btn d-flex align-items-center justify-content-center tran3s w-100 mt-10">
                                <img src="{{asset('assets')}}/images/icon/google.png" alt="">
                                <span class="ps-3">Signup with Google</span>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="#" class="social-use-btn d-flex align-items-center justify-content-center tran3s w-100 mt-10">
                                <img src="{{asset('assets')}}/images/icon/facebook.png" alt="">
                                <span class="ps-3">Signup with Facebook</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.form-wrapper -->
            </div>
            <!-- /.user-data-form -->
        </div>
    </div>
</div>



<button class="scroll-top">
    <i class="bi bi-arrow-up-short"></i>
</button>



<!-- Optional JavaScript _____________________________  -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/696f5e7fbdeae8197dc50fcf/1jfdgi98l';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<!-- jQuery first, then Bootstrap JS -->
<!-- jQuery -->
<script src="{{asset('assets')}}/vendor/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="{{asset('assets')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- WOW js -->
<script src="{{asset('assets')}}/vendor/wow/wow.min.js"></script>
<!-- Slick Slider -->
<script src="{{asset('assets')}}/vendor/slick/slick.min.js"></script>
<!-- Fancybox -->
<script src="{{asset('assets')}}/vendor/fancybox/fancybox.umd.js"></script>
<!-- Lazy -->
<script src="{{asset('assets')}}/vendor/jquery.lazy.min.js"></script>
<!-- js Counter -->
<script src="{{asset('assets')}}/vendor/jquery.counterup.min.js"></script>
<script src="{{asset('assets')}}/vendor/jquery.waypoints.min.js"></script>
<!-- Nice Select -->
<script src="{{asset('assets')}}/vendor/nice-select/jquery.nice-select.min.js"></script>
<!-- validator js -->
<script src="{{asset('assets')}}/vendor/validator.js"></script>
<!-- isotop -->
<script  src="{{asset('assets')}}/vendor/isotope.pkgd.min.js"></script>

<!-- Theme js -->
<script src="{{asset('assets')}}/js/theme.js"></script>