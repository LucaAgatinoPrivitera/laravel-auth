@extends('layouts.admin')
@section('content')
	<div>
		@foreach ($projects as $project)
			<h1>Progetto: {{ $project->name_project }}</h1>
			<p>Descrizione: {{ $project->description }}</p>
			<p>Data pubblicazione: {{ $project->date }}</p>
			<p>Lingua : {{ $project->languages }}</p>
			@if ($project->group == true)
				<p>Progetto svolto in gruppo</p>
			@else
				<p>Progetto non svolto in gruppo</p>
			@endif
			<a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-primary">more details</a>
			<form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">
				@method('DELETE')
				@csrf
				<button type="submit" class="btn btn-primary mt-1">Destroy</button>
			</form>
		@endforeach
	</div>
@endsection
