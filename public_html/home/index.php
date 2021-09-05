<?php 
session_start();
if(!strcmp($_SESSION["visited"],"yes")==0 || (!strcmp($_SESSION["mobile"],"yes")==0) ){
    header("Location: https://sithighar.com/");
}
?>
<html>

<!----------------------------------------------------------<#style>⬇️--------------------------------------------------------------->
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
  position: fixed;
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

.div_bottom_shadow{
	box-shadow: 0 8px 6px -6px rgba(20, 20, 20, 0.9);
}

#logo_header{
  -webkit-transition: all 0.5s ease;
  -moz-transition: position 10s;
  -ms-transition: position 10s;
  -o-transition: position 10s;
  transition: all 0.5s ease;
}
.sticky {
  position: fixed;
  top: 0;
  z-index:1001;
  animation: smoothScroll 0.5s forwards;
}
@keyframes smoothScroll {
	0% {
		transform: translateY(-20vh);
	}
	100% {
		transform: translateY(0px);
	}
}

.gal_sticky{
  position: fixed;
  top: 0;
  z-index:1002;

}
</style>
<!----------------------------------------------------------</style>⬆️-------------------------------------------------------------->



<!----------------------------------------------------------<#head>⬇️--------------------------------------------------------------->
<head>
  <title>চিঠি ঘৰ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<!----------------------------------------------------------</head>⬆️--------------------------------------------------------------->



<body>
 <div id="img_loading"></div> <!--#loading image-->
<!----------------------------------------------------------<#page>⬇️--------------------------------------------------------------->
<div id="page1" style="width:100%; background:lightblue; text-align:center;">
  
  <div id="banner_crs" class="carousel slide"  data-ride="carousel" >
    <!-- Indicators -->
		    <ol  id="li_banner_crs"   class="carousel-indicators">
		        <li style="" data-target="#banner_crs" data-slide-to="0" class="active"></li>
		        <li style="" data-target="#banner_crs" data-slide-to="1"></li>
		        <li style="" data-target="#banner_crs" data-slide-to="2"></li>
		    </ol>

		    <!-- Wrapper for slides -->
		    <div id="inner_banner_crs" class="carousel-inner">
		        <div class="item active"><img  src="../banner.jpg"></div>
		        <div class="item" onclick="location.href='https://maps.app.goo.gl/dn8cfMbDjXxkJdyz5';"><img  src="../banner_crs1.jpg"></div>
		        
		        <div style="" class="item" >
    			  <img  src="../banner_crs2.jpg"> 
    
    			  <div class="carousel-caption" >
    			    <a style="text-decoration: none;" href="tel:7002610580">
    				<img style="height:30px;width:30px;" src="../phone_logo.png">
    				<i style="color:white;">70xxxx10580</i> &nbsp;
    			    </a>
    			    <a style="text-decoration: none;"  href="tel:8810314431" >
    				<img style="height:30px;width:30px;" src="../phone_logo.png">
    				<i style="color:white;">881xxxxx4431</i>
    			    </a> 
    			    <a style="text-decoration: none;" href="https://wa.me/+91 9706540922/?text=[sithighar user]Hello!">
    				<img style="height:30px;width:30px;" src="../wp_logo.png">
    				<i style="color:white;">9706xxxxxxx22</i>
    			    </a> 
    		      </div>

			    </div>
		        
		    </div>
   </div>

  <div onclick="book_it('../photo/8$yellow_inside_red_square.jpg')" style="position:relative; padding-top:1%; padding-bottom:1%;" ><span class="div_bottom_shadow" style="width:15vw; border-radius:100%; background-color:e47e02; position:absolute; right:0; margin:4%; font-size:10vw; color:bb0013;" >₹8</span><img src="../banner3.jpg"></div>

 <div style="position:relative;" >
	  <span class="div_bottom_shadow" style="width:16vw; height:16vw; line-height:16vw; border-radius:100vw; background-color:#0994eb; color:white; margin:auto; top:0; bottom:0; left:0; right:0; position:absolute; font-size:7vw;" >₹7.5</span>
	  <img style="width:49%;" onclick= "book_it('../photo/7.5$yellow_fold.jpg')" src="../banner4.jpg">
	  <img style="width:49%;"onclick= "book_it('../photo/7.5$red_fold.jpg')" src="../banner5.jpg">
 </div>

  <div onclick= "book_it('../photo/11$pan.jpg')" style="position:relative; padding-top:1%; padding-bottom:1%;" ><span class="div_bottom_shadow" style="width:16vw; height:16vw; line-height:16vw; border-radius:100vw; background-color:gold; color:red; margin:4%; right:0; position:absolute; font-size:7vw;" >₹11</span><img  src="../banner7.jpg" ></div>

  <div onclick= "book_it('../photo/8.5$red_holes.jpg')"  style="position:relative; width:49%; display:inline-block;" ><span class="div_bottom_shadow" style="width:10vw; height:10vw; line-height:10vw; border-radius:100vw; background-color:#ccc72b; color:white; margin:1%; left:0; position:absolute; font-size:4vw;" >₹8.5</span><img src="../banner6.jpg" style=""></div>
  <div onclick= "book_it('../photo/15$blue.jpg')" style="position:relative; width:49%; display:inline-block;" ><span class="div_bottom_shadow" style="width:10vw; height:10vw; line-height:10vw; border-radius:100vw; background-color:eedbb1; color:#0894bf; margin:1%; left:0; position:absolute; font-size:4vw;" >₹15</span><img  src="../banner8.jpg"  ></div>

</div>
<!----------------------------------------------------------</page>⬆️--------------------------------------------------------------->

<!----------------------------------------------------------<#gallery>⬇️------------------------------------------------------------>
 <div id="logo_header" class="div_bottom_shadow" style="width:100%; height:7vh; line-height:7vh; background:lightblue; text-align:center; "><span style=" visibility:visible; font-size:7vw; " class="logo_txt"  >চিঠি ঘৰ</span></div> <!--#logo--> 

		<div id="form" style="text-align:center; background-color:#0cc4b2;">
		<br><br><br>
		 <div id="gal1" style=" width:47%; display:none; padding:1%;"  >
			<div style="position:relative">
				<img id="gal_img" onclick='popup(1)' class="img-rounded shadow"   src=""/>
				<div class="carousel-caption" >
					<button id="bk1" style="font-size:4vw; " data-card='' onclick="book_it(this.dataset.card)" class="btn btn-primary">book now</button>
			 	</div>
				<div style="font-size:3.5vw;width:30%; position:absolute; background-color:orange; top:0; right:0;" class="badge badge-pill badge-success" id="price1">₹</div>
				<div onclick='popup(1)' style="width:50px; position:absolute; left:0;top:0;" ><img  src="../cam.png" ></div>
						
			</div>
		 </div>
						
			
		 <div id="gal2" style=" width:47%; display:none; padding:1%;">
			<div style="position:relative">
				<img id="gal_img" onclick='popup(2)' class="img-rounded shadow"   src=""/>
				<div class="carousel-caption" >
					<button id="bk2" style="font-size:4vw" data-card='' onclick="book_it(this.dataset.card)" class="btn btn-primary" style=" opacity: 0.9;">book now</button>
				</div>
				<div style="font-size:3.5vw;width:30%; position:absolute; background-color:orange; top:0; right:0;" class="badge badge-pill badge-success" id="price2">₹</div>
				<div onclick='popup(2)' style="width:50px; position:absolute; top:0;left:0;" ><img  src="../cam.png" ></div>
			</div>
		 </div>
			

		 <div  id="gal3" style="width:47%; display:none; padding:1%;">
			<div style="position:relative">
				<img  id="gal_img" onclick='popup(3)' class="img-rounded shadow "  src=""/>
				<div class="carousel-caption" >
					<button id="bk3" style="font-size:4vw" data-card='' onclick="book_it(this.dataset.card)" class="btn btn-primary" style=" opacity: 0.9;">book now</button>
				</div>
				<div style="font-size:3.5vw;width:30%; position:absolute; background-color:orange; top:0; right:0;" class="badge badge-pill badge-success" id="price3">₹</div>
				<div onclick='popup(3)' style="width:50px; position:absolute; top:0; left:0;" ><img  src="../cam.png" ></div>
			</div>
		 </div>
				
						

		 <div id="gal4" style=" width:47%; display:none; padding:1%;">
			<div  style=" position:relative">
			 	<img  id="gal_img" onclick='popup(4)' class="img-rounded shadow"  src=""/>
				<div class="carousel-caption" >
					<button id="bk4" style="font-size:4vw" data-card='' onclick="book_it(this.dataset.card)" class="btn btn-primary" style=" opacity: 0.9;">book now</button>
				</div>
				<div style="font-size:3.5vw;width:30%; position:absolute; background-color:orange; top:0; right:0;" class="badge badge-pill badge-success" id="price4">₹</div>
				<div onclick='popup(4)' style="width:50px; position:absolute; top:0; left:0;" ><img  src="../cam.png" ></div>
			</div>
		 </div>	
		





<br><br>

<div id="buttons" style="width:100%; height:10%; position:relative;" data-bt_no='' align='center'>
	<button style="font-size:4vw background-color:orange;" class="btn btn-default"   id="button1" onclick="update(1)">1</buttons>
	<button style="font-size:4vw" class="btn btn-default"   id="button2" onclick="update(2)">2</buttons>
	<button style="font-size:4vw" class="btn btn-default"   id="button3" onclick="update(3)">3</buttons>
</div>
</div> <!-------#buttons---------->
<!-- change here for total buttons id  dataset.bt_no -->
<!----------------------------------------------------------</gallery>⬆️------------------------------------------------------------->


<!----------------------------------------------------------<#footer>⬇️-------------------------------------------------------------->
<div style=" text-align:center; background:#706c60; padding-top:6vw; padding-left:5%; padding-right:5%; padding-bottom:4%;"  class="">
<a href="../about" style=" color:white;">about us</a>
<a href="../privacy_policy" style="  color:white; padding-left:20vw; ">privacy policy</a>
<br>
<br>
<a href='index.php' style="color:white;" >sithighar.com</a>
</div>

<!----------------------------------------------------------</footer>⬆️-------------------------------------------------------------->


<!----------------------------------------------------------<#script>⬇️-------------------------------------------------------------->
<script>
var end_page;

$('#myModal').modal({ show: false});

//alert(window.screen.width);
function display_button(id){
	//var end = $('#buttons').attr('data-bt_no');
	var end = <?php echo ceil(count(glob('../photo/*.{jpg,jpeg,png,gif}',GLOB_BRACE))/4); ?>;
        end_page = end;
	var target = $('#buttons');
	$('#buttons').html('');
	//var end = $('#buttons').children().length;
	if(id!=1 && id!=end){
		for(i=id-1;i<=id+1;i++){
			target.append('<button style="font-size:4vw" class="btn btn-default"   id="button'+(i)+'" onclick="update('+(i)+')">'.concat(i,'</buttons>'));
		}
	}
	else if(id==1){
		for(i=id;i<=id+2 && i<=end;i++) {
			target.append('<button style="font-size:4vw" class="btn btn-default"   id="button'+(i)+'" onclick="update('+(i)+')">'.concat(i,'</buttons>'));
			
		}
	}
	else if(id==end){
		if((id-3)<1){
			for(i=1;i<=end;i++){
				target.append('<button style="font-size:4vw" class="btn btn-default"   id="button'+(i)+'" onclick="update('+(i)+')">'.concat(i,'</buttons>'));
			}
			
		}
		else{
			for(i=id-2;i<=end;i++){
				target.append('<button style="font-size:4vw" class="btn btn-default"   id="button'+(i)+'" onclick="update('+(i)+')">'.concat(i,'</buttons>'));
			}
		}
	}
	$('#button'+id).css("background-color","orange");
} 
var images;
var curr_page;
function update(page_no){
    curr_page = page_no;
    $('#img_loading').css("visibility","visible");
    $.post("../req/",
    {
      get_links: page_no
    },
    function(data,status){
	
	for(i=0;i<4;i++){
	 $('#gal'+(i+1)).css("display","none");
	}
	var data = JSON.parse(data); 
	images = data;
	for(i=0;i<data.length;i++){
	 $('#gal'+(i+1)+' div:first').children('img').attr('src',data[i].link);
	 
	 $('#gal'+(i+1)).css("display","inline-block");
	 $('#price'+(i+1)).html('₹'+data[i].price);
	 $('#bk'+(i+1)).attr('data-card',data[i].link);
	}
	display_button(page_no);
	
	document.getElementById("gal_img").onload = function(){
		$('#img_loading').css("visibility","hidden"); //hidden
	};
	
    });
}



$(document).ready(function(){  //#first execute on document ready
   /* $.post("../req/",
    {
      get_button: "a"
    },
    function(data,status){
	var answer = JSON.parse(data)[0].answer;
	var target = $('#buttons'); //change here for first button logic
	$('#buttons').attr('data-bt_no',answer);
    });*/
    update(1);

    
});
</script>
<!----------------------------------------------------------</script>⬆️-------------------------------------------------------------->

<!----------------------------------------------------------<#carousel>⬇️------------------------------------------------------------>
 <div id="modal_div">
<div  class="modal fade  " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
           <div class="center "  style=" width:78vw;" >
                   <!-- <button class="close" data-dismiss="modal">&times;</button>-->
		<div id="myCarousel_pop" class="carousel slide"   >
    <!-- Indicators -->
		    <ol  id="indicator_pop"   class="carousel-indicators">
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

		<button style="width:100%; height:10%; font-size:4vw;" class="btn btn-primary " data-card="" id="bk_pop"  onclick="book_it(this.dataset.card)">book now</button>
				<div style="width:40%; position:absolute; background-color:green; top:0; left:0;font-size:3vw;" class="badge badge-pill badge-success" id="price_pop" >at just 20 Rs./pc</div>
				<div style="width:10%; position:absolute; background-color:red; top:0; right:0; font-size:3.5vw;" class="badge badge-pill badge-success" data-dismiss="modal" >X</div>
		    
            </div>
</div>
</div>
<!----------------------------------------------------------</carousel>⬆️------------------------------------------------------------>

<!----------------------------------------------------------<#script>⬇️-------------------------------------------------------------->
<script>
$(".carousel").on("touchstart",function(event){ //#swipe on carousel
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


$("#form").on("touchstart",function(event){  //#swipe on gallery
    var xCLick = event.originalEvent.touches[0].pageX;
    $(this).one("touchmove",function(event){
        var xMove = event.originalEvent.touches[0].pageX;
        if(Math.floor(xCLick-xMove)>10){
            //$(this).carousel('next');
            if(curr_page+1<=end_page)
                update(curr_page+1);
        }
        else if(Math.floor(xCLick-xMove)<-10){
            //$(this).carousel('prev');
            if(curr_page-1>=1)
                update(curr_page-1);
        }
    });
    $('#form').on("touchend",function(){
        $(this).off("touchmove");
    });
}
);



function popup(x){
	$('#img_loading').css("visibility","visible");
	$('#bk_pop').attr('data-card',images[x-1].link);
	var img_block = images[x-1].photos;
	var price = images[x-1].price;
	$('#indicator_pop').html('');
	$('#inner_pop').html('');
	$('#price_pop').html('at just '+price+' Rs./pc');
	
	for (i=0;i<img_block.length;i++){
	 if(i==0){
	  $('#indicator_pop').append('<li style=" border-color:red;" data-target="#myCarousel_pop" data-slide-to="'+i+'" class="active"></li>');
	  $('#inner_pop').append('<div class="item active"> <img class="pop_up_img" src="'+img_block[i]+'" style="width:100%;"></div>');
	 }
	 else{
	  $('#indicator_pop').append('<li style="border-color:red;" data-target="#myCarousel_pop" data-slide-to="'+i+'"></li>');
	  $('#inner_pop').append('<div class="item"> <img class="pop_up_img" src="'+img_block[i]+'" style="width:100%;"></div>');
	 }
	 }
	if(img_block.length){
        var len = $(".pop_up_img").length;
        //alert(len);
        var start = 0;
        $(".pop_up_img").each(function(){
            //alert(this.src);
            this.onload =function(){
                start++;
                if(len==start){
                    $('#img_loading').css("visibility","hidden"); //hidden
                    $('#myModal').modal('show');
                    window.location.hash='popup';
                }
            };
        });

		/*document.getElementByClassName("pop_up_img").onload = function(){
			$('#img_loading').css("visibility","hidden"); //hidden
            $('#myModal').modal('show');
            window.location.hash='popup';
		};*/
		
	}



}


function hashHandler() {
 if(window.location.hash=="")
    $('#myModal').modal('hide');
 }
window.addEventListener('hashchange', hashHandler, false);



function book_it(x){ //#redirect to book_form page
	$('#myModal').modal('hide');
	//window.open("book_form.php?req="+x,"_self");
    window.open("../book/?req="+x);
}


window.onscroll = function() {fixed_logo_header(); }; //#on scroll logo_header


var logo_header = document.getElementById("logo_header");
//var gal_header  = document.getElementById("form");
var sticky = logo_header.offsetTop;
function fixed_logo_header() {
  if (window.pageYOffset > sticky) {
    logo_header.classList.add("sticky");
    $('#logo_header :first-child').css("visibility","visible");
   // gal_header.classList.add("gal_sticky");
  } else {
    logo_header.classList.remove("sticky");
    //gal_header.classList.remove("gal_sticky");
    $('#logo_header :first-child').css("visibility","visible");
  }
}





//document.getElementById('form').ontouchmove = function(){$('body').css("overflow","auto"); d=0;};
</script>
<!----------------------------------------------------------</script>⬆️-------------------------------------------------------------->

</body>
</html>
