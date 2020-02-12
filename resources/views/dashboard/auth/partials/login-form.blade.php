{!! Form::open([
        'route' => 'authenticate',
        'method' => 'POST',
        'class' => 'user'
    ]) 
!!}

{!! Form::token() !!}
	<div class="form-group">
		{!! Form::text('email', old('email'), [
	            'class' => 'form-control form-control-user',
	            'id' => 'exampleInputEmail',
	            'placeholder' => 'Enter Email Address...'
	        ]) 
	    !!}
	</div>
	<div class="form-group">
		<input type="password" name="password" class="form-control form-control-user" placeholder='Password'>
	</div>
	<div class="form-group">
		<div class="custom-control custom-checkbox small">
			<input type="checkbox" class="custom-control-input" id="customCheck">
			<label class="custom-control-label" for="customCheck">Remember Me</label>
		</div>
	</div>
	<button class="btn btn-primary btn-user btn-block">
		Login
	</button>
	<hr>
	<a href="{{route('register')}}" class="btn btn-google btn-user btn-block">
		<i class="fab fa fa-user"></i> Sign Up
	</a>
	<a href="#" class="btn btn-facebook btn-user btn-block">
		<i class="fab fa fa-key"></i> Forgot Password
	</a>
{!! Form::close() !!}