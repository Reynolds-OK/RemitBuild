<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			include_once "helpers/head.php";
		?>
		<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
		<link rel="stylesheet" type="text/css" href="styles/responsive.css">
	</head>
	
	<body>
	
	<div class="super_container">
		
		<!-- Header -->
		<?php
			include_once "helpers/header.php";
		?>
	
		<!-- Home -->
	
		<?php
			include_once "helpers/banner.php";
		?>
	
		<!-- Features -->
	
		<div class="features">
			<div class="container">
				<div class="row">
					
					<!-- Icon Box -->
					<div class="col-lg-4 icon_box_col">
						<div class="icon_box d-flex flex-column align-items-center justify-content-start text-center">
							<div class="icon_box_icon"><img src="images/icon_1.svg" class="svg" alt="https://www.flaticon.com/authors/monkik"></div>
							<div class="icon_box_title"><h2>Comprehensive Listings Database</h2></div>
							<div class="icon_box_text">
								<p>Provides a vast database of existing apartment listings with detailed information such as location, size, price, amenities, photos, and virtual tours.</p>
							</div>
						</div>
					</div>
	
					<!-- Icon Box -->
					<div class="col-lg-4 icon_box_col">
						<div class="icon_box d-flex flex-column align-items-center justify-content-start text-center">
							<div class="icon_box_icon"><img src="images/icon_2.svg" class="svg" alt="https://www.flaticon.com/authors/monkik"></div>
							<div class="icon_box_title"><h2>Advanced Search and Filtering</h2></div>
							<div class="icon_box_text">
								<p>Allows users to refine their search based on specific criteria like budget, number of bedrooms, amenities, proximity to desired locations (work, schools, etc.)</p>
							</div>
						</div>
					</div>
	
					<!-- Icon Box -->
					<div class="col-lg-4 icon_box_col">
						<div class="icon_box d-flex flex-column align-items-center justify-content-start text-center">
							<div class="icon_box_icon"><img src="images/icon_3.svg" class="svg" alt="https://www.flaticon.com/authors/monkik"></div>
							<div class="icon_box_title"><h2>User-Friendly Interface</h2></div>
							<div class="icon_box_text">
								<p>Offers a clean, intuitive interface that is easy to navigate for both buying and building functionalities.</p>
							</div>
						</div>
					</div>
	
				</div>
			</div>
		</div>
	
		<!-- Gallery -->
	
		<div class="gallery">
			<div class="gallery_slider_container">
				<div class="owl-carousel owl-theme gallery_slider">
					
					<!-- Slide -->
					<div class="gallery_item">
						<div class="background_image" style="background-image:url(images/home3.jpg)"></div>
						<a class="colorbox" href="images/home3.jpg"></a>
					</div>
	
					<!-- Slide -->
					<div class="gallery_item">
						<div class="background_image" style="background-image:url(images/home4.png)"></div>
						<a class="colorbox" href="images/home4.png"></a>
					</div>
	
					<!-- Slide -->
					<div class="gallery_item">
						<div class="background_image" style="background-image:url(images/home5.jpeg)"></div>
						<a class="colorbox" href="images/home5.jpeg"></a>
					</div>
	
					<!-- Slide -->
					<div class="gallery_item">
						<div class="background_image" style="background-image:url(images/home9.jpg)"></div>
						<a class="colorbox" href="images/home9.jpg"></a>
					</div>
	
				</div>
			</div>
		</div>
	
		<!-- About -->
	
		<div class="about">
			<div class="container">
				<div class="row">
					
					<!-- About Content -->
					<div class="col-lg-6">
						<div class="about_content">
							<div class="about_title"><h2>RemitBuild / A Your of Excellence</h2></div>
							<div class="about_text">
								<p></p>
							</div>
						</div>
					</div>
	
					<!-- About Images -->
					<div class="col-lg-6">
						<div class="about_images d-flex flex-row align-items-center justify-content-between flex-wrap">
							<img src="images/about_1.png" alt="">
							<img src="images/about_2.png" alt="">
							<img src="images/about_3.png" alt="">
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
									<div class="testimonial_image"><img src="images/testimonial_2.jpeg  " alt=""></div>
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
	
		<!-- Booking -->
	
		<div class="booking">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="booking_title text-center"><h2>Book a service</h2></div>
						<div class="booking_text text-center">
							<p>At RemitBuild, we're dedicated to transforming dreams of homeownership into tangible realities by connecting aspiring homebuyers with experienced real estate professionals. Our platform serves as the conduit between individuals seeking their ideal homes and the experts who possess the knowledge and resources to make those dreams come true.</p>
						</div>
	
						<!-- Booking Slider -->
						<div class="booking_slider_container">
							<div class="owl-carousel owl-theme booking_slider">
								
								<!-- Slide -->
								<div class="booking_item">
									<div class="background_image" style="background-image:url(images/home9.jpg)"></div>
									<div class="booking_overlay trans_200"></div>
									<!-- <div class="booking_price">$120/Night</div> -->
									<div class="booking_link"><a href="booking.php">Sankofa Housing</a></div>
								</div>
	
								<!-- Slide -->
								<div class="booking_item">
									<div class="background_image" style="background-image:url(images/home8.jpg)"></div>
									<div class="booking_overlay trans_200"></div>
									<!-- <div class="booking_price">$120/Night</div> -->
									<div class="booking_link"><a href="booking.php">Deluxe Estate</a></div>
								</div>
	
								<!-- Slide -->
								<div class="booking_item">
									<div class="background_image" style="background-image:url(images/home7.jpg)"></div>
									<div class="booking_overlay trans_200"></div>
									<!-- <div class="booking_price">$120/Night</div> -->
									<div class="booking_link"><a href="booking.php">SS Ventures</a></div>
								</div>
	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<!-- Blog -->
	
		<!-- <div class="blog">
	
			
			<div class="blog_slider_container">
				<div class="owl-carousel owl-theme blog_slider">
					
					
					<div class="blog_slide">
						<div class="background_image" style="background-image:url(images/index_blog_1.jpg)"></div>
						<div class="blog_content">
							<div class="blog_date"><a href="#">Oct 20, 2018</a></div>
							<div class="blog_title"><a href="#">How to book your stay</a></div>
						</div>
					</div>
	
					
					<div class="blog_slide">
						<div class="background_image" style="background-image:url(images/index_blog_2.jpg)"></div>
						<div class="blog_content">
							<div class="blog_date"><a href="#">Oct 20, 2018</a></div>
							<div class="blog_title"><a href="#">10 restaurants in town</a></div>
						</div>
					</div>
	
					<div class="blog_slide">
						<div class="background_image" style="background-image:url(images/index_blog_3.jpg)"></div>
						<div class="blog_content">
							<div class="blog_date"><a href="#">Oct 20, 2018</a></div>
							<div class="blog_title"><a href="#">A perfect wedding</a></div>
						</div>
					</div>
	
				</div>
			</div> 
		</div>-->
	
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
	<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
	<script src="js/custom.js"></script>
	</body>
</html>