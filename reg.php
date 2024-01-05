<?php
include_once('connect.php');
session_start();
if(isset($_POST['submit'])){
    $name=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
   
    $sql = "insert into user(name,password,email) values ('$name','$password','$email')";
    if ($conn->query($sql)){
     echo "all informations are save successfully";
      header('location:login.php');
  }
  else{
      echo "Error: ". $sql ."
  ". $conn->error;
  }
  $conn->close();
}
?>

<html>
<head>
<title>registration</title>
<link rel="stylesheet" href="design.css">
</head>
<body>
 <div class="registration-page">
 <img src="icon.jpg" class="avatar">
 <div class="form">
     <form action="#" method="post" >
   <h2>Register Here</h2>
   <input type="text" name="username" placeholder="User Name">
   <input type="password" name="password" placeholder="Password">
   <input type="email" name="email" placeholder="User Email">
   <button type="submit" name="submit" class ="btn btn-primary">Register</button>
   <p class="message">Already Registered?<a href="login.html"> Login</a>
   </p>
   </form>
 </div>
 </div>
</body>
</html>