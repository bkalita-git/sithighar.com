<?php 
session_start();

if(!$_SESSION["ordered_in"]){
	header("Location: signin/"); 
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
<style>
.inline{
	display:inline;
}
.left-border{
	padding:10px;
	position:absolute;
	border-left:solid lightblue;
}
.p-div{
	padding:20px;
	border-radius:10px;
	border:solid 1px gray;


}
.font{
	font-size:16px;
}
.phone{
	width:50px;
	height:50px;
	position:relative;
	left:42%;
	
}
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}
</style>
<body>

<?php
$del  = $_GET["del"];
$skip = $_GET["skip"];
$max  = $_GET["max"];
$ord  = $_GET["ord"];

if($del){
	delete($del);
	header("Location: signin/");
	//exit();
}
if(!$skip||!$max){
	$skip = 0;
	$max  = 3;
}
if(!$ord)
	$ord = -1;


function delete($sl){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://sithighar-4540.restdb.io/rest/booked/*?q={"sl":'.$sl.'}');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');

	$headers = array();
	$headers[] = 'Content-Type: application/json';
	$headers[] = 'X-Apikey: 460f7319fxxxxxxxx023b5ad3f9';
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	$result = curl_exec($ch);
	curl_close($ch);
	
}

function get_rec($skip,$max,$ord){
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://sithighar-4540.restdb.io/rest/booked?q={}&h={"$max":'.$max.',"$skip":'.$skip.',"$orderby":{"sl":'.$ord.'}}&totals=true');
	// https://restdb.io/docs/querying-with-the-api
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$headers = array();
	$headers[] = 'Content-Type: application/json';
	$headers[] = 'X-Apikey: 460f7319f6xxxxxxxxxxxx23b5ad3f9';
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	$result = curl_exec($ch);
	//$result = json_decode(json.encode($result->data));
	//echo gettype(json_decode($result)->totals->total);
	$total = json_decode($result)->totals->total;
	$result = json_decode($result)->data;
	$data = array();
	$data[1] = $total;
	$data[0] = $result;
	curl_close($ch);
	//date_default_timezone_set('Asia/Kolkata');       //recent_work
	//$date = date('d-M-Y');
	//echo $date;
	return $data;
}

$data = get_rec($skip,$max,$ord);
$rec = $data[0];
$total = $data[1];
$count = count($rec);
$to_res = (($skip+$max)>$total)?$total:($skip+$max);

echo '<div id="myHeader" style="background:white; z-index:100;"><hr><i style="position:relative;">'.($skip+1).'-'.$to_res.' Results of '.$total.'</i><a  style="position:relative;left:56%;"href="logout/">LogOut</a><br>&nbsp;&nbsp;&nbsp;<a href="index.php?totals=true&ord=-1"><i>latest</i></a>&nbsp;&nbsp;&nbsp;<a href="index.php?totals=true&ord=1"><i>old</i></a><hr></div>';
foreach($rec as $item){
        $a = new \DateTime(trim(json_encode($item->date),'"'));
	$b = new \DateTime;
	$days = $a->diff($b)->days;
	if($days==0){
		$days = 'Today';
	}
	else{
		if($days==1)
			$days = 'yesterday';
		else 
			$days = $days.' days ago';
	}
	echo '<div class="p-div"><span style="position:absolute;">'.trim(json_encode($item->date),'"').'&nbsp;&nbsp;'.trim(json_encode($item->time),'"').'<br><i>'.$days.'</i></span><div class="inline" ><img style="width:180px; height:220px;" src='.json_encode($item->card).'></div><div class="inline left-border" ><i class="font"><span class="glyphicon glyphicon-phone"></span>'.trim(json_encode($item->ph_no),'"').'<hr>Qty:'.json_encode($item->qty).'<hr>Price:'.trim(json_encode($item->price),'"').'Rs.<hr>Total:  ₹'.trim(json_encode($item->amount),'"').'</i></div><hr>  <a href="tel:'.trim(json_encode($item->ph_no),'"').'" > <img class="phone" src="http://icons.iconarchive.com/icons/martz90/circle/256/phone-icon.png"> </a> <a href="?del='.trim(json_encode($item->sl),'"').'" onclick="return confirm(\'delete?\')" > <img src="del.png"> </a> <a href="https://wa.me/+91'.trim(json_encode($item->ph_no),'"').'/?text=চিঠি ঘৰ"><img src="wp_logo.png"></a> </div><hr>';
}
?>


<div style="position:relative;" align="center">

<?php 
if($skip>0){
	echo '<button onclick="window.open(\'index.php?skip='.($skip-$max).'&max='.($max).'&totals=true&ord='.$ord.'\',\'_self\');" class="btn" style="font-size:20px; padding:3px; border-radius:10px; background-color:lightblue;"><span style="color:white;" class="glyphicon glyphicon-chevron-left"></span>Prev</button>';
}
?>

<?php
if($skip+$max<$total){ 
echo '<button onclick="window.open(\'index.php?skip='.($skip+$max).'&max='.($max).'&totals=true&ord='.$ord.'\',\'_self\');" class="btn" style="font-size:20px;  padding:3px; border-radius:10px; background-color:lightblue;">Next<span style="color:white;" class="glyphicon glyphicon-chevron-right"></span></button>';
}
?>
</div>

<hr><hr>

</body>

<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
</html>
