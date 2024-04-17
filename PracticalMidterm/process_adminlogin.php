<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Database connection details
    $servername = "localhost";
    $username_db = "root";
    $password_db = "";
    $database = "practicalmidterm";

    // Create connection
    $conn = new mysqli($servername, $username_db, $password_db, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if (mysqli_num_rows($result) != 0) {
        $row = $result->fetch_assoc();
            $_SESSION['email'] = $row['email'];
            header("Location: display.php");
       
    } else {
        $_SESSION['login_error'] = "Invalid username or password.";
        header("Location: adminlogin.php");
        exit();
    }

    $conn->close();
} else {
    header("Location: adminlogin.php");
    exit();
}
?>
