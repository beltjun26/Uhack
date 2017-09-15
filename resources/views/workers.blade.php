@extends('layouts.navigation')

@section('content')
<div class="main-container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <ul class="workers">
                	<li>
                        <a href="#">
                            <img src="{{asset('uploads/selfie.png')}}" alt="user-image"> 
                            <div class="desc">
                                <span class="name">Clyde Joshua Delgado</span>
                                <ul class="spec">
                                    <li><span class="glyphicon glyphicon-star"></span> 0</li>
                                    <li><span class="glyphicon glyphicon-wrench"></span> 0</li>
                                </ul>
                                <span class="address">San Pedro, San Jose, Antique</span>
                                <span class="contact-no">09177027628</span>
                            </div>
                        </a>
                	</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="modal" id="view-worker">
        <div class="modal-dialogue">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="" alt="user-image">
                    <h2>Clyde Joshua Delgado</h2>
                    <span class="address"></span>
                    <span class="contact-number"></span>
                    <p class="description">I have worked in several construction projects specifically with the building of my relative's house.</p>
                    <button type="button" class="hire">Hire Worker</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/workers.css') }}">
@endpush
