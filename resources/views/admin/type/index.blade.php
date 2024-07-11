@extends('layouts.admin')

@section('content')
	<div class="container-fluid mt-4">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<h1 class="pb-4">Categories List</h1>
			</div>
			<div class="col-md-12">

				<ul>
					@foreach ($categorie as $categoria)
						<p>{{ $categoria->name_type }}</p>
						{{-- <li><a href="{{ route("admin.categories.show", $categoria) }}">{{ $categoria->name }}</a></li> --}}
					@endforeach
				</ul>

			</div>
		</div>
	</div>
@endsection
