@extends('base.template')


@section('content')
	<div class="box">
		@if($errors->count() > 0)
			<div class="alert alert-danger">
				@foreach($errors->all() as $error)
					<span>{{ $error }}</span>
				@endforeach
			</div>
		@endif

		
		<div class="box-body">
			<form action="{{ url('/category') }}" method="POST">
				{{ csrf_field() }}
				<div class="form-group">
					<label>Nama</label>
					<input type="text" name="nama" class="form-controll">
				</div>
				<button type="submit">Simpan</button>
			</form>
		</div>
	</div>
@endsection