
<div id="appointment" class="section cta dark">
	
	<h2>Are you ready to Remove a tattoo!</h2>
	
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