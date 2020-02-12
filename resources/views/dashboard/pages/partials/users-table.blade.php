<div class="table-responsive">
	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Status</th>
				<th>Created At</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $key => $user)
				<tr>
					<td>{{$user->name}}</td>
					<td>{{$user->email}}</td>
					<td>{{$user->status}}</td>
					<td>{{$user->created_at}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
<div>
	{{$users->links()}}
</div>