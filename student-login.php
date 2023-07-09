<?php
$email = $_POST['email'];
$password = $_POST['password'];
$conn = mysqli_connect('localhost', 'root', '', 'library');
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} else {
    $query = "SELECT * FROM `students` WHERE email = '$email'";
    $result = $conn->query($query);
    if ($result && $result->num_rows > 0) {
        header('Location: lists_book_student.php');
    } else {
        header("Location: student-login-form.php?error=invalid");
    }
}
?>
