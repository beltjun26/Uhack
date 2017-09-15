@extends('layouts.navigation')

@section('content')
<div class="main-container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <input type="text" id="category-filter" name="category-filter" placeholder="Search employee type">

                <ul class="categories">
                	<li>
                		<span class="glyphicon glyphicon-home"></span>
                		<span class="name">Category 1</span>
                	</li>
                	<li>
                		<span class="glyphicon glyphicon-home"></span>
                		<span class="name">Category 2</span>
                	</li>
                	<li>
                		<span class="glyphicon glyphicon-home"></span>
                		<span class="name">Category 3</span>
                	</li>
                	<li>
                		<span class="glyphicon glyphicon-home"></span>
                		<span class="name">Category 4</span>
                	</li>
                	<li>
                		<span class="glyphicon glyphicon-home"></span>
                		<span class="name">Category 5</span>
                	</li>
                	<li>
                		<span class="glyphicon glyphicon-home"></span>
                		<span class="name">Category 6</span>
                	</li>
                </ul>

                <!-- <div class="panel-heading">Dashboard</div> -->
                <!-- <div class="panel-body"> -->
                    {{--@if (session('status'))--}}
                        <!-- <div class="alert alert-success"> -->
                            {{--session('status')--}}
                        <!-- </div> -->
                    {{--@endif--}}
                    <!-- You are logged in! -->
                <!-- </div> -->
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
@endpush
