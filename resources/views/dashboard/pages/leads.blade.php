@extends('dashboard.layouts.default')

@section('title')
	Users Leads
@stop

@section('stylesheet')

@endsection

@section('page-heading')
 LEADS TABLE
@endsection

@section('content')
<!-- filters added -->
@include('dashboard.pages.partials.filter-form')
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">User Leads</h6>
	</div>
	<div class="card-body">
		<!-- table include -->
		@include('dashboard.pages.partials.leads-table')
	</div>
</div>
@endsection

@section('js')
@endsection
