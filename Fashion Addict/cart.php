<?php
session_start();
$con = mysqli_connect("localhost", "root", "");
          
mysqli_select_db($con,"shop");

$b4 = "";
if(!empty($_SESSION['b4'])){
	$b4 = $_SESSION['b4'];
	}
$b4 = $_SESSION['b4'];
if(!empty($_SESSION['cart'])){
?>

<?php
if(!empty($_GET['delete'])){
foreach($_SESSION['cart'] as $k=>$v){

if($_GET['delete'] == $v['id']){
	
$del = mysqli_query($con,"DELETE FROM cart WHERE (i_id = '$v[id]') AND (phone = '$b4')") or die(mysqli_error());
	
unset($_SESSION['cart'][$k]);
$_SESSION['cart'] = array_values($_SESSION['cart']);
}
}
}
?>

<?php
if(isset($_GET['update'])){
	if(!empty($_GET['id'])){
		if(!empty($_GET['qty'])){
		
foreach($_SESSION['cart'] as $k=>$v){

if($_GET['id'] == $v['id']){
	 $_SESSION['cart'][$k]['qty'] = $_GET['qty'];
}
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

  <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto" rel="stylesheet">
  
</head>
<html>
<title>Cart</title>
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


<div id="loader" class="loader"></div>
<script>
function load(){
   document.getElementById("loader").style="position:fixed;  z-index:2;left:40%; top:60%; display:block; ";
}
</script>
	  
<div class="col-sm-8" style="margin-left:-10px;background:none;">	 

<h1 style="background:rgb(250,250,250);width:40%; min-width:300px;letter-spacing:1px;border-radius:5px;padding:15px;margin-top:30px;margin-bottom:10px; font-size:20px;color:rgb(10,10,10); font-family: 'Roboto', sans-serif;">Cart Items</h1>	
 
<div style="width:100%;margin-left:5px;border:1px dashed rgb(250,250,250);background:white;min-width:340px; padding:10px;">
<?php
foreach($_SESSION['cart'] as $k=>$v){
	$id = $v['id'];

	$result1 = mysqli_query($con,"SELECT * FROM products WHERE (id =  '$id')") or die(mysqli_error());
	while($row1 = mysqli_fetch_array($result1)){
		
	
	
?>

	
<div id="info" style="width:80%;margin-left:-3%;background:none;min-height:150px;border-top:px solid rgb(230,230,230);	min-width:340px; margin-top:16px;	  ">	
<center>
<div id="products" style="width:20%; padding:10px; margin-left:-15px;height:150px;min-width:170px;float:left; overflow:hidden">
<img id="img"  src="<?php echo $row1['file'];?>" style="">

</div>

<?php
$p = $row1['price'];
$o = $row1['off'];
$f = ($p/100)*$o;
$final = $p-$f;

?>

<div style="display:block; width:100%; min-height:140px;">

<span id="title" style="opacity:1;float:left;margin-left:-24%;margin-top:5px;position:absolute;font-weight:bold; color:rgb(70,70,70); opacity:;text-shadow:0px 0px rgb(20,20,200);	font-family: 'Roboto', sans-serif;">
<?php echo $row1['title'];?></span><br/>

<span style="position:absolute; margin-left:-25%; color:rgb(250,10,100); margin-top:20px;margin-right:10px;font-weight:bold; font-size:10px; ">
<span style="color:rgb(250,10,100);font-size:13px;">₹<?php echo $final;?></span> <span style="font-size:13px; color:rgb(100,100,100);"><strike> ₹ <?php echo $p;?></strike> ( <?php echo $row1['off'];?>%off ) </span>
</span>

<br/>
<div style="position:absolute;margin-left:36%; margin-top:70px; ">
<form action="cart.php" method="get">
<input type="hidden" name="id" value="<?php echo $row1['id'];?>">
<input type="text" name="qty" style="width:35px; height:35px;background:white; border:2px solid rgb(250,10,100); border-radius:3px;" value="<?php echo $v['qty'];?>">
<button name="update"  class="btn btn-default"  style="height:35px;border:none;background:rgb(100,100,100);color:white; margin-top:-2px;" >qty.</button>
</form>
<a href="cart.php?delete=<?php echo $row1['id'];?>"><button class="btn btn-default"  style="background:rgb(250,250,250);height:35px;position:absolute;border:none;margin-left:50px; margin-top:-50px;" ><img src="remove.png" style="width:25px;"><span style="font-weight:bold;color:rgb(100,100,100);">remove</span></button>
 </a>
</div>
</div>
	</div>
	
	<?php
	}
}
 
?>	
</div>
</div>

	  
<div class="col-sm-4" style="margin-top:50px;margin-bottom:100px;">

<div style="display:block; width:90%;min-width:340px;padding:15px;  ">
<img src="sale2.png" style="width:100%;">
</div>

<div style="display:block; width:80%;margin-left:-5px; border-radius:10px;background:white; min-width:340px;border:1.4px dotted rgb(250,250,250);">
<h1 style=" padding:15px;margin-top:0px; font-size:20px;color:rgb(100,100,100); font-family: 'Roboto', sans-serif;">Order Details</h1>	


<span style="color:rgb(100,100,100);font-family: 'Roboto', sans-serif; padding:5px;float:left;font-size:16px; ">Total Products</span><span style="float:right;margin-right:10px;"><?php echo count($_SESSION['cart']);?></span>
<br/><br/>

<span style="color:rgb(100,100,100);font-family: 'Roboto', sans-serif; padding:5px;float:left;font-size:16px; ">Quantity</span><span style="float:right;margin-right:10px;">
<?php
$qty = 0;
foreach($_SESSION['cart'] as $k=>$v){
	$qty = $qty + $v['qty'];
	}
	echo $qty;
	
	
?>
</span>
<br/><br/>

<span style="color:rgb(100,100,100);font-family: 'Roboto', sans-serif; padding:5px; float:left;font-size:16px; ">Total Price</span><span style="float:right;color:rgb(10,10,10);margin-right:10px;">
<?php
$sum  = 0;
foreach($_SESSION['cart'] as $k=>$v){
	$id = $v['id'];
	
	$result1 = mysqli_query($con,"SELECT * FROM products WHERE (id = '$id')") or die(mysqli_error());
	while($row1 = mysqli_fetch_array($result1)){
    $sum = $sum + $v['qty']*$row1['price'];

	}
	
}	
echo "₹".$sum;
	

?>

</span>
<br/><br/>

<span style="color:rgb(100,100,100); font-family: 'Roboto', sans-serif; padding:5px;float:left;font-size:16px; ">Total Discount</span><span style="float:right;color:rgb(70,200,10);margin-right:10px;">
<?php
$dis  = 0;
foreach($_SESSION['cart'] as $k=>$v){
	$id = $v['id'];
	
	$result1 = mysqli_query($con,"SELECT * FROM products WHERE (id = '$id')") or die(mysqli_error());
	while($row1 = mysqli_fetch_array($result1)){
	
$p = $row1['price'];
$o = $row1['off'];
$f = ($p/100)*$o;
$final = $p-$f;


    $dis = $dis + $v['qty']*$f;

	}
	
}	
echo "-₹".$dis;
	

?>

</span>
<br/><br/>

<span style="color:rgb(100,100,100); font-family: 'Roboto', sans-serif;padding:5px; float:left;font-size:16px; ">Tax</span><span style="float:right;color:rgb(200,10,10);;margin-right:10px;">
<?php
$p = $sum - $dis;
$tax = ($p/100)*6;	
echo "+₹".$tax." (6%)";
	

?>

</span>

<br/><br/>
<hr/>
<span style="color:rgb(40,40,40);font-family: 'Roboto', sans-serif; padding:5px;font-weight:bold; float:left;font-size:16px; ">Total Payable Amount</span><span style="float:right;font-weight:bold;margin-right:10px;">
<?php
$amt = $sum-$dis+$tax;
echo "₹".$amt;
?>

</span>
<br/><br/>
<a href="checkout.php"><h1 style="background:rgb(250,10,100);width:96%; letter-spacing:1px;border-radius:5px;padding:15px;margin-top:20px;margin-bottom:10px; font-size:20px;color:#fafafa; font-family: 'Roboto', sans-serif;">Checkout</h1>	<a/>

</div>
<br/>
<br/>
	<a href="main.php"> <span style="color:rgb(10,10,10);font-size:17px; margin-left:1%;padding:15px;border-radius:4px; border:1px solid rgb(10,10,10);width:80%;">Continue Shopping</span>
	</a>
</div>


<?php 
}
else{
	
?>	<center>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<h1 style="color:rgb(100,100,100);margin-top:200px;">Your Cart is empty</h1>
<a href="main.php" ><button style="width:200px; background:white; border:1px solid rgb(20,20,20); height:40px; border-radius:4px;"class="btn btn-default" >Continue Shopping</button></a>
<?php
}
?>