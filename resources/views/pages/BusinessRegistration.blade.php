	<!-- ============ Appointment Form - START ============ -->

<form id="business" class="contact-form popup mfp-hide" action="{{route('api.company.store')}}" method="POST">
    @csrf
    <div class="head"><img src="img/logo.png" alt="logo"></div>
    <h3 class="focus-title"><i class="fa fa-thumb-tack"></i>Register Your Business</h3>

    <label>
        <strong>Company Name *</strong>
        <input class="required" type="text" name="name">
    </label>
    <label>
        <strong>Company Email *</strong>
        <input class="required" type="email" name="email">
    </label>
    <label>
        <strong>Address*</strong>
        <input class="required" type="text" name="address">
    </label>

    <label>
        <strong>State Name</strong>
        <select name="state_id">
            <option value=1>NSW</option>
            <option value=2>Calf</option>
            <option value=3>Ankle</option>
            <option value=4>Foot</option>
            <option value=5>Arm</option>
        </select>
    </label>

    <label>
        <strong>Postcode</strong>
        <select name="postcode_id">
            <option value=1>Leg</option>
            <option value=2>Calf</option>
            <option value=3>Ankle</option>
            <option value=4>Foot</option>
            <option value=5>Arm</option>
        </select>
    </label>

    <label>
        <strong>Suburb</strong>
        <select name="suburb_id">
            <option value=1>Leg</option>
            <option value=2>Calf</option>
            <option value=3>Ankle</option>
            <option value=4>Foot</option>
            <option value=5>Arm</option>
        </select>
    </label>

    <label>
        <strong>Phone Number *</strong>
        <input class="required" type="text" name="phone_no">
    </label>

    <label><strong>Password *</strong> (ex: 5x4)
        <input class="required" type="password" name="password">
    </label>

    <!-- <div class="radio label">
        <strong>Tattoo Color</strong>
        <label>
            <input type="radio" value="Black &amp; White" name="color" checked>
            <span class="radio-replacer"></span>
            <span>Black &amp; White</span>
        </label>
        <label>
            <input class="required" type="radio" value="Color" name="color">
            <span class="radio-replacer"></span>
            <span>Color</span>
        </label>                                              
    </div> -->
    <!-- <label><strong>Tattoo Description *</strong>
        <textarea class="required" name="description"></textarea>
    </label>
    <div class="radio image-radio label">
        <strong>Choose an Artist</strong>
        
        <label>
            <input type="radio" value="Sara" name="artist">
            <span><img src="img/sara.jpg" alt="Sara Van Morgan"><span>Sara</span></span>
        </label>

        <label>
            <input type="radio" value="Susy" name="artist">
            <span><img src="img/susy.jpg" alt="Susy Henna"><span>Susy</span></span>
        </label>                                            
    </div>
    <hr>
        <label>
        <input class="required" type="checkbox" name="check">
        <span class="checkbox-replacer"></span>
        <strong>Check to authorize the system *</strong>
    </label>
    <hr> -->
    <p>( <strong>*</strong> ) = Mandatory field</p>
    <input class="submit btn md" type="submit" name="submit" value="Register Business">

</form>

<script type="text/javascript">


</script>