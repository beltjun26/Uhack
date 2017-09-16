@extends('layouts.navigation')

@section('content')
<div class="main-container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <h2 class="headline"><span class="glyphicon glyphicon-bell"></span> Notifications</h2>
                <ul class="notifications">
                    <li><p><img class="source" src="{{asset('uploads/selfie.png')}}" alt="user-image"> <a class="text-bold" href="#">Clyde Joshua</a> has asked Juan Dela Cruz to work with him.</p></li>
                    <li><p><img class="source" src="{{asset('uploads/selfie.png')}}" alt="user-image"> <a class="text-bold" href="#">Clyde Joshua</a> has asked Ruben Nacio to work with him.</p></li>
                    <li><p><img class="source" src="{{asset('uploads/selfie.png')}}" alt="user-image"> <a class="text-bold" href="#">Clyde Joshua</a> has asked Mako Nim to work with him.</p></li>
                  <li><p><img class="source" src="{{asset('uploads/selfie.png')}}" alt="user-image"> <a class="text-bold" href="#">Clyde Joshua</a> has asked Jenjen Santos to work with him.</p></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/notifications.css') }}">
@endpush
