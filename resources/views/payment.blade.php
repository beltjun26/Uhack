@extends('layouts.navigation')

@section('content')
<div class="main-container">
    <div class="row">
        <div class="col-md-12 no-padding">
            <div class="panel panel-default">
                <div class="panel-body">
    				<h2 class="headline">Payment</h2>
                    
                    <form>
                        <input type="number" name="amount" placeholder="Enter amount">
                        <button class="confirm-btn" type="submit">Confirm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
	<style type="text/css">
            input[name="amount"]{
                display: block;
                border: 1px solid #e09218;
                border-radius: 3px;
                padding: 0.5em 1em;
                margin: auto;
                margin-bottom: 0.5em;
            }
           .confirm-btn{
                border-radius: 1em;
                border: none;
                font-family: Roboto;
                font-size: 1.1em;
                margin: auto;
                color: white;
                background-color: #82d520;
                padding: 0.25em 2em;
                display: block;
           }
    </style>
@endpush
