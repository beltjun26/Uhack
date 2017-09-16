@extends('layouts.navigation')

@section('content')
<div class="main-container">
    <div class="row">
        <div class="col-md-12 no-padding">

        	<img class="user-image" src="{{ asset('uploads/selfie.png') }}"/>

        	<h2 class="name">Clyde Joshua Delgado</h2>
        	<span class="address">Brgy. Sapa Miagao, Iloilo</span>
          <div class="spec">
            <span><span class="glyphicon glyphicon-star"></span> 5.0</span>
            <span><span class="glyphicon glyphicon-wrench"></span> 2</span>
          </div>

          <button class="hire-button">Request</button>

          <div class="skills">
            <div class="panel panel-default">
              <div class="panel-body">
                <h4 class="headline">Masonry</h4>
                <p class="roboto">Very well versed in masonry work. </p>
                <span class="skill-rating yellow">
                  <span class="glyphicon glyphicon-star"></span>
                  <span class="glyphicon glyphicon-star"></span>
                  <span class="glyphicon glyphicon-star"></span>
                  <span class="glyphicon glyphicon-star"></span>
                </span>
                <span class="rate"><strong class="roboto">Rate: </strong><span class="consolas">250 per day</span></span> 
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-body">
                <h4 class="headline">Carpentry</h4>
                <span class="skill-rating">
                  <span class="glyphicon glyphicon-star"></span>
                  <span class="glyphicon glyphicon-star"></span>
                  <span class="glyphicon glyphicon-star"></span>
                  <span class="glyphicon glyphicon-star"></span>
                </span>
                <p class="roboto">Furnishing experience is quite exceptional. Does jobs very quickly.</p>
                <span class="rate"><strong>Rate: </strong><span class="consolas">250 per day</span></span>
              </div>
            </div>
          </div>

          <h4 class="headline">Work Done</h4>

          <div class="finished-work">
            <div class="panel panel-default">
              <div class="panel-body">
                <p class="commenter"><img src="{{asset('uploads/selfie.png')}}" alt="user-image"><span class="name">May Joy Nonaillada</span></p>
                <p class="comment">Clyde Joshua has displayed excellence in doing masonry work in our house. I am looking forward to hire in the future and I recommend you to hire him.</p>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-body">
                <p class="commenter"><img src="{{asset('uploads/selfie.png')}}" alt="user-image"> <span class="name">Jeopet Ardales</span></p>
                <p class="comment">Clyde Joshua has helped us in the carpentry of the shed. It's quite impressing.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <a class="btn btn-primary" href="{{ url('sendsms') }}">Hire</a>
        </div>
    </div>
</div>
@endsection

@push('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}">
@endpush
