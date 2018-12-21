<!DOCTYPE html>
<html lang="en">
<head>
<title>Placeholder</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ url('styles/bootstrap4/bootstrap.min.css') }}">
<link href="{{ url('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ url('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('plugins/OwlCarousel2-2.2.1/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('plugins/slick-1.8.0/slick.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('styles/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('styles/responsive.css') }}">
<style>
.wishlist_cart {
	height: 120px !important;
}
.header_search{
	height: 120px !important;
	padding-left: 50px;
}
.logo_container{
	height: 120px !important;
	
}
</style>
@yield('custom_css')

</head>

<body>

<div class="super_container">
	
	<!-- Header -->
	
	<header class="header">
		
		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{ url('images/phone.png') }}" alt=""></div>+38 068 005 3570</div>
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{ url('images/mail.png') }}" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
						<div class="top_bar_content ml-auto">
							<div class="top_bar_menu">
								<ul class="standard_dropdown top_bar_dropdown">
									@auth
									<li>
									<a href="#"><div class="user_icon"><img src="{{url('images/user.svg')}}" alt=""></div>{{auth()->user()->name}}<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="{{ route('logout' )}}">Logout</a></li>
											@if(auth()->user()->is_admin == 1)
											<li><a href="{{ route('admin' )}}">Admin</a></li>
											@endif
										
										</ul>
									</li>
									@endauth

									@guest
									<li>
									<a href="{{route('register')}}"><div class="user_icon"><img src="{{url('images/user.svg')}}" alt=""></div>Register</a>
									</li>

									<li>
										<a href="{{route('login')}}">Login</a>
									</li>
									@endguest
								</ul>
							</div>
							
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- Header Main -->

		<div class="header_main">
			<div class="container">
				<div class="row">

					<!-- Logo -->
					<div class="col-lg-2 col-sm-3 col-3 order-1">
						<div class="logo_container">
								{{-- <img src="{{url('images/a.svg')}}" style="max-height:240px;max-width:180px;padding-bottom:15px;" alt=""> --}}
						<div class="logo"><a href="{{route('welcome')}}"><img src="{{url('images/logo1.png')}}" style="max-height:240px;max-width:180px;padding-bottom:15px;" alt=""></a></div>
						</div>
					</div>

					<!-- Search -->
					<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
						<div class="header_search">
							<div class="header_search_content">
								<div class="header_search_form_container">
									<form action="/products" method="GET" role="search" class="header_search_form clearfix">
										
										<input type="search" required="required" name="search" class="header_search_input" placeholder="Search for products...">
										<div class="custom_dropdown" style="display: none">
											<div class="custom_dropdown_list">
												<span class="custom_dropdown_placeholder clc">All Categories</span>
												<i class="fas fa-chevron-down"></i>
												<ul class="custom_list clc">
													<li><a class="clc" href="#">All Categories</a></li>
													<li><a class="clc" href="#">Computers</a></li>
													<li><a class="clc" href="#">Laptops</a></li>
													<li><a class="clc" href="#">Cameras</a></li>
													<li><a class="clc" href="#">Hardware</a></li>
													<li><a class="clc" href="#">Smartphones</a></li>
												</ul>
											</div>
										</div>
										<button type="submit" class="header_search_button trans_300" value="Submit"><img src="{{ url('images/search.png') }}" alt=""></button>
									</form>
								</div>
							</div>
						</div>
					</div>

					<!-- Wishlist -->
					<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
						<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
							<div class="wishlist d-flex flex-row align-items-center justify-content-end">
								<div class="wishlist_icon"><img src="{{ url('images/heart.png') }}" alt=""></div>
								<div class="wishlist_content">
									<div class="wishlist_text"><a href="#">Wishlist</a></div>
									<div class="wishlist_count">115</div>
								</div>
							</div>

							<!-- Cart -->
							<div class="cart" >
								<div class="cart_container d-flex flex-row align-items-center justify-content-end">
									<div class="cart_icon">
										<img src="{{ url('images/cart.png') }}" alt="">
										<div class="cart_count"><span>10</span></div>
									</div>
									<div class="cart_content">
										<div class="cart_text"><a href="{{url('/cart')}}">Cart</a></div>
										<div class="cart_price">$85</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    
        @yield('content')
	<!-- Footer -->

	<div class="container">
			<hr>
		</div>

	<footer class="footer">
		<div class="container">
			<div class="row">

				<div class="col-lg-3 footer_col">
					<div class="footer_column footer_contact">
						<div class="logo_container">
							<div class="logo"><a href="#">PlaceHolder	</a></div>
						</div>
						<div class="footer_title">Got Question? Call Us 24/7</div>
						<div class="footer_phone">+38 068 005 3570</div>
						<div class="footer_contact_text">
							<p>17 Princess Road, London</p>
							<p>Grester London NW18JR, UK</p>
						</div>
						<div class="footer_social">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
								<li><a href="#"><i class="fab fa-google"></i></a></li>
								<li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-2 offset-lg-2">
					<div class="footer_column">
						<div class="footer_title">Find it Fast</div>
						<ul class="footer_list">
							<li><a href="#">Computers & Laptops</a></li>
							<li><a href="#">Cameras & Photos</a></li>
							<li><a href="#">Hardware</a></li>
							<li><a href="#">Smartphones & Tablets</a></li>
							<li><a href="#">TV & Audio</a></li>
						</ul>
						<div class="footer_subtitle">Gadgets</div>
						<ul class="footer_list">
							<li><a href="#">Car Electronics</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<ul class="footer_list footer_list_2">
							<li><a href="#">Video Games & Consoles</a></li>
							<li><a href="#">Accessories</a></li>
							<li><a href="#">Cameras & Photos</a></li>
							<li><a href="#">Hardware</a></li>
							<li><a href="#">Computers & Laptops</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<div class="footer_title">Customer Care</div>
						<ul class="footer_list">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order Tracking</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Customer Services</a></li>
							<li><a href="#">Returns / Exchange</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="#">Product Support</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</footer>


</div>


<script src="{{ url('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ url('styles/bootstrap4/popper.js') }}"></script>
<script src="{{ url('styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ url('plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{ url('plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{ url('plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{ url('plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{ url('plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{ url('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ url('plugins/slick-1.8.0/slick.js') }}"></script>
<script src="{{ url('plugins/easing/easing.js') }}"></script>
<script src="{{ url('js/custom.js') }}"></script>
@yield('custom_js')

</body>

</html>