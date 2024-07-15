@extends('layouts.app')

@section('content')
	<h1>Aggiungi un nuovo tipo di progetto</h1>
	<form action="{{ route('admin.type.store') }}" method="POST">
		@csrf
		<div>
			<label for="name_type">Titolo:</label>
			<input type="text" id="name_type" name="name_type" value="{{ old('name_type') }}">
			@error('name_type')
				<div>{{ $message }}</div>
			@enderror
		</div>



		<div>
			<label for="description">Descrizione</label>
			<input type="text" id="description" name="description" value="{{ old('description') }}">
			@error('description')
				<div>{{ $message }}</div>
			@enderror
		</div>

		<!-- Aggiungi qui altri campi del form se necessario -->
		<button type="submit">Aggiungi progetto</button>
	</form>
	<a href="{{ route('admin.projects.index') }}">Torna alla lista dei progetti</a>
@endsection
