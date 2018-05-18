<?php
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
<title>WELCOME</title>

<style> 

@media screen and (min-width: 800px) {
#poster2{
	display:none;
}
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
	  
		
#poster{
margin-top:0px;	
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
#menu{
	position:absolute;font-size:10px; font-weight:bold;margin-top:28px;color:rgb(10,10,10);
}

#menu1 {
	position:absolute;font-size:14px; font-weight:bold;margin-top:49px;color:rgb(10,10,10);
}	

</style>

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

<body style="background:rgb(250,250,250); min-width:350px;">

<html>
<title>WELCOME</title>

<style>
.wordWrap {
    word-wrap: break-word;     
    white-space: -moz-pre-wrap; 
    white-space: pre-wrap; 
}
#menus1 div {
	width:40px;position:absolute;margin-left:29%;margin-top:5px;border:0px solid rgb(240,240,240);border-radius:50%; height:40px; overflow:hidden;
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
    
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.1);
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
  
  
  <li><a onclick="load()"href="main.php" style=""><span  ><i class="material-icons">&#xE88A;</i>HOME</span></a></li>
  <li>  <a onclick="load()"href="type.php?cat=Mens"><span <?php if($_GET['cat'] == 'Mens'){?>id="main" <?php }?>style=""><i class="material-icons">&#xE8A6;</i>MENS</span></a></li>
  <li>    <a onclick="load()"href="type.php?cat=Women"><span <?php if($_GET['cat'] == 'Women'){?>id="main" <?php }?>style=""><i class="material-icons">&#xE87C;</i>WOMENS</span></a></li>
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

<div id="poster" style="width:100%;margin-top:30px;">
<img src="q1.png"style="width:100%;;min-height:150px; bor 	">

</div>
<div id="poster2" style="width:100%;margin-top:-40px;">
<img src="q3.jpg"style="width:100%;;min-height:150px; bor 	">

</div>

<div id="main" style="display:block; margin-top:20px; ">

<?php

	$brand = "";
	$type = "";
	$category = "";
	if(!empty($_GET['brand'])){
		$brand = $_GET['brand'];
		}
	if(!empty($_GET['type'])){
		$type = $_GET['type'];
		}
	if(!empty($_GET['cat'])){
		$category = $_GET['cat'];
		}
		
	
	$result = mysqli_query($con,"SELECT * FROM products WHERE ((category = '$category') AND (type = '$type')) OR  (category = '$category') AND (category != '') OR (type = '$type') AND (type != '')
    OR (name = '$brand') AND (name != '') 	ORDER BY  id  ASC ") or die(mysqli_error());
	
while($row = mysqli_fetch_array($result)){
		
	
	?>
		<a href="products.php?id=<?php echo $row['id'];?>">
	
<div id="info" style="width:30%;;float:left;margin-left:1%;background:white;	min-width:170px;border:0px solid rgb(242,242,242); margin-top:6px;	  ">	
<center>
<div id="products" style="width:100%;margin-top:20px;height:150px;min-width:170px; overflow:hidden">
<img id="img" src="<?php echo $row['file'];?>" style="">
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

</center>
