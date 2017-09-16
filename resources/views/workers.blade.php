@extends('layouts.navigation')

@section('content')
<div class="main-container">
    <div class="row">
        <div class="col-md-12 no-padding">
            <div class="panel panel-default">
                <!-- <h2 class="headline">Workers</h2> -->
                <h5 class="headline">CARPENTERS</h3>
                <div style="text-align: right; margin-right: 0.5em; margin-top: -3em; margin-bottom: 2em;"><span class="roboto">Rating</span> <span class="caret"></span></div>
                <ul class="workers">
                    <li>
                        <a href="#">
                            <img src="{{asset('uploads/selfie.png')}}" alt="user-image"> 
                            <div class="desc">
                                <span class="name">Clyde Joshua Delgado</span>
                                <ul class="spec">
                                    <li><span class="glyphicon glyphicon-star"></span> <span class="consolas">5.0</span></li>
                                    <li><span class="glyphicon glyphicon-map-marker"></span> <span class="consolas">3km</span></li>
                                    <li><span class="glyphicon glyphicon-wrench"></span> <span class="consolas">2</span></li>
                                </ul>
                                <span class="address">San Pedro, San Jose, Antique</span>
                                <span class="contact-no">09177027628</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{asset('uploads/selfie.png')}}" alt="user-image"> 
                            <div class="desc">
                                <span class="name">Ronan Johna Raquirezs</span>
                                <ul class="spec">
                                    <li><span class="glyphicon glyphicon-star"></span> <span class="consolas">3.2</span></li>
                                    <li><span class="glyphicon glyphicon-map-marker"></span> <span class="consolas">2km</span></li>
                                    <li><span class="glyphicon glyphicon-wrench"></span> <span class="consolas">1</span></li>
                                </ul>
                                <span class="address">San Pedro, San Jose, Antique</span>
                                <span class="contact-no">09177027628</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{asset('uploads/selfie.png')}}" alt="user-image"> 
                            <div class="desc">
                                <span class="name">Teron Rum Chada</span>
                                <ul class="spec">
                                    <li><span class="glyphicon glyphicon-star"></span> <span class="consolas">1.5</span></li>
                                    <li><span class="glyphicon glyphicon-map-marker"></span> <span class="consolas">2km</span></li>
                                    <li><span class="glyphicon glyphicon-wrench"></span> <span class="consolas">3</span></li>
                                </ul>
                                <span class="address">San Pedro, San Jose, Antique</span>
                                <span class="contact-no">09177027628</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{asset('uploads/selfie.png')}}" alt="user-image"> 
                            <div class="desc">
                                <span class="name">Rammel Noquinta</span>
                                <ul class="spec">
                                    <li><span class="glyphicon glyphicon-star"></span> <span class="consolas">1.5</span></li>
                                    <li><span class="glyphicon glyphicon-map-marker"></span> <span class="consolas">2.3km</span></li>
                                    <li><span class="glyphicon glyphicon-wrench"></span> <span class="consolas">3</span></li>
                                </ul>
                                <span class="address">San Pedro, San Jose, Antique</span>
                                <span class="contact-no">09177027628</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{asset('uploads/selfie.png')}}" alt="user-image"> 
                            <div class="desc">
                                <span class="name">Jose Jun Ramirez</span>
                                <ul class="spec">
                                    <li><span class="glyphicon glyphicon-star"></span> <span class="consolas">0.0</span></li>
                                    <li><span class="glyphicon glyphicon-map-marker"></span> <span class="consolas">3km</span></li>
                                    <li><span class="glyphicon glyphicon-wrench"></span> <span class="consolas">0</span></li>
                                </ul>
                                <span class="address">San Pedro, San Jose, Antique</span>
                                <span class="contact-no">09177027628</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{asset('uploads/selfie.png')}}" alt="user-image"> 
                            <div class="desc">
                                <span class="name">Pedro Penduco</span>
                                <ul class="spec">
                                    <li><span class="glyphicon glyphicon-star"></span> <span class="consolas">0.0</span></li>
                                    <li><span class="glyphicon glyphicon-map-marker"></span> <span class="consolas">3km</span></li>
                                    <li><span class="glyphicon glyphicon-wrench"></span> <span class="consolas">0</span></li>
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
