@extends('layout.master')
@section('content')
<!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">{{$applicant->firstName}}! Thank you!</h1>
          <p>We have received your job application. Our HR department will reivew your information. We may call you to further discus opportunities at {{$company}}</p>
          <p><a class="btn btn-primary btn-lg" href="http://www.magicnoodle.ca" role="button">OK</a></p>
        </div>
      </div>
@endsection