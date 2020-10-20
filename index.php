<?php

session_start();
if(isset($_SESSION['username'])){

	$_SESSION['msg']="You must log in first to view this page";
	header("location:login.php");
}
if(isset($_GET['logout'])){

	session_destroy();
	unset($_SESSION['username']);
	header("location:login.php");
}
?>

<!DOCTYPE html>
<html>
<head>

	<title>Secret Dairy</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>


<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand">Secret Dairy</a>
  
    <button class="btn btn-outline-success my-2 my-sm-0" onclick="document.location='http://localhost/app/index.html'">Logout</button>
  
</nav>

<br>
<h2 style="padding-left: 15px">I'm loving this!!</h2>			

</body>
</html>