@extends('layout.master')
@section('content')



      <div class="row">
     
        <div class="col-md-12 order-md-1">
          <h4 class="mb-3">Personal Information</h4>
         
            <div class="row">
            	<div class="col-md-6 mb-3">
                	<ul class="list-unstyled">
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
                		<li>Currently Enrolled: {{ $data->enrolled }}</li>
                		
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


              
            <hr class="mb-4">
            <form method="post" action="/apply/confirm">
            	{{csrf_field()}}
            <button class="btn btn-primary btn-lg btn-block" type="submit">I confirm the above infomation & Submit my application</button>
        	</form>
        </div>
      </div>




@endsection