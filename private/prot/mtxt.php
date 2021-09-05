
<?php

function loc($ip){
$ch = curl_init();
$url='';
if(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
    $url = 'http://api.ipstack.com/'.$ip.'?access_key=603943xxxxxxxxxxxxxx59145e341b7';
}
else {
    $url='https://extreme-ip-lookup.com/json/'.$ip;
}
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
else{
    $arr = json_decode($result, true);
    return $arr["isp"];
}
curl_close($ch);
}



function txtdb($ip,$origin,$device){
// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/ AIzaSyDUaJuYcfF9kSPKNSkorDsVTHxopdslqtM


$ch = curl_init();
//$city = loc($ip);
$city='';

curl_setopt($ch, CURLOPT_URL, 'https://sithighar-4540.restdb.io/rest/ipaddr');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"addr":"'.$ip.'","city":"'.$city.'","origin":"'.$origin.'","device":"'.$device.'"}');
curl_setopt($ch, CURLOPT_POST, 1);

$headers = array();
$headers[] = 'Content-Type: application/json';
$headers[] = 'X-Apikey: 460f7319f6acxxxxxxxxxxx391c7023b5ad3f9';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

}
?>
