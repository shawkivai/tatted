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