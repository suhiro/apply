@extends('layout.master')
@section('content')
<div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="http://www.magicnoodle.ca/magicshift/assets/image/system/mn300.png" alt="company logo" >
        <h2>Application form</h2>
        <p class="lead">Glad to know you are applying for Magic Noodle! Looking forward to have you onboard!</p>
</div>




      <div class="row">
        <div class="col-md-12 order-md-1">
         
          <form class="needs-validation" method="post" action="{{url('/apply')}}" novalidate>
          	{{ csrf_field() }}
            <h4 class="mb-3">Applying for</h4>
            <div class="row">
  <div class="col-md-6 mb-3">
    <label for="location">Location</label>
<select class="custom-select d-block w-100" id="location" name="location" required>
                  <option value="">Choose...</option>
      @foreach($locations as $location)
        <option value="{{$location->id}}">{{ $location->name }} - {{ $location->address }}, {{ $location->city }}</option>
      @endforeach              
</select>
                <div class="invalid-feedback">
                  A desired location is required.
                </div>
  </div>
  <div class="col-md-6 mb-3">
    <label for="role">Role</label>
   <select class="custom-select d-block w-100" id="role" name="role" required>
                  <option value="">Choose...</option>
      @foreach($roles as $role)
        <option value="{{$role->id}}">{{ $role->rank }} - {{ $role->type }}</option>
      @endforeach              
</select>
                <div class="invalid-feedback">
                  Role is required.
                </div>
  </div>
</div>
            <h4 class="mb-3">Personal Information</h4>
            <div class="row">
            	<div class="col-md-4 mb-3">
                <label for="cName">中文姓名</label>
                <input type="text" class="form-control" id="cName" name="cName" placeholder="" value="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            
            <div class="row">

            <div class="col-md-6 mb-3">
              <label for="phone">Phone</label>
              <input type="phone" class="form-control" id="phone" name="phone" placeholder="" required>
              <div class="invalid-feedback">
                Please enter a valid phone number.
              </div>
            </div>
             <div class="col-md-6 mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com" required>
              <div class="invalid-feedback">
                Please enter a valid email address.
              </div>
            </div>
        	</div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="city">City</label>
               <input type="text" class="form-control" id="city" name="city" placeholder="" required>
                <div class="invalid-feedback">
                  Please provide your city.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="province">Province</label>
                <select class="custom-select d-block w-100" id="province" name="province" required>
                  <option value="">Choose...</option>
                  <option value='ON'>Ontario</option>
                  <option value='AB'>Alberta</option>
                  <option value='BC'>British Columbia</option>
                  <option value='MB'>Manitoba</option>
                  <option value='NB'>New Brunswick</option>
                  <option value='NL'>Newfoundland and Labrador</option>
                  <option value='NS'>Nova Scotia</option>
                  <option value='NU'>Nunavut</option>
                  <option value='PE'>Prince Edward Island</option>
                  <option value='QC'>Quebec</option>
                  <option value='SK'>Saskatchewan</option>
                  <option value='YT'>Yukon</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid province.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="postal">Postal Code</label>
                <input type="text" class="form-control" id="postal" name="postal" placeholder="" required>
                <div class="invalid-feedback">
                  Postal code required.
                </div>
              </div>
            </div>
			<h5 class="mb-2">Background</h5>

			  <div class="row">
              <div class="col-md-4 mb-3">
                <label for="dob">Date of Birth</label>
               <input type="text" class="form-control dp" id="dob" name="dob" placeholder="" required>
                <div class="invalid-feedback">
                  Please provide your date of birth.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="pob">Place of Birth</label>
               <input type="text" class="form-control" id="pob" name="pob" placeholder="e.g. xx省 xx市" required>
                <div class="invalid-feedback">
                  Please provide your hometown information.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="arrival">Date arrived in Canada <span class="text-muted">(if applicable)</label>
                <input type="text" class="form-control dp" id="arrival" name="arrival" placeholder="" >
               
              </div>
            </div>

            <div class="row mb-3">
            	<div class="col-md-6">
            		<label for="gender">Gender</label>
                <select class="custom-select d-block w-100" id="gender" name="gender" required>
                  <option value="">Choose...</option>
                  <option value='1'>Male</option>
                  <option value='0'>Female</option>
                  <option value='2'>Non-binary</option>
                </select>


            	</div>

            	<div class="col-md-6">
            	<label>Language <span class="text-muted">(check all languages you use)</span></label>
            	<div class="custom-control custom-checkbox">
              	<input type="checkbox" class="custom-control-input" id="english" name="english">
              	<label class="custom-control-label" for="english">English</label>
            	</div>
            	<div class="custom-control custom-checkbox">
              	<input type="checkbox" class="custom-control-input" id="chinese" name="chinese">
              	<label class="custom-control-label" for="chinese">Mandarin 国语</label>
            	</div>
            	<div class="custom-control custom-checkbox">
              	<input type="checkbox" class="custom-control-input" id="cantonese" name="cantonese">
              	<label class="custom-control-label" for="cantonese">Cantonese 广东话</label>
            	</div>
            	<div class="custom-control custom-checkbox">
              	<input type="checkbox" class="custom-control-input" id="french" name="french">
              	<label class="custom-control-label" for="french">French</label>
            	</div>
        		</div>

            </div>

            <div class="row">
            	<div class="col-md-6 mb-3">
            		<label for="province">Status in Canada</label>
                <select class="custom-select d-block w-100" id="status" name="status" required>
                  <option value="">Choose...</option>
                  <option value='visitor'>Visitor</option>
                  <option value='student'>Study Permit</option>
                  <option value='worker'>Work Permit</option>
				  <option value='pr'>Permenant Resident</option>
                  <option value='citizen'>Canadian Citizen</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid province.
                </div>
            	</div>
            	<div class="col-md-6 mb-3">
                <label for="expiry">Status expiry date  <span class="text-muted">(if applies to your status)</span></label>
                <input type="text" class="form-control dp" id="expiry" name="expiry" placeholder="">
              	</div>
            </div>

          	<div class="row">
          		<div class="col-md-6 mb-3">
                <label for="interest">Interest and Activities  <span class="text-muted">(个人的兴趣爱好或活动)</span></label>
                <input type="text" class="form-control" id="interest" name="interest" placeholder="">
              	</div>
          	</div>

            <hr class="mb-4">

            <h4 class="mb-3">Education <small>
            	<span class="text-muted">(Highest achieved or currently enrolled)</span></small></h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="below" name="education" type="radio" class="custom-control-input" checked required value="below highschool">
                <label class="custom-control-label" for="below">Below Highschool</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="highschool" name="education" type="radio" class="custom-control-input" required value="highschool">
                <label class="custom-control-label" for="highschool">Highschool</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="college" name="education" type="radio" class="custom-control-input" required value="college">
                <label class="custom-control-label" for="college">College</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="university" name="education" type="radio" class="custom-control-input" required value="university">
                <label class="custom-control-label" for="university">University</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="graduate" name="education" type="radio" class="custom-control-input" required value="graduate">
                <label class="custom-control-label" for="graduate">Graduate</label>
              </div>
            </div>
            <div class="row">
            	 <div class="col-md-5 mb-3">
                <label for="school">School</label>
                <input type="text" class="form-control" id="school" name="school" placeholder="Institution name">
           
              </div>
              <div class="col-md-5 mb-3">
                <label for="major">Major</label>
                <input type="text" class="form-control" id="major" name="major" placeholder="">
              </div>
            
             	<div class="col-md-2 mb-3">
              	<label>Currently enrolled</label>
               	<div class="custom-control custom-checkbox">
              		<input type="checkbox" class="custom-control-input" id="enrolled" name="enrolled">
              	 	<label class="custom-control-label" for="enrolled">Yes</label>
            	</div>
          		</div>
       		
            </div>
          
             <h4 class="mb-3">Work History <small>
            	<span class="text-muted">(Most recent)</span></small></h4>
            <div class="row">
            	
              <div class="col-md-4 mb-3">
                <label for="orgName">Business name</label>
                <input type="text" class="form-control" id="orgName" name="orgName" placeholder="" value="">
                <div class="invalid-feedback">
                  公司名
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="orgAddress">Address</label>
                <input type="text" class="form-control" id="orgAddress" name="orgAddress" placeholder="" value="">
              </div>

              <div class="col-md-4 mb-3">
                <label for="orgCity">City</label>
                <input type="text" class="form-control" id="orgCity" name="orgCity" placeholder="" value="">
              </div>
            </div>
            <div class="row">
              
              <div class="col-md-4 mb-3">
                <label for="title">Job Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="" value="">
                <small class="text-muted">
                  职位
                </small>
              </div>
              <div class="col-md-4 mb-3">
                <label for="supervisor">Supervisor/Manager</label>
                <input type="text" class="form-control" id="supervisor" name="supervisor"  placeholder="" value="">
              </div>

              <div class="col-md-4 mb-3">
                <label for="contact">Contact</label>
                <input type="text" class="form-control" id="orgPhone" name="contact" placeholder="" value="">
              </div>
            </div>
             <div class="row">
            	
              <div class="col-md-4 mb-3">
                <label for="exFrom">From</label>
                <input type="text" class="form-control dp" id="exFrom" name="exFrom" placeholder="" value="">
             
              </div>
              <div class="col-md-4 mb-3">
                <label for="exTo">To</label>
                <input type="text" class="form-control dp" id="exTo" name="exTo"  placeholder="" value="">
              </div>

           
            </div>

              <div class="row">
            	
              <div class="col-md-12 mb-3">
                <label for="reason">Reason for leaving this job</label>
                <input type="text" class="form-control" id="reason" name="reason" placeholder="" value="">
                <small class="text-muted">
               离职理由  
                </small>
              </div>
              <div class="col-md-4 mb-3">
              	<label>Can we contact your last employer?</label>
               	<div class="custom-control custom-checkbox">
              		<input type="checkbox" class="custom-control-input" id="verify" name="verify">
              	 	<label class="custom-control-label" for="verify">Yes</label>
            	</div>
          		</div>

              <div class="col-md-8 mb-3">
                <label for="noVerifyReason">If not, please explain</label>
                <input type="text" class="form-control" id="noVerifyReason" name="noVerifyReason" placeholder="" value="">
              </div>
            </div>

             <h4 class="mb-3">Emergency Contact</h4>
            <div class="row">
            	
              <div class="col-md-4 mb-3">
                <label for="emergency_person">Name</label>
                <input type="text" class="form-control" id="emgergency_person" name="emgergency_person" placeholder="person">
                <div class="invalid-feedback">
                  紧急联络人
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="emgergency_phone">Phone</label>
                <input type="text" class="form-control" id="emgergency_phone" name="emgergency_phone">
              </div>

              <div class="col-md-4 mb-3">
                <label for="emergency_relation">Relationship</label>
                <input type="text" class="form-control" id="emergency_relation" name="emergency_relation">
              </div>
            </div>



            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to confirmation</button>
          </form>
        </div>
      </div>

@endsection
@section('pageJS')
<script>
	$('.dp').datepicker({
		format:'yyyy-mm-dd'
	});
</script>
@endsection