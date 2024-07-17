@extends('layouts.admin')
@section('content')
	<div class="container">
		<div class="row d-flex">
			@foreach ($types as $type)
				<div class="col-3">
					<div class="card text-center mx-1 my-4">
						<div class="card-body">
							<h5 class="card-title"> {{ $type->name_type }}</h5>
							<div><i class="{{ $type->icon }}"></i></div>
							{{-- <p>{{ print_r($type) }}</p> --}}
						</div>
						{{-- <a class="btn btn-primary" href="{{ route('admin.types.show', $type->id) }}">More details</a> --}}

						<!-- Form per la cancellazione -->
						<div class="d-flex justify-content-center">
							<button class="border-0 bg-transparent"><a class="btn btn-dark"
									href="{{ route('admin.type.edit', $type->id) }}">Modifica</a></button>
							<form action="{{ route('admin.type.destroy', $type->id) }}" method="POST"
								onsubmit="return confirm('Sei sicuro di voler cancellare questo tipo?');">
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-danger">Cancella</button>
							</form>
						</div>

					</div>
				</div>
			@endforeach
			<button class="border-0 bg-transparent d-flex mx-1"><a class="btn bg-primary text-light text-decoration-none" href="{{ route('admin.type.create') }}">Crea un nuovo Type</a></button>

		</div>
	</div>
@endsection
