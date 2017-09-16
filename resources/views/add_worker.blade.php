@extends('layouts.navigation')

@section('content')
<div class="main-container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        	<img src="{{ asset('uploads/user_profile/user.png') }}"/>

        	<h2>Juan de la Cruz</h2>
        	<span>Brgy. Sapa Miagao, Iloilo</span>

            <div class="panel panel-default">
              <h4>Masonry</h4>
              <p>I know i shouldn't do this but im lazy tempor incididunt ut labore et dolore. </p>
              <span><strong>Rate:</strong>250 per day</span>
            </div>
            <div class="panel panel-default">
              <h4>Carpentry</h4>
              <p>Furnishing experience. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod I know i shouldn't do this but im lazy tempor incididunt ut labore et dolore. </p>
              <span><strong>Rate:</strong>250 per day</span>
            </div>
        </div>
        <div class="row">
          <a class="btn btn-primary" href="{{ url('sendsms') }}">Hire</a>
        </div>
    </div>
</div>
@endsection

@push('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
@endpush
