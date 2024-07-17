@extends('layouts.admin')
@section('content')
	<div class="d-flex flex-wrap row">
		@foreach ($projects as $project)
			<div class="col-4 my-4">
				<div class="p-4 m-2 border">
					<h1>Progetto: {{ $project->name_project }}</h1>
					<p>Descrizione: {{ $project->description }}</p>
					<p>Data pubblicazione: {{ $project->date }}</p>
					{{-- Senza count non si può fare, almeno con un semplice $project->languages >1 non funziona --}}
					@if ($project->languages->count() > 1)
						<p>Linguaggi utilizzati:
							@foreach ($project->languages as $language)
								{{-- Dopo numerosi giri ho capito che se volevo togliere lo spazio al punto finale dovevo fare un concatenamento --}}
								@if (!$loop->last)
									{{ $language->name_lang . ',' }}
								@else
									{{ $language->name_lang . '.' }}
								@endif
							@endforeach
						</p>
					@else
						<p>Linguaggio utilizzato:
							@foreach ($project->languages as $language)
								{{ $language->name_lang }}.
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
						<button type="submit" class="btn btn-danger mt-1">Destroy</button>
					</form>
				</div>
			</div>
		@endforeach


		{{-- <p>{{ dd($project->languages) }}</p> --}}
	</div>
@endsection
