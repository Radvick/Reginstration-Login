 <?php include('server.php') ?>
 <html>
<title>LOGIN</title>
<head>
<link rel="stylesheet" href="index_css.css">
<link href="https://fonts.googleapis.com/css?family=Anton|Comfortaa|Julius+Sans+One|Monoton|Pacifico|Righteous&display=swap" rel="stylesheet">
</head>


<body>
	<p class="head"></p>
	
	<div class="redbox">
	      
        <p class=lac> </p>
        <form onsubmit="return validateForm()" method="post" action="index.php">
        <p>Username:<input type="text" name="username" placeholder="Username" required=""></p>
        <p>Password:<input type="Password" name="password" placeholder="Password" required=""></p>
        <p>Stay Logged in<input type="checkbox" checked></p>
        <button class="login" type="submit" name="login">Login</button>
        <p><a href="registration.php" id="log">New User</a></p>                      
        </form>
	</div>
	<script type="text/javascript" src="index.js"></script>
	</body>
</html>