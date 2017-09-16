@extends('layouts.navigation')

@section('content')
<div class="main-container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <h2 class="headline"><span class="glyphicon glyphicon-bell"></span> Workers</h2>
                <div class="row text-center">
                  <a class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>Add</a>
                </div>
                <ul class="notifications">
                    <li><p><img class="source" src="{{asset('uploads/selfie.png')}}" alt="user-image"> <a class="text-bold" href="#">Clyde Joshua</a></p></li>
                    <li><p><img class="source" src="{{asset('uploads/selfie.png')}}" alt="user-image"> <a class="text-bold" href="#">Clyde Joshua</a></p></li>
                    <li><p><img class="source" src="{{asset('uploads/selfie.png')}}" alt="user-image"> <a class="text-bold" href="#">Clyde Joshua</a> </p></li>
                  <li><p><img class="source" src="{{asset('uploads/selfie.png')}}" alt="user-image"> <a class="text-bold" href="#">Clyde Joshua</a> </p></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/notifications.css') }}">
@endpush
