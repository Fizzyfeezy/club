@extends('main')

@section('title', '| Register')

@section('content')

<br>

<div class="row">
	<div class="col-md-6 offset-md-3">
		<div class="card border-dark">
			<h5 class="card-header bg-light">Millionaire Registeration</h5>
				<div class="card-body">
					{!! Form::open() !!}

						{{ Form::label('name', 'Name:',['class' => 'form-spacing-top1']) }}
						{{ Form::text('name',null, ['class' => 'form-control']) }}

						{{ Form::label('email', 'Email:',['class' => 'form-spacing-top1']) }}
						{{ Form::email('email',null, ['class' => 'form-control']) }}

						{{ Form::label('password', 'Password:',['class' => 'form-spacing-top1']) }}
						{{ Form::password('password', ['class' => 'form-control']) }} 

						{{ Form::label('password_confirmation', 'Confirm Password:',['class' => 'form-spacing-top1']) }}
						{{ Form::password('password_confirmation', ['class' => 'form-control']) }}


						{{ Form::submit('Register', ['class' => 'btn btn-primary btn-block form-spacing-top']) }}

					{!! Form::close() !!}
				</div>
			</div>	
		</div>
	</div>
</div>

@endsection