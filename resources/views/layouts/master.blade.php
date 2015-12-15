<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="DWA portfolio">
    <meta name="author" content="Warren Fletcher">

    <title>DWA Portfolio</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Custom CSS -->

    <link rel="stylesheet" href="{{ URL::asset('master.css') }}">

</head>

<body>

    @if(\Session::has('flash_message'))
        <div class='flash_message'>
            {{ \Session::get('flash_message') }}
        </div>
    @endif
    
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="img/beerdrinkerlogo.png"></a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    @if(Auth::check())
                        <li><a href="/">Home</a></li>
                        <li><a href="/beers">Beers</a></li>
                        <li><a href="/breweries">Breweries</a></li>
                        <li><a href="/logout">Logout</a></li>
                    @else
                        <li><a href="/beers">Beers</a></li>
                        <li><a href="/breweries">Breweries</a></li>
                        <li><a href="/login">Log in</a></li>
                        <li><a href="/register">Register</a></li>
                    @endif
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Other projects <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="title">Portfolio</li>
                            <li><a href="http://p1.wjfletcher.me">View</a></li>
                            <li><a href="https://github.com/wjfletcher/p1">Github</a></li>
                            <li class="title">XKCD Password Generator</li>
                            <li><a href="http://p2.wjfletcher.me">View</a></li>
                            <li><a href="https://github.com/wjfletcher/p2">Github</a></li>
                            <li class="title">Developers Best Friend</li>
                            <li><a href="#">View</a></li>
                            <li><a href="https://github.com/wjfletcher/p3">Github</a></li>
                            <li class="title">Developers Best Friend</li>
                            <li><a href="https://p4.wjfletcher.me">View</a></li>
                            <li><a href="https://github.com/wjfletcher/p4">Github</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
    <br>
    <br>
    <br>
    <div class="container">
        

        @yield('content')

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>

</html>