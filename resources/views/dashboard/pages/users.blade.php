@extends('dashboard.layouts.default')

@section('title')
	Users Lists
@stop

@section('stylesheet')
@endsection

@section('page-heading')
 USERS TABLE
@endsection

@section('content')
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">User Lists</h6>
	</div>
	<div class="card-body">
		@include('dashboard.pages.partials.users-table')
	</div>
</div>
@endsection

@section('js')
@endsection
