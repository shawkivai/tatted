
@extends('layouts.menu')

@section('content')

<div id="contacts-bar" class="row">
	<div class="address col-md-6"><strong>TATTED - Tattoo Removal Service</strong>, Sydney, Australia</div>
	<div class="other col-md-6">
		<span class="contact"><i class="fa fa-phone"></i>Phone: <strong>(00) 123 456789</strong></span>
		<span class="contact"><i class="fa fa-envelope"></i>Email: <a href="mailto:email@domain.com"><strong>email@domain.com</strong></a></span>
	</div>
</div>


<!-- ============ Appointment Form ============ -->

@include('pages.appointment')

<!-- ============ Artists - START ============ -->
@include('pages.artist')

<!-- ============ Last Works/ Gallery  ============ -->

<!-- ============ Services ============ -->

@include('pages.services')


<!-- ============ Testimonials Slider - START ============ -->

<!-- ============ Contact form ============ -->
@include('pages.contact')

</main>

<!-- ============ Footer - START ============ -->

@include('layouts.footer')
<!-- ============ Footer - END ============ -->

<div class="content-loader">
<div class="loader"></div>
</div>

</div>

@endSection
