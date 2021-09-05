<?php
session_start();
$password = $_POST["pass"];
require_once("../../../private/cred.php");
if(strcmp($password,$pass)==0)
	$_SESSION["ordered_in"] = 'yes';
if($_SESSION["ordered_in"]){
	header("Location: ../"); 
}
?>
<html>
<head>
  <title>ADMIN@SITHIGHAR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div style="position:absolute; bottom:50%; width:80%; left:10%;">
<form action="index.php" method="POST" >

	<div class="input-group input-group-lg">
		<span id="mb_icon" style="background-color:white; color:green; border-right-style:hidden; " class="input-group-addon">
			<span  style="" class="" aria-hidden="true"></span>
		</span>	
		<input name="pass" type="password" class="form-control" style="border-left-style:hidden;" onclick="" placeholder="Password" aria-label="password"/>
		<span class="input-group-btn">
			<input type="submit" class="btn btn-primary" value="login">
		</span>
		
	</div>
</form>
</div>

</body>
</html>
