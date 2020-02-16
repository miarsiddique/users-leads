{!! Form::open([
        'route' => 'customers-store',
        'method' => 'post',
    ]) 
!!}
<div>
	<h6 class="m-0 font-weight-bold text-primary">CUSTOMER DETAILS</h6>
	<hr>
</div>
<div class="row">
	<div class="col-md-4">
		<div class="form-group">
			{!! Form::text('customer_name', old('customer_name'), [
		            'class' => 'form-control form-control-user',
		            'placeholder' => 'CUSTOMER NAME'
		        ]) 
		    !!}
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			{!! Form::text('company_name', old('company_name'), [
		            'class' => 'form-control form-control-user',
		            'placeholder' => 'COMAPANY NAME'
		        ]) 
		    !!}
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			{!! Form::text('email', old('email'), [
		            'class' => 'form-control form-control-user',
		            'placeholder' => 'EMAIL'
		        ]) 
		    !!}
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		<div class="form-group">
			{!! Form::text('pan_number', old('pan_number'), [
		            'class' => 'form-control form-control-user',
		            'placeholder' => 'PAN NUMBER'
		        ]) 
		    !!}
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			{!! Form::text('gstin_number', old('gstin_number'), [
		            'class' => 'form-control form-control-user',
		            'placeholder' => 'GSTIN NUMBER'
		        ]) 
		    !!}
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			{!! Form::text('phone_number', old('phone_number'), [
		            'class' => 'form-control form-control-user',
		            'placeholder' => 'PHONE NUMBER'
		        ]) 
		    !!}
		</div>
	</div>
</div>
<div>
	<h6 class="m-0 font-weight-bold text-primary">ADDRESS DETAILS</h6>
	<hr>
</div>
<div class="row">
	<div class="col-md-4">
		<div class="form-group">
			{!! Form::text('line1', old('line1'), [
		            'class' => 'form-control form-control-user',
		            'placeholder' => 'LINE 1'
		        ]) 
		    !!}
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			{!! Form::text('line2', old('line2'), [
		            'class' => 'form-control form-control-user',
		            'placeholder' => 'LINE 2'
		        ]) 
		    !!}
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			{!! Form::text('city', old('city'), [
		            'class' => 'form-control form-control-user',
		            'placeholder' => 'CITY'
		        ]) 
		    !!}
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		<div class="form-group">
			{!! Form::text('state', old('state'), [
		            'class' => 'form-control form-control-user',
		            'placeholder' => 'STATE'
		        ]) 
		    !!}
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			{!! Form::text('pin_code', old('pin_code'), [
		            'class' => 'form-control form-control-user',
		            'id' => 'exampleInputEmail',
		            'placeholder' => 'PIN CODE'
		        ]) 
		    !!}
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			{!! Form::text('state_code', old('state_code'), [
		            'class' => 'form-control form-control-user',
		            'id' => 'exampleInputEmail',
		            'placeholder' => 'STATE CODE'
		        ]) 
		    !!}
		</div>
	</div>
</div>
<div class="text-right">
	<button type="submit" class="btn btn-primary">SAVE</button>
</div>
{!! Form::close() !!}