@extends('layouts.app')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Welcome to your dashboard , {{ auth()->user()->name }}</h1>
            </div>
            <div class="col-sm-6">
                
            </div>
        </div>
    </div>
</section>

@if( auth()->user()->is_approved == 0)
<div class="content px-3">

    @include('flash::message')

    <div class="clearfix"></div>

    <div class="card">
        <div class="card-body p-0" style="padding: 100px ! important;">
            
        	<h5 style="font-weight: 1px; font-size: 20px;">Your registration is currently been processed, kindly complete the registration process.
            You will be notified if you have been approved.</h5>
            <div class="card-footer clearfix float-right">
                <div class="float-right">
                    
                </div>
            </div>
        </div>

    </div>
</div>
@endif

@endsection
