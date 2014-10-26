@extends('randomuser')

@section('results')

    <p class="bottom-sep"></p>

@if (isset($output) && isset($userCount))

	@for ($i = 0 ; $i < $userCount ; $i++)

		<h2> {{ $output['name'][$i]           }} </h2>
		<p>  {{ $output['dob'][$i]            }} </p>
		<p>  {{ $output['addressStreet'][$i]  }} </p>
		<p>  {{ $output['addressCity'][$i]    }} </p>
		<p>  {{ $output['addressState'][$i]   }} </p>

	@endfor
@endif

@stop