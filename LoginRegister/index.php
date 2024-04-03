<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Dashboard</title>
<style>
body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  color: #333;
  text-align: center;
}

.container {
  max-width: 500px;
  margin: 50px auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
}

button {
  background-color: #b30000;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button:hover {
  background-color: #990000;
}
</style>
</head>
<body>

<div class="container">
  <h2>Welcome, User!</h2>
  <?php
  session_start();
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "firstconnection";
  $conn = new mysqli($servername, $username, $password, $database);
  $emaily = $_SESSION['email'];
  $check_query = "SELECT * FROM student_information WHERE email='$emaily'";
  $run_query = mysqli_query($conn, $check_query);
  while($row = mysqli_fetch_array($run_query)) {
    echo $row['student_id'] . "<br>";
    echo $row['last_name'] . "<br>";
    echo $row['first_name'] . "<br>";
    echo $row['middle_name'] . "<br>";
    echo $row['address'] . "<br>";
    echo $row['gender'] . "<br>";
    echo $row['contact_no'] . "<br>";
    echo $row['email'] . "<br>";
    echo $row['birthdate'] . "<br>";
    echo $row['age'] . "<br>";
    echo $row['religion'] . "<br>";
   }

  ?>
  <button onclick="window.location.href='http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=firstconnection&table=student_information'">Edit Profile</button>
  <button onclick="window.location.href='login.php'">Logout</button>
</div>

</body>
</html>
