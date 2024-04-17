<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HOME</title>
	<style>
		 .form_container {
          display: flex;
          margin-top: 10vh;
          flex-direction: row;
          justify-content: center;
          text-align: center;
        }
        
        .commission_container {
          width: 25%;
          padding: 30px;
          text-align: center;
        }
        .right_container {
          display: flex;
          flex-direction: column;
          width: 70%;
          padding: 30px;
        }
        .black_input {
          background-color: black;
          color: white; 
          border: none; 
          border-radius: 5px;
          padding: 10px; 
        }

        form {
          background-color: #fff;
          border-radius: 10px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          padding: 20px;
          width: 100%;
          max-width: 900px;
          box-sizing: border-box;
        }

      h2 {
          text-align: center;
          color: #333;
      }

      label {
          display: block;
          font-size: 14px;
          color: #555;
      }
	</style>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>	
<div class="form_container">
	<div class="commission_container">
		<form action="/action_page.php">
			<h1>WELCOME TO ROGATIONIST REGISTRATION FORM</h1>
			<label for="ToPM">CHOOSE YOUR POSITION</label><br>
			<select class="black_input" id="ToPM" name="ToPM" required>
				<option class="black_input" value="staff">Staff</option>
				<option class="black_input" value="student">Student</option>
				<option class="black_input" value="guest">Guest</option>
			</select><br>
		</form>
	</div>
	<div class="right_container">
		<iframe id="reserve_frame" src="./form1.php" width="800" height="855" frameborder=""></iframe>
	</div>
</div>
		<script>
      document.addEventListener('DOMContentLoaded', function () {
    var toPMSelect = document.getElementById('ToPM');
    var birthdayFormFrame = document.getElementById('reserve_frame');
    
    toPMSelect.addEventListener('change', function () {
        if (toPMSelect.value === 'staff') {
            birthdayFormFrame.src = "./form1.php";
            birthdayFormFrame.style.display = 'block';
        } else if(toPMSelect.value === 'student') {
            birthdayFormFrame.src = "./form2.php";
            birthdayFormFrame.style.display = 'block';
        } else if(toPMSelect.value === 'guest') {
            birthdayFormFrame.src = "./form3.php";
            birthdayFormFrame.style.display = 'block';
        } else {    
            birthdayFormFrame.style.display = 'none';
        }
    });
});

    </script>
</body>
</html>