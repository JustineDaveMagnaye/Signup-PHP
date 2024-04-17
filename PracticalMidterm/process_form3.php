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
    $check_queryy = "SELECT * FROM guest";
    $resulty = $conn->query($check_queryy);
    $check_query = "SELECT * FROM guest WHERE email='$email'";
    $result = $conn->query($check_query);

    if ($result->num_rows > 0 && $resulty->num_rows > 0) {
        echo "Guest with this email already exists.";
    } else {
        $insert = "INSERT INTO guest (Id, Last_Name, First_Name, Middle_Name, Address, Gender, Contact_No, Email, Birthdate, Age, Religion) VALUES ('','$lname','$fname','$mname','$address','$gender','$contact','$email','$birthday','$age','$religion')";
        mysqli_query($conn, $insert);
        if ($conn->query($insert) === TRUE) {
            $_SESSION['guest_id'] = $conn->insert_id; 
            $_SESSION['guest'] = $row['guest'];
            echo "<script>window.top.location.href = \"./index.php\";</script>"; 
            exit();
        } else {
            echo "Error: " . $insert. "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
