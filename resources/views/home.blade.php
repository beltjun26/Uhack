@extends('layouts.navigation')

@section('content')
<div class="main-container">
    <div class="row">
        <div class="col-md-12 no-padding">
            <div class="panel panel-default">
				<h2 class="headline">Categories</h2>
                <input type="text" id="category-filter" name="category-filter" placeholder="Search employee category">
                <ul class="categories">
                	<li>
                		<a href="#">
	                		<span class="glyphicon glyphicon-home"></span>
	                		<span class="name">Masonry</span>
                		</a>
                	</li>
                	<li>
                		<a href="#">
	                		<span class="glyphicon glyphicon-wrench"></span>
	                		<span class="name">Plumber</span>
                		</a>
                	</li>
                	<li>
                		<a href="#">
	                		<span class="glyphicon glyphicon-home"></span>
	                		<span class="name">Carpenter</span>
                		</a>
                	</li>
                	<li>
                		<a href="#">
	                		<span class="glyphicon glyphicon-tint"></span>
	                		<span class="name">Laundry</span>
                		</a>
                	</li>
                	<li>
                		<a href="#">
	                		<span class="glyphicon glyphicon-home"></span>
	                		<span class="name">Painter</span>
                		</a>
                	</li>
                	<li>
                		<a href="#">
	                		<span class="glyphicon glyphicon-cutlery"></span>
	                		<span class="name">Cook</span>
                		</a>
                	</li>
                	<li>
                		<a href="#">
                			<span class="glyphicon glyphicon-leaf"></span>
                			<span class="name">Gardener</span>
                		</a>
                	</li>
                	<li>
                		<a href="#">
                			<span class="glyphicon glyphicon-flash"></span>
                			<span class="name">Electrician</span>
                		</a>
                	</li>
                	<li>
                		<a href="#">
                			<span class="glyphicon glyphicon-tree-deciduous"></span>
                			<span class="name">Woodcutter</span>
                		</a>
                	</li>
                	<li>
                		<a href="#">
                			<span class="glyphicon glyphicon-baby-formula"></span>
                			<span class="name">Nanny</span>
                		</a>
                	</li>
                	<li>
                		<a href="#">
                			<span class="glyphicon glyphicon-cog"></span>
                			<span class="name">Mechanic</span>
                		</a>
                	</li>
                	<li>
                		<a href="#">
	                		<span class="glyphicon glyphicon-home"></span>
	                		<span class="name">Masonry</span>
                		</a>
                	</li>
                	<li>
                		<a href="#">
	                		<span class="glyphicon glyphicon-wrench"></span>
	                		<span class="name">Plumber</span>
                		</a>
                	</li>
                	<li>
                		<a href="#">
	                		<span class="glyphicon glyphicon-home"></span>
	                		<span class="name">Carpenter</span>
                		</a>
                	</li>
                	<li>
                		<a href="#">
	                		<span class="glyphicon glyphicon-tint"></span>
	                		<span class="name">Laundry</span>
                		</a>
                	</li>
                	<li>
                		<a href="#">
	                		<span class="glyphicon glyphicon-home"></span>
	                		<span class="name">Painter</span>
                		</a>
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
