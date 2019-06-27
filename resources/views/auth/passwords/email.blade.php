@extends('main')

@section('title', '| Forgot my Password')

@section('content')

<br>

<div class="row">
	<div class="col-md-6 offset-md-3">
		<div class="card border-dark">
			<h5 class="card-header bg-light">Reset Password</h5>
				<div class="card-body">

					@if (session('status'))
						 <div class="alert alert-success">
						 	{{ session('status') }}
						 </div>	
					@endif
						
					{!! Form::open(['url' => 'password/email', 'method' => "POST"]) !!}

						{{ Form::label('email', 'Email Adress:',['class' => 'form-spacing-top1']) }}
						{{ Form::email('email', null, ['class' => 'form-control']) }}

						{{ Form::submit('Reset Password', ['class' => 'btn btn-primary form-spacing-top']) }}

					{!! Form::close() !!}
				</div>
			</div>	
		</div>
	</div>
</div>

@endsection