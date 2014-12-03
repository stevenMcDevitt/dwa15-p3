@extends('loremipsum')

@section('results')

    <p class="bottom-sep"></p>

	<br>

	{{ $output }}

	{{ Input::all() }}

@stop