@extends('layouts.app')

@section('content')
	<div class="w-75 m-auto">


		<div>
			<h1>Titolo: {{ $project['name_project'] }}</h1>
			<h2>Descrizione: {{ $project['description'] }}</h2>

			@if ($project->group == true)
				<p>Il progetto è stato fatto in gruppo</p>
			@endif

		</div>
		<p>Tipologia del progetto: {{ $project->type->name_type }}</p>
		<button class="border-0 rounded bg-primary"><a class="text-light text-decoration-none"
				href="{{ route('admin.projects.edit', $project->id) }}">Modifica</a></button>
		<button class="border-0 rounded bg-danger"><a class="text-light text-decoration-none" href="/">Torna alla home</a></button>
	</div>
@endsection
