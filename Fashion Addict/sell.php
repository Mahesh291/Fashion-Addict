<?php	
session_start();
$con = mysqli_connect("localhost", "root", "");
          
mysqli_select_db($con,"shop");	
?>	
<html>
<head>

<meta name="theme-color" content="#000000" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto" rel="stylesheet">
  
	 <script src = "http://code.jquery.com/jquery-1.11.1.min.js"></script>
 
</head>
<html>
<title>Sell Here</title>

<style> 

@media screen and (min-width: 800px) {

#products2{
margin-top:700px;;

}	
#main{
	margin-top:50px;
}
	#menus1{
		display:none;
	}
    #open {
        display:none;
		opacity:0;
		
    }
    


#top-nav{
	height:80px;
	background:white;
}	

#logo{
	margin-top:-2px;	
}

#profile{
	margin-top:7px;
	margin-right:2%;
}


}

@media screen and (max-width: 800px) {
	#menus
	{
		display:none;
	}
	  
	

#products2{
margin-top:80px;

}	
#top-nav{
	height:45px;
	background:none;
	
}
#logo{
	margin-top:-18px;	

}
}

#menus1{
	position:fixed;
	bottom:0;
	border-top:1px solid rgb(250,250,250);
	padding-top:6px;
	padding-bottom:3px;
	
	
}
#menus i{
	margin-left:10%;
	opacity:;
	color:rgb(10,10,10);
	text-shadow:1px 1px rgb(100,100,100);
	font-weight:bold;
}
#menus1 i{
	margin-left:14%;
	opacity:;
	color:rgb(10,10,10);
	text-shadow:1px 1px rgb(100,100,100);
	font-weight:bold;
}
	
#menus  span{
	font-size:10px;

	margin-top:-5px;
	font-family: 'Roboto', sans-serif;
}


</style>

<?php


?>
<body style=" background: linear-gradient(to right, rgb(255,255,255) , rgb(250,250,250));">

<div id="top-nav"  style="position:fixed;width:100%;z-index:2;opacity:;  ">
<div style=" margin-left:2%;width:100px;  height:40px; float:left;">
   
   <br/><img src="logo1.png" id="logo"style="width:40px;height:40px;">
   </div>
  <div id="menus"  style="float:left; width:80%; margin-top:25px;height:35px; ">
   
<div style="margin-left:4%;"><a href="main.php"><img src="home1.png" style="width:30px;margin-left:4px;"></div><span id="menu1" style=" margin-left:4.2%;font-size:12px;margin-top:34px;">Home</span></a>
  <a href="type.php?cat=Mens"><div style="margin-left:18%;"><img src="m31.jpg" style="width:70px;margin-left:-15px"></div><span id="menu1" style=" margin-left:18.5%;font-size:12px;margin-top:39px;">Mens</span><span style="color:white;background:rgb(250,20,20);	font-size:10;padding:2px 4px 3px 4px; border-radius:40%;position:absolute; margin-left:22%;">new</span></a>
 <a href="type.php?cat=Womens"><div style=";margin-left:33%;"><img src="w8.jpg" style="width:60px;margin-left:-10px"></div><span id="menu1" style=" margin-left:32.7%;font-size:12px;margin-top:39px;">Womens</span><span style="color:white;background:rgb(250,20,20);	font-size:10px;padding:2px 4px 3px 4px; border-radius:40%;position:absolute; margin-left:37%;">new</span></a>
  <a href="search.php"><div style="margin-left:48%;"><img src="search1.png" style="width:25px;margin-left:4px; margin-top:5px;"></div><span id="menu1" style=" margin-left:47.9%;font-size:12px;margin-top:36px;">Search</span></a>
  <a href="cart.php"><div style="margin-left:61%;"><img src="cart1.png" style="width:28px;margin-left:4px;margin-top:4px;"></div><span id="menu1" style=" margin-left:61.5%;font-size:12px;margin-top:36px;">Cart</span><span style="color:white;background:rgb(250,20,20);	font-size:10px;padding:2px 6px 3px 6px; border-radius:50%;position:absolute; margin-left:64%;"><?php if(!empty($_SESSION['cart'])){echo count($_SESSION['cart']);}else {echo"0";}?></span></a>
 <a href="login.php"> <span style="position:absolute;margin-left:75%;color:rgb(20,20,20);padding:10px;font-size:15px;border:2px solid rgb(100,100,100); border-radius:19px;margin-top:-10px; font-weight:bold;">Login/Signup</span></div></a>
  
  </div>
  
	
   
  <?php
?>
  
</div>	
<br/>

<html>
<title>WELCOME</title>

<style>
.wordWrap {
    word-wrap: break-word;     
    white-space: -moz-pre-wrap; 
    white-space: pre-wrap; 
}
#menus1 div {
	width:40px;position:absolute;margin-left:29%;margin-top:-3px;border:0px solid rgb(240,240,240);border-radius:50%; height:34px; overflow:hidden;
	float:left;
	margin-left:3%;
}
#menus div {
	width:40px;position:absolute;margin-left:29%;margin-top:-3px;border:0px solid rgb(240,240,240);border-radius:50%; height:40px; overflow:hidden;
	float:left;
	margin-left:%;
}

#info #products #img{
width:120px;	
}
#info:hover #products #img{
	width:140px;
	
}
#img2{
	
width:40px;position:absolute;margin-left:4%;margin-top:-30px;border-radius:50%; height:40px; overflow:hidden;	
}
#items li{
	margin-top:30px;
	list-style-type:none;
	
	
}
#items li span{
	font-family: 'Roboto', sans-serif;
	font-size:14px;
	font-weight:bold;
	color:rgb(40,40,40);
	float:left;
	margin-left:30%;
	margin-top:-14px;
}
#items a{
	
	
}
#image:hover{
transform:scale(1.5);	
margin-top:40px;
	
	
}	
#descr{color:rgb(60,60,60); opacity:0.7;text-shadow:0.4px 0.4px rgb(10,10,10);	font-family: 'Roboto', sans-serif;
}
#off{
	opacity:0.9;float:right;font-weight:bold; color:rgb(250,10,20); opacity:; text-shadow:0.4px 0.4px rgb(120,20,200);	font-family: 'Roboto', sans-serif;
}
#title{
	opacity:1;max-width:120px;color:rgb(20,30,30); opacity:;text-shadow:0px 0px rgb(20,20,200);	font-family: 'Roboto', sans-serif;
}
#price{
	opacity:;float:right;margin-top:-10px;margin-right:4%;font-weight:bold; color:rgb(40,40,40); opacity:;text-shadow:1px 1px rgb(20,20,20);	font-family: 'Roboto', sans-serif;
}

div.hori{
	background:black;	
 overflow: auto;
    white-space: nowrap;	

}
div.hori a{
	
 display: inline-block;
    color: white;
    text-align: center;
    padding: 14px;
    text-decoration: none;
	
}
.loader {
display:none;
  border: 4px solid #f3f3f3;
  border-radius: 50%;
  border-top: 5px solid rgb(30,30,30);
  width: 100px;
  height: 100px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes sp	in {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

#menu{
	position:absolute;font-size:10px; font-weight:bold;margin-top:28px;color:rgb(10,10,10);
}

#menu1 {
	position:absolute;font-size:14px; font-weight:bold;margin-top:49px;color:rgb(10,10,10);
}




#top{
width:32%; height:85px; background:white;display:inline-block;margin-top:-10px;  ;
}
#top1{
	display:inline;
	color:rgb(100,100,100); font-weight:bold; font-size:12px;
   position:absolute;
   margin-top:37px;
   margin-left:-12%;
}
input[type=text]{
	
	width:340px; height:60px;padding:20px; background:white; border:2px solid rgb(230,230,230); border-radius:2px;
}
.col-sm-5{
	margin-left:-10px;
	margin-top:10px;
}
.col-sm-10{
	margin-left:-10px;
	margin-top:10px;
}

</style>
<center>
<br/>
<div id="menus1"  style="float:left; z-index:3; width:100%; background:white;height:47px; ">

<a onclick="load()" href="main.php"><div style="margin-left:6%;"><a href="main.php"><img src="home1.png" style="width:30px;margin-left:0px;"></div><span id="menu" style=" margin-left:-42.6%;">Home</span></a>
	<a onclick="load()"href="type.php?cat=Mens"><div style="margin-left:26%;"><img src="m31.jpg" style="width:70px;margin-left:-15px"></div><span id="menu" style="margin-left:-21.6%; ">Mens</span><span style="color:white;background:rgb(250,20,20);	font-size:10;padding:2px 4px 3px 4px; border-radius:40%;position:absolute; margin-left:-16%;">new</span></a>
  <a onclick="load()" href="type.php?cat=Womens"><div style=";margin-left:46%;"><img src="w8.jpg" style="width:60px;margin-left:-10px"></div><span id="menu" style="margin-left:-4.6%; ">Womens</span><span style="color:white;background:rgb(250,20,20);	font-size:10px;padding:2px 4px 3px 4px; border-radius:40%;position:absolute; margin-left:6%;">new</span></a>
  <a onclick="load()" href="search.php"><div style="margin-left:66%;"><img src="search1.png" style="width:28px;margin-left:0px"></div><span id="menu" style="margin-left:17.6%; ">Search</span></a>
  <a onclick="load()"href="cart.php"> <div style="margin-left:86%;"><img src="cart1.png" style="width:30px;margin-left:0px"></div><span id="menu" style="margin-left:37.1%; ">Cart</span><span style="color:white;background:rgb(250,20,20);	font-size:10px;padding:2px 6px 3px 6px; border-radius:50%;position:absolute; margin-left:43%;"><?php if(!empty($_SESSION['cart'])){echo count($_SESSION['cart']);} else {echo "0";}?></span></a>
  

	
      </div>
	




<div id="loader" class="loader"></div>
<script>
function load(){
   document.getElementById("loader").style="position:fixed;  z-index:2;left:40%; top:60%; display:block; ";
}
</script>

<?php
if(empty($_GET['option'])){
	
?>
<div style="width:100%; ">

<img src="sell.png" style="width:100%; ">
<center>
<h2 style="color:rgb(40,40,40); text-shadow:1px 1px rgb(200,200,200);font-family: 'Roboto', sans-serif; font-weight:bold;margin-top:1%;">Sell with us in three easy steps</h2>
<br/>

</center>
</div>

<div style="width:100%; min-height:500px;">
<div class="col-sm-4" style="margin-top:30px; height:300px;">
<div class="caption">
<h4 style="color:rgb(100,100,100);">Upload product details on our app</h4>
</div>
<img src="upload.png" style="width:70%;">
</div>
<div class="col-sm-4" style=" margin-top:30px;height:300px;">
<div class="caption">
<h4 style="color:rgb(100,100,100);">Wait for verification</h4>
</div>
<img src="verify.png" style="width:60%;">
</div>
<div class="col-sm-4" style=" margin-top:30px;height:300px;">
<div class="caption">
<h4 style="color:rgb(100,100,100);">Ger paid when your product sold</h4>
</div>
<img src="money.png" style="width:70%;">
</div>
</div>
</div>
<?php
}
?>

<?php
if($_GET['option'] = "upload"){
	?>
<center>
<br/>
	<center>
<h3 style="color:rgb(100,100,100);margin-top:4px;">Upload details</h3>
</center>

<div style="width:70%;float:left; min-width:340px;">
<form action="sell.php" method="post" enctype="multipart/form-data" >
<div class="col-sm-5">
<input type="text" style=" " name="name" placeholder="Name">
</div>
<div class="col-sm-5">
<input type="text" style=" "  name="email" placeholder="Email">
</div>

<div class="col-sm-10">
<textarea type="text" name="descr" style="width:97%; min-width:350px;height:100px;padding:20px; background:white; border:2px solid rgb(230,230,230); border-radius:2px;" placeholder="Product description"></textarea>
</div>
<div class="col-sm-5">
<input type="text" style=" "name="number"  placeholder="Phone Number">
</div>
<div class="col-sm-5">
<input type="text" style=" height:50px;width:140px;"name="Price"   placeholder="price">
</div>


</div>

<div style="width:24%;float:right;background:white;  min-width:340px;">

<div class="col-sm-7" style="margin-top:30px;">
<label>Image 1</label><input type="file" name="i1" >
</div>

<div class="col-sm-7" style="margin-top:30px;">
<label>Image 2</label><input type="file" name="i2">
</div>
<div class="col-sm-7"style="margin-top:30px;">
<label>Image 3</label><input type="file"name="i3" >
</div>

</div>

<div class="col-sm-10">
<button class="btn btn-default" name="submit" style="width:30%; min-width:300px;height:50px; margin-bottom:100px;margin-top:20px; color:white;background:rgb(250,10,100);">Upload </button>
</div>
<br/>

</form>


<?php
}?>

<?php
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$descr = $_POST['descr'];
	
	$i1 = $_FILES['i1']['name'];
	$i2 = $_FILES['i2']['name'];
	$i3 = $_FILES['i3']['name'];
		$tmp1 = $_FILES['i1']['tmp_name'];
		$tmp2 = $_FILES['i2']['tmp_name'];
		$tmp3 = $_FILES['i3']['tmp_name'];
	$a = "";
	$date = date("ymdHis");
	$i1 = $date.$i1;
	$i2 = $date.$i2;
	$i3 = $date.$i3;
	
	move_uploaded_file($tmp1,$a.$i1);
	move_uploaded_file($tmp2,$a.$i2);
	move_uploaded_file($tmp3,$a.$i3);
	
	
	$results = mysqli_query($con,"INSERT INTO sell (name,email,phone,descr,i1,i2,i3) VALUES ('$name','$email','$number','$descr','$i1','$i2','$i3')") or die(mysqli_error());
	
}
	
?>



