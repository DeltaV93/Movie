<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @extends('layout.styles')
        <title>Meta+ Movie</title>
        
    </head>
    <body>

        <div class="container">
            @yield('content')
        </div>
        <footer>
            <div>
                <p>Meta+ Lab {{date('Y')}} </p>`
            </div>
        </footer>
	</body>
</html>