@extends('layouts.app')

@section('content')
	<a class="btn btn-secondary" href="/">Go Back</a>
	<h1><a href="todo/{{$todo->id}}">{{ $todo->text }}</a></h1>
	<div class="badge badge-danger">{{ $todo->due }}</div>
	<hr>
	<p>{{ $todo->body }}</p>
	<br>
	<a href="/todo/{{ $todo->id }}/edit" class="btn btn-primary">Edit</a>
	<form method="POST" action="/todo/{{ $todo->id }}" class="d-inline-block">
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="DELETE">
		<input type="submit" value="Delete" class="btn btn-danger">
	</form>
@endsection