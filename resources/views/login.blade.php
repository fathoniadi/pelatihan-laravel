@extends('base.template')


@section('content')
	<div class="box">
		<div class="box-body">
			<form action="{{ url('/login') }}" method="POST">
				{{ csrf_field() }}
				<div class="form-group">
					<label>Email</label>
					<input type="text" name="email" class="form-controll">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-controll">
				</div>
				<button type="submit">Login</button>
			</form>
		</div>
	</div>
@endsection