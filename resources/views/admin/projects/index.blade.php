@extends('layouts.admin')
@section('content')
	<div>
		@foreach ($projects as $project)
			<h1>Progetto: {{ $project->name_project }}</h1>
			<p>Descrizione: {{ $project->description }}</p>
			<p>Data pubblicazione: {{ $project->date }}</p>
			{{-- Senza count non si può fare, almeno con un semplice $project->languages >1 non funziona --}}
			@if ($project->languages->count() > 1)
			<p>Linguaggi utilizzati:
				@foreach ($project->languages as $language)
					{{ $language->name_lang }}@if (!$loop->last), @endif
				@endforeach
			</p>
		@else
			<p>Linguaggio utilizzato:
				@foreach ($project->languages as $language)
					{{ $language->name_lang }}
				@endforeach
			</p>
		@endif

			{{-- Non funziona --}}
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
		<p>{{ dd($project->languages) }}</p>
	</div>
@endsection
