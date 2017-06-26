@extends('layouts.app')

@section('content')
<ul class="list-group">
		@foreach ($meals as $meal)
			<li class="list-group-item">
				{{ $meal->name }}
			</li>
		@endforeach
</ul>


<h5> You have no meals <a href="/meals/create">Create Another One Now!!</a></h5>

@stop