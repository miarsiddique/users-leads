@extends('dashboard.layouts.app')

@section('title')

	Login

@endsection

@section('heading')
	
	Welcome Back !

@endsection

@section('content')
	
	@section('image')
		<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
	@endsection

	@include('dashboard.auth.partials.login-form')

@endsection