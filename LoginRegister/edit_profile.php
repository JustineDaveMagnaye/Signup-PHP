<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Profile</title>
<style>
body {
  font-family: Arial, sans-serif;
  background-color: #f8f8f8;
  background-image: url("rc.jpg");
  background-size: cover;  
  background-repeat: no-repeat;
  background-position: center center;
  margin: 0;
  padding: 0;
}

.container {
  max-width: 600px;
  margin: 50px auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
}

h2 {
  color: #b30000;
}

form {
  margin-top: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
  color: #333;
}

input[type="text"],
input[type="date"],
input[type="email"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ddd;
  border-radius: 5px;
  box-sizing: border-box;
}

input[type="submit"] {
  background-color: #b30000;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #990000;
}

.error {
  color: #b30000;
  margin-top: 10px;
}

</style>
</head>
<body>

<div class="container">
  <h2>Edit Profile</h2>
  <?php
  session_start();
  if (isset($_SESSION['edit_profile_error'])) {
      echo "<p class='error'>{$_SESSION['edit_profile_error']}</p>";
      unset($_SESSION['edit_profile_error']);
  }
  ?>

  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "firstconnection";

  $conn = new mysqli($servername, $username, $password, $database);

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $email = $_SESSION['email'];
  $retrieve_query = "SELECT * FROM student_information WHERE email='$email'";
  $result = $conn->query($retrieve_query);
  $row = $result->fetch_assoc();

  $conn->close();
  ?>

  <form method="post" action="process_edit_profile.php">
    <label for="student_id">Student ID:</label>
    <input type="text" id="student_id" name="student_id" value="<?php echo $row['student_id']; ?>" required>

    <label for="lname">Last Name:</label>
    <input type="text" id="lname" name="lname" value="<?php echo $row['last_name']; ?>" required>

    <label for="fname">First Name:</label>
    <input type="text" id="fname" name="fname" value="<?php echo $row['first_name']; ?>" required>

    <label for="mname">Middle Name:</label>
    <input type="text" id="mname" name="mname" value="<?php echo $row['middle_name']; ?>">

    <label for="address">Address:</label>
    <input type="text" id="address" name="address" value="<?php echo $row['address']; ?>">

    <label for="gender">Gender:</label>
    <input type="radio" id="male" name="gender" value="Male" <?php if ($row['gender'] == 'Male') echo 'checked'; ?>>
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="Female" <?php if ($row['gender'] == 'Female') echo 'checked'; ?>>
    <label for="female">Female</label>

    <label for="contact_no">Contact No:</label>
    <input type="text" id="contact_no" name="contact_no" value="<?php echo $row['contact_no']; ?>">

    <label for="email">Email Address:</label>
    <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" readonly>

    <label for="birthday">Birthdate:</label>
    <input type="date" id="birthday" name="birthday" value="<?php echo $row['birthdate']; ?>">

    <label for="age">Age:</label>
    <input type="text" id="age" name="age" value="<?php echo $row['age']; ?>">

    <label for="religion">Religion:</label>
    <input type="text" id="religion" name="religion" value="<?php echo $row['religion']; ?>">

    <input type="submit" value="Save Changes">
  </form>
</div>

</body>
</html>
