@extends('layouts.admin')

@section('content')
	<h1>Aggiungi un nuovo progetto</h1>
	<form action="{{ route('admin.projects.store') }}" method="POST">
		@csrf
		<div>
			<label for="name_project">Titolo:</label>
			<input type="text" id="name_project" name="name_project" value="{{ old('name_project') }}">
			@error('name_project')
				<div>{{ $message }}</div>
			@enderror
		</div>

		<div class="mt-1">
			<label for="group">Gruppo:</label><br>
			<input type="radio" name="group" value="1">
			<label for="vehicle1"> Si</label><br>
			<input type="radio" name="group" value="0">
			<label for="vehicle2"> No</label><br>

			{{-- <input type="checkbox" id="group" name="group" value="{{ old('group') }}">
			@error('group')
				<div>{{ $message }}</div>
			@enderror --}}
		</div>

		<div>
			<label for="description">Descrizione</label>
			<input type="text" id="description" name="description" value="{{ old('description') }}">
			@error('description')
				<div>{{ $message }}</div>
			@enderror
		</div>

		<div>
			<label for="date">Data:</label>
			<input type="date" id="date" name="date" value="{{ old('date') }}">
			@error('date')
				<div>{{ $message }}</div>
			@enderror
		</div>

		<div>
			<label for="type_id">type_id:</label>
			<input type="int" id="type_id" name="type_id" value="{{ old('type_id') }}">
			@error('type_id')
				<div>{{ $message }}</div>
			@enderror
		</div>
		<!-- Aggiungi qui altri campi del form se necessario -->
		<button type="submit">Aggiungi progetto</button>
	</form>
	<a href="{{ route('admin.projects.index') }}">Torna alla lista dei progetti</a>
@endsection
