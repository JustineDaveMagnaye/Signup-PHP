<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "practicalmidterm";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
    $check_queryy = "SELECT * FROM student";
    $resulty = $conn->query($check_queryy);
    $check_query = "SELECT * FROM student WHERE email='$email'";
    $result = $conn->query($check_query);

    if ($result->num_rows > 0 && $resulty->num_rows > 0) {
        echo "Student with this email already exists.";
    } else {
        $insert = "INSERT INTO student (Id, Student_Id, Last_Name, First_Name, Middle_Name, Address, Gender, Contact_No, Email, Birthdate, Age, Religion) VALUES ('','$studid','$lname','$fname','$mname','$address','$gender','$contact','$email','$birthday','$age','$religion')";
        mysqli_query($conn, $insert);
        if ($conn->query($insert) === TRUE) {
            $_SESSION['student_id'] = $conn->insert_id; 
            $_SESSION['student'] = $row['student'];
            echo "<script>window.top.location.href = \"./index.php\";</script>";
            exit();
        } else {
            echo "Error: " . $insert . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
