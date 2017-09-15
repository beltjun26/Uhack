@extends('layouts.navigation')

@section('content')
<div class="main-container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <ul class="notifications">
                	<li>
                        <a href="#">
                            <img src="" alt="user-image"> Clyde Joshua Delgado 
                            <span class="address">San Pedro, San Jose, Antique</span>
                            <span class="contact-no">09177027628</span>
                            <ul class="spec">
                                <li class="glyphicon glyphicon-wrench"></li>
                            </ul>
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
	<link rel="stylesheet" type="text/css" href="{{ asset('css/notifications.css') }}">
@endpush
