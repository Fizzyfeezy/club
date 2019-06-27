@extends('main')

@section('title', '| Forgot my Password')

@section('content')

<br>

<div class="row">
	<div class="col-md-6 offset-md-3">
		<div class="card border-dark">
			<h5 class="card-header bg-light">Reset Password</h5>
				<div class="card-body">
					{!! Form::open(['url' => 'password/reset', 'method' => "POST"]) !!}

					{{ Form::hidden('token', $token) }}

						{{ Form::label('email', 'Email Adress:',['class' => 'form-spacing-top1']) }}
						{{ Form::email('email', $email, ['class' => 'form-control']) }}

						{{ Form::label('password', 'New Password:',['class' => 'form-spacing-top1']) }}
						{{ Form::password('password', ['class' => 'form-control']) }}

						{{ Form::label('password_confirmation', 'Confirm New Password:',['class' => 'form-spacing-top1']) }}
						{{ Form::password('password_confirmation', ['class' => 'form-control']) }}

						{{ Form::submit('Reset Password', ['class' => 'btn btn-primary form-spacing-top']) }}

					{!! Form::close() !!}
				</div>
			</div>	
		</div>
	</div>
</div>

@endsection