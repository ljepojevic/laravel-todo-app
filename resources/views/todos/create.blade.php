@extends('layouts.app')

@section('content')
	<h1>Create Todo</h1>

	<form method="POST" action="{{ url('/') }}/todo">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="text">Text</label>
			<input type="text" name="text" class="form-control">
		</div>

		<div class="form-group">
			<label for="body">Body</label>
			<textarea name="body" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label for="due">Due</label>
			<input name="due" type="text" class="form-control">
		</div>
		<div class="form-group">
			<input type="submit" value="Submit" class="btn btn-primary">
		</div>
	</form>
@endsection