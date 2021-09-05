
<?php
$pic = $_GET['req'];
include "../req/index.php";
if(!file_exists($pic)){
  header('Location: ../error');
}
$price = get_price_by_img_path($pic);
if(!$pic){
	header('Location: ../home');
}
?>


<html>
<style>
	body{margin:0;}
	img{width:100%;}
	.shadow,#price{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.9), 0 20px 20px 0 rgba(100, 0, 0, 0.9);
}
	.logo_txt{
  color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;

	}
		.center {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  box-shadow:0 5px 20px 20px rgba(0,0,0, 0.9);
	}


#img_loading {
  position: absolute;
  left: 40%;
  top:40%;
  z-index: 1000;
  border: 4px solid #f3f3f3;
  border-radius: 50%;
  border-top: 4px solid #3498db;
  width: 20vw;
  height: 20vw;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 1s linear infinite;
  visibility:hidden;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}


</style>

<head>
  <title>চিঠি ঘৰ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>


<body>
 <!--<img id="img_loading" style="visibility:hidden; height:20%; width: 30%; top:40%; left:35%; position:absolute; z-index:1000;" src='https://loading.io/spinners/rolling/lg.curve-bars-loading-indicator.gif' > --><!--loading-->

<div id="img_loading"></div>




<!-----------------------------------------book_main_content----------------------------------------------------------------------->
<div style="width:100%;height:100%;position:absolute;z-index:'-10'; background:url(<?php echo "'".$pic."'";?>);   filter: blur(8px);
  -webkit-filter: blur(8px); background-size:cover; background-position: center;"></div>
<div style=" width:100%; height:10%; position:relative;"><h2 class="logo_txt" style="font-size:7vw;"align="center" >চিঠি ঘৰ</h2></div> 
<div id="form" style="width:100%;height:80%; position:relative;" >
 <div id="gal1" style="position:relative; width:40vw; left:0; right:0; margin-left:auto; margin-right:auto; " >
	<div style="font-size:4vw; position:absolute; background-color:green; top:0; left:0;" class="badge badge-pill badge-success" id="price_tag"></div>
	<?php
	echo '<img id="selected_card" class="img-rounded shadow" src="'.$pic.'" onclick="popup(this);">';
	?>
        <div onclick="var x = document.getElementById('selected_card'); popup(x);"  style="width:50px; position:absolute; right:0;top:0;" ><img  src="../cam.png" ></div>
 </div>
 <br>

 <div style="position:absolute; height:80vw; width:90vw; background:lightblue; opacity:0.4; left:0;right:0;margin-left:auto;margin-right:auto; border-radius:15px;"></div>
 <div id="submit_form" align="center" style="position:relative; left:0;right:0;margin-left:auto;margin-right:auto; width:90vw; padding:10px;" >

	<div  class="input-group input-group-lg">
		<span style="font-size:6vw;"class="input-group-addon">
			Order Quantity
		</span>	
		<input  id="qty" autocomplete="off" type="tel" maxlength="4" class="form-control" style="font-size:6vw; height:15vw;" required onclick="" placeholder="100" aria-label="quantity"/>
		
	</div>

	<hr>
	<span id="qty_warn" class="label label-warning" style="font-size:4vw;">minimum order: 100 cards</span>
	<div class="input-group input-group-lg">
		<span style="font-size:6vw;" class="input-group-addon">
			Total
		</span>	
		<span  id="amount" class="form-control" style="font-size:6vw; height:15vw; line-height:6vh; background-color:orange; color:white; font-weight:bold; " aria-label="Amount"></span>
		
	</div>
	<hr>
<form id="submit_form">
	<div class="input-group input-group-lg">
		<span id="mb_icon" style="background-color:white; color:green; border-right-style:hidden; " class="input-group-addon">
			<span  style="font-size:6vw;" class="glyphicon glyphicon-phone" aria-hidden="true"></span>
		</span>	
		<input  id="mb" type="tel" class="form-control" style="font-size:6vw; height:15vw; border-left-style:hidden;" autocomplete="off" placeholder="Mobile No" aria-label="Mobile Number"/>
		<span class="input-group-btn">
				<input style="font-size:6vw; height:15vw;" type="submit" class="btn btn-primary" value="BOOK">
		</span>
		
	</div>
</form>

 </div>
<br>
<div style="width:15vw; position:relative; right:0;left:0;margin-left:auto;margin-right:auto;" onclick="window.close();"><img src="home-icon.png"></div>
</div>

<!--------------------------------------------------------------------------------------------------------------------------------->

<!----------------------------------------------------------<#footer>⬇️--------------------------------------------------------------
<div style=" text-align:center; background:#706c60; padding-top:6vw; padding-left:5%; padding-right:5%; padding-bottom:4%;"  class="">
<a href="../about" style=" color:white;">about us</a>
<a href="../privacy_policy" style="  color:white; padding-left:20vw; ">privacy policy</a>
<br>
<br>
<a href='../home' style="color:white;" >sithighar.com</a>
</div>

!----------------------------------------------------------</footer>⬆️-------------------------------------------------------------->




 <div id="modal_div">
<div  class="modal fade  " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
           <div class="center " style="width:78vw">
                   <!-- <button class="close" data-dismiss="modal">&times;</button>-->
		<div id="myCarousel_pop" class="carousel slide" >
    <!-- Indicators -->
		    <ol id="indicator_pop"   class="carousel-indicators">
		    </ol>

		    <!-- Wrapper for slides -->
		    <div id="inner_pop" class="carousel-inner">
		    </div>
		    <!-- Left and right controls -->
			    <a style="color:red;" class="left carousel-control"  onclick="$('#myCarousel_pop').carousel('prev')" >
			      <span class="glyphicon glyphicon-chevron-left"></span>
			      <span class="sr-only">Previous</span>
			    </a>
			    <a style="color:red;" class="right carousel-control" onclick="$('#myCarousel_pop').carousel('next')">
			      <span class="glyphicon glyphicon-chevron-right"></span>
			      <span class="sr-only">Next</span>
			    </a>

		  </div>

		<button style="font-size:4vw;width:100%; height:10%;" class="btn btn-primary " data-card="" id="bk_pop" data-dismiss="modal">book now</button>
				<div style="font-size:3vw; width:40%; position:absolute; background-color:green; top:0; left:0;" class="badge badge-pill badge-success" id="price_pop">at just 20 Rs./pc</div>
				<div style="font-size:3vw; width:10%; position:absolute; background-color:red; top:0; right:0;" class="badge badge-pill badge-success" data-dismiss="modal" >X</div>
		    
            </div>
</div>
</div>






<script>
var price = <?php echo $price; ?>;
var card   = <?php echo '"'.$pic.'"'; ?>;

document.getElementById('submit_form').addEventListener('submit', function(e) {

  e.preventDefault();
  submit();

});
$("#price_tag").html('₹'+price);
$("#amount").html('₹'+(Math.floor(100*price)).toLocaleString('en')+"/-");

$(".carousel").on("touchstart",function(event){
    var xCLick = event.originalEvent.touches[0].pageX;
    $(this).one("touchmove",function(event){
        var xMove = event.originalEvent.touches[0].pageX;
        if(Math.floor(xCLick-xMove)>5){
            $(this).carousel('next');
        }
        else if(Math.floor(xCLick-xMove)<-5){
            $(this).carousel('prev');
        }
    });
    $('.carousel').on("touchend",function(){
        $(this).off("touchmove");
    });
}
);

$('#qty').on('input', function() { 
    if($("#qty").val()<100 || isNaN($("#qty").val())){
	$("#qty_warn").html("minimum order: 100 cards");
	$("#amount").html('₹'+(Math.floor(100*price)).toLocaleString('en')+"/-");
    }
    else{
	$("#qty_warn").html("");
	$("#amount").html('₹'+(Math.floor($("#qty").val()*price)).toLocaleString('en')+"/-");
	
    }
});


$('#mb').on('click',function(){
	$("#mb").css("border-color","gray");
	$("#mb_icon").css("border-color","gray");
	$('#mb_icon').css("color","green");
	document.body.scrollTop=$('#mb').offset().top;
});



function popup(x){
	$('#img_loading').css("visibility","visible"); 

        $.post("../req/",
		{
			order: "carousel",
			img: x.src,
		},
		function(data,status){
			var images = JSON.parse(data);
			var img_block = images[0].photos;
			var price = images[0].price;
			$('#indicator_pop').html('');
			$('#inner_pop').html('');
			$('#price_pop').html('at just '+price+' Rs./pc');
			
			for (i=0;i<img_block.length;i++){
			 if(i==0){
			  $('#indicator_pop').append('<li style="border-color:red;" data-target="#myCarousel_pop" data-slide-to="'+i+'" class="active"></li>');
			  $('#inner_pop').append('<div class="item active"> <img class="pop_up_img" src="'+img_block[i]+'" style="width:100%;"></div>');
			 }
			 else{
			  $('#indicator_pop').append('<li style="border-color:red;" data-target="#myCarousel_pop" data-slide-to="'+i+'"></li>');
			  $('#inner_pop').append('<div class="item"> <img class="pop_up_img" src="'+img_block[i]+'" style="width:100%;"></div>');
			 }
			}
			if(img_block.length){
                var len = $(".pop_up_img").length;
                var start = 0;
                $(".pop_up_img").each(function(){
                    this.onload =function(){
                        start++;
                        if(len==start){
                            $('#img_loading').css("visibility","hidden"); //hidden
                            $('#myModal').modal('show');
                            window.location.hash='popup';
                        }
                    };
                });    
				/*document.getElementById("pop_up_img").onload = function(){
					$('#img_loading').css("visibility","hidden");
					$('#myModal').modal('show');
					window.location.hash='popup';
				};*/
				
			}
			
		}
	);
}   




function hashHandler() {
	if(window.location.hash=="")
	    $('#myModal').modal('hide');
}
window.addEventListener('hashchange', hashHandler, false); 




function submit(){
	if(/^([+]91|91)?(9|7|6|8)[0-9]{9}$/.test($('#mb').val())){
		$("#img_loading").css("visibility","visible");

		var mob = $('#mb').val();
		var cd =  $('#selected_card').attr('src');
		var quantity = ($("#qty").val()<100 || isNaN($("#qty").val()))?100:$("#qty").val();
		/*$('#submit_form').html('<div style="height:5%;width:5%;"><img src="https://loading.io/spinners/harmony/lg.harmony-taiji-spinner.gif"></div>');*/	
		
		$.post("../submit/",
		    {
		      mobile: mob,
		      card  : cd,
		      qty   : quantity,
		    },
		    function(data,status){
			$('#submit_form').html(data);
			$("#img_loading").css("visibility","hidden");
		    });
	}
	else{
		$('#mb').css("border-color","red");
		$('#mb_icon').css("color","red");
		$("#mb_icon").css("border-color","red");	
	}
}

</script>

</body>
</html>

