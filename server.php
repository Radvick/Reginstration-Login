<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['register'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['fist_name']);
  $lastname = mysqli_real_escape_string($db, $_POST['last_name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['psw']);
  $password_2 = mysqli_real_escape_string($db, $_POST['cnf_psw']);
  $gender = mysqli_real_escape_string($db, $_POST['sex']);
  $dob = mysqli_real_escape_string($db, $_POST['dob']);
  $country = mysqli_real_escape_string($db, $_POST['cntry']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  $conn = new mysqli('localhost', 'root','', 'registration');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$query = "INSERT INTO users (username,lastname, Email, Password,gender,dob,country)
VALUES ('$username','$lastname','$email','$password_1','$gender','$dob','$country')";

if ($conn->query($query) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

mysqli_close($db);

  // Now for login \/
  }

 if(isset($_POST['login'])){
     // $username = mysqli_real_escape_string($db, $_POST['fist_name']);

    $email = mysqli_real_escape_string($db, $_POST['username']);
    $pas = mysqli_real_escape_string($db, $_POST['password']);
    
    $stm= "SELECT * FROM users WHERE Email='$email' and Password='$pas'";
    $results = mysqli_query($db, $stm);
    $row = mysqli_fetch_array($results, MYSQLI_ASSOC);
   
    $count = mysqli_num_rows($results);
    
   if($count == 1) {
echo "<script type='text/javascript'>alert('Welcome !! your successfully logged in');</script>";    }
    else {
        echo "<script type='text/javascript'>alert('Email or Password is incorrect your losing your memory power hooman!!!');
        </script>";
    }
}
    
?>