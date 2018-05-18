<?php
session_start();
if(!empty($_SESSION['b3'])){
	
   ?>
   <script>
      
   </script>
   
   <?php
    

}
?>
<html>
<title>
login page</title>
<head>


<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<html>
<title>WELCOME</title>

<style> 


.wordWrap {
    word-wrap: break-word;     
    white-space: -moz-pre-wrap; 
    white-space: pre-wrap; 
}
#menus1 div {
	width:40px;position:absolute;margin-left:29%;margin-top:-3px;border:0px solid rgb(240,240,240);border-radius:50%; height:40px; overflow:hidden;
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
.navbar-nav li a:hover {
      color: #fff !important;
  }
  input[type=text]{
	 
	 border:none;
	 border-bottom:2px solid rgb(100,100,100); 
    height:60px; 
	width:340px;
margin-top:0px;	
	 border-radius:0px;
	 outline:none;
	  background:white;
	  
  } input[type=password]{
	 border:1px solid white;
border-bottom:2px solid rgb(100,100,100); 
    height:60px; 
	width:340px;
	
margin-top:0px;
	 border-radius:0px;
	 outline:none;
	  
	  
	  
  }
  
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
	height:75px;
	background:linear-gradient(to right,rgb(50,50,50),rgb(10,10,10),rgb(40,40,40), rgb(0,0,0)); 
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
<body style="background:white; background-size:230%;">

<div id="top-nav"  style="position:fixed;width:100%;z-index:2;opacity:;background:white;  ">
<div style=" margin-left:2%;width:100px;  height:40px; float:left;">
   
   <br/><img src="logo1.png" id="logo"style="width:40px;height:40px;">
   </div>
  
  <div id="menus"  style="float:left; width:80%;  margin-top:25px;height:35px; ">
   
<div style="margin-left:4%;"><a href="main.php"><img src="home1.png" style="width:30px;margin-left:4px;"></div></a>
  <a href="type.php?cat=Mens"><div style="margin-left:18%;"><img src="m31.jpg" style="width:70px;margin-left:-15px"></div><span style="color:white;background:rgb(250,20,20);	font-size:10;padding:2px 4px 3px 4px; border-radius:40%;position:absolute; margin-left:22%;">new</span></a>
 <a href="type.php?cat=Womens"><div style=";margin-left:33%;"><img src="w8.jpg" style="width:60px;margin-left:-10px"></div><span style="color:white;background:rgb(250,20,20);	font-size:10px;padding:2px 4px 3px 4px; border-radius:40%;position:absolute; margin-left:37%;">new</span></a>
  <a href="search.php"><div style="margin-left:48%;"><img src="search1.png" style="width:25px;margin-left:4px; margin-top:5px;"></div></a>
  <a href="cart.php"><div style="margin-left:61%;"><img src="cart1.png" style="width:28px;margin-left:4px;margin-top:4px;"></div><span style="color:white;background:rgb(250,20,20);	font-size:10px;padding:2px 6px 3px 6px; border-radius:50%;position:absolute; margin-left:64%;"><?php if(!empty($_SESSION['cart'])){echo count($_SESSION['cart']);}else {echo"0";}?></span></a></a>
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
	width:40px;position:absolute;margin-left:29%;margin-top:px;border:0px solid rgb(240,240,240);border-radius:50%; height:40px; overflow:hidden;
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
</style>
<center>
<br/>
<div id="menus1"  style="float:left; z-index:3; width:100%; margin-top:<?php echo $h;?>px;background:white;height:47px; ">

<a href="main.php"><div style="margin-left:6%;"><a href="main.php"><img src="home1.png" style="width:30px;margin-left:0px;"></div></a>
	<a href="type.php?cat=Mens"><div style="margin-left:26%;"><img src="m31.jpg" style="width:70px;margin-left:-15px"></div><span style="color:white;background:rgb(250,20,20);	font-size:10;padding:2px 4px 3px 4px; border-radius:40%;position:absolute; margin-left:-16%;">new</span></a>
  <a href="type.php?cat=Womens"><div style=";margin-left:46%;"><img src="w8.jpg" style="width:60px;margin-left:-10px"></div><span style="color:white;background:rgb(250,20,20);	font-size:10px;padding:2px 4px 3px 4px; border-radius:40%;position:absolute; margin-left:6%;">new</span></a>
  <a href="search.php"><div style="margin-left:66%;"><img src="search1.png" style="width:28px;margin-left:0px"></div></a>
  <a href="cart.php"> <div style="margin-left:86%;"><img src="cart1.png" style="width:30px;margin-left:0px"></div><span style="color:white;background:rgb(250,20,20);	font-size:10px;padding:2px 6px 3px 6px; border-radius:50%;position:absolute; margin-left:43%;"><?php if(!empty($_SESSION['cart'])){echo count($_SESSION['cart']);} else {echo "0";}?></span></a>
  

	
      </div>


</div>
<center>
<br/>
<div id="box" style="display:block;margin-top:100px;">

<form action="main2.php" method="post" class="form"  />
<div style="background:rgb);border-radius:px;width:300px; height:40px;color:white;margin-bottom:30px;" >
<br/>
<p style="font-size:28px;color:black;letter-spacing:2px;font-weight:bold; text-shadow:1p 1px rgb(100,100,100);  width:340px;margin-top:-15px;font-family: 'Roboto';"> <img src="logo2.png" style="width:40px; "> FashionAddict</p>
</div>

<input style="margin-left:%; max-width:340px;"id="phone" type="text" name="phone" placeholder="phone number">
<input  style="margin-left:;max-width:340px;"  type="password" id="pass" name="pass" placeholder="Password"><br/>
<input class="btn btn-default" style="margin-top:20px; width:340px;background:rgb(0,140,140); border:none; color:white; font-weight:bold; font-size:17px;height:50px;" type="submit" value="Login" name="login">
<p style="color:blue;font-spacing:1px; padding-top:10px; "><a style="color:rgb(150,150,150);" href="#">Forgotten Password?</a>  
<h4 style="margin-top:0px;" ><a style="color:rgb(20,13,10);font-size:14px;
	font-family: 'Roboto', sans-serif;"href="users.php">Create a new account now</a></h4>

</form>
</div>

<br />


</div>
</div>
</div>
</center>
</form>
</body>
</html>	