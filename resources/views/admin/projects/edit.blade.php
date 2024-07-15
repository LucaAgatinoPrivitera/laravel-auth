@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1>Modifica: {{ $project->name_project }}</h1>
				@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
			</div>
		</div>

		<div class="row">
			<div class="col-12">

				{{-- Questo form non carica una generica rotta "store" ma ha bisogno dell'id del gioco da aggiornare --}}
				<form method="POST" action="{{ route('admin.projects.update', $project->id) }}">
					@method('PUT') {{-- v. slide da 32 a 35 --}}
					@csrf
					<div class="mb-3">
						<h3 class="form-label">Titolo</h3>
						<input type="text" class="form-control" name="name_project" required value="{{ $project->name_project }}">
						@error('name')
							<div>{{ $message }}</div>
						@enderror
					</div>
					<div class="mb-3">
						<h3 class="form-label">Descrizione</h3>
						<textarea type="text" class="form-control" name="description" required>{{ $project->description }}</textarea>
					</div>
					<div class="mb-3">
						<h3 class="form-label">Gruppo</h3>

                        {{-- Va messo il value altrimenti, essendo che richiede un booleano, non accetta il valore "si" perché stringa --}}
						<input type="radio" name="group" value="1">
						<label for="vehicle1"> Si</label><br>
						<input type="radio" name="group" value="0">
						<label for="vehicle2"> No</label><br>

					</div>
					<div class="mb-3">
						<h3 class="form-label">Data</h3>
						<input type="date" class="form-control" name="date" required value="{{ $project->date }}">
					</div>

					<div>
						<label for="type_id">type_id:</label>
						<input type="int" id="type_id" name="type_id" value="{{ old('type_id') }}">
						@error('type_id')
							<div>{{ $message }}</div>
						@enderror
					</div>

					<button type="submit" class="btn btn-primary">Submit</button>
				</form>

			</div>
		</div>
	</div>
@endsection
