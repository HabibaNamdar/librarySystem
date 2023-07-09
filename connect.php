<?php
$servername="localhost";
$user="root";
$password="";
$db="library";
$conn= mysqli_connect($servername,$user,$password,$db);

if($conn){
    echo "";
}
else{
    die("connection failed because".mysqli_connect_error());
}
?>