<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up</title>
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

input[type="text"],
input[type="email"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
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
</style>
</head>
<body>

<div class="container">
  <h2>STAFF</h2>
  <form method="post" action="process_form1.php">
    <h2>Registration Form</h2>
    <label for="staff_id">Staff ID:</label><br>
    <input type="text" id="staff_id" name="staff_id" ><br>

    <label for="lname">Last Name:</label><br>
    <input type="text" id="lname" name="lname" ><br>

    <label for="fname">First Name:</label><br>
    <input type="text" id="fname" name="fname" ><br>

    <label for="mname">Middle Name:</label><br>
    <input type="text" id="mname" name="mname" ><br>

    <label for="address">Address:</label><br>
    <input type="text" id="address" name="address" ><br>

    <label for="gender">Gender:</label><br>
    <input type="radio" id="male" name="gender" value="Male" >
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="Female" >
    <label for="female">Female</label><br><br>

    <label for="contact_no">Contact No:</label><br>
    <input type="text" id="contact_no" name="contact_no" ><br>

    <label for="email">Email Address:</label><br>
    <input type="email" id="email" name="email" ><br>

    <label for="birthday">Birthdate:</label><br>
    <input type="date" id="birthday" name="birthday" ><br>

    <label for="age">Age:</label><br>
    <input type="text" id="age" name="age" ><br>

    <label for="religion">Religion:</label><br>
    <input type="text" id="religion" name="religion" ><br>  
    <button type="submit">Sign Up</button>
  </form>
</div>
</body>
</html>
