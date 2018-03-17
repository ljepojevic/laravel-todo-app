@extends('layouts.app')

@section('content')
<h1>Todos</h1>
@if(count($todos) > 0) 
	@foreach($todos as $todo)
		<div class="card mb-2">
			<span class="badge-box badge-danger text-center">{{ $todo->due }}</span>
			<h3 class="card-body">{{ $todo->text }} </h3>
			
		</div>
	@endforeach
@endif
@endsection