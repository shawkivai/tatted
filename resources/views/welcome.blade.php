
@extends('layouts.menu')

@section('content')

<div id="contacts-bar" class="row">
	<div class="address col-md-6"><strong>TATTED - Tattoo Removal Service</strong>, Sydney, Australia</div>
	<div class="other col-md-6">
		<span class="contact"><i class="fa fa-phone"></i>Phone: <strong>(00) 123 456789</strong></span>
		<span class="contact"><i class="fa fa-envelope"></i>Email: <a href="mailto:email@domain.com"><strong>email@domain.com</strong></a></span>
	</div>
</div>

<!-- ============ Contacts Bar - END ============ -->


<div id="appointment" class="section cta dark">
	
	<h2>Are you ready to get a tattoo?</h2>
	
	<div class="cta-info">Request an appointment <strong>NOW</strong>!</div>

	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="col-md-6 input-text">
				<input type="text" placeholder="Enter PostCode" style="color:gray">
			</div>
			<div class="col-md-6 input-text">
				<input type="text" placeholder="Select Suburb">
			</div>
			
		</div>
		<div class="col-md-4"></div>
	</div>
	<a class="btn md light btn-popup" href="#request"><i class="fa fa-thumb-tack"></i>Appointment</a>

	<!-- ============ Appointment Form - START ============ -->

	<form id="request" class="contact-form popup mfp-hide" action="https://demo.webisir.com/the-tattooist/mailer/appointment.php" method="post">

		<div class="head"><img src="img/logo.png" alt="logo"></div>
		<h3 class="focus-title"><i class="fa fa-thumb-tack"></i>Request an appointment</h3>

		<label>
			<strong>First Name *</strong>
			<input class="required" type="text" name="first_name">
		</label>
		<label>
			<strong>Last Name *</strong>
			<input class="required" type="text" name="last_name">
		</label>
		<label>
			<strong>Email *</strong>
			<input class="required" type="text" name="email">
		</label>
		<label>
			<strong>Phone Number *</strong>
			<input class="required" type="text" name="phone">
		</label>
		<label>
			<strong>Part of the Body</strong>
			<select name="part_body">
				<option value="Leg">Leg</option>
				<option value="Calf">Calf</option>
				<option value="Ankle">Ankle</option>
				<option value="Foot">Foot</option>
				<option value="Arm">Arm</option>
				<option value="Forearm">Forearm</option>
				<option value="Wrist">Wrist</option>
				<option value="Hand">Hand</option>
				<option value="Nek">Nek</option>
				<option value="Head">Head</option>
				<option value="Back">Back</option>
				<option value="Buttocks">Buttocks</option>
				<option value="Genitals">Genitals</option>
				<option class="other" value="Other">Other (Specify below)</option>
			</select>
		</label>
		<label id="other" class="hidden-field">
			<strong>Specific Part of Body</strong>
			<input type="text" name="custom">
		</label>
		<label><strong>Tattoo Size *</strong> (ex: 5x4)
			<input class="required" type="text" name="size">
		</label>
		<div class="radio label">
			<strong>Tattoo Color</strong>
			<label>
				<input type="radio" value="Black &amp; White" name="color" checked>
				<span class="radio-replacer"></span>
				<span>Black &amp; White</span>
			</label>
			<label>
				<input class="required" type="radio" value="Color" name="color">
				<span class="radio-replacer"></span>
				<span>Color</span>
			</label>                                              
		</div>
		<label><strong>Tattoo Description *</strong>
			<textarea class="required" name="description"></textarea>
		</label>
		<div class="radio image-radio label">
			<strong>Choose an Artist</strong>
			
			<label>
				<input type="radio" value="Sara" name="artist">
				<span><img src="img/sara.jpg" alt="Sara Van Morgan"><span>Sara</span></span>
			</label>

			<label>
				<input type="radio" value="Susy" name="artist">
				<span><img src="img/susy.jpg" alt="Susy Henna"><span>Susy</span></span>
			</label>                                            
		</div>
		<hr>
			<label>
			<input class="required" type="checkbox" name="check">
			<span class="checkbox-replacer"></span>
			<strong>Check to authorize the system *</strong>
		</label>
		<hr>
		<p>( <strong>*</strong> ) = Mandatory field</p>
		<input class="submit btn md" type="submit" name="submit" value="Request Appointment">
		<input type="hidden" name="form_type" value="appointment">

	</form>

	<!-- ============ Appointment Form - END ============ -->

</div>


<!-- ============ Last Works - START ============ -->

<div id="last-works" class="section">

	<div class="section-title bg-glyph diamond center">
		<h2>Last Works</h2>
	</div>  
	
	<div class="content container">
		
		<div class="works">
			
			<div class="work col-md-3 col-sm-6">

				<div class="work-thumb">
					<img src="img/tattoos/square-thumbs/square-thumb-01.jpg" alt="Work 01">
					<div class="thumb-links">
						<a class="zoom" href="img/tattoos/tattoo-01.jpg"></a>
					</div>
				</div>

			</div>

			<div class="work col-md-3 col-sm-6">

				<div class="work-thumb">
					<img src="img/tattoos/square-thumbs/square-thumb-02.jpg" alt="Work 02">
					<div class="thumb-links">
						<a class="zoom" href="img/tattoos/tattoo-02.jpg"></a>
					</div>
				</div>

			</div>

			<div class="work col-md-3 col-sm-6">

				<div class="work-thumb">
					<img src="img/tattoos/square-thumbs/square-thumb-03.jpg" alt="Work 03">
					<div class="thumb-links">
						<a class="zoom" href="img/tattoos/tattoo-03.jpg"></a>
					</div>
				</div>

			</div>

			<div class="work col-md-3 col-sm-6">

				<div class="work-thumb">
					<img src="img/tattoos/square-thumbs/square-thumb-04.jpg" alt="Work 04">
					<div class="thumb-links">
						<a class="zoom" href="img/tattoos/tattoo-04.jpg"></a>
					</div>
				</div>

			</div>

			<div class="work col-md-3 col-sm-6"> 

				<div class="work-thumb">
					<img src="img/tattoos/square-thumbs/square-thumb-05.jpg" alt="Work 05">
					<div class="thumb-links">
						<a class="zoom" href="img/tattoos/tattoo-05.jpg"></a>
					</div>
				</div>

			</div>

			<div class="work col-md-3 col-sm-6">

				<div class="work-thumb">
					<img src="img/tattoos/square-thumbs/square-thumb-06.jpg" alt="Work 06">
					<div class="thumb-links">
						<a class="zoom" href="img/tattoos/tattoo-06.jpg"></a>
					</div>
				</div>

			</div>

			<div class="work col-md-3 col-sm-6">

				<div class="work-thumb">
					<img src="img/tattoos/square-thumbs/square-thumb-07.jpg" alt="Work 07">
					<div class="thumb-links">
						<a class="zoom" href="img/tattoos/tattoo-07.jpg"></a>
					</div>
				</div>

			</div>

			<div class="work col-md-3 col-sm-6">

				<div class="work-thumb">
					<img src="img/tattoos/square-thumbs/square-thumb-08.jpg" alt="Work 08">
					<div class="thumb-links">
						<a class="zoom" href="img/tattoos/tattoo-08.jpg"></a>
					</div>
				</div>

			</div>

			<div class="work col-md-3 col-sm-6">

				<div class="work-thumb">
					<img src="img/tattoos/square-thumbs/square-thumb-09.jpg" alt="Work 09">
					<div class="thumb-links">
						<a class="zoom" href="img/tattoos/tattoo-09.jpg"></a>
					</div>
				</div>

			</div>

			<div class="work col-md-3 col-sm-6">

				<div class="work-thumb">
					<img src="img/tattoos/square-thumbs/square-thumb-10.jpg" alt="Work 10">
					<div class="thumb-links">
						<a class="zoom" href="img/tattoos/tattoo-10.jpg"></a>
					</div>
				</div>

			</div>

			<div class="work col-md-3 col-sm-6">
			
				<div class="work-thumb">
					<img src="img/tattoos/square-thumbs/square-thumb-12.jpg" alt="Work 12">
					<div class="thumb-links">
						<a class="zoom" href="img/tattoos/tattoo-12.jpg"></a>
					</div>
				</div>

			</div>

			<div class="work col-md-3 col-sm-6">

				<div class="work-thumb">
					<img src="img/tattoos/square-thumbs/square-thumb-13.jpg" alt="Work 13">
					<div class="thumb-links">
						<a class="zoom" href="img/tattoos/tattoo-13.jpg"></a>
					</div>
				</div>

			</div>

		</div>

	</div>

</div>

<!-- ============ Last Works - END ============ --> 

<!-- ============ Services - START ============ -->

<div id="services" class="section dark">

	<div class="section-title bg-glyph pen center transparent">
		<h2>Services</h2>
	</div>

	<div class="content container">

		<div class="row">

			<div class="col-md-4">
				<h3>Modern Tattoo</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, eum ullam accusantium eius repudiandae optio consequuntur debitis placeat itaque expedita nihil.</p>
			</div>
			<div class="col-md-4">
				<h3>Old School Tattoo</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, eum ullam accusantium eius repudiandae optio consequuntur debitis placeat itaque expedita nihil.</p>
			</div>
			<div class="col-md-4">
				<h3>Tribal Tattoo</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, eum ullam accusantium eius repudiandae optio consequuntur debitis placeat itaque expedita nihil.</p>
			</div>
			<div class="col-md-4">
				<h3>Henna</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, eum ullam accusantium eius repudiandae optio consequuntur debitis placeat itaque expedita nihil.</p>
			</div>
			<div class="col-md-4">
				<h3>Piercing</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, eum ullam accusantium eius repudiandae optio consequuntur debitis placeat itaque expedita nihil.</p>
			</div>
			<div class="col-md-4">
				<h3>Body Modification</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, eum ullam accusantium eius repudiandae optio consequuntur debitis placeat itaque expedita nihil.</p>
			</div>

		</div>

	</div>

</div>

<div class="section text-center">
	
	<div class="content container">

		<div class="row">
			
			<div class="milestone col-md-3 col-sm-6">
				
				<div class="milestone-count">+ 15K</div>
				<div class="milestone-arg">Satisfied customers</div>

			</div>

			<div class="milestone col-md-3 col-sm-6">
				
				<div class="milestone-count">+ 22K</div>
				<div class="milestone-arg">Tattoos</div>

			</div>

			<div class="milestone col-md-3 col-sm-6">
				
				<div class="milestone-count">+ 3500</div>
				<div class="milestone-arg">Piercings</div>

			</div>

			<div class="milestone col-md-3 col-sm-6">
				
				<div class="milestone-count">35</div>
				<div class="milestone-arg">International awards</div>

			</div>

		</div>
		
	</div>

</div>

<!-- ============ Milestones- END ============ -->

<!-- ============ Call to Action - START ============ -->

<!-- ============ Call to Action - END ============ -->

<!-- ============ Artists - START ============ -->

<div id="artists" class="section">
	
	<div class="section-title bg-glyph punch center">
		<h2>Our Artists</h2>
	</div>

	<div class="content container">

		<div class="row">

			<div class="col-md-4 artist bg-glyph pens center">


				<h3 class="artist-name">Patrick Tattoomaker</h3>
				<div class="artist-role">Tribal and Modern Tattoos</div>
				<div class="artist-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis doloribus totam quidem temporibus omnis, ab esse atque unde obcaecati voluptate. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>

				<ul class="social-links">
					<li><a title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a title="Instagram" href="#"><i class="fa fa-instagram"></i></a></li>
				</ul>

			</div>

			<div class="col-md-4 artist bg-glyph pens center">

				<img class="rounded" src="img/sara.jpg" alt="Sara Van Morgan">

				<h3 class="artist-name">Sara Van Morgan</h3>
				<div class="artist-role">Old School Tattoos</div>
				<div class="artist-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis doloribus totam quidem temporibus omnis, ab esse atque unde obcaecati voluptate. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>

				<ul class="social-links">
					<li><a title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a title="Instagram" href="#"><i class="fa fa-instagram"></i></a></li>
					<li><a title="LinkedIn" href="#"><i class="fa fa-linkedin"></i></a></li>
				</ul>

			</div>

			<div class="col-md-4 artist bg-glyph pens center">

				<img class="rounded" src="img/susy.jpg" alt="Susy Henna">

				<h3 class="artist-name">Susy Henna</h3>
				<div class="artist-role">Henna and Piercings</div>
				<div class="artist-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis doloribus totam quidem temporibus omnis, ab esse atque unde obcaecati voluptate. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>

				<ul class="social-links">
					<li><a title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a title="Google+" href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a title="Instagram" href="#"><i class="fa fa-instagram"></i></a></li>
				</ul>

			</div>

		</div>

	</div>

</div>

<!-- ============ Artists - END ============ -->

<!-- ============ Instagram Banner - START ============ -->

<!-- <a class="instagram-bar feed-bg" href="#">See all works on <strong>Instagram</strong>!</a> -->

<!-- ============ Instagram Banner - END ============ --> 

<!-- ============ Testimonials Slider - START ============ -->

<div id="testimonials" class="section">

	<div class="section-title bg-glyph skull center">
		<h2>Testimonials</h2>
	</div>

	<div class="content container">

		<div class="testimonials-slider flexslider" data-animation="slide" data-autoplay="true">
			<ul class="slides">
				<li>
					<div class="testimonial">
						<img class="rounded" src="img/jane.jpg" alt="Jane Ink">
						<blockquote>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
							<cite>Jane Ink</cite>
						</blockquote>

					</div>
				</li>
				<li>
					<div class="testimonial">
						<img class="rounded" src="img/frank.jpg" alt="Frank Wolf">
						<blockquote>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
							<cite>Frank Wolf</cite>
						</blockquote>
					</div>
				</li>
				<li>
					<div class="testimonial">
						<img class="rounded" src="img/harry.jpg" alt="Harry Winston">
						<blockquote>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
							<cite>Harry Winston</cite>
						</blockquote>
					</li>
				</li>
			</ul>
		</div>

	</div>

</div>

<div id="contacts" class="section">
	
	<div class="section-title bg-glyph yinyang center">
		<h2>Contact Us</h2>
	</div>

	<div class="content container">

		<form class="contact-form row" action="https://demo.webisir.com/the-tattooist/mailer/contact.php" method="post">
			<div class="col-md-6">
				<label><strong>Full Name *</strong>
					<input class="required" type="text" name="name">
				</label>
				<label><strong>Email *</strong>
					<input class="required" type="text" name="email">
				</label>
				<label><strong>Subject</strong>
					<select name="subject">
						<option value="Subject 1">A simple question</option>
						<option value="Subject 2">Tattoo appointment</option>
						<option value="Subject 3">Piercing appointment</option>
						<option value="Subject 4">Press</option>
					</select>
				</label>
			</div>
			<div class="col-md-6">
				<label><strong>Message *</strong>
					<textarea class="required" name="message"></textarea>
				</label>
				<p>( <strong>*</strong> ) = Mandatory field</p>
				<input class="submit btn md" type="submit" name="submit" value="Send Message">
			</div>
			<input type="hidden" name="form_type" value="contact"> 
		</form>
		
	</div>      

</div>

<!-- ============ Contact form - END ============ -->

<!-- ============ Map - START ============ -->

<div id="map"></div>

<!-- ============ Map - END ============ -->

</main>

<!-- ============ Footer - START ============ -->


<!-- ============ Footer - END ============ -->

<div class="content-loader">
<div class="loader"></div>
</div>

</div>

<!-- 
<script>
var slides = ['img/home-slide-2.jpg', 'img/home-slide-3.jpg', 'img/home-slide-2.jpg'];
$('#media-container').backstretch( slides, {duration: 1800, fade: 800} );
</script> -->

<!-- Google Map Scripts -->
<script src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
<script src="js/map.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39822577-12', 'auto');
  ga('send', 'pageview');

</script>

@endSection
