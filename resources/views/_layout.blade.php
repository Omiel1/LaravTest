<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet">
    <title>LaravTest</title>
</head>
<body>
    <head>
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <h1>LaravTest</h1>
                </div>
            </div>
        </div>
    </head>
</body>
    {{--View output--}}
    <div class="container text-center w-50 h-100">
        @yield('content')
    </div>
</body>
<nav class="navbar fixed-bottom navbar-light border-top test" id="test">
    &copy; 2023 - ContactOS - Simple project made for job application
</nav>
</html>