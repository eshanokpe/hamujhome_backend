<!-- 
=============================================
	Theme Main Menu
============================================== 
-->
<header class="theme-main-menu menu-overlay menu-style-one sticky-menu">
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
							<li class="d-block d-lg-none"><div class="logo"><a href="index.html" class="d-block"><img src="images/logo/logo_01.svg" alt=""></a></div></li>
							<li class="nav-item ">
								<a class="nav-link" href="{{route('home')}}" >Home</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link " href="{{route('home.about')}}" >About
								</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link " href="{{route('home.shop')}}" >Shop
								</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="{{ route('home.services') }}" role="button" data-bs-toggle="dropdown"
									data-bs-auto-close="outside" aria-expanded="false">Services
								</a>
								<ul class="dropdown-menu">
									<li><a href="{{ route('home.service.properties')}}" class="dropdown-item"><span>Properties</span></a></li>
									<li><a href="{{ route('home.service.homs')}}" class="dropdown-item"><span>HOMs</span></a></li>
									<li><a href="{{ route('home.service.consultation')}}" class="dropdown-item"><span>Consultation</span></a></li>
								</ul>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link " href="{{ route('home.portfolio') }}" >Portfolio
								</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link " href="{{route('home.blog')}}" >Blog
								</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link " href="{{route('home.contact')}}" >Contact
								</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div> <!--/.top-header-->
	</div> <!-- /.inner-content -->
</header> 
<!-- /.theme-main-menu -->