<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet">
    <title>LaravTest</title>
    <style>
         /* The device with borders */
        #phone-box{
            position: relative;
            width:500px;
            height: 800px;
            background: rgb(194, 193, 193);
            border: 16px black solid;
            border-top-width: 60px;
            border-bottom-width: 60px;
            border-radius: 36px;
        }

        /* The horizontal line on the top of the device */
        #phone-box:before{
            content: '';
            display: block;
            width: 60px;
            height: 5px;
            position: absolute;
            top: -30px;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #333;
            border-radius: 10px;
        }

        /* The circle on the bottom of the device */
        #phone-box:after{
            content: '';
            display: block;
            width: 35px;
            height: 35px;
            position: absolute;
            left: 50%;
            bottom: -65px;
            transform: translate(-50%, -50%);
            background: #333;
            border-radius: 50%;
        }

        /* The screen (or content) of the device */
        #phone-box .content{
            width: 500px;
            height: 700px;
            background: white;
        }

        #contact-box{
            max-height: 100%;
            width:auto;
            overflow: hidden; overflow-y:scroll;
        }

        #details-box{
            max-height: 100%;
            width:500px;
            overflow: hidden; overflow-y:hidden;
        }

        #selection-box{
            width:100%;
            position: absolute;
            bottom: 0;
        }
        
    </style>
</head>
<body>
    <head>
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <h1>ContactOS</h1>
                </div>
            </div>
        </div>
    </head>
</body>
    {{--View output--}}
    <div class="container text-center">
        @yield('content')
    </div>
</body>

<br><br>
<nav class="navbar fixed-bottom navbar-light border-top test text-white bg-dark" id="test">
    &copy; 2023 - ContactOS - Simple project made for job application
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>