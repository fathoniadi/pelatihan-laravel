@extends('base.template')


@section('content')
	<div class="box">
		@if(session('error'))
			<div class="alert alert-danger">
				{{ session('error') }}
			</div>
		@endif

		@if(session('sukses'))
			<div class="alert alert-success">
				{{ session('sukses') }}
			</div>
		@endif
		
		<table class="table table-stripped">
			<thead>
				<tr>
					<th>#</th>
					<th>Nama</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($categories as $key => $category)
					<tr>
						<td>{{ $key+1 }}</td>
						<td>{{ $category->nama }}</td>
						<td>
							<a class="btn btn-danger" href="{{ url('/category/delete/'.$category->id) }}">Delete</a>
							<a class="btn btn-primary" href="{{ url('/category/'.$category->id.'/edit') }}">Edit</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<div>
			{{ $categories->links() }}
		</div>
	</div>
@endsection