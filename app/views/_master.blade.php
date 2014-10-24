<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- bootstrap frameword -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
    body {
    padding-top: 60px;
    text-align: center;
    }

    /* footer styling for all resolutions */

    .siteinfo {
      text-align: center;
      padding: 3em 0;
      border-top: 1px solid #ddd;
    }

    .top-buffer {
      margin-top: 60px;
    }

    /* navbar style */

    .navbar-inverse .navbar-toggle {
      color: white;
      font-weight: bold;
      border-color: white;
    }
    .navbar-inverse .navbar-toggle:hover {
      background-color: #ddd;
      color: #333;
    }
    .navbar-inverse .navbar-toggle .glyphicon {
      color: white;
    }
    .navbar-inverse .navbar-toggle:hover .glyphicon {
      color: #333;
    }

    /* jumbotron style */

    @media screen and (min-width: @screen-sm-min) {
        .jumbotron h1,
        jumbotron .h1 {
          font-size: (@font-size-base * 4);
        }
      }
      
    table {
      border-collapse:collapse; 
      table-layout:fixed; 
      width:310px;
    }
    
    table td {
      border:solid 1px; 
      width:150px; 
      word-wrap:break-word;
    }

    </style>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li id="navhome"><a href="/"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li id="navipsum"><a href="/elvish-ipsum"><span class="glyphicon glyphicon-list-alt"></span> Elvish Ipsum</a></li>
            <li id="navfaker"><a href="/fakers"><span class="glyphicon glyphicon-user"></span> Random Users</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </head>
  <body>

    <div class='container'>
      <div class="jumbotron">
        <h1>@yield('header')</h1>
        <p>@yield('subhead')</p>
      </div>
        @yield('body')
        @yield('content')

    <footer class="row siteinfo top-buffer">
        <p><a href ="http://github.com/agalloch7/P3" target="_blank">View Source on GitHub</p>
    </footer>

  </div><!--end container -->

    <!-- javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>
