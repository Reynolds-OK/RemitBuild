<!DOCTYPE html>
<html lang="en">
<head>
		<?php
			include_once "helpers/head.php";
		?>
<link rel="stylesheet" type="text/css" href="styles/booking.css">
<link rel="stylesheet" type="text/css" href="styles/booking_responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<<img src="images/logo.png" alt="" height="150px">
			<div class="ml-auto d-flex flex-row align-items-center justify-content-start">
				<nav class="main_nav">
					<ul class="d-flex flex-row align-items-start justify-content-start">
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About us</a></li>
						<li><a href="#">Rooms</a></li>
						<li><a href="blog.php">Blog</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</nav>
				<div class="book_button"><a href="booking.php">Book Online</a></div>
				<div class="header_phone d-flex flex-row align-items-center justify-content-center">
					<img src="images/phone.png" alt="">
					<span>+233 20 095 2864</span>
				</div>

				<!-- Hamburger Menu -->
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu trans_400 d-flex flex-column align-items-end justify-content-start">
		<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="menu_content">
			<nav class="menu_nav text-right">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About us</a></li>
					<li><a href="#">Rooms</a></li>
					<li><a href="blog.php">Blog</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</nav>
		</div>
		<div class="menu_extra">
			<div class="menu_book text-right"><a href="#">Book online</a></div>
			<div class="menu_phone d-flex flex-row align-items-center justify-content-center">
				<img src="images/phone-2.png" alt="">
				<span>0183-12345678</span>
			</div>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="background_image" style="background-image:url(images/booking.jpg)"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title">Book an agent</div>
							<!-- <div class="booking_form_container">
								<form action="#" class="booking_form" id="booking_form">
									<div class="d-flex flex-xl-row flex-column align-items-start justify-content-start">
										<div class="booking_input_container d-flex flex-row align-items-start justify-content-start flex-wrap">
											<div><input type="text" class="datepicker booking_input booking_input_a booking_in" placeholder="Check in" required="required"></div>
											<div><input type="text" class="datepicker booking_input booking_input_a booking_out" placeholder="Check out" required="required"></div>
											<div><input type="number" class="booking_input booking_input_b" placeholder="Children" required="required"></div>
											<div><input type="number" class="booking_input booking_input_b" placeholder="Room" required="required"></div>
										</div>
										<div><button class="booking_button trans_200">Book Now</button></div>
									</div>
								</form>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Booking -->

	<div class="booking">
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- Booking Slider -->
					<div class="booking_slider_container">
						<div class="owl-carousel owl-theme booking_slider">
							
							<!-- Slide -->
							<div class="booking_item">
								<div class="background_image" style="background-image:url(images/booking_1.jpg)"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_item_content">
									<div class="booking_item_list">
										<ul>
											<li>27 m² Patio</li>
											<li>Balcony with view</li>
											<li>Garden / Mountain view</li>
											<li>Flat-screen TV</li>
											<li>Air conditioning</li>
											<li>Soundproofing</li>
											<li>Private bathroom</li>
											<li>Free WiFi</li>
										</ul>
									</div>
								</div>
								<!-- <div class="booking_price">$120/Night</div> -->
								<div class="booking_link"><a href="booking.php">Floorspace Realty</a></div>
							</div>

							<!-- Slide -->
							<div class="booking_item">
								<div class="background_image" style="background-image:url(images/booking_2.jpg)"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_item_content">
									<div class="booking_item_list">
										<ul>
											<li>27 m² Patio</li>
											<li>Balcony with view</li>
											<li>Garden / Mountain view</li>
											<li>Flat-screen TV</li>
											<li>Air conditioning</li>
											<li>Soundproofing</li>
											<li>Private bathroom</li>
											<li>Free WiFi</li>
										</ul>
									</div>
								</div>
								<!-- <div class="booking_price">$120/Night</div> -->
								<div class="booking_link"><a href="booking.php">Premium Assets Estates</a></div>
							</div>

							<!-- Slide -->
							<div class="booking_item">
								<div class="background_image" style="background-image:url(images/booking_3.jpg)"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_item_content">
									<div class="booking_item_list">
										<ul>
											<li>27 m² Patio</li>
											<li>Balcony with view</li>
											<li>Garden / Mountain view</li>
											<li>Flat-screen TV</li>
											<li>Air conditioning</li>
											<li>Soundproofing</li>
											<li>Private bathroom</li>
											<li>Free WiFi</li>
										</ul>
									</div>
								</div>
								<!-- <div class="booking_price">$120/Night</div> -->
								<div class="booking_link"><a href="booking.php">Penny Lane Real Estate Ghana limited</a></div>
							</div>

						</div>
						<div class="owl-carousel owl-theme booking_slider">
							
							<!-- Slide -->
							<div class="booking_item">
								<div class="background_image" style="background-image:url(images/home9.jpg)"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_item_content">
									<div class="booking_item_list">
										<ul>
											<li>27 m² Patio</li>
											<li>Balcony with view</li>
											<li>Garden / Mountain view</li>
											<li>Flat-screen TV</li>
											<li>Air conditioning</li>
											<li>Soundproofing</li>
											<li>Private bathroom</li>
											<li>Free WiFi</li>
										</ul>
									</div>
								</div>
								<!-- <div class="booking_price">$120/Night</div> -->
								<div class="booking_link"><a href="booking.php">Reagan Homes | Real Estate</a></div>
							</div>

							<!-- Slide -->
							<div class="booking_item">
								<div class="background_image" style="background-image:url(images/home8.jpg)"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_item_content">
									<div class="booking_item_list">
										<ul>
											<li>27 m² Patio</li>
											<li>Balcony with view</li>
											<li>Garden / Mountain view</li>
											<li>Flat-screen TV</li>
											<li>Air conditioning</li>
											<li>Soundproofing</li>
											<li>Private bathroom</li>
											<li>Free WiFi</li>
										</ul>
									</div>
								</div>
								<!-- <div class="booking_price">$120/Night</div> -->
								<div class="booking_link"><a href="booking.php">Nukand Real Estate</a></div>
							</div>

							<!-- Slide -->
							<div class="booking_item">
								<div class="background_image" style="background-image:url(images/home7.jpg)"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_item_content">
									<div class="booking_item_list">
										<ul>
											<li>27 m² Patio</li>
											<li>Balcony with view</li>
											<li>Garden / Mountain view</li>
											<li>Flat-screen TV</li>
											<li>Air conditioning</li>
											<li>Soundproofing</li>
											<li>Private bathroom</li>
											<li>Free WiFi</li>
										</ul>
									</div>
								</div>
								<!-- <div class="booking_price">$120/Night</div> -->
								<div class="booking_link"><a href="booking.php">CBC Properties - Ghana</a></div>
							</div>

						</div>
                        <div class="owl-carousel owl-theme booking_slider">
							
							<!-- Slide -->
							<div class="booking_item">
								<div class="background_image" style="background-image:url(images/home1.jpg)"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_item_content">
									<div class="booking_item_list">
										<ul>
											<li>27 m² Patio</li>
											<li>Balcony with view</li>
											<li>Garden / Mountain view</li>
											<li>Flat-screen TV</li>
											<li>Air conditioning</li>
											<li>Soundproofing</li>
											<li>Private bathroom</li>
											<li>Free WiFi</li>
										</ul>
									</div>
								</div>
								<!-- <div class="booking_price">$120/Night</div> -->
								<div class="booking_link"><a href="booking.php">Ghana Prime Properties</a></div>
							</div>

							<!-- Slide -->
							<div class="booking_item">
								<div class="background_image" style="background-image:url(images/gallery_1.jpg)"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_item_content">
									<div class="booking_item_list">
										<ul>
											<li>27 m² Patio</li>
											<li>Balcony with view</li>
											<li>Garden / Mountain view</li>
											<li>Flat-screen TV</li>
											<li>Air conditioning</li>
											<li>Soundproofing</li>
											<li>Private bathroom</li>
											<li>Free WiFi</li>
										</ul>
									</div>
								</div>
								<!-- <div class="booking_price">$120/Night</div> -->
								<div class="booking_link"><a href="booking.php">Engsi Properties</a></div>
							</div>

							<!-- Slide -->
							<div class="booking_item">
								<div class="background_image" style="background-image:url(images/gallery_2.jpg)"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_item_content">
									<div class="booking_item_list">
										<ul>
											<li>27 m² Patio</li>
											<li>Balcony with view</li>
											<li>Garden / Mountain view</li>
											<li>Flat-screen TV</li>
											<li>Air conditioning</li>
											<li>Soundproofing</li>
											<li>Private bathroom</li>
											<li>Free WiFi</li>
										</ul>
									</div>
								</div>
								<!-- <div class="booking_price">$120/Night</div> -->
								<div class="booking_link"><a href="booking.php">Koans Estate</a></div>
							</div>

						</div>
						<div class="owl-carousel owl-theme booking_slider">
							
							<!-- Slide -->
							<div class="booking_item">
								<div class="background_image" style="background-image:url(images/gallery_3.jpg)"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_item_content">
									<div class="booking_item_list">
										<ul>
											<li>27 m² Patio</li>
											<li>Balcony with view</li>
											<li>Garden / Mountain view</li>
											<li>Flat-screen TV</li>
											<li>Air conditioning</li>
											<li>Soundproofing</li>
											<li>Private bathroom</li>
											<li>Free WiFi</li>
										</ul>
									</div>
								</div>
								<!-- <div class="booking_price">$120/Night</div> -->
								<div class="booking_link"><a href="booking.php">GreenField Estate</a></div>
							</div>

							<!-- Slide -->
							<div class="booking_item">
								<div class="background_image" style="background-image:url(images/gallery_4.jpg)"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_item_content">
									<div class="booking_item_list">
										<ul>
											<li>27 m² Patio</li>
											<li>Balcony with view</li>
											<li>Garden / Mountain view</li>
											<li>Flat-screen TV</li>
											<li>Air conditioning</li>
											<li>Soundproofing</li>
											<li>Private bathroom</li>
											<li>Free WiFi</li>
										</ul>
									</div>
								</div>
								<!-- <div class="booking_price">$120/Night</div> -->
								<div class="booking_link"><a href="booking.php">Meqasa</a></div>
							</div>

							<!-- Slide -->
							<div class="booking_item">
								<div class="background_image" style="background-image:url(images/home2.webp)"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_item_content">
									<div class="booking_item_list">
										<ul>
											<li>27 m² Patio</li>
											<li>Balcony with view</li>
											<li>Garden / Mountain view</li>
											<li>Flat-screen TV</li>
											<li>Air conditioning</li>
											<li>Soundproofing</li>
											<li>Private bathroom</li>
											<li>Free WiFi</li>
										</ul>
									</div>
								</div>
								<!-- <div class="booking_price">$120/Night</div> -->
								<div class="booking_link"><a href="booking.php">YOOYI.properties</a></div>
							</div>

						</div>
                        <div class="owl-carousel owl-theme booking_slider">
							
							<!-- Slide -->
							<div class="booking_item">
								<div class="background_image" style="background-image:url(images/home3.jpg)"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_item_content">
									<div class="booking_item_list">
										<ul>
											<li>27 m² Patio</li>
											<li>Balcony with view</li>
											<li>Garden / Mountain view</li>
											<li>Flat-screen TV</li>
											<li>Air conditioning</li>
											<li>Soundproofing</li>
											<li>Private bathroom</li>
											<li>Free WiFi</li>
										</ul>
									</div>
								</div>
								<!-- <div class="booking_price">$120/Night</div> -->
								<div class="booking_link"><a href="booking.php">DreamFix Realty</a></div>
							</div>

							<!-- Slide -->
							<div class="booking_item">
								<div class="background_image" style="background-image:url(images/home4.png)"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_item_content">
									<div class="booking_item_list">
										<ul>
											<li>27 m² Patio</li>
											<li>Balcony with view</li>
											<li>Garden / Mountain view</li>
											<li>Flat-screen TV</li>
											<li>Air conditioning</li>
											<li>Soundproofing</li>
											<li>Private bathroom</li>
											<li>Free WiFi</li>
										</ul>
									</div>
								</div>
								<!-- <div class="booking_price">$120/Night</div> -->
								<div class="booking_link"><a href="booking.php">Home Style Realty Ghana</a></div>
							</div>

							<!-- Slide -->
							<div class="booking_item">
								<div class="background_image" style="background-image:url(images/home5.jpeg)"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_item_content">
									<div class="booking_item_list">
										<ul>
											<li>27 m² Patio</li>
											<li>Balcony with view</li>
											<li>Garden / Mountain view</li>
											<li>Flat-screen TV</li>
											<li>Air conditioning</li>
											<li>Soundproofing</li>
											<li>Private bathroom</li>
											<li>Free WiFi</li>
										</ul>
									</div>
								</div>
								<!-- <div class="booking_price">$120/Night</div> -->
								<div class="booking_link"><a href="booking.php">Square Mile Homes</a></div>
							</div>

						</div>
						<div class="owl-carousel owl-theme booking_slider">
							
							<!-- Slide -->
							<div class="booking_item">
								<div class="background_image" style="background-image:url(images/home6.jpg)"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_item_content">
									<div class="booking_item_list">
										<ul>
											<li>27 m² Patio</li>
											<li>Balcony with view</li>
											<li>Garden / Mountain view</li>
											<li>Flat-screen TV</li>
											<li>Air conditioning</li>
											<li>Soundproofing</li>
											<li>Private bathroom</li>
											<li>Free WiFi</li>
										</ul>
									</div>
								</div>
								<!-- <div class="booking_price">$120/Night</div> -->
								<div class="booking_link"><a href="booking.php">Akka Kappa Ltd</a></div>
							</div>

							<!-- Slide -->
							<div class="booking_item">
								<div class="background_image" style="background-image:url(images/home7.jpg)"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_item_content">
									<div class="booking_item_list">
										<ul>
											<li>27 m² Patio</li>
											<li>Balcony with view</li>
											<li>Garden / Mountain view</li>
											<li>Flat-screen TV</li>
											<li>Air conditioning</li>
											<li>Soundproofing</li>
											<li>Private bathroom</li>
											<li>Free WiFi</li>
										</ul>
									</div>
								</div>
								<!-- <div class="booking_price">$120/Night</div> -->
								<div class="booking_link"><a href="booking.php">Jeleel city Estate</a></div>
							</div>

							<!-- Slide -->
							<div class="booking_item">
								<div class="background_image" style="background-image:url(images/home8.jpg)"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_item_content">
									<div class="booking_item_list">
										<ul>
											<li>27 m² Patio</li>
											<li>Balcony with view</li>
											<li>Garden / Mountain view</li>
											<li>Flat-screen TV</li>
											<li>Air conditioning</li>
											<li>Soundproofing</li>
											<li>Private bathroom</li>
											<li>Free WiFi</li>
										</ul>
									</div>
								</div>
								<!-- <div class="booking_price">$120/Night</div> -->
								<div class="booking_link"><a href="booking.php">Estate Masters Ltd</a></div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Footer -->

		<?php
			include_once "helpers/footer.php";
		?>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/jquery-datepicker/jquery-ui.js"></script>
<script src="js/booking.js"></script>
</body>
</html>