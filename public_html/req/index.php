
<?php 

$get_button = $_POST['get_button'];
$get_links = $_POST['get_links'];
$order = $_POST['order'];
$img_src = $_POST['img'];


function get_dir_path_by_image_path($img_path){
	$info = pathinfo($img_path);
	$dir_name = $info['filename'];
	return '../photo/'.$dir_name;       //sub dir 
}
function get_price_by_img_path($img_src){
    $info = pathinfo($img_src);
    $dir_name = $info['filename'];
    return strtok($dir_name,'$');  // price
}


if($get_button){
$arr = array();
$arr[0]->answer = ceil(count(glob('../photo/*.{jpg,jpeg,png,gif}',GLOB_BRACE))/4); //dir photo
echo json_encode($arr);
}

else if($get_links){
 $arr = array();
 $img = glob('../photo/*.{jpg,jpeg,png,gif}',GLOB_BRACE);       //dir photo
 $start = ($get_links-1)*4;
 $end = min(count($img),$start+4);
 for($start,$in=0;$start<$end;$start++,$in++){
	$arr[$in]->link  = $img[$start];
	
	$info = pathinfo($img[$start]);
	$dir_name = $info['filename'];
	$subdir   = '../photo/'.$dir_name.'/*.*';   //sub_dir

	$arr[$in]->price = strtok($dir_name,'$');  // price

	$sub_img = glob($subdir);
	foreach($sub_img as $sub_pic){
		$arr[$in]->photos[] = $sub_pic;
	}
 }
 echo json_encode($arr);
}
else if(strcmp($order,"carousel")==0){
  $arr = array();



    $arr[0]->price = get_price_by_img_path($img_src);
    $subdir = get_dir_path_by_image_path($img_src).'/*.*';
    $sub_img = glob($subdir);
	foreach($sub_img as $sub_pic){
		$arr[0]->photos[] = $sub_pic;
	}



    echo json_encode($arr);

}
else if(strcmp($order,"get_price")==0){
    echo get_price_by_img_path($img_src);
}


else{

/*$arr = array();

$arr[0] ->name = 'bipul';
$arr[0] ->time = 'tend';

$arr[1] ->name = 'bipul';
$arr[1] ->time = 'tenderppp';
echo json_encode($arr);
*/
}
?>
