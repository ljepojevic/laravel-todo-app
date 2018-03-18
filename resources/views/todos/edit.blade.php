@extends('layouts.app')

@section('content')
	<a class="btn btn-secondary" href="/todo/{{ $todo->id }}">Go Back</a>
	<h1>Edit Todo</h1>

	<form method="POST" action="{{ url('/') }}/todo/{{ $todo->id }}">
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="PUT">
		<div class="form-group">
			<label for="text">Text</label>
			<input type="text" name="text" class="form-control" value="{{ $todo->text }}">
		</div>

		<div class="form-group">
			<label for="body">Body</label>
			<textarea name="body" class="form-control">{{ $todo->body }}</textarea>
		</div>
		<div class="form-group">
			<label for="due">Due</label>
			<input name="due" type="text" class="form-control" value="{{ $todo->due }}">
		</div>
		<div class="form-group">
			<input type="submit" value="Submit" class="btn btn-primary">
		</div>
	</form>
@endsection