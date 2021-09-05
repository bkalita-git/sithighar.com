<?php
include '../req/index.php';
require_once("../../private/cred.php");
$mob= substr($_POST["mobile"],-10);
$card= "https://sithighar.com/".$_POST["card"]; //pic dir target card
$qty = $_POST['qty'];
if(!file_exists($_POST["card"])){
	echo "Huh! Something is not right!";
	exit();
}
function get($mob,$card,$rdb_key){
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, 'https://sithighar-4540.restdb.io/rest/booked?q={"$and":[{"ph_no":"'.$mob.'"},{"card":"'.$card.'"}]}');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	$headers = array();
	$headers[] = 'Content-Type: application/json';
	$headers[] = $rdb_key;
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

	$result = curl_exec($ch);
	$result = json_decode($result);
	curl_close($ch);
	return count($result);
}


function post($mob,$card,$qty,$rdb_key) {
	//get($mob,$card);
	$ip = $_SERVER["REMOTE_ADDR"];
	if(!get($mob,$card,$rdb_key)) {
		date_default_timezone_set('Asia/Kolkata');
		$date = date('d-m-Y');
		$time = date('h:i A',time());               //recent_work
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://sithighar-4540.restdb.io/rest/booked');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, '{"ph_no":"'.$mob.'","card":"'.$card.'","ip":"'.$ip.'","qty":"'.$qty.'","amount":"'.(get_price_by_img_path($card)*$qty).'","price":"'.get_price_by_img_path($card).'","date":"'.$date.'","time":"'.$time.'"}');
		curl_setopt($ch, CURLOPT_POST, 1);

		$headers = array();
		$headers[] = 'Content-Type: application/json';
		$headers[] = $rdb_key;
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$result = curl_exec($ch);
		$result = json_decode($result);

		if ($result->status==400) {
		    echo 'Error:' ."can't book try later";
		}
		else {
		echo '<h1 style="color:'."green".';">ধন্যবাদ
		<br></h1><span style="color:white; font-size:7vw;">We will Contact you soon!</span>';
		}

		curl_close($ch);
	}
	else{
		echo '<h1 style="color:'."WHITE".';">You have a pending request!</h1>';
	}
}

post($mob,$card,$qty,$rdb_key);



?>
