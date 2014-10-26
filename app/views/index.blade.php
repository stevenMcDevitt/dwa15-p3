@extends('_master')

@section('title')
	DWA15 P3 - Index Page
@stop

@section('head')
	
@stop

@section('jumbotron')
    Project 3  - Programmer Workbench
@stop

@section('content')

    <h1><a href='/loremipsum'>Lorem Ipsum Generator  &ltLink&gt</a></h1>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Often a reader will be distracted by the readable content of a page 
       when looking at its layout.  Instead of using real english content we often use Lorem Ipsum as it looks like normal readable English text.</p>
    <br>
    <h1><a href='/randomuser'>Random User Generator &ltLink&gt</a></h1>
    <p>Fake data is often needed during the development and testing of applications.  Given the using real data in certain situations is problematic, it 
       may be better to use a utility that generates fake data for you. This utility generates fake user data.</p>
    <br>

@stop