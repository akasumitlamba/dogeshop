<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      *{
        font-family: sans-serif;
      }
      input{
        border-radius: 10px;
      }
      .container{
        display: flex;
        justify-content: center;
        margin-top: 100px;
      }
      button{
        width: 100%;
        border-radius: 10px;
      }
      .row{
        margin-top: 20px;
      }
    </style>
</head>
<body background="https://th.bing.com/th/id/R.f1dd40d36b17542578727c3d6e863903?rik=%2bMTk0tdenCF4gQ&riu=http%3a%2f%2fwww.pixelstalk.net%2fwp-content%2fuploads%2f2016%2f06%2fLight-Blue-Wallpaper-Backgrounds-Free-Download.jpg&ehk=RT%2buDR2r6AN0EpeH0JqOGd%2bueGGonla5zsyIiMFdK54%3d&risl=&pid=ImgRaw">
<div class="container">
  <form action="order.php" method="POST">
    <table>
      <tr><td>
  <div class="row">
    <div class="col"><input type="text" name="firstname" id="firstname" placeholder="firstname" required></div>
    <div class="col"><input type="text" name="lastname" id="lastname" placeholder="lastname" required></div>
  </div>
  </td></tr>
  <tr><td>
  <div class="row">
    <div class="col"><input type="text" name="city" id="city" placeholder="city" required></div>
    <div class="col"><input type="zip" name="zip" id="zip" placeholder="zipcode" required></div>
  </div>
</td></tr>
<tr><td>
  <div class="row">
    <div class="col"><input type="text" name="address" id="address" placeholder="address" required></div>
    <div class="col"><input type="email" name="email" id="email" placeholder="email" required></div>
  </div>
</td></tr>
<tr><td>
  <div class="row">
    <div class="col">
      <button type="submit" class="bg-primary">PLACE ORDER</button>
    </div>
  </div>
</td></tr>
</table>
</form>
</div>

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>