<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sumit";
$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
    die("Connection Failed:" .mysqli_connect_error());

}
if(isset($_POST['Login']))
{
$username=$_POST['username'];
$passwords=$_POST['passwords'];

$query = "INSERT INTO sumit1 (username , passwords) VALUES ('$username','$passwords')";


if (mysqli_query($conn, $query))
{
    echo "Data hyped into database safely👍";
    // if not inserted the send disk_total_space raj.php

}

else{
    echo "no connection". $sql."".mysqli_error($conn);
   }
   mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    <button style="border-radius: 10px;"><a href="homepage.htmltake me to homepage"></a></button>
</body>
</html>