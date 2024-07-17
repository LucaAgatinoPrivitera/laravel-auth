@extends('layouts.app')

@section('content')
	<div class="container">


		<div>
			<h1>Titolo: {{ $project['name_project'] }}</h1>
			@if ($project->cover_image)
				<img src="{{ asset('storage/' . $project->cover_image) }}" alt="Cover Image">
			@else
				<p>Immagine di copertura non disponibile</p>
			@endif
			<h2>Descrizione: {{ $project['description'] }}</h2>

			@if ($project->group == true)
				<p>Il progetto è stato fatto in gruppo</p>
			@endif

		</div>
		<p>Tipologia del progetto: {{ $project->type->name_type }}</p>
		<button class="border-0 rounded bg-primary"><a class="text-light text-decoration-none" href="/">Torna alla
				home</a></button>
	</div>
@endsection
