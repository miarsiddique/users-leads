@extends('dashboard.layouts.app')

@section('title')
	Create an Account !
@endsection

@section('heading')
	Create an Account !
@endsection



@section('content')
	@section('image')
		<div class="col-lg-6 d-none d-lg-block bg-register-image"></div>
	@endsection

	@include('dashboard.auth.partials.register-form')

@endsection