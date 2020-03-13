@extends('layouts.companyMenu')
@section('content')
<div class="container">

    <form id="company_form" class="contact-form popup" action="{{ route('api.company.store') }}" method="post">
        {{ csrf_field() }}
        <h3 class="focus-title"><i class="fa fa-thumb-tack"></i>Register Your Business</h3>
        <label>
            <strong>1. Enter email address *</strong>
            <input class="required" type="email" name="email" id="email" value="{{ old('email') }}">
            @if($errors->has('email'))
                <div class="error">{{ $errors->first('email') }}</div>
            @endif
        </label>
        <label>
            <strong>2. Comapny name *</strong>
            <input class="required" type="text" name="name" value="{{ old('name') }}">
            @if($errors->has('name'))
                <div class="error">{{ $errors->first('name') }}</div>
            @endif
        </label>
        <label>
        <strong>3. Address*</strong>
        <input class="required" type="text" name="address">
        @if($errors->has('address'))
            <div class="error">{{ $errors->get('address') }}</div>
        @endif
        </label>
        <div class="row">
            <div class="col-md-4">
                <label>
                    <strong>4. Select State</strong>
                    <select name="state_id" id="state" class="select-replacer required">
                        <option value="" hidden>Select State</option>
                    </select>
                </label>
            </div>
            <div class="col-md-4">
                <label>
                <strong>5. What is your postcode *</strong>
                <input class="required" type="text" id="postcode" name="postcode" placeholder="Enter Postcode">
                <input type="hidden" id="postcode_id" name="postcode_id">
            </label>
            </div>
            <div class="col-md-4">
                <label>
                    <strong>6. Select Suburb</strong>
                    <select name="suburb_id" id="suburb" class="select-replacer required">
                        <option value="" hidden>Select Suburb</option>
                    </select>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label>
                    <strong>7. Service Type</strong>
                    <select name="service_type" id="service_type" class="select-replacer">
                        <option value="" hidden>Select Services</option>
                        <option value="tatoo_removal">Tatoo Remove</option>
                        <option value="tatoo_design">Tatoo Design</option>
                    </select>
                </label>
            </div>
            <div class="col-md-4">
                <label>
                    <strong>8. Phone Number *</strong>
                    <input class="required" type="text" name="phone_no">
                    @if($errors->has('phone_no'))
                        <div class="error">{{ $errors->get('phone_no') }}</div>
                    @endif
                </label>
            </div>
        </div>                  
    <label><strong>9. Password *</strong> (ex: 5x4)
        <input class="required" type="password" name="password">
        @if($errors->has('password'))
            <div class="error">{{ $errors->get('password') }}</div>
        @endif
    </label>
        <hr>
        <p>( <strong>*</strong> ) = Mandatory field</p>
        <input class="submit btn md" type="submit" value="Register Business">
    </form>
</div>
<script type="text/javascript">
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$(document).ready(function() {
    $.ajax({
            url: "{{ route('api.state.index') }}",
            type: 'get',
            dataType: "json",
            data: {
                _token: CSRF_TOKEN,
            },
            success: function (data) {
                var output = '';
                console.log(data);
                for(i = 0;i<data.length;i++){
                    output += '<option value="'+ data[i].id +'">'+ data[i].state_code +'</option>';
                }
                $('#state').append(output)
            }
        })
        $("#postcode").autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: "{{ route('home.ajax_get_postcode') }}",
                    type: 'post',
                    dataType: "json",
                    data: {
                        _token: CSRF_TOKEN,
                        postcode : request.term
                    },
                    success: function(data) {
                        response(data);
                    }
                })
            },
            minLength: 3,
            select: function( event, ui ) {
                $('#postcode').val(ui.item.value);
                $('#postcode_id').val(ui.item.id);
                update_suburb(ui.item.id);
            }
        });


        // Typing
        // var typingTimer;                //timer identifier
        // var doneTypingInterval = 2000;  //time in ms, 5 second for example
        // var $input = $('#company_form');

        // //on keyup, start the countdown
        // $input.on('keyup', function () {
        // clearTimeout(typingTimer);
        // typingTimer = setTimeout(doneTyping, doneTypingInterval);
        // });

        // //on keydown, clear the countdown 
        // $input.on('keydown', function () {
        // clearTimeout(typingTimer);
        // });

        //user is "finished typing," do something
            var $validator = $("#company_form").validate({
            ignore: [],
                rules: {
                    field: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true,
                        remote: {
                            url: "{{route('company.emailValidation')}}",
                            type: "post",
                        }
                    },
                    name: {
                        required: true,
                        remote: {
                            url: "{{route('company.nameValidation')}}",
                            type: "post",
                        }
                    },
                    password: {
                        required: true,
                        remote: {
                            url: "{{route('company.passwordValidation')}}",
                            type: "post",
                        }
                    }

                },
                messages: {
                    email: {
                        required: "Please Enter Email!",
                        email: "This is not a valid email!",
                        remote: "Email already in use!"
                    },
                    name: {
                        required: "Please Enter Company Name",
                        remote: "Company already registered!"
                    },
                    password: {
                        required: "Please Enter a strong Password",
                        remote: "Password is not strong (NB: Enter At least one lowecase, one uppecase and number)"
                    },
                    
                }
            });


        function update_suburb(postcode_id) {
            if (postcode_id != '') {
                $.ajax({
                    url: "{{ route('home.ajax_get_suburb_list') }}",
                    type: 'post',
                    dataType: "json",
                    data: {
                        _token: CSRF_TOKEN,
                        postcode_id: postcode_id
                    },
                    success: function (data) {
                        $('#suburb').empty();
                       var output = '';
                       for(i = 0;i<data.length;i++){
                           output += '<option value="'+ data[i].id +'">'+ data[i].value +'</option>';
                       }
                       $('#suburb').append(output)
                    }
                })
            }
        }
    });
</script>
<style>
    .error{
        color: red;
    }
    .focus-title{
        margin-top: 0;
        margin-bottom: 0;
        text-align: center;
    }

    .popup {
        margin: 40px auto;
    }
</style>
@endSection