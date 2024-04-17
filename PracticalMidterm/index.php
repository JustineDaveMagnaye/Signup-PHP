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
  <h2>Welcome to Rogationist Registration Form!</h2>
  <button onclick="window.location.href='fillup.php'">Registration Form</button>
  <button onclick="window.location.href='adminlogin.php'">Admin Login</button>
</div>
</body>
</html>
