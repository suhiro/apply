@extends('layout.master')
@section('content')



      <div class="row">
     
        <div class="col-md-12 order-md-1">
          <h4 class="mb-3">Personal Information</h4>
         
            <div class="row">
            	<div class="col-md-6 mb-3">
                	<ul class="list-unstyled">

                    <li>Location Applied: {{$location->name}}, {{ $location->address }}</li>
                    <li>Role: {{$job->rank }}, {{ $job->type }}</li>
                		<li>中文名: {{ $data->cName }}</li>
                		<li>First name: {{ $data->firstName }}</li>
                		<li>Last name: {{ $data->lastName }}</li>
                		<li>Phone: {{ $data->phone }}</li>
                		<li>Email: {{ $data->email }}</li>
                		<li>Address: {{ $data->address }}</li>
                		<li>City: {{ $data->city }}</li>
                		<li>Province: {{ $data->province }}</li>
                		<li>Postal Code: {{ $data->postal }}</li>
                	
                	
                	</ul>
              	</div>
              	<div class="col-md-6 mb-3">
                	<ul class="list-unstyled">
                		<li>Date of Birth: {{ $data->dob }}</li>
                		<li>Hometown: {{ $data->pob }}</li>
                		<li>Date arrived in Canada: {{ $data->arrival }}</li>
                		<li>Language: 
                			<ul>
                				<li>English: {{ $data->english=='on'?'Yes':'No' }}</li>
                				<li>Mandarin: {{ $data->chinese=='on'?'Yes':'No' }}</li>
                				<li>Cantonese: {{ $data->cantonese=='on'?'Yes':'No' }}</li>
                				<li>French: {{ $data->french=='on'?'Yes':'No' }}</li>
                			</ul>
                		</li>
                		<li>Status: {{ $data->status=='pr'?'Permenant Resident':$data->status }}</li>
                		<li>Status Expiry: {{ $data->expiry }}</li>
                		<li>Personal Interest(s): {{ $data->interest }}</li>
                	</ul>
              	</div>
            </div>
        	<hr class="mb-3">
         
            <div class="row">
            	<div class="col-md-6 mb-3">
            		  <h4 class="mb-3">Education</h4>
                	<ul class="list-unstyled">
                		<li>Education: {{ $data->education }}</li>
                		<li>School name: {{ $data->school }}</li>
                		<li>Major: {{ $data->major }}</li>
                		<li>Currently Enrolled: {{ $data->enrolled=='on'?'Yes':'No' }}</li>
                		
                	</ul>
              	</div>
            
            	<div class="col-md-6 mb-3">
            		      <h4 class="mb-3">Work History</h4>
              			<ul class="list-unstyled">
                		<li>Previous Employee: {{ $data->orgName }}</li>
                		<li>Address: {{ $data->orgAddress }}</li>
                		<li>City: {{ $data->orgCity }}</li>
                		<li>Job Title: {{ $data->title }}</li>
                		<li>Supervisor/Manager: {{ $data->supervisor }}</li>
                		<li>Contact: {{ $data->contact }}</li>
                		<li>Reason for leaving: {{ $data->reason }}</li>
                		<li>Can we verify: {{ $data->verify }}</li>
                		<li>Explaination: {{ $data->noVerifyReason }}</li>
                		
                	</ul>
              	</div>
             </div>
        </div>
      </div>



 <div class="row">
        <div class="col-md-12 order-md-1">
          
          <form method="post" action="{{url('/apply/confirm')}}">
          	<div hidden>
          	{{ csrf_field() }}
            <div class="row">
            	<div class="col-md-4 mb-3">
              <input type="text" class="form-control" id="location" name="location" value="{{$data->location}}">
              <input type="text" class="form-control" id="role" name="role" value="{{$data->role}}">
                <input type="text" class="form-control" id="cName" name="cName" value="{{$data->cName}}">
               
              </div>
              <div class="col-md-4 mb-3">
               
                <input type="text" class="form-control" id="firstName" name="firstName" value="{{$data->firstName}}">
               
              </div>
              <div class="col-md-4 mb-3">
               
                <input type="text" class="form-control" id="lastName" name="lastName" value="{{$data->lastName}}">
               
              </div>
            </div>

            
            <div class="row">

            <div class="col-md-6 mb-3">
              <input type="phone" class="form-control" id="phone" name="phone" value="{{$data->phone}}">
              
            </div>
             <div class="col-md-6 mb-3">
         
              <input type="email" class="form-control" id="email" name="email" value="{{$data->email}}">
            
            </div>
        	</div>

            <div class="mb-3">
              
              <input type="text" class="form-control" id="address" name="address" value="{{$data->address}}" >
            </div>

            

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="city">City</label>
               <input type="text" class="form-control" id="city" name="city" value="{{$data->city}}" >
              </div>
              <div class="col-md-4 mb-3">
                <label for="province">Province</label>
                <input type="text" class="form-control" value="{{$data->province}}" name="province">
              
              </div>
              <div class="col-md-3 mb-3">
                <label for="postal">Postal Code</label>
                <input type="text" class="form-control" value="{{$data->postal}}" name="postal" >
              </div>
            </div>
		

			  <div class="row">
              <div class="col-md-4 mb-3">
                <label for="dob">Date of Birth</label>
               <input type="text" class="form-control" value="{{$data->dob}}" name="dob">
              </div>
              <div class="col-md-4 mb-3">
                <label for="pob">Place of Birth</label>
               <input type="text" class="form-control" value="{{$data->pob}}" name="pob">
              
              </div>
              <div class="col-md-4 mb-3">
                <label for="arrival">Date arrived in Canada 
                <input type="text" class="form-control" value="{{$data->arrival}}" name="arrival" >
               
              </div>
            </div>
             <div class="col-md-4 mb-3">
                <label for="gender">gender</label>
                <input type="text" class="form-control" value="{{$data->gender}}" name="gender">
               
              </div>

            <div class="row mb-3">
            	<div class="col-md-6">
            	<label>Languages</label>
            	<div class="custom-control custom-checkbox">
              	<input type="checkbox" class="custom-control-input" {{$data->english?'checked':''}} name="english">
              	<label class="custom-control-label" for="english">English</label>
            	</div>
            	<div class="custom-control custom-checkbox">
              	<input type="checkbox" class="custom-control-input" {{$data->chinese?'checked':''}} name="chinese">
              	<label class="custom-control-label" for="chinese">Mandarin 国语</label>
            	</div>
            	<div class="custom-control custom-checkbox">
              	<input type="checkbox" class="custom-control-input" {{$data->cantonese?'checked':''}} name="cantonese">
              	<label class="custom-control-label" for="cantonese">Cantonese 广东话</label>
            	</div>
            	<div class="custom-control custom-checkbox">
              	<input type="checkbox" class="custom-control-input" {{$data->french?'checked':''}} name="french">
              	<label class="custom-control-label" for="french">French</label>
            	</div>

        		</div>
            </div>

            <div class="row">
            	<div class="col-md-6 mb-3">
            		<label for="province">Status in Canada</label>
                <input type="text" class="form-control" value="{{$data->status}}" name="status">
              
                <div class="invalid-feedback">
                  Please provide a valid province.
                </div>
            	</div>
            	<div class="col-md-6 mb-3">
                <label for="expiry">Status expiry date</label>
                <input type="text" class="form-control" value="{{$data->expiry}}" name="expiry">
              	</div>
            </div>

          	<div class="row">
          		<div class="col-md-6 mb-3">
                <label for="interest">Interest and Activities</label>
                <input type="text" class="form-control" value="{{$data->interest}}" name="interest">
              	</div>
              	  <div class="col-md-6 mb-3">
            	  <div class="custom-control custom-radio">
              	  <input type="text" name="education" class="form-control" value="{{$data->education}}">
               
             	 </div>
           		 </div>
          	</div>

          
            <div class="row">
            	 <div class="col-md-5 mb-3">
                <label for="school">School</label>
                <input type="text" class="form-control" value="{{$data->school}}" name="school">
           
              </div>
              <div class="col-md-5 mb-3">
                <label for="major">Major</label>
                <input type="text" class="form-control" value="{{$data->major}}" name="major">
              </div>
            
             	<div class="col-md-2 mb-3">
              	<label>Currently enrolled</label>
               	<div class="custom-control custom-checkbox">
              		<input type="checkbox" class="custom-control-input" {{$data->enrolled?'checked':''}} name="enrolled">
              	 	<label class="custom-control-label" for="enrolled">Yes</label>
            	</div>
          		</div>
       		
            </div>
          
           
            <div class="row">
            	
              <div class="col-md-4 mb-3">
                <label for="orgName">Business name</label>
                <input type="text" class="form-control" value="{{$data->orgName}}"" name="orgName" >
            
              </div>
              <div class="col-md-4 mb-3">
                <label for="orgAddress">Address</label>
                <input type="text" class="form-control" value="{{$data->orgAddress}}" name="orgAddress" >
              </div>

              <div class="col-md-4 mb-3">
                <label for="orgCity">City</label>
                <input type="text" class="form-control" value="{{$data->orgCity}}" name="orgCity">
              </div>
            </div>

             <div class="row">
            	
              <div class="col-md-4 mb-3">
                <label for="title">Job Title</label>
                <input type="text" class="form-control" value="{{$data->title}}" name="title">
              </div>
              <div class="col-md-4 mb-3">
                <label for="supervisor">Supervisor/Manager</label>
                <input type="text" class="form-control" value="{{$data->supervisor}}" name="supervisor">
              </div>

              <div class="col-md-4 mb-3">
                <label for="contact">Contact</label>
                <input type="text" class="form-control" value="{{$data->contact}}" name="contact">
              </div>
            </div>

              <div class="row">
            	
              <div class="col-md-12 mb-3">
                <label for="reason">Reason for leaving this job</label>
                <input type="text" class="form-control" value="{{$data->reason}}" name="reason" >
              </div>
              <div class="col-md-4 mb-3">
              	<label>Can we contact your last employer?</label>
               	<div class="custom-control custom-checkbox">
              		<input type="checkbox" class="custom-control-input" id="verify" name="verify" {{$data->verify?'checked':''}}>
              	 	<label class="custom-control-label" for="verify">Yes</label>
            	</div>
          		</div>

              <div class="col-md-8 mb-3">
                <label for="noVerifyReason">If not, please explain</label>
                <input type="text" class="form-control" id="noVerifyReason" name="noVerifyReason" value="{{$data->noVerifyReason}}">
              </div>
            </div>
              <div class="row">
            	
              <div class="col-md-4 mb-3">
                <label for="emergency_person">Name</label>
                <input type="text" class="form-control" value="{{$data->emgergency_person}}" name="emgergency_person">
                <div class="invalid-feedback">
                  紧急联络人
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="emgergency_phone">Phone</label>
                <input type="text" class="form-control" value="{{$data->emgergency_phone}}" name="emgergency_phone">
              </div>

              <div class="col-md-4 mb-3">
                <label for="emergency_relation">Relationship</label>
                <input type="text" class="form-control" value="{{$data->emergency_relation}}" name="emergency_relation">
              </div>
            </div>

        </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">I confirm above information & Submit my application</button>
          </form>
        </div>
      </div>



@endsection