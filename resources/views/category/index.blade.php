@extends('base.template')


@section('content')
	<div class="box">
		<table class="table table-stripped">
			<thead>
				<tr>
					<th>#</th>
					<th>Nama</th>
				</tr>
			</thead>
			<tbody>
				@foreach($categories as $key => $category)
					<tr>
						<td>{{ $key+1 }}</td>
						<td>{{ $category->nama }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<div>
			{{ $categories->links() }}
		</div>
	</div>
@endsection