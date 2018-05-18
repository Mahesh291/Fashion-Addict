<?php
session_start();
$con = mysqli_connect("localhost", "root", "");
          
mysqli_select_db($con,"shop");

$_SESSION['q'] = '';
?>
<html>
<head>

<meta name="theme-color" content="#000000" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto" rel="stylesheet">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  
<script>
function show(str) {
	
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txt").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txt").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "get.php?q="+str, true);
  xhttp.send();   
  
   
}

</script>
</head>

 <div id="txt"></div>

<html>
<title>WELCOME</title>

<style> 

@media screen and (min-width: 800px) {
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

#search{
width:25%; 
margin-top:6px;
	
}
#name{
	margin-top:30px;
	border:1px solid rgb(200,200,200);
	height:45px;
}

#button{
	height:45px;
	margin-top:-45px;
}	



	
#off{
font-size:17px;	
}
#title{
	
font-size:13px;	
}
#descr{
	
font-size:13px;	
}
#price{
	font-size:14px;
}
	#main{
		width:80%;
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
	height:75px;
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

#search{
width:50%; 
margin-top:-30px;	
margin-left:40%;
border:none;

}
#name{
	height:45px;
	
	border-left:none;
	margin-top:52px;
	border-right:none;
}
#button{
	height:45px;
	margin-top:-45px;
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
	
font-size:12px;	
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

#menu{
	position:absolute;font-size:10px; font-weight:bold;margin-top:28px;color:rgb(10,10,10);
}

#menu1 {
	position:absolute;font-size:14px; font-weight:bold;margin-top:49px;color:rgb(10,10,10);
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
#menus1 div {
	width:40px;position:absolute;margin-left:29%;margin-top:5px;border:0px solid rgb(240,240,240);border-radius:50%; height:34px; overflow:hidden;
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
	
#descr{color:rgb(60,60,60); opacity:0.7;text-shadow:0.4px 0.4px rgb(10,10,10);	font-family: 'Roboto', sans-serif;
}
#off{
	opacity:0.9;float:right;font-weight:bold; margin-right:10px;color:rgb(250,10,20); opacity:; text-shadow:0.4px 0.4px rgb(120,20,200);	font-family: 'Roboto', sans-serif;
}
#title{
	opacity:1;float:left;margin-left:%;max-width:120px;color:rgb(20,70,70); opacity:;text-shadow:0px 0px rgb(20,20,200);	font-family: 'Roboto', sans-serif;
}
#price{
	opacity:;float:right;margin-top:-10px;margin-right:4%;font-weight:bold; color:rgb(40,40,40); opacity:;text-shadow:1px 1px rgb(20,20,20);	font-family: 'Roboto', sans-serif;
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

#r li #main1{
	color:rgb(0,0,0);
}
#r li a:hover #main1{
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
  <li>  <a onclick="load()"href="type.php?cat=Mens"><span style=""><i class="material-icons">&#xE8A6;</i>MENS</span></a></li>
  <li>    <a onclick="load()"href="type.php?cat=Women"><span style=""><i class="material-icons">&#xE87C;</i>WOMENS</span></a></li>
  <li><a onclick="load()"href="search.php"><span id="main1" style=""><i class="material-icons">&#xE8B6;</i>SEARCH ITEMS</span></a></li>
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



<div id="loader" class="loader"></div>
<script>
function load(){
   document.getElementById("loader").style="position:fixed;  z-index:2;left:40%; top:60%; display:block; ";
}
</script>

</div>
 
 <div  id="search" style="position:fixed; display:block;z-index:;height:40px; ">
 <span>
 <form action="search.php" method="get"> 
 <input id="name" name="query" type="text"  onclick="show1()"  onkeyup="show(this.value)"class="form-control" style="padding-left:40px;;color:rgb(10,10,10);border-radius:2px;font-weight:bold;width:100%;border-to:none;

font-family: 'Roboto', sans-serif;" placeholder="Search"></span><button style="position:absolute; background:white;margin-left:35.4%;" id="button" type="submit" class="btn btn-default" ><i class="material-icons">&#xE8B6;</i></span></button>
 
<button href="javascript:void(0);" id="back" onclick="show2()" style="background:white; width:30px;border:none;margin-left:35%;position:absolute;margin-top:-38px;height:20px; "><i class="material-icons">&#xE14A;</i></button>
 
 </form>
 </div>
 <div id="main" style="margin-bottom:70px;">



<center>



<div id="poster2" style="width:100%;margin-top:-40px;">
<img src="q3.jpg"style="width:100%;;min-height:150px; bor 	">

</div>


<div id="main" style="display:block; margin-top:20px; 	float:right;">

<?php
if(empty($_GET['query'])){
?>
<h1 style="margin-top:120px; color:rgb(100,100,100);">Search Products Which Suits You...!</h1>

<?php
	
}	
	
	?>	
<?php
if(!empty($_GET['query'])){
	if(!empty($_GET['id'])){

	$result = mysqli_query($con,"SELECT * FROM products WHERE (id = '$_GET[id]') ORDER BY  id  ASC  limit 20") or die(mysqli_error());
	while($row = mysqli_fetch_array($result)){
		
	
	?>
<a style="text-decoration:none;" href="products.php?id=<?php echo $row['id'];?>">	
<div id="info" style="width:30%;;float:left;margin-left:1%;background:white;	min-width:170px;border:0px solid rgb(242,242,242); margin-top:6px;	  ">	
<center>
<div id="products" style="width:100%;  margin-top:20px;height:150px;min-width:170px; overflow:hidden">
<img id="img"  src="<?php echo $row['file'];?>" style="">
</div>
<div style="display:block; width:100%; min-height:140px;">
	<span id="descr" style=" color:rgb(60,60,60); opacity:0.7;text-shadow:0.4px 0.4px rgb(10,10,10);	font-family: 'Roboto', sans-serif;">
	<?php echo $row['descr'];?></span><br/>
	<span id="off" style="">
	<?php echo $row['off'];?>%off</span><br/>
	<span id="title" class="wordWrap" style="">
	<?php echo $row['title'];?></span><br/>	
	<span id="price" style="">
	 <?php echo $row['price'];?>₹</span>

	</div>
	</div>
	</a>
	<?php
	}
	}
}	
	
	?>
	<?php
if(!empty($_GET['query'])){
	if(!empty($_GET['id'])){

	$result = mysqli_query($con,"SELECT * FROM products WHERE (type = '$_GET[query]') AND (id != '$_GET[id]') ORDER BY  id  ASC  limit 20") or die(mysqli_error());
	while($row = mysqli_fetch_array($result)){
		
	
	?>
<a style="text-decoration:none;" href="products.php?id=<?php echo $row['id'];?>">	
<div id="info" style="width:30%;;float:left;margin-left:1%;background:white;	min-width:170px;border:0px solid rgb(242,242,242); margin-top:6px;	  ">	
<center>
<div id="products" style="width:100%;  margin-top:20px;height:150px;min-width:170px; overflow:hidden">
<img id="img"  src="<?php echo $row['file'];?>" style="">
</div>
<div style="display:block; width:100%; min-height:140px;">
	<span id="descr" style=" color:rgb(60,60,60); opacity:0.7;text-shadow:0.4px 0.4px rgb(10,10,10);	font-family: 'Roboto', sans-serif;">
	<?php echo $row['descr'];?></span><br/>
	<span id="off" style="">
	<?php echo $row['off'];?>%off</span><br/>
	<span id="title" class="wordWrap" style="">
	<?php echo $row['title'];?></span><br/>	
	<span id="price" style="">
	 <?php echo $row['price'];?>₹</span>

	</div>
	</div>
	</a>
	<?php
	}
	}
}	
	
	?>	
	
	</div>

</div>

</center>


<script>
window.onload=document.getElementById("back").style="display:none; ";

	
function show1(){
		
   document.getElementById("main").style="display:none;"
   document.getElementById("txt").style="display:block; "

		
	}
 function show2(){
		
   document.getElementById("main").style="display:block;width:100%;min-width:350px;overflow:auto;margin-top:100px; border:0px solid red; "
document.getElementById("back").style="display:none; "
document.getElementById("txt").style="display:none; "
		
		
	}
	</script>

