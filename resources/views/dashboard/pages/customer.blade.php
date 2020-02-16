@extends('dashboard.layouts.default')

@section('title')
	CUSTOMERS
@stop

@section('stylesheet')

@endsection

@section('page-heading')
 CUSTOMERS
@endsection

@section('content')
<!-- filters added -->
@include('dashboard.pages.partials.filter-form')
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<div class="text-right">
			<a href="{{route('customers-add')}}" class="btn btn-primary">Add Customers</a>
		</div>
	</div>
	<div class="card-body">
		<!-- table include -->
		@include('dashboard.pages.partials.customer-table')
	</div>
</div>
@endsection

@section('js')
@endsection
