<div class="row">
	<div class="form-group">
	{!! Form::open([
	        'route' => 'users-leads',
	        'method' => 'GET',
	    ]) 
	!!}
		<div class="col-md-12">
			
			{{ Form::select('lead_type', config('leads.lead_type'), old('lead_type'), [
					'class' => 'form-control', 'placeholder'=> 'Select Lead Type'
				]) 
			}}
		</div>
	</div> 
	<div class="form-group">
		<div class="col-md-12">
			<input type="submit"value="Search" class="form-control btn btn-primary">
		</div>
	{!! Form::close() !!}
	</div>
</div>