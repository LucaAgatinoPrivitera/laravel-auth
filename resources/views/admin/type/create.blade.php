@extends('layouts.admin')

@section('content')
	<h1>Aggiungi un nuovo type</h1>
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

		{{-- Icona mancava e quindi non potevo creare un nuovo type --}}
		<div>
            <label for="icon">Icona</label>
            <input type="text" id="icon" name="icon" value="{{ old('icon') }}">
            @error('icon')
                <div>{{ $message }}</div>
            @enderror
        </div>

		<!-- Aggiungi qui altri campi del form se necessario -->
		<button type="submit">Aggiungi tipo</button>
	</form>
	<a href="{{ route('admin.type.index') }}">Torna alla lista dei tipi</a>
@endsection
