<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "firstconnection";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $studid = $_POST['student_id'];
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact_no'];
    $email = $_POST['email'];
    $birthday = $_POST['birthday'];
    $age = $_POST['age'];
    $religion = $_POST['religion'];
    $check_queryy = "SELECT * FROM student_information";
    $resulty = $conn->query($check_queryy);
    $check_query = "SELECT * FROM users WHERE username='$username' OR email='$email'";
    $result = $conn->query($check_query);

    if ($result->num_rows > 0 && $resulty->num_rows > 0) {
        echo "User with this username or email already exists.";
    } else {
        $insert_query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        $insert = "INSERT INTO student_information (Id, Student_Id, Last_Name, First_Name, Middle_Name, Address, Gender, Contact_No, Email, Birthdate, Age, Religion) VALUES ('','$studid','$lname','$fname','$mname','$address','$gender','$contact','$email','$birthday','$age','$religion')";
        mysqli_query($conn, $insert);
        if ($conn->query($insert_query) === TRUE) {
            $_SESSION['user_id'] = $conn->insert_id; 
            header("Location: index.php"); 
            exit();
        } else {
            echo "Error: " . $insert_query . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
