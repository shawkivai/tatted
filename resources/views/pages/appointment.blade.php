
<div id="appointment" class="section cta dark">

	<h2>Are you ready to Remove a tattoo!</h2>

	<div class="cta-info">Request an appointment <strong>NOW</strong>!</div>
    <div class="warning-msg">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <span>{{ $error }}</span>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <div class="success-msg">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>

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
	<a class="btn md light btn-popup" id="appoint" href="#request"><i class="fa fa-thumb-tack"></i>Appointment</a>

	<!-- ============ Appointment Form - START ============ -->

	<form id="request" class="contact-form popup mfp-hide" method="post" action="{{ route('home.save_user_information') }}" enctype="multipart/form-data" >
        {{ csrf_field() }}
		<div class="head"><img src="img/logo.png" alt="logo"></div>
		<h3 class="focus-title"><i class="fa fa-thumb-tack"></i>Request an appointment</h3>

        <label>
            <strong>1. Enter email address for quotes *</strong>
            <input class="required" type="text" id="email" name="email" value="{{ old('email') }}">
        </label>
		<label>
			<strong>2. Tell us your name *</strong>
			<input class="required" type="text" name="name" value="{{ old('name') }}">
		</label>

		<label>
			<strong>3. What is your postcode *</strong>
            <input class="required" type="text" id="user_postcode" readonly>
            <input class="required" type="text" id="user_postcode_id" name="postcode_id" hidden>
            <input type="text suburb_id" id="user_suburb_id" name="suburb_id" hidden>
            <input type="text" id="user_state_id" name="state_id" hidden>
		</label>
        <div class="radio label" id="tatto_type">
            <strong>4. For an accurate quote please tells us want you want to achieve *</strong>
            <label>
                <input type="radio" value="full_removal" name="tatto_type" >
                <span class="radio-replacer"></span>
                <span>Full removal</span>
            </label>
            <label>
                <input type="radio" value="size_reduction" name="tatto_type">
                <span class="radio-replacer"></span>
                <span>Size reduction</span>
            </label>
            <label>
                <input type="radio" value="fading" name="tatto_type">
                <span class="radio-replacer"></span>
                <span>Fading</span>
            </label>
            <br>
            <label for="tatto_type" class="error" style="display: none"></label>
        </div>
        <div class="label">
            <strong>5. Tattoo Size (in centimetres) *</strong>
            <label>
                <span class="tatto-lenth-customize"><strong>Length : *</strong></span>
                <input type="text" class="tatto-size-customize required" name="tatto_length">
                <br>
                <span class="tatto-lenth-customize" style="margin-right: 7px;"><strong>Width : *</strong></span>
                <input type="text" class="tatto-size-customize required" name="tatto_width">
            </label>
        </div>
        <label><strong>6. Tattoo Color *</strong></label>
        <div class="label" id="color">
            <input type="checkbox" id="color1" name="color[]" value="Black">
            <label for="color1">Black</label>
            <input type="checkbox" id="color2" name="color[]" value="Blue">
            <label for="color2">Blue</label>
            <input type="checkbox" id="color3" name="color[]" value="Red">
            <label for="color3">Red</label>
            <input type="checkbox" id="color4" name="color[]" value="Orange">
            <label for="color4">Orange</label>
            <input type="checkbox" id="color5" name="color[]" value="Yellow">
            <label for="color5">Yellow</label>
            <input type="checkbox" id="color6" name="color[]" value="Pink">
            <label for="color6">Pink</label>
            <input type="checkbox" id="color7" name="color[]" value="Purple">
            <label for="color7">Purple</label>
            <input type="checkbox" id="color8" name="color[]" value="Brown">
            <label for="color8">Brown</label>
            <input type="checkbox" id="color9" name="color[]" value="Green">
            <label for="color9">Green</label>
            <label for="color[]" class="error" style="display: none"></label>
        </div>
        <label><strong>7. Skin Type *</strong></label>
        <div class="label" id="skin_type">
            <input type="checkbox" id="skin_type1" class="checkbox" name="skin_type[]" value="pale_white">
            <label for="skin_type1">Pale white</label>
            <input type="checkbox" id="skin_type2" class="checkbox" name="skin_type[]" value="fair">
            <label for="skin_type2">Fair</label>
            <input type="checkbox" id="skin_type3" class="checkbox" name="skin_type[]" value="olive">
            <label for="skin_type3">Olive</label>
            <input type="checkbox" id="skin_type4" class="checkbox" name="skin_type[]" value="light_brown">
            <label for="skin_type4">Light Brown</label>
            <input type="checkbox" id="skin_type5" class="checkbox" name="skin_type[]" value="dark_brown">
            <label for="skin_type5">Dark Brown</label>
            <input type="checkbox" id="skin_type6" class="checkbox" name="skin_type[]" value="black">
            <label for="skin_type6">Black</label>
            <label for="skin_type[]" class="error" style="display: none"></label>
        </div>
        <div class="radio label" id="tattoo_age">
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
            <br>
            <label for="tattoo_age" class="error" style="display: none"></label>
        </div>
        <label id="tatoo-age-input_show">
            <strong> Tattoo Age Period * : </strong>
            <input class="required tatoo-age-input" type="number" name="tattoo_age_period" value="">
            <span id="tattoo_age_name"></span>
            <label for="tattoo_age_period" class="error" style="display: none"></label>
        </label>
{{--		<label><strong>9. Tattoo Description *</strong>--}}
{{--			<textarea class="required" name="description"></textarea>--}}
{{--		</label>--}}

        <label><strong>9. Photo (Please attach up to 3 photos to a maximum file size of 5mb )</strong></label>
        <div class="input-group control-group increment" >
            <input type="file" name="filename[]" class="form-control photo_id">
            <div class="input-group-btn">
                <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
            </div>
        </div>
        <div class="clone hide">
            <div class="control-group input-group" style="margin-top:10px">
                <input type="file" name="filename[]" class="form-control photo_id">
                <div class="input-group-btn">
                    <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                </div>
            </div>
        </div>

		<hr>
{{--			<label>--}}
{{--			<input class="required" type="checkbox" name="check">--}}
{{--			<strong>Check to authorize the system *</strong>--}}
{{--		</label>--}}
{{--		<hr>--}}
		<p>( <strong>*</strong> ) = Mandatory field</p>
		<input class="submit btn md" type="submit" name="submit" value="Request Appointment">
{{--		<input type="hidden" name="form_type" value="appointment">--}}

	</form>

	<!-- ============ Appointment Form - END ============ -->

</div>

<script type="text/javascript">
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function() {
        $('.btn-popup').hide();
        $('#tatoo-age-input_show').hide();
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
            minLength: 1,
            select: function( event, ui ) {
                $('#user_postcode').val(ui.item.value);
                $('#user_postcode_id').val(ui.item.id);
                //console.log(ui.item.state_id);
                $('#user_state_id').val(ui.item.state_id);
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
            //console.log(count);
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
            //console.log(count);
            $(this).parents(".control-group").remove();
        });
        $("#suburb").change(function(){
            if($( "#suburb option:selected" ).val() != ''){
                var suburb_id = $( "#suburb option:selected" ).val();
                //console.log(suburb_id);
                $("#user_suburb_id").val(suburb_id);
            }
        });

        $("#suburb").change(function () {
            var postcode_no = $("#postcode").val();
            var suburb_id = $( "#suburb option:selected" ).val();
            $("#appoint").attr("disabled","disabled");
            if(postcode_no !='' && suburb_id !=''){
                $('.btn-popup').show();
            }else{
                $('.btn-popup').hide();
            }
        });

        var $validator = $("#request").validate({
            ignore: [],
            rules: {
                field: {
                    required: true
                },
                tatto_type: {
                    onecheck1: true
                },
                "color[]": {
                    onecheck2: true
                },
                "skin_type[]": {
                    onecheck3: true
                },
                tattoo_age: {
                    onecheck4: true
                }


            }
        });
        //console.log($validator);
        $.validator.addMethod('onecheck3', function(value, ele) {
            var allVals3 = [];
            $('#skin_type :checked').each(function () {
                allVals3.push($(this).val());
            });
            return allVals3.length >= 1;
        }, "<i class='fa fa-exclamation-circle'></i>" + "<span> Please select at least one skin type.</span>");
        $.validator.addMethod('onecheck2', function(value, ele) {
            var allVals2 = [];
            $('#color :checked').each(function () {
                allVals2.push($(this).val());
            });
            return allVals2.length >= 1;
        }, "<i class='fa fa-exclamation-circle'></i>" + "<span> Please select at least one color.</span>");
        $.validator.addMethod('onecheck1', function(value, ele) {
            var allVals1 = [];
            $('#tatto_type :checked').each(function () {
                allVals1.push($(this).val());
            });
            return allVals1.length >= 1;
        }, "<i class='fa fa-exclamation-circle'></i>" + "<span> Please select at least one type.</span>");
        $.validator.addMethod('onecheck4', function(value, ele) {
            var allVals4 = [];
            $('#tattoo_age :checked').each(function () {
                allVals4.push($(this).val());
            });
            return allVals4.length >= 1;
        }, "<i class='fa fa-exclamation-circle'></i>" + "<span> Please select at least one age.</span>");
    });
    // $(".mfp-close").click(function () {
    //     console.log('gfhg');
    //     $("#postcode").val('');
    // })

    //file upload validation

    $('.photo_id').change(function(){
        var fp = $(".photo_id");
        //console.log('fgfd');
        var lg = fp[0].files.length; // get length
        var items = fp[0].files;
        var fileSize = 0;

        if (lg > 0) {
            for (var i = 0; i < lg; i++) {
                fileSize = fileSize+items[i].size; // get file size
            }
            //console.log(fileSize);
            if(fileSize > 2097152) {
                alert('File size must not be more than 1 MB');
                $('.photo_id').val('');
            }
        }
    });
    //
    //tatoo-age-input_show
    $('#tattoo_age').change(function () {
        var tattoo_age_val = $('#tattoo_age :checked').val();
        console.log(tattoo_age_val);
        if (tattoo_age_val != '') {
            $('#tattoo_age_name').empty();
            $('#tatoo-age-input_show').show();
            $('#tattoo_age_name').append(tattoo_age_val.toUpperCase());
        } else {
            $('#tatoo-age-input_show').hide();
        }
    });
    //
</script>
<style>
    .error{
        color: red;
    }
</style>
