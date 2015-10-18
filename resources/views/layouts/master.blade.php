<!DOCTYPE html>
<html>
    <head>
        <title>
		@yield('title', "P3: Developer's Best Friend")
	</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        
	<link href="/css/p3.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">
			@yield('page-title', "P3: Developer's Best Friend")
		</div>

		@yield('content')


            </div>
        </div>
    </body>
</html>
