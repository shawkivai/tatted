@extends('layouts.menu')

@section('menu')

<div class="container">

<!-- ============ Main Navigation - START ============ -->

<div class="row">
    <div class="col-md-9">
        <a id="nav-toggle" href="#"><span></span></a>
        <nav id="nav-menu">
            <ul>   
                <!-- <li><a title="Last Works" href="#last-works">Last Works</a></li> -->
                <li><a title="Services" href="#services">Services</a></li>
                <li><a title="Artists" href="#artists">Artists</a></li>
                <li><a title="Contact Us" href="#contacts">Contact Us</a></li>
                <li><a title="Appointment" href="#appointment"><i class="fa fa-thumb-tack"></i>Appointment</a></li>
            </ul>
            
        </nav>
    </div>
    
    <div class="col-md-3">
        <button class="button button2"><a href="{{route('business.register')}}"><i class="fa fa-thumb-tack"></i>Register Business </a></button>
    </div>
</div>

 <!-- ============ Main Navigation - END ============ -->

</div>

@endSection