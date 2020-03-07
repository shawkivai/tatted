
<div id="appointment" class="section cta dark">

	<h2>Are you ready to Remove a tattoo!</h2>

	<div class="cta-info">Request an appointment <strong>NOW</strong>!</div>

	<div class="row apt-mt">
		<div class="col-md-3"></div>
		<div class="col-md-8">
			<div class="col-md-4 input-text" align="center">
                <input type="text" name="postcode" id="postcode"   placeholder="Enter PostCode" style="color:gray">
			</div>
            <div class="col-md-4 input-text">
                <select name="suburb" id="suburb" class="select-replacer">
                    <option value="">Select Suburb</option>
                </select>
            </div>
		</div>
	</div>
    {{--    {{ csrf_field() }}--}}
	<a class="btn md light btn-popup" href="#request"><i class="fa fa-thumb-tack"></i>Appointment</a>

	<!-- ============ Appointment Form - START ============ -->

	<form id="request" class="contact-form popup mfp-hide" action="{{ route('home.save_user_information') }}" method="post">
        {{ csrf_field() }}
		<div class="head"><img src="img/logo.png" alt="logo"></div>
		<h3 class="focus-title"><i class="fa fa-thumb-tack"></i>Request an appointment</h3>

        <label>
            <strong>1. Enter email address for quotes *</strong>
            <input class="required" type="text" name="email">
        </label>
		<label>
			<strong>2. Tell us your name *</strong>
			<input class="required" type="text" name="name">
		</label>

		<label>
			<strong>3. What is your postcode *</strong>
            <input class="required" type="text" id="user_postcode" readonly>
            <input class="required" type="text" id="user_postcode_id" name="postcode_id" hidden>
		</label>
        <div class="radio label">
            <strong>4. For an accurate quote please tells us want you want to achieve *</strong>
            <label>
                <input type="radio" value="full_removal" name="tatto_type" >
                <span class="radio-replacer"></span>
                <span>Full removal</span>
            </label>
            <label>
                <input class="required" type="radio" value="size_reduction" name="tatto_type">
                <span class="radio-replacer"></span>
                <span>Size reduction</span>
            </label>
            <label>
                <input class="required" type="radio" value="fading" name="tatto_type">
                <span class="radio-replacer"></span>
                <span>Fading</span>
            </label>
        </div>
        <div class="label">
            <strong>5. Tattoo Size (in centimetres) *</strong>
            <label>
                <span class="tatto-lenth-customize"><strong>Length : *</strong></span>
                <input type="text" class="tatto-size-customize" name="tatto_length">
                <span class="tatto-lenth-customize"><strong>Width : *</strong></span>
                <input type="text" class="tatto-size-customize" name="tatto_width">
            </label>
        </div>
        <label><strong>6. Tattoo Color *</strong></label>
        <div class="label">
            <input type="checkbox" id="color1" name="color1" value="Black">
            <label for="color1">Black</label>
            <input type="checkbox" id="color2" name="color2" value="Blue">
            <label for="color2">Blue</label>
            <input type="checkbox" id="color3" name="color3" value="Red">
            <label for="color3">Red</label>
            <input type="checkbox" id="color4" name="color4" value="Orange">
            <label for="color4">Orange</label>
            <input type="checkbox" id="color5" name="color5" value="Yellow">
            <label for="color5">Yellow</label>
            <input type="checkbox" id="color6" name="color6" value="Pink">
            <label for="color6">Pink</label>
            <input type="checkbox" id="color7" name="color7" value="Purple">
            <label for="color7">Purple</label>
            <input type="checkbox" id="color8" name="color8" value="Brown">
            <label for="color8">Brown</label>
            <input type="checkbox" id="color9" name="color9" value="Green">
            <label for="color9">Green</label>
        </div>
        <label><strong>7. Skin Type *</strong></label>
        <div class="label">
            <input type="checkbox" id="skin_type1" name="skin_type1" value="pale_white">
            <label for="skin_type1">Pale white</label>
            <input type="checkbox" id="skin_type2" name="skin_type2" value="fair">
            <label for="skin_type2">Fair</label>
            <input type="checkbox" id="skin_type3" name="skin_type3" value="olive">
            <label for="skin_type3">Olive</label>
            <input type="checkbox" id="skin_type4" name="skin_type4" value="light_brown">
            <label for="skin_type4">Light Brown</label>
            <input type="checkbox" id="skin_type5" name="skin_type5" value="dark_brown">
            <label for="skin_type5">Dark Brown</label>
            <input type="checkbox" id="skin_type6" name="skin_type6" value="black">
            <label for="skin_type6">Black</label>
        </div>
        <div class="radio label">
            <strong>8. Tattoo Age *</strong>
            <label>
                <input type="radio" value="years" name="tattoo_age">
                <span class="radio-replacer"></span>
                <span>Years</span>
            </label>
            <label>
                <input class="required" type="radio" value="months" name="tattoo_age">
                <span class="radio-replacer"></span>
                <span>Months</span>
            </label>
            <label>
                <input class="required" type="radio" value="weeks" name="tattoo_age">
                <span class="radio-replacer"></span>
                <span>Weeks</span>
            </label>
        </div>
{{--		<label><strong>9. Tattoo Description *</strong>--}}
{{--			<textarea class="required" name="description"></textarea>--}}
{{--		</label>--}}

        <label><strong>9. Photo (Please attach up to 3 photos to a maximum file size of 5mb )</strong></label>
        <div class="input-group control-group increment" >
            <input type="file" name="filename[]" class="form-control">
            <div class="input-group-btn">
                <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
            </div>
        </div>
        <div class="clone hide">
            <div class="control-group input-group" style="margin-top:10px">
                <input type="file" name="filename[]" class="form-control">
                <div class="input-group-btn">
                    <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                </div>
            </div>
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

<script src="{!!url('/js/jquery.min.js')!!}"></script>
<script src="{!!url('/js/jquery-ui.min.js')!!}"></script>

<script type="text/javascript">
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function() {
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
                $('#user_postcode').val(ui.item.value);
                $('#user_postcode_id').val(ui.item.id);
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
                       var output = '<option value="">Select Suburb</option>';
                       //console.log(data.length);
                       for(i = 0;i<data.length;i++){
                           output += '<option value="'+ data[i].id +'">'+ data[i].value +'</option>';
                       }
                       $('#suburb').append(output)
                        //console.log(output);

                        //response(data);
                    }
                })
            }
        }
        var count = 1;
        $(".btn-success").click(function(){
            if(count >= 3){
                count = 4;
            }else{
                count += 1;
            }
            console.log(count);
            if(count < 4){
                var html = $(".clone").html();
                console.log(count);
                $(".increment").after(html);
            }
        });

        $("body").on("click",".btn-danger",function(){
            if(count == 4){
                count -=2;
            }else if(count > 0){
                count -=1;
            }
            console.log(count);
            $(this).parents(".control-group").remove();
        });


    });
</script>
