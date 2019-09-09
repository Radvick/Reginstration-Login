<?php include('server.php') ?>

<html>

<link href="https://fonts.googleapis.com/css?family=Anton|Comfortaa|Julius+Sans+One|Monoton|Pacifico|Righteous&display=swap" rel="stylesheet">
<link rel="stylesheet" href="reg_css.css">
<body>
	<div class="main" ><h1>User<br>Registration</h1></div>
<div id="message">
  <p id="letter" class="invalid">A <b>Lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>Uppercase</b> letter</p>
  <p id="number" class="invalid">A <b>Number</b></p>
  <p id="length" class="invalid">Min <b>8 characters</b></p>
</div>

	<div class="new">
	<form method="post" action="registration.php" onSubmit = "return checkPassword(this)">
  	<?php include('errors.php'); ?>

		<p>FirstName: <input type="text" name="fist_name" placeholder="FirstName" required=""> LastName: <input type="text" name="last_name" placeholder="LastName" required=""></p>
		<p>Email:<input type="Email" id="email" name="email" placeholder="Mail id" required="" pattern=".+@.+.com"></p>
		<p>Password: <input type="Password" id="psw" name="psw" placeholder="Password" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"></p>
		<p>ConfirmPassword: <input type="Password" id="cnf_psw" name="cnf_psw" placeholder="ConfirmPassword" required=""></p>
		<p>M<input type="radio" name="sex" value="Male"> F<input type="radio" name="sex" value="Female"></p>
		<p>Date of birth: <input type="Date" name="dob" placeholder="DOB"></p>
		<p>Country 
			<select name="cntry">
				<option>India</option>
				<option>USA</option>
				<option>England</option>
				<option>Australia</option>
			</select>
		<p>Attach CV/Resume <input type="file" name="cv" name="cv" accept=".pdf" ></p>
			<p><button type="submit" name="register" id="no">Signup</button>  </p>
			<p><a href="index.php" id="log">Log in</a></p>
			<script type="text/javascript" src="index.js"></script>

		</div>	
	</form>

 
	
	</body>
</html>