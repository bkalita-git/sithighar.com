
<?php session_start();
?>

<html>
<?php 
require_once('../private/prot/mtxt.php');
require_once('../private/prot/mdetect.php');
$device = new uagent_info();
$d = 'PC';
if($device->isMobilePhone)
    $d = 'mobile';

/*require_once('../private/prot/mip.php');
$addr = get_client_ip();
    $_SESSION["visited"]='yes';*/
    
    
if(!strcmp($_SESSION["visited"],"yes")==0) {
    if (array_key_exists('HTTP_ORIGIN', $_SERVER)) {
    $origin = $_SERVER['HTTP_ORIGIN'];
    }
    else if (array_key_exists('HTTP_REFERER', $_SERVER)) {
        $origin = $_SERVER['HTTP_REFERER'];
    } else {
        $origin = $_SERVER['REMOTE_ADDR'];
    }
    txtdb($_SERVER['REMOTE_ADDR'],$origin,$d);
}
$_SESSION["visited"]='yes';
if($device->isMobilePhone){
$_SESSION["mobile"]='yes';
header("Location: home/"); 
}
else{
$_SESSION["mobile"]='no';
header("Location: http://google.com"); 
}



?>
</html>
