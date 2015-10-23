<!DOCTYPE html>
<html>
    <head>
      <title>
        @yield('title', "P3: Developer's Best Friend")
      </title>

      <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css" rel="stylesheet">
      <link href="/css/p3.css" rel="stylesheet" type="text/css">

    </head>
    <body>        
        <div class="container">
            <div id="home-link" class="row" style="text-align:left;"><div class="col-md-12">@yield('home-link')</div></div>

                <div class="title">
                  @yield('page-title', "P3: Developer's Best Friend")
                </div>

                @yield('content')

        </div>
    </body>
</html>
