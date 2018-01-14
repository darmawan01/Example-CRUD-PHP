<?php
    session_start();
    if(!empty($_SESSION['username'])){
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Sign In</title>
    <link rel="stylesheet" type="text/css" href="asset/animate.css">
    <style>
        * {
            margin: auto;
        }   

        body {
            background: #02AAB0;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to left, #00CDAC, #02AAB0);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to left, #00CDAC, #02AAB0);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            overflow-y: hidden;
        }

        .card {
            margin-top: 220px;
            margin-left: 500px;
            width: 380px;
            height: 400px;
            color: white;
        }

        .input-form {
            width: 260px;
            height: 30px;
        }

        .button-login {
            margin-left: 180px;
            width: 80px;
            height: 30px;
            cursor: pointer;
            border: 0;
            
        }
        .button-login:hover{
            background-color: rgb(55, 55, 146);
            color: white;
        }
    

        input[type=text],
        [type=password] {
            border: 0;
            border-bottom: 1px solid black;
            background-color: transparent;
        }
    </style>
</head>

<body>
    <center>
        <div class="card">
            <div class="card-header animated flipInX">
                <h1>Login Admin</h1>
                </br>
                </br>
            </div>
            <div class="card-content">
                <form action="index.php?p=login" method="post">
                    <input class="input-form animated fadeInDown" type="text" id="user" name="username" placeholder="Username">
                    <br />
                    <br />
                    <input type="password" class="input-form animated fadeInDown" id="pass" placeholder="Password" name="password" required>
                    <br />
                    <br />
                    <button class="button-login animated flipInY" name="btnLogin">Login</button>
    
                </form>
            </div>
        </div>
    </center>
</body>

</html>