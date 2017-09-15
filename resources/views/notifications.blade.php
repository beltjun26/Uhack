@extends('layouts.navigation')

@section('content')
<div class="main-container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <ul class="notifications">
                	<li>
                        <p><img src="" alt="user-image"> Clyde Joshua has asked you to work with him.</p>
                        <p><img src="" alt="user-image"> Clyde Joshua has asked you to work with him.</p>
                        <p><img src="" alt="user-image"> Clyde Joshua has asked you to work with him.</p>
                        <p><img src="" alt="user-image"> Clyde Joshua has asked you to work with him.</p>
                		<p><img src="" alt="user-image"> Clyde Joshua has asked you to work with him.</p>
                	</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/notifications.css') }}">
@endpush
