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
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$city=$_POST['city'];
$zip=$_POST['zip'];
$address=$_POST['address'];
$email=$_POST['email'];

$query = "INSERT INTO order (firstname , lastname, city, zip, address, email) VALUES ('$firstname','$lastname','$city', '$zip','$address','$email')";


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