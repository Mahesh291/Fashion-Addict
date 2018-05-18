<?php
session_start();
$con = mysqli_connect("localhost", "root", "");
          
mysqli_select_db($con,"shop");

$b4 = "";
$b5 = "";
$name = "";
if(isset($_COOKIE['b4'])){
	$_SESSION['b4'] = $_COOKIE['b4'];
	$_SESSION['b5'] = $_COOKIE['b5'];
}

if(!empty($_SESSION['b4'])){
	$b4 = $_SESSION['b4'];
}
if(!empty($_SESSION['b5'])){
	$b5 = $_SESSION['b5'];
}
   
    $res = array();
	$result = mysqli_query($con,"SELECT * FROM accounts WHERE (phone = '$b4') AND (password = '$b5')") or die(mysqli_error());
	if(mysqli_num_rows($result) > 0){
		
  		
		
		
	while($row = mysqli_fetch_array($result)){
		$name = $row['username'];
		setcookie('b4',$b4,time()+30*24*60*60);
		setcookie('b5',$b5,time()+30*24*60*60);
		
		

	}
	}
	
	
if(!empty($_SESSION['cart'])){
foreach($_SESSION['cart'] as $key=>$val){
		  
		  $id = $_SESSION['cart'][$key]['id'];
		 
		 $qty = $_SESSION['cart'][$key]['qty'];
		 
		 if(!empty($b4)){
		
		$result1 = mysqli_query($con,"SELECT * FROM cart WHERE (phone = '$b4') AND (i_id = '$id')") or die(mysqli_error());
	if(mysqli_num_rows($result1) < 1){
	$result2 = mysqli_query($con,"INSERT INTO cart (i_id,quantity,phone) VALUES ('$id','$qty','$b4')") or die(mysqli_error());
		
	}
	}
	}
	
}	


	if(!empty($_SESSION['b4'])){
			$i = 0;
		$result = mysqli_query($con,"SELECT * FROM cart WHERE (phone = '$b4')") or die(mysqli_error());
		if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_array($result)){
			if(!empty($row['i_id'])){
			$cart = array(
			'id'=>$row['i_id'],
			'qty'=>$row['quantity']
			);
			$_SESSION['cart'][$i] = $cart;
			$i++;
			}
		}
		}
	}
	
	


?>
<html>
<head>

<meta name="theme-color" content="#000000" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto" rel="stylesheet">
 
</head>


<html>
<title>WELCOME</title>

<style> 

@media screen and (min-width: 800px) {
	#arrow{
		margin-left:80%;
		opacity:0.4;
	}
	.container{
		margin-top:60px;
		
	}
		
		#r{
			display:none;
		}

#poster{
	
	margin-top:36px;
}
#poster2{
	
display:none;
}
#hide{
	width:80%;
	
}

.hori{
	
width:80%;
margin-left:20%;	
	
	
}

	
#off{
font-size:16px;	
}
#title{
	
font-size:14px;	
}
#descr{
	
font-size:14px;	
}
#price{
	font-size:14px;
}
	#main{
		width:100%;
		margin-left:0%;
	}
	#setting{
		display:none;
	}
	#menus1{
		display:none;
	}
    #open {
        display:none;
		opacity:0;
		
    }
    	#edit{
       margin-left:45%;
		
    }
	
#see{
	
	display:none;
}



#top-nav{
	height:80px;background:white;
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
	#arrow{
		margin-left:84%;opacity:0.4;
	}
			
.container{
margin-top:-30px;}
		
#poster{
margin-top:0px;	
display:none;

}
#hide{
	width:100%;
	
}

.hori{
	
width:100%;
	
	
	
}

#img{
	
	}
#main{
	width:99.5%;
   margin-right:%;   
	min-width:340px;
	
}
#profile{
	margin-top:0px;
	margin-right:36%;
}
	#menus
	{
		display:none;
	}
	  
	#posts #post{
		
margin-top:300px;		
		
	}
	
	
		#edit{
       margin-left:300px;
		
 
}

#top-nav{
	height:45px;
	background:none;
	
}
#logo{
	margin-top:-18px;	
}
#off{
font-size:16px;	
}
#title{
	
font-size:13px;	
}
#descr{
	
font-size:13px;	
}
#price{
	margin-top:10px;
	
	font-size:14px;
}
#items{
	
display:none;	
}

}

#menus1{
	position:fixed;
	top:0;
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
#over{
	
position:absolute;
width:80%;
min-width:350px;
height:500px;
display:inline-inline;
	
	
	
}

#menu1 {
	position:absolute;font-size:14px; font-weight:bold;margin-top:48px;color:rgb(10,10,10);
}
</style>

<head>
<meta name="theme-color" content="#000000" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto" rel="stylesheet">
 
<script>

</script>
</head>

<body style="background:rgb(250,250,250); min-width:350px;">


<div id="top-nav"  style="position:fixed;width:100%;z-index:2; opacity:;  ">
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

<?php




?>

<html>
<title>WELCOME</title>

<style>
.wordWrap {
    word-wrap: break-word;     
    white-space: -moz-pre-wrap; 
    white-space: pre-wrap; 
}
#menus1 a{
	margin-top:5px;
}
#menus1 div {
	width:30px;position:absolute;margin-left:29%;margin-top:5px;border:0px solid rgb(240,240,240);border-radius:50%; height:30px; overflow:hidden;
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
 #info:hover{
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
#items a:hover li span{
	background:rgb(250,250,250);
 font-size:17px;
 padding:5px;
 border-radius:10px;
 border:1px solid rgb(100,100,100);
 
	
	
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
#heading{
	background:linear-gradient(to right,rgb(250,10,100), rgb(250,10,170));box-shadow:0px 0px 0.1px 0.9px rgb(200,200,200);
	 border-radius:10px;padding:10px; color:white; opacity:;
	margin-left:5%;
	font-family: 'Roboto', sans-serif;margin-top:5px;font-size:12px;position:absolute;
	font-weight:bold;
	text-shadow:0.3px 0.2px rgb(30,30,30);
	
}
#heading2{
	color:rgb(240,240,240); font-size:15px;
		font-family: 'Roboto', sans-serif;
}
.col-sm-4{
	padding:10px;
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
#list li
{  font-family: 'Roboto', sans-serif;
	float:left;
	margin-left:10px;
	color:rgb(150,150,150);
	list-style-type:none;
	margin-top:10px;
}
#list li img{
	 height:40px;
	margin-top:10px;
	display:inline-block;
	margin-left:20px;
	
}

#text{
	color:rgb(10,10,10);
}
#slide{
	display:block; overflow:hidden; width:100%; height:50%; min-height:250px; max-height:300px;
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
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}



.r {
	
    width: 0	;
    position: fixed;
  list-style-type:none;
    top: 0;
    left: 0;
    background-color: ;
    overflow-x: hidden;
	overflow-y: auto;

height:600px;    transition: 0.5s;
   
}

#r li a{
	float:left;
	display:block;

	padding:15px;
	
	margin-top:5px;
	margin-right:40px;
	transition:0.1s ease-in;
	
	color:rgb(100,100,100);
	
	
}
#r li a i{
	transition:0.4s ease-in;		
	position:absolute;
	margin-left:120px;
	margin-top:-3px;
	
}
#r li a:hover i{
	position:absolute;	
	margin-left:-30px;
}
#r li a:hover{
	text-decoration:none;
	
}
#r li a:hover {
	color:rgb(250,250,250);
	width:100%;
	background:rgb(0,0,0);
	float:left;
	
	
}

#r li #main{
	color:rgb(0,0,0);
}
#r li a:hover #main{
	color:white;
}
</style>
<center>
<br/>
<div id="menus1"  style="float:left; z-index:3; width:100%; margin-top:<?php echo $h;?>px;background:white;height:47px; ">
  <img src="logo1.png" id="logo"style="width:35px;position:absolute; left:0; top:20px;height:35px;">
 
 <a onclick="load()" href="search.php"><div style="margin-left:46%;"><img src="search1.png" style="width:20px;margin-left:0px"></div></a>
  <a onclick="load()"href="cart.php"> <div style="margin-left:66%;"><img src="cart1.png" style="width:23px;margin-left:0px"></div><span style="color:white;background:rgb(250,20,20);	font-size:10px;padding:2px 6px 3px 6px; border-radius:50%;position:absolute; margin-left:22%;"><?php if(!empty($_SESSION['cart'])){echo count($_SESSION['cart']);} else {echo "0";}?></span></a>
 
<span style="font-size:30px;margin-top:-5px;position:fixed;left:90%; height:5px;cursor:pointer" onclick="openA()"><h4  id="open" style="font-size:25px;color:rgb(100,100,100);">&#9776;</h4></span>
 

	
      </div>
	  

<div id="r" style="z-index:2;background:white; margin-top:45px;" class="r">

 <a href="javascript:void(0)" class="closebtn" onclick="closeA()"><h1 style="position:absolute;font-size:30px; margin-top:-6px; color:rgb(200,200,200); left:90%;">&times;</h1></a>
 <div style="display:block;padding:10px;	width:100%; margin-top:0px;height:120px; background:rgb(10,10,10);">
 <a href="login.php"> <img src="user.png" style="border-radius:50%; width:50px;">
  <h5 style="color:rgb(200,200,200); font-weight:bold; ">
 Login/Signup</h5></a>
  </div>
  
  
  <li><a onclick="load()"href="main.php" style=""><span id="main"  ><i class="material-icons">&#xE88A;</i>HOME</span></a></li>
  <li>  <a onclick="load()"href="type.php?cat=Mens"><span style=""><i class="material-icons">&#xE8A6;</i>MENS</span></a></li>
  <li>    <a onclick="load()"href="type.php?cat=Women"><span style=""><i class="material-icons">&#xE87C;</i>WOMENS</span></a></li>
  <li><a onclick="load()"href="search.php"><span style=""><i class="material-icons">&#xE8B6;</i>SEARCH ITEMS</span></a></li>
  <li><a onclick="load()"href="about.php"><span style=""><i class="material-icons">&#xE88E;</i>ABOUT US</span></a></li>
 
 
</div>	



<script>
function openA() {
    document.getElementById("r").style.width = "200px";
}

function closeA() {
    document.getElementById("r").style.width = "0";
}
</script>



<script>
function load(){
   document.getElementById("loader").style="position:fixed;  left:40%; top:50%;display:block; "
}
</script>


<center>

<div class="container" style="background:white;">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <div class="carousel-inner" >
      <div class="item active">
	  
<div id="slide" style="" >
        <img src="w1.jpg" alt="Los Angeles" style="width:30%;min-width:300px;">
       
      </div>
	  </div>

      <div class="item">
       
<div id="slide" style="">
        <img src="m18.jpg" alt="Los Angeles" style="width:30%;min-width:300px;">
       
      </div>
	  </div>
    
      <div class="item">
       
<div id="slide" style="">
        <img src="w3.jpg" alt="Los Angeles" style="width:30%;min-width:300px;">
       
      </div>
	  </div>
  
    </div>

   
    <a class="left carousel-control" href="#myCarousel" style="background:white;width:0px;" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" style="margin-left:5px; color:red;"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel"  style="background:white;width:0px;"data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"  style="margin-right:5px; color:red;"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


		
<div style="" id="loader" class="loader"></div>


<div id="main" class="hori" style="display:block; background:white;margin-top:40px; margin-bottom:40px; ">
<h1 id="heading" style="">Trending Shoes</h1>
<img id="arrow" src="arrow.png" style="position:absolute; z-index:2; width:30px; margin-top:160px;height:30px;">
<?php

	$result = mysqli_query($con,"SELECT * FROM products WHERE (type='shoes') ORDER BY  id  DESC limit 10 ") or die(mysqli_error());
	while($row = mysqli_fetch_array($result)){
		
	
	?>
<a onclick="load()" style="text-decoration:none;" href="products.php?id=<?php echo $row['id'];?>">	
<div id="info" style="width:100%;display:inline-block; padding:14px; margin-left:1%;background:white;	min-width:0px;margin-top:6px;	  ">	

<div id="products" style="width:100%;  margin-top:20px; height:200px;min-width:180px; overflow:hidden">
<img id="img"  src="<?php echo $row['file'];?>" style="">
</div>

<?php
$p = $row['price'];
$o = $row['off'];
$f = ($p/100)*$o;
$final = $p-$f;

?>
<div style="display:block; width:100%; min-height:140px;">
<span id="descr" style=" ">
<?php echo $row['descr'];?></span><br/>
<span id="title" style=";">
<?php echo $row['title'];?></span><br/>	
<br/>
<span style=" margin-left:0%; color:rgb(250,10,100); margin-top:40px;margin-right:10px;font-weight:bold; font-size:10px; ">
<span style="color:rgb(250,10,100);font-size:13px;">₹<?php echo $final;?></span> <span style="font-size:13px; color:rgb(100,100,100);"><strike> ₹ <?php echo $p;?></strike> ( <?php echo $row['off'];?>%off ) </span>
</span>
</div>
	</div>
	</a>
	<?php
	}	
	
	?>
	
	</div>
		
<div class="h" style="background:white; height:20px;position:absolute; margin-top:-60px;width:100%; " ></div>



<div id="main" class="hori" style="display:block; background:white;margin-top:40px; margin-bottom:40px; ">
<h1 id="heading" style="">Trending Watches</h1>
<img id="arrow" src="arrow.png" style="position:absolute; z-index:2; width:30px; margin-top:160px;height:30px;">
<?php

	$result = mysqli_query($con,"SELECT * FROM products WHERE (type='watch') ORDER BY  id  DESC limit 10 ") or die(mysqli_error());
	while($row = mysqli_fetch_array($result)){
		
	
	?>
<a onclick="load()" style="text-decoration:none;" href="products.php?id=<?php echo $row['id'];?>">	
<div id="info" style="width:100%;display:inline-block; padding:14px; margin-left:1%;background:white;	min-width:180px;margin-top:6px;	  ">	

<div id="products" style="width:100%;  margin-top:20px;height:150px;min-width:180px; overflow:hidden">
<img id="img"  src="<?php echo $row['file'];?>" style="">
</div>

<?php
$p = $row['price'];
$o = $row['off'];
$f = ($p/100)*$o;
$final = $p-$f;

?>
<div style="display:block; width:100%; min-height:140px;">
<span id="descr" style=" ">
<?php echo $row['descr'];?></span><br/>
<span id="title" style=";">
<?php echo $row['title'];?></span><br/>	
<br/>
<span style=" margin-left:0%; color:rgb(250,10,100); margin-top:40px;margin-right:10px;font-weight:bold; font-size:10px; ">
<span style="color:rgb(250,10,100);font-size:13px;">₹<?php echo $final;?></span> <span style="font-size:13px; color:rgb(100,100,100);"><strike> ₹ <?php echo $p;?></strike> ( <?php echo $row['off'];?>%off ) </span>
</span>
</div>
	</div>
	</a>
	<?php
	}	
	
	?>
	
	</div>
			
<div class="h" style="background:white; height:20px;position:absolute; margin-top:-60px;width:100%; " ></div>

	
	
<div id="main" class="hori" style="display:block; background:white;margin-top:40px; margin-bottom:40px; ">
<h1 id="heading" style="">Sun Glasses</h1>
<img id="arrow" src="arrow.png" style="position:absolute; z-index:2; width:30px; margin-top:160px;height:30px;">
<?php

	$result = mysqli_query($con,"SELECT * FROM products WHERE (type='sun Glasses') ORDER BY  id  DESC limit 10 ") or die(mysqli_error());
	while($row = mysqli_fetch_array($result)){
		
	
	?>
<a onclick="load()" style="text-decoration:none;" href="products.php?id=<?php echo $row['id'];?>">	
<div id="info" style="width:100%;display:inline-block; padding:14px; margin-left:1%;background:white;	min-width:180px;margin-top:6px;	  ">	

<div id="products" style="width:100%;  margin-top:20px;height:150px;min-width:180px; overflow:hidden">
<img id="img"  src="<?php echo $row['file'];?>" style="">
</div>

<?php
$p = $row['price'];
$o = $row['off'];
$f = ($p/100)*$o;
$final = $p-$f;

?>
<div style="display:block; width:100%; min-height:140px;">
<span id="descr" style=" ">
<?php echo $row['descr'];?></span><br/>
<span id="title" style=";">
<?php echo $row['title'];?></span><br/>	
<br/>
<span style=" margin-left:0%; color:rgb(250,10,100); margin-top:40px;margin-right:10px;font-weight:bold; font-size:10px; ">
<span style="color:rgb(250,10,100);font-size:13px;">₹<?php echo $final;?></span> <span style="font-size:13px; color:rgb(100,100,100);"><strike> ₹ <?php echo $p;?></strike> ( <?php echo $row['off'];?>%off ) </span>
</span>
</div>
	</div>
	</a>
	<?php
	}	
	
	?>
	
	</div>
			
<div class="h" style="background:white; height:20px;position:absolute; margin-top:-60px;width:100%; " ></div>

	

		
	<div id="main" class="hori" style="display:block; background:white;margin-top:40px; margin-bottom:40px; ">
	<h1 id="heading" style="">Branded Clothings</h1>
	<img id="arrow" src="arrow.png" style="position:absolute; z-index:2; width:30px; margin-top:160px;height:30px;">
	<?php

		$result = mysqli_query($con,"SELECT * FROM products WHERE (type='wear') ORDER BY  id  DESC limit 10 ") or die(mysqli_error());
		while($row = mysqli_fetch_array($result)){
			
		
		?>
	<a onclick="load()" style="text-decoration:none;" href="products.php?id=<?php echo $row['id'];?>">	
	<div id="info" style="width:100%;display:inline-block; padding:14px; margin-left:1%;background:white;	min-width:180px;margin-top:6px;	  ">	

	<div id="products" style="width:100%;  margin-top:20px;height:150px;min-width:180px; overflow:hidden">
	<img id="img"  src="<?php echo $row['file'];?>" style="">
	</div>

	
<?php
$p = $row['price'];
$o = $row['off'];
$f = ($p/100)*$o;
$final = $p-$f;

?>
<div style="display:block; width:100%; min-height:140px;">
<span id="descr" style=" ">
<?php echo $row['descr'];?></span><br/>
<span id="title" style=";">
<?php echo $row['title'];?></span><br/>	
<br/>
<span style=" margin-left:0%; color:rgb(250,10,100); margin-top:40px;margin-right:10px;font-weight:bold; font-size:10px; ">
<span style="color:rgb(250,10,100);font-size:13px;">₹<?php echo $final;?></span> <span style="font-size:13px; color:rgb(100,100,100);"><strike> ₹ <?php echo $p;?></strike> ( <?php echo $row['off'];?>%off ) </span>
</span>
</div>
		</div>
		</a>
		<?php
		}	
		
		?>
		
		</div>
				
	<div class="h" style="background:white; height:20px;position:absolute; margin-top:-60px;width:100%; " ></div>
		
		
		
		
</center>

<div id="foot" style="display:block; width:100%; min-height:300px; background:rgb(10,10,10);">
<div class="col-sm-4" style=" height:240px;">
<h3 id="heading2" >Shop</h3><br/>
<h3 style="color:white;font-size:14px;position:absolute;margin-top:-10px;margin-left:10px;">Top Items</h3>

<div id="list" style="width:120px;float:left;padding:8px;">
<a href="type.php?type=Watches&cat="><li>Watches</li></a>
<a href="type.php?type=Shoes&cat="><li>Shoes</li></a>
<a href="type.php?type=Sun Glasses&cat="><li>Sun Glasses</li></a>
<a href="type.php?type=Wear&cat="><li>Clothings</li></a>
<a href="type.php?type=Wallet&cat="><li>Wallet</li></a>
</div>
<h3 style="color:white;font-size:14px;position:absolute;margin-top:-10px;margin-left:72%;">For everyone</h3>

<div id="list" style="width:90px;float:right;margin-right:10px;padding:8px;">
<a href="type.php?cat=Mens"><li>Mens</li></a>
<a href="type.php?cat=Women"><li>Womens</li></a>
<a href="type.php?cat=Mens"><li>Kids</li></a>
<a href="type.php?cat=Mens"><li>Professional</li></a>
<a href="type.php?cat=Mens"><li>Sports</li></a>
</div>
</div>
<div class="col-sm-4" style="border-top:1px solid rgb(10,10,10); padding:10px;height:320px;">

<h3 id="heading2" >Top Brands</h3>
<h3 style="color:white;font-size:14px;position:absolute;margin-top:-10px;margin-left:3%;"></h3>


<div id="list" style="width:100%;display:inline-block;padding:8px;">
<a href="type.php?brand=adidas"><li><img src="b9.png"></li></a>
<a href="type.php?brand=reebok"><li><img src="b2.png"></li></a>
<a href="type.php?brand=puma"><li><img src="b11.png"></li></a>
<a href="type.php?brand=nike"><li><img src="b4.png"></li></a>
<a href="type.php?brand=lotto"><li><img src="b6.png"></li></a>
<a href="type.php?brand=Raymond"><li><img src="b7.png"></li></a>
<a href="type.php?brand=calvin klein"><li><img src="b8.png"></li></a>

</div>
</div>
<div class="col-sm-4" style="margin-bottom:40px;border-top:1px solid rgb(10,10,10); background:; height:240px;">
<h3 id="heading2"> </h3><br/><br/>
<h3 style="color:white;font-size:14px;position:absolute;margin-top:-10px;margin-left:10px;">Contacts us </h3>

<div id="list" style="width:150px;float:left;padding:8px;">
<li>mail: <span style="color:rgb(200,200,200); font-size:12px;">rm@gmail.com</span></li>
<li>Office : <span style="color:rgb(200,200,200); font-size:12px;">Bhopal</span></li>
<li>Phone: <span style="color:rgb(200,200,200); font-size:12px;">9039143865</span></li>
</div>
<h3 style="color:white;font-size:14px;position:absolute;margin-top:-10px;margin-left:73%;">Links</h3>

<div id="list" style="width:90px;float:right;padding:8px;">
<a href="about.php"><li>About us</li></a>
<a href="sell.php"><li>Sell Here</li></a>
<a href="career.php"><li>Career</li></a>
<a href="terms.php"><li>Terms</li></a>
<a href="faq.php"><li>FAQ's</li></a>
</div>
</div>
</div>
