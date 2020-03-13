@extends('layouts.menu')
@section('content')

<div class="success-msg">
    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
</div>

@endSection