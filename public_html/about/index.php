<?php 
session_start();
if(!strcmp($_SESSION["visited"],"yes")==0 || (!strcmp($_SESSION["mobile"],"yes")==0) ){
    header("Location: https://sithighar.com/");
}
?>
<html>
<head>
  <title>চিঠি ঘৰ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<style>
body{margin:0;}
.logo_txt{
color: white;
text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
}
</style>

<body>
 <div id="logo_header" class="div_bottom_shadow" style="width:100%; height:7vh; line-height:7vh; background:lightblue; text-align:center; ">
<span style=" visibility:visible; font-size:7vw; " class="logo_txt"  >চিঠি ঘৰ</span> </div><!--#logo--> 


<div style="text-align:center; padding-top:5%; font-size:6vw;">
about us
</div>
<hr>

<div style=" height:100vh; text-align:center; font-size:5vw; margin:3%;">
Sithighar.com is an Online Card(invitation cards and etc.) booking system. It is a Shop actually which is located at Pathsala, ASSAM. This website is still in its  development stage. 

</div>
<hr>

<!----------------------------------------------------------<#footer>⬇️-------------------------------------------------------------->
<div style=" text-align:center; background:#706c60; padding-top:6vw; padding-left:5%; padding-right:5%; padding-bottom:4%;"  class="">
<a href="../about" style=" color:white;">about us</a>
<a href="../privacy_policy" style="  color:white; padding-left:20vw; ">privacy policy</a>
<br>
<br>
<a href='../home' style="color:white;" >sithighar.com</a>
</div>

<!----------------------------------------------------------</footer>⬆️-------------------------------------------------------------->
<script>

</script>
</body>
</html>
