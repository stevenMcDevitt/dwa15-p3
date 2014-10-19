@extends('_master')

@section('title')
	DWA15 P3 - Index Page
@stop

@section('head')
	
@stop

@section('content')

        <div class="container">
            <div class="row">
                <div class="jumbotron col-md-12">
                    <h1>Project 3  - Programmer Workbench</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <h1><a href='/loremipsum'>Lorem Ipsum Generator</a></h1>
                    <p>blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah </p>
                    <br>
                    <h1><a href='/randomuser'>Random User Generator</a></h1>
                    <p>blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah </p>
                    <br>
                    <p class="bottom-sep"></p>
                    <h1>Links to Project</h1>
                    <p><a href="p3.iitbotftbd.com">Link to Project 3 Site</a></p>
                    <p><a href="https://github.com/stevenMcDevitt/dwa15-p3.git">Link to Project 3 Github Repository</a></p>
                    <p class="bottom-sep"></p>
                </div>
            <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                    <div class="sidebar">
                        <h2>This Project</h2>
                        <p>The purpose of this project is to provide hands-on practice with working with the basics of the Lavarel framework by creating a Programmers workbench application.  This is a different approach for creating passwords.  Rather than using combinations of letters, numbers and symbols that are difficult to remember (which is why most people write down their password) the XKCD model is one that uses whole words in a sequence.  These are easier to remember and more difficult to crack.</p>
                        <p>The user can select from 1 to 9 words and determine if the password should also contain a number and a symbol</p>
                    </div>
                    <div class="sidebar">
                        <h2>It Is The Business Of The Future To Be Dangerous</h2>
                    </div>
                </div>
            </div>

            <div class="row sitefooter">

                <div class="col-md-4 sitefooter"></div>
                <div class="col-md-8 sitefooter"></div>

            </div>

        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

@stop