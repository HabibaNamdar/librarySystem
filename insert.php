<?php
include("student.html");
$query = "insert into students values('12','ahmad','032890','sadheri','45@gmail.com','std','pass273')";
$data = mysqli_query($conn, $query);

if($data){
    echo "data inserted into database";
}
?>
