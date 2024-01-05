<?php
include_once('connect.php');
session_start();

if(isset($_POST['submit'])){
$name=$_POST['name'];
$password=$_POST['password'];

    $sql = "select name,password from user where name='$name' and password='$password'";
    $result=mysqli_query($conn,$sql);
    $num =mysqli_num_rows($result);
    if ($num==1){
        header('location:home.html');
    }
    else{
       echo "Error";
    }
    $conn->close();
}

?>


<html>
<head>
<title>login</title>
<link rel="stylesheet" href="design.css">
</head>
<body>
 <div class="login-page">
 <img src="icon.jpg" class="avatar">
 <div class="form">
     <form action="#" method="post">
	 <h2>Login Here</h2>
	 <input type="text" name="name" placeholder="User Name">
	 <input type="password" name="password" placeholder="Password">
	 <button type="submit" name="submit">Login </button>
	 <p class="message">Not Registered?<a href=reg.php> Register</a>
	 </p>
	 </form>
 </div>
 </div>
</body>
</html>