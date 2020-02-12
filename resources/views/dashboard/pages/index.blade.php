@extends('dashboard.layouts.default')

@section('title')
Users Leads
@stop

@section('stylesheet')

@endsection

@section('page-heading')

@endsection

@section('content')
	<div class="row">
		<!-- Earnings (Monthly) Card Example -->
		<div class="col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Users</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">{{$users->count()}}</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-users fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Earnings (Monthly) Card Example -->
		<div class="col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Leads</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">{{$leads->count()}}</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-table fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">User</h6>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>Name</th>
									<th>Email</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								@foreach($users->take(10) as $key => $user)
								<tr>
									<td>{{$user->name}}</td>
									<td>{{$user->email}}</td>
									<td>{{$user->status}}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Leads</h6>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>User Name</th>
									<th>Query</th>
									<th>Type</th>
								</tr>
							</thead>
								@foreach($leads->take(10) as $key => $lead)
								<tr>
									<td>{{$lead->users->name}}</td>
									<td>{{$lead->query}}</td>
									<td>{{$lead->type}}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('js')
@endsection
