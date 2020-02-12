{!! Form::open([
        'route' => 'registered',
        'method' => 'POST',
        'class' => 'user'
    ]) 
!!}

{!! Form::token() !!}
<div class="form-group row">
    <div class="col-sm-12 mb-6 mb-sm-0">
        {!! Form::text('name', old('name'), [
                'class' => 'form-control form-control-user',
                'id' => 'exampleFirstName',
                'placeholder' => 'First Name'
            ]) 
        !!}
    </div>
</div>
<div class="form-group">
    {!! Form::text('email', old('email'), [
            'class' => 'form-control form-control-user',
            'id' => 'exampleInputEmail',
            'placeholder' => 'Email Address'
        ]) 
    !!}
</div>
<div class="form-group row">
    <div class="col-sm-12 mb-6 mb-sm-0">
        <input type="password" name="password" class="form-control form-control-user" placeholder='Password'>
    </div>
</div>

<div class="form-group">
    <div class="custom-control custom-checkbox small">
        <input type="checkbox" class="custom-control-input" id="customCheck">
        {!! Form::checkbox('status', 'ACTIVE', true, 
                ['class' => 'custom-control-input', 'id' => 'customCheck']
            )
        !!}

        {!! Form::label('Status', 'Status', 
                ['class' => 'custom-control-label', 'for' => 'customCheck']
            )
        !!}
    </div>
</div>

<button type="submit" class="btn btn-primary btn-user btn-block">Register Account</button>
<hr>
<a href="{{route('login')}}" class="btn btn-facebook btn-user btn-block">
    <i class="fab fa fa-lock"></i> Login
</a>
{!! Form::close() !!}