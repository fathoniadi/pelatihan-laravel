@extends('base.template')


@section('content')
	<form action="{{ url('/category') }}" method="POST">
		{{ csrf_field() }}
		<div class="form-group">
			<label>Nama</label>
			<input type="text" name="nama" class="form-controll">
		</div>
		<button type="submit">Simpan</button>
	</form>
@endsection