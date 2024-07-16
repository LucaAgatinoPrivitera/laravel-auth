@extends('layouts.app')

@section('content')
	<div>
		<h1>Titolo: {{ $type['name_type'] }}</h1>
		<h2>Descrizione: {{ $type['description'] }}</h2>
		<i>{{ $type[`icon`] }}</i>

		</div>
		<a href="{{ route('admin.type.index') }}">Torna alla lista dei tipi</a>
	@endsection
