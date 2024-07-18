@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="justify-content-center">
			<h1 class="mb-4">Luca Privitera's Portfolio</h1>
			<h2>My projects:</h2>
			<div class="d-flex flex-wrap row">
				@foreach ($projects as $project)
					<div class="col-3 rounded">
						<div class="d-flex flex-column justify-content-center border singleCard px-2 py-1">

							@if (Str::startsWith($project->cover_image, 'http'))
								<img style="width: 2rem" src="{{ $project->cover_image }}">
							@else
								<img style="width: 2rem" src="{{ asset('storage/' . $project->cover_image) }}">
							@endif

							<h4>Progetto: {{ $project->name_project }}</h4>
							<p>Descrizione: {{ $project->description }}</p>
							<p>Data pubblicazione: {{ $project->date }}</p>
							@if ($project->group == true)
								<p>Progetto svolto in gruppo</p>
							@else
								<p>Progetto non svolto in gruppo</p>
							@endif
							{{-- <p>id: {{ $project->type_id }}</p> --}}
							<p>Tipologia del progetto: {{ $project->type->name_type }}</p>
							{{-- <p>{{ print_r($project) }}</p> --}}
							<button class="bg-transparent border-0"><a href="{{ route('show', $project->id) }}" class="btn btn-primary">more
									details</a></button>
						</div>

					</div>
				@endforeach
			</div>
		</div>

	</div>
@endsection
