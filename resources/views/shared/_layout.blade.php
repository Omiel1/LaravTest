<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Kanit:wght@200&display=swap" rel="stylesheet"> 
    <title>LaravTest</title>
    <style>

         /* The device with borders */
        #phone-box{
            font-family: 'Kanit', 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            position: relative;
            width:500px;
            height: 800px;
            background: rgb(221, 216, 216);
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

        /* Pages styling */

        #head{
            font-family: 'Anton', sans-serif;
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

        #login-button{
            margin-top: 15%;
        }

        #login-box{
            margin-top:25%;
        }

        .error-message{
            color:red;
            font-size: 12px;
        }

        #logo{
            position: relative;
        }

        /* Background animation -> https://alvarotrigo.com/blog/animated-backgrounds-css/ */
        .bg {
          width: 100%;
          height: 100vh;
          display: flex;
          align-items: center;
          justify-content: center;
          background-size: 300% 300%;
          background-image: linear-gradient(
                -45deg, 
                rgb(192, 189, 115) 0%, 
                rgb(160, 169, 80) 25%, 
                rgb(107, 54, 126) 51%, 
                rgb(34, 20, 25) 100%
          );  
          animation: AnimateBG 20s ease infinite;
        }

        @keyframes AnimateBG { 
          0%{background-position:0% 50%}
          50%{background-position:100% 50%}
          100%{background-position:0% 50%}
        }
    </style>
</head>
<body class="bg">
    <head>
        
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