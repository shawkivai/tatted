@extends('layouts.companyMenu')
@section('content')

<div class="success-msg">
    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
</div>

<div class="container">

<h3 class="focus-title"><i class="fa fa-user-plus"></i>Login Business Account</h3>
    <form id="company_login" class="contact-form popup" action="{{ route('api.company.store') }}" method="post">
        {{ csrf_field() }}
       
        <label>
            <strong>Enter email address</strong>
            <input class="required" type="email" name="email" id="email" value="{{ old('email') }}">
           
        </label>

        <label>
            <strong>Password</strong>
            <input class="required" type="email" name="email" id="email" value="{{ old('email') }}">
        </label>

        <input class="submit btn md" type="submit" value="Login">

    </form>

</div>

<style>

.popup {
    max-width: 600px;
    margin: 0px auto;
}

.focus-title{
    padding-bottom: 0px;
    text-align: center;
}
</style>

@endSection