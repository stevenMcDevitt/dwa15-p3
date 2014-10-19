<!DOCTYPE html>
<html>
<head>
 	<meta charset="utf-8">
	<title>@yield('title','DWA15 - McDevitt')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Maven+Pro' rel='stylesheet' type='text/css'>
    <link href="css/normalize.css" rel="stylesheet" >
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>

	@yield('head')

</head>

<body>

        <header>
            <div class="container">
                <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-100">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="http://p1.iitbotftbd.com">DWA15</a>
                        </div>
                        <div class="collapse navbar-collapse" id="navbar-collapse-100">
                            <ul class="nav navbar-nav">
                                <li><a href="http://p1.iitbotftbd.com">P1 - Portfolio</a></li>
                                <li><a href="http://p2.iitbotftbd.com">P2 - xkcd PwD</a></li>
                                <li class=active><a href="http://p1.iitbotftbd.com">P3 - TBD</a></li>
                                <li><a href="http://p1.iitbotftbd.com">P4 - TBD</a></li>
                            </ul>
                            <form class="navbar-form navbar-right" role="search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button">
                                                <span class="glyphicon glyphicon-search"></span>
                                            </button>
                                        </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
	
	@yield('content')

	@yield('body')
	
</body>
</html>





