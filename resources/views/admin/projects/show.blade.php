@extends('layouts.app')

@section('content')
	<div">
		<h1>Titolo: {{ $project['name_project'] }}</h1>
		<h2>Descrizione: {{ $project['description'] }}</h2>

		@if ($project->group == true)
			<p>Il progetto è stato fatto in gruppo</p>
		@endif

		</div>
		<p>Tipologia del progetto: {{ $project->type->name_type }}</p>
		<a href="/">Torna alla home</a>
	@endsection
