<div class="table-responsive">
	<table class="table table-bordered" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th>User Name</th>
				<th>Query</th>
				<th>Lead Type</th>
				<th>Lead Status</th>
				<th>User Status</th>
			</tr>
		</thead>
			@foreach($leads as $key => $lead)
			<tr>
				<td>{{$lead->user_name}}</td>
				<td>{{$lead->query}}</td>
				<td>{{$lead->type}}</td>
				<td>{{$lead->user_status}}</td>
				<td>{{$lead->lead_status}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<div>{{$leads->links()}}</div>
</div>