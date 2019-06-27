@extends('main')

@section('title', '| Login')

@section('content')

<br>

<div class="row">
	<div class="col-md-6 offset-md-3">
		<div class="card border-dark">
			<h5 class="card-header bg-light">Millionaire Login</h5>
				<div class="card-body">
					{!! Form::open() !!}

						{{ Form::label('email', 'Email:',['class' => 'form-spacing-top1']) }}
						{{ Form::email('email',null, ['class' => 'form-control']) }}

						{{ Form::label('password', 'Password:',['class' => 'form-spacing-top1']) }}
						{{ Form::password('password', ['class' => 'form-control']) }} 
						<br>

						{{ Form::checkbox('remember')}} {{ Form::label('remember', 'Remember Me') }}

						{{ Form::submit('Login', ['class' => 'btn btn-primary' ]) }}

						<p><a href="{{ url('password/reset') }}">Forgot Password</a></p>

					{!! Form::close() !!}
				</div>
			</div>	
		</div>
	</div>
</div>

@endsection