<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .container{
            width: 400px;
        }
        body{
            background-color: rgba(255, 217, 0, 0.623);
        }
        #logo{
            margin-top: 50px;
        }
        a{
          text-decoration: none;
          color: blanchedalmond;
        }
        a:hover{
          color: blanchedalmond;
        }
        button{
            width: 400px;
            border-radius: 7px;
            margin-top: 20px;
        }
        input{
            width: 400px;
            border-radius: 7px;
        }
        *{
            font-family:sans-serif;
        }
        tr{
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <img src="Screenshot_1.png" class="img-fluid" alt="dogeshop" id="logo">
    <form action="raj.php" method="POST">
        <table>
            <tr style="margin-top: 15px; "><td><input type="email" name="username" id="email" placeholder="Email"></td></tr>
            <tr><td><div id="emailHelp" class="form-text">We'll never share your email with anyone.</div></td></tr>
            <tr style="margin-top: 15px; "><td><input type="text" name="passwords" id="password" placeholder="password"></td></tr>
            <!-- <tr><td><input type="checkbox">remember me</td></tr> -->
            <tr><td><div></div></td></tr>
            <tr style="margin-top: 15px; "><td><a href="homepage.html"><input type="submit" class="bg-primary" name="Login" value="Login" placeholder="Login"></a></td></tr>
            </tr>
        </table>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</div>
</body>
</html>