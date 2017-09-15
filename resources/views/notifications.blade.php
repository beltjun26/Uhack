@extends('layouts.navigation')

@section('content')
<div class="main-container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <ul class="notifications">
                    <li><p><img class="source" src="{{asset('uploads/selfie.png')}}" alt="user-image"> <a class="text-bold" href="#">Clyde Joshua</a> has asked you to work with him.</p></li>
                    <li><p><img class="source" src="{{asset('uploads/selfie.png')}}" alt="user-image"> <a class="text-bold" href="#">Clyde Joshua</a> has asked you to work with him.</p></li>
                    <li><p><img class="source" src="{{asset('uploads/selfie.png')}}" alt="user-image"> <a class="text-bold" href="#">Clyde Joshua</a> has asked you to work with him.</p></li>
                	<li><p><img class="source" src="{{asset('uploads/selfie.png')}}" alt="user-image"> <a class="text-bold" href="#">Clyde Joshua</a> has asked you to work with him.</p></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/notifications.css') }}">
@endpush
