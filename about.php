<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			include_once "helpers/head.php";
		?>
		<link rel="stylesheet" type="text/css" href="styles/about.css">
		<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
	</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<!-- <div class="logo"><a href="#">RemitBuilt</a></div> -->
			<img src="images/logo.png" alt="" height="150px">
			<div class="ml-auto d-flex flex-row align-items-center justify-content-start">
				<nav class="main_nav">
					<ul class="d-flex flex-row align-items-start justify-content-start">
						<li><a href="index.php">Home</a></li>
						<li class="active"><a href="about.php">About us</a></li>
						<li><a href="#">RE Agents</a></li>
						<li><a href="blog.php">Blog</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</nav>
				<div class="book_button"><a href="booking.php">Get Home</a></div>
				<!-- <div class="header_phone d-flex flex-row align-items-center justify-content-center">
					<img src="images/phone.png" alt="">
					<span>0183-12345678</span>
				</div> -->

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
		<div class="background_image" style="background-image:url(images/about.jpg)"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title">About us</div>
							<div class="booking_form_container">
								<!-- <form action="#" class="booking_form" id="booking_form">
									<div class="d-flex flex-xl-row flex-column align-items-start justify-content-start">
										<div class="booking_input_container d-flex flex-row align-items-start justify-content-start flex-wrap">
											<div><input type="text" class="datepicker booking_input booking_input_a booking_in" placeholder="Check in" required="required"></div>
											<div><input type="text" class="datepicker booking_input booking_input_a booking_out" placeholder="Check out" required="required"></div>
											<div><input type="number" class="booking_input booking_input_b" placeholder="Children" required="required"></div>
											<div><input type="number" class="booking_input booking_input_b" placeholder="Room" required="required"></div>
										</div>
										<div><button class="booking_button trans_200">Book Now</button></div>
									</div>
								</form> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="about_title"><h2>RemitBuild</h2></div>
				</div>
			</div>
			<div class="row about_row">
				
				<!-- About Content -->
				<div class="col-lg-6">
					<div class="about_content">
						<div class="about_text">
							<p>RemitBuild is a leading platform dedicated to facilitating seamless connections between homebuyers and real estate professionals. Our innovative platform leverages cutting-edge technology and industry expertise to simplify the home buying process, providing homebuyers with access to a network of trusted real estate agents, brokers, and developers.</p>
						</div>
						<div class="about_sig"><img src="images/sig.png" alt=""></div>
					</div>
				</div>

				<!-- About Images -->
				<div class="col-lg-6">
					<div class="about_images d-flex flex-row align-items-start justify-content-between flex-wrap">
						<img src="images/about_1.png" alt="">
						<img src="images/about_2.png" alt="">
						<img src="images/about_3.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Split Section Right -->

	<div class="split_section_right container_custom">
		<div class="container">
			<div class="row row-xl-eq-height">
				
				<div class="col-xl-6 order-xl-1 order-2">
					<div class="split_section_image">
						<div class="background_image" style="background-image:url(images/milestones.jpg)"></div>
					</div>
				</div>

				<div class="col-xl-6 order-xl-2 order-1">
					<div class="split_section_right_content">
						<div class="split_section_title"><h1>RemitBuild: Bridging Dreams to Realty</h1></div>
						<div class="split_section_text">
							<p>At RemitBuild, we're dedicated to transforming dreams of homeownership into tangible realities by connecting aspiring homebuyers with experienced real estate professionals. Our platform serves as the conduit between individuals seeking their ideal homes and the experts who possess the knowledge and resources to make those dreams come true.</p>
						</div>

						<!-- Milestones -->
						<div class="milestones_container d-flex flex-row align-items-start justify-content-start flex-wrap">
								
							<!-- Milestone -->
							<div class="milestone d-flex flex-row align-items-start justify-content-start">
								<div class="milestone_content">
									<div class="milestone_counter" data-end-value="45">0</div>
									<div class="milestone_title">Homes available</div>
								</div>
							</div>

							<!-- Milestone -->
							<div class="milestone d-flex flex-row align-items-start justify-content-start">
								<div class="milestone_content">
									<div class="milestone_counter" data-end-value="21" data-sign-after="K">0</div>
									<div class="milestone_title">Clients this year</div>
								</div>
							</div>

							<!-- Milestone -->
							<div class="milestone d-flex flex-row align-items-start justify-content-start">
								<div class="milestone_content">
									<div class="milestone_counter" data-end-value="2">0</div>
									<div class="milestone_title">Clients last year</div>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Split Section Left -->

	<div class="split_section_left container_custom">
		<div class="container">
			<div class="row">
				<div class="col-xl-6">
					<div class="split_section_left_content">
						<div class="split_section_title"><h1>RemitBuild: Your Premier Real Estate Partner</h1></div>
						<div class="split_section_text">
							<p>At RemitBuild, we specialize in connecting homebuyers with their dream properties. Our mission is to streamline the homebuying process, providing unparalleled service and expertise every step of the way.</p>
						</div>

						<!-- Loaders -->
						<div class="loaders_container d-flex flex-row align-items-start justify-content-start flex-wrap">
							
							<!-- Loader -->
							<div class="loader_container text-center">
								<div class="loader text-center" data-perc="0.9">
									<div class="loader_content">
										<div class="loader_title">Good Services</div>
									</div>
								</div>
							</div>

							<!-- Loader -->
							<div class="loader_container text-center">
								<div class="loader text-center" data-perc="0.8">
									<div class="loader_content">
										<div class="loader_title">Experts</div>
									</div>
								</div>
							</div>

							<!-- Loader -->
							<div class="loader_container text-center">
								<div class="loader text-center" data-perc="1.0">
									<div class="loader_content">
										<div class="loader_title">Satisfaction</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Loaders Image -->
				<div class="col-xl-6">
					<div class="split_section_image split_section_left_image">
						<div class="background_image" style="background-image:url(images/loaders.jpg)"></div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Testimonials -->

	<div class="testimonials">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/testimonials.jpg" data-speed="0.8"></div>
		<div class="testimonials_overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="testimonials_slider_container">

						<!-- Testimonials Slider -->
						<div class="owl-carousel owl-theme test_slider">
							
							<!-- Slide -->
							<div  class="test_slider_item text-center">
								<div class="rating rating_5 d-flex flex-row align-items-start justify-content-center"><i></i><i></i><i></i><i></i><i></i></div>
								<div class="testimonial_title"><a href="#">Perfect Stay</a></div>
								<div class="testimonial_text">
									<p>Thanks to RemitBuild, I found the perfect place to call home. Their expertise and professionalism made the process smooth and stress-free.</p>
								</div>
								<div class="testimonial_image"><img src="images/testimonial_2.jpeg" alt=""></div>
								<div class="testimonial_author"><a href="#">Chinonso M.</a>, Ghana</div>
							</div>

							<!-- Slide -->
							<div  class="test_slider_item text-center">
								<div class="rating rating_5 d-flex flex-row align-items-start justify-content-center"><i></i><i></i><i></i><i></i><i></i></div>
								<div class="testimonial_title"><a href="#">Nice place</a></div>
								<div class="testimonial_text">
									<p>RemitBuild made finding my dream home effortless. Their team's professionalism and dedication are unmatched. Highly recommend!</p>
								</div>
								<div class="testimonial_image"><img src="images/testimonial_3.jpeg" alt=""></div>
								<div class="testimonial_author"><a href="#">Olamide O.</a>, Ghana</div>
							</div>

							<!-- Slide -->
							<div  class="test_slider_item text-center">
								<div class="rating rating_5 d-flex flex-row align-items-start justify-content-center"><i></i><i></i><i></i><i></i><i></i></div>
								<div class="testimonial_title"><a href="#">We loved it</a></div>
								<div class="testimonial_text">
									<p>Exceptional service from start to finish. RemitBuild listened to my needs and found me the perfect home. Couldn't be happier!</p>
								</div>
								<div class="testimonial_image"><img src="images/testimonial_4.jpeg" alt=""></div>
								<div class="testimonial_author"><a href="#">Tunde B.</a>, Ghana</div>
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
<script src="js/about.js"></script>
</body>
</html>