@extends('layouts.app')

@section('content')
	<div">
		<h1>Titolo: {{ $type['name_type'] }}</h1>
		<h2>Descrizione: {{ $type['description'] }}</h2>
		<i>{{ $type[`icon`] }}</i>

		@if ($project->group == true)
			<p>Il progetto è stato fatto in gruppo</p>
		@endif

		</div>
		<p>Tipologia del progetto: {{ $project->type->name_type }}</p>
		<a href="/">Torna alla home</a>
	@endsection
