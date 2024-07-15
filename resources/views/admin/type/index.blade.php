@extends('layouts.admin')
@section('content')
	<div class="d-flex justify-content-center flex-wrap">
		@foreach ($types as $type)
			<div class="card m-2 text-center p-2" style="width: 20rem;">
				<div class="card-body">
					<h5 class="card-title"> {{ $type->name_type }}</h5>
					<div><i class="{{ $type->icon }}"></i></div>
					{{-- <p>{{ print_r($type) }}</p> --}}
				</div>
				{{-- <a class="btn btn-primary" href="{{ route('admin.types.show', $type->id) }}">More details</a> --}}
			</div>
		@endforeach
		
	</div>
@endsection