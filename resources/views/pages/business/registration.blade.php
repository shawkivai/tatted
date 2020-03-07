@extends('layouts.menu')

@section('content')
<div class="container">

    <form id="request" class="contact-form popup" action="{{ route('api.company.store') }}" method="post">
        {{ csrf_field() }}
        <h3 class="focus-title"><i class="fa fa-thumb-tack"></i>Register Your Business</h3>

        <label>
            <strong>1. Enter email address *</strong>
            <input class="required" type="email" name="email">
        </label>
        <label>
            <strong>2. Comapny name *</strong>
            <input class="required" type="text" name="name">
        </label>

        <label>
        <strong>Address*</strong>
        <input class="required" type="text" name="address">
        </label>

        <div class="row">
            <div class="col-md-4">
                <label>
                    <strong>3. Select State</strong>
                    <select name="state_id" id="state" class="select-replacer">
                        <option value="" hidden>Select State</option>
                    </select>
                </label>
            </div>

            <div class="col-md-4">
                <label>
                <strong>4. What is your postcode *</strong>
                <input class="required" type="text" id="postcode" name="postcode" placeholder="Enter Postcode">
                <input type="hidden" id="postcode_id" name="postcode_id">
            </label>
            </div>
            <div class="col-md-4">
                <label>
                    <strong>5. Select Suburb</strong>
                    <select name="suburb_id" id="suburb" class="select-replacer">
                        <option value="" hidden>Select Suburb</option>
                    </select>
                </label>
            </div>
        </div>

        <label>
            <strong>Phone Number *</strong>
            <input class="required" type="text" name="phone_no">
        </label>

    <label><strong>Password *</strong> (ex: 5x4)
        <input class="required" type="password" name="password">
    </label>
        
        <hr>
        <p>( <strong>*</strong> ) = Mandatory field</p>
        <input class="submit btn md" type="submit" name="submit" value="Register Business">
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
@endSection