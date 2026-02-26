<!-- 
		=============================================
			Theme Main Menu
		============================================== 
		-->
		<header class="theme-main-menu menu-overlay menu-style-seven white-vr sticky-menu">
			<div class="inner-content gap-one">
				<div class="top-header position-relative">
					<div class="d-flex align-items-center justify-content-between">
						<div class="logo order-lg-0">
							<a href="{{route('home')}}" class="d-flex align-items-center">
								<img src="{{asset('assets')}}/images/fav-icon/icon.png" style="width: 60px" alt="">
							</a> 
						</div>
						<!-- logo -->
						<nav class="navbar navbar-expand-lg p0 order-lg-2">
							<button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse"
								data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
								aria-label="Toggle navigation">
								<span></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarNav">
								<ul class="navbar-nav align-items-lg-center">
									<li class="d-block d-lg-none"><div class="logo"><a href="index.html" class="d-block"><img src="images/logo/logo_09.svg" alt=""></a></div></li>
									<li class="nav-item ">
										<a class="nav-link" href="{{route('home')}}">Home</a>
									</li>
                                    <li class="nav-item ">
										<a class="nav-link" href="{{route('home.about')}}">About</a>
									</li>
                                    <li class="nav-item ">
										<a class="nav-link" href="{{route('home.shop')}}">Shop</a>
									</li>
                                    <li class="nav-item">
										<a class="nav-link" href="{{ route('home.services') }}">Services</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{route('home.portfolio')}}">Portfolio</a>
									</li>
                                    <li class="nav-item">
										<a class="nav-link" href="{{route('home.blog')}}">Blog</a>
									</li>
                                    <li class="nav-item">
										<a class="nav-link" href="{{route('home.contact')}}">Contact</a>
									</li>
									
									
								</ul>
							</div>
						</nav>
					</div>
				</div> <!--/.top-header-->
			</div> <!-- /.inner-content -->
		</header> 
		<!-- /.theme-main-menu -->
