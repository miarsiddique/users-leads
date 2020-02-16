@extends('dashboard.layouts.default')

@section('title')
	CUSTOMERS
@stop

@section('stylesheet')
@endsection

@section('page-heading')
 ADD CUSTOMER
@endsection

@section('content')
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<div class="col-md-12 text-right">
			<a href="#" class="btn btn-primary">CUSTOMERS</a>
		</div>
	</div>
	<div class="card-body">
		@include('dashboard.pages.partials.customer-add-form')
	</div>
</div>
@endsection

@section('js')
@endsection
