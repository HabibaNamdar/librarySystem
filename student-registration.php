<?php
$Name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$role = 'user';
$password = $_POST['password'];

$conn = mysqli_connect('localhost', 'root', '', 'library');
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO students (student_name, email, phone, address, role, password) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $Name, $email, $phone, $address, $role, $password);
    if ($stmt->execute()) {
        // Redirect to success.html
        header('Location: student-login-form.php');
        exit();
    } else {
        // Redirect to error.html
        header('Location: error.html');
        exit();
    }
    $stmt->close();
}
$conn->close();
?>
