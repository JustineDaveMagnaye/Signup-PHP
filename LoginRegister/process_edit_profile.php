<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['email'])) {
    // Database connection details
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


    $student_id = $_POST['student_id'];
    $last_name = $_POST['lname'];
    $first_name = $_POST['fname'];
    $middle_name = $_POST['mname'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $contact_no = $_POST['contact_no'];
    $email = $_SESSION['email'];
    $birthdate = $_POST['birthday'];
    $age = $_POST['age'];
    $religion = $_POST['religion'];


    $update_query = "UPDATE student_information SET student_id='$student_id', last_name='$last_name', first_name='$first_name', middle_name='$middle_name', address='$address', gender='$gender', contact_no='$contact_no', birthdate='$birthdate', age='$age', religion='$religion' WHERE email='$email'";

    if ($conn->query($update_query) === TRUE) {
        $_SESSION['edit_profile_success'] = "Profile updated successfully.";
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['edit_profile_error'] = "Error updating profile: " . $conn->error;
        header("Location: edit_profile.php");
        exit();
    }

    $conn->close();
} else {
    header("Location: edit_profile.php");
    exit();
}
?>
