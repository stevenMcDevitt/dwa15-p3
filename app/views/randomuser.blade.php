@extends('_master')

@section('title')
	DWA15 P3
@stop

@section('head')
	
@stop

@section('jumbotron')
    Project 3  - Programmer Workbench
@stop

@section('content')

    <h1><a href='/randomuser'>Random User Generator</a></h1>

    {{ Form::open() }}

        <div class="form-group">
            {{ Form::label('Number of Users:') }}
            {{ Form::number('userCount') }}
            {{ Form::submit('Generate Users') }}
        </div>

    {{ Form::close() }}

@stop