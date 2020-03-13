@extends('layouts.menu')

@section('menu')

<div class="container">

<!-- ============ Main Navigation - START ============ -->


<div class="row">
    <div class="col-md-3">
    <h1 id="logo" class="menu-logo">
        <a href="{{route('home')}}">
            <img src="img/logo.png" alt="Tatted">
        </a>
    </h1>
    </div>
    <div class="col-md-6"></div>
    
    <div class="col-md-3">
        <button class="button button2"><a href="{{route('business.login')}}"><i class="fa fa-user-plus"></i> Business Login </a></button>
    </div>
</div>

 <!-- ============ Main Navigation - END ============ -->

</div>

<style>

.full-screen #logo, .sticky .full-screen #logo
{
    margin-top: 25px;
}
</style>
@endSection