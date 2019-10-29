<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<?php require_once 'head.php'; ?>
	<title>Axelerant | Home</title>
</head>
<body>
	<?php require_once 'header.php'; ?>
	<main class="homepage">
		<section class="hm_banner container">
			<div class="hm_banner_content">
				<h2 class="banner_ttl title">Lorem ipsum dolor sit amet consectetur adipisicing</h2>
				<div class="banner_services">
					<div class="banner_service_blk">
						<div class="banner_service_blk_wrap">
							<img src="assets/images/home/services/1.png" alt="" class="responsive_img"/>
							<h4 class="banner_service_name">Service Name</h4>
						</div>
					</div>
					<div class="banner_service_blk">
						<div class="banner_service_blk_wrap">
							<img src="assets/images/home/services/2.png" alt="" class="responsive_img"/>
							<h4 class="banner_service_name">Service Name</h4>
						</div>
					</div>
					<div class="banner_service_blk">
						<div class="banner_service_blk_wrap">
							<img src="assets/images/home/services/3.png" alt="" class="responsive_img"/>
							<h4 class="banner_service_name">Service Name</h4>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="hm_about container">
			<div class="hm_left_blk hm_abt_blk">
				<h2 class="sub_title">
					Mauris turpis nunc, blandit et, volutpat molestie, porta ut, ligula. Fusce pharetra convallis urna perspiciatis excepturi.
				</h2>
				<p class="para">
					Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum repellat earum eos, nobis optio rem. Mollitia perspiciatis excepturi sapiente. Consequatur aperiam explicabo suscipit quis consectetur incidunt temporibus libero omnis labore. Duis vel nibh at velit scelerisque suscipit. Curabitur turpis. Vestibulum suscipit nulla quis orci. Fusce ac felis sit amet ligula pharetra condimentum. Maecenas egestas arcu quis ligula mattis placerat. Duis lobortis massa imperdiet quam. 
				</p>
			</div>
			<div class="hm_right_blk hm_abt_blk">
				<img src="assets/images/home/about.jpg" alt="" class="responsive_img">
			</div>
		</section>
		<section class="hm_testimonial container">
			<h2 class="sub_title text_center">
				Testimonials
			</h2>
			<div class="testimonials_slider">
				<div class="testimonials_slides">
					<div class="testimonials_content__blk">
						Vivamus laoreet. Nullam tincidunt adipiscing enim. Phasellus tempus. Proin viverra, ligula sit amet ultrices semper, ligula arcu tristique sapien, a accumsan nisi mauris ac eros. Fusce neque. Suspendisse faucibus,
					</div>
					<div class="testimonials_person_blk">
						<div class="testimonials_avatar">
							<img src="assets/images/home/avatar.png" alt="" class="responsive_img"/>
						</div>
						<div class="testimonials_person_info">
							<h4 class="testimonials_person_name">CLIENT NAME</h4>
							<h5 class="testimonials_person_designation">Position, ORG</h5>
						</div>
					</div>
				</div>
				<div class="testimonials_slides">
					<div class="testimonials_content__blk">
						nunc et pellentesque egestas, lacus ante convallis tellus, vitae iaculis lacus elit id tortor. Vivamus aliquet elit ac nisl. Fusce fermentum odio nec arcu. Vivamus euismod mauris.
					</div>
					<div class="testimonials_person_blk">
						<div class="testimonials_avatar">
							<img src="assets/images/home/avatar.png" alt="" class="responsive_img"/>
						</div>
						<div class="testimonials_person_info">
							<h4 class="testimonials_person_name">CLIENT NAME</h4>
							<h5 class="testimonials_person_designation">Position, ORG</h5>
						</div>
					</div>
				</div>
				<div class="testimonials_slides">
					<div class="testimonials_content__blk">
						In ut quam vitae odio lacinia tincidunt. Praesent ut ligula non mi varius sagittis. Cras sagittis. Praesent ac sem eget est egestas volutpat. Vivamus consectetuer hendrerit lacus. Cras non dolor.
					</div>
					<div class="testimonials_person_blk">
						<div class="testimonials_avatar">
							<img src="assets/images/home/avatar.png" alt="" class="responsive_img"/>
						</div>
						<div class="testimonials_person_info">
							<h4 class="testimonials_person_name">CLIENT NAME</h4>
							<h5 class="testimonials_person_designation">Position, ORG</h5>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="hm_work_with_us container">
			<h2 class="sub_title text_center">
				Convinced to work with us?
			</h2>
			<h3 class="sub_title_sm text_center">
				Company has helped agencies keep their promises to clients since 2005.
			</h3>
			<form class="work_with_us__from">
				<div class="work_with_us_form_row">
					<div class="form_input_group">
						<input type="text" name="fullname" id="fullname" class="form_input" placeholder="Fullname" required="" /> 
					</div>
					<div class="form_input_group">
						<input type="text" name="email" id="email" class="form_input" placeholder="Email Address" required="" /> 
					</div>
					<div class="form_input_group">
						<input type="text" name="phone" id="phone" class="form_input" placeholder="Phone Number" required="" /> 
					</div>
				</div>
				<textarea name="message" id="message" class="form_input from_text_area" required="" placeholder="Message in brief"></textarea>

				<input type="submit" value="submit" class="cta work_with_us_cta"/>
			</form>
		</section>
	</main>
    <?php require_once 'footer.php'; ?>
</body>
</html>