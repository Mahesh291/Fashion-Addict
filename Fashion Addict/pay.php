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

  
</head>
<style>
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
a:hover{
	
	text-decoration:none;
}
</style>

<body style="background:rgb(245,245,245);">
<br/>
<center>
<div style="display:block; width:98%; height:90px; padding:10px; background:white; border:2px solid rgb(240,240,240);">
<div id="top" style="">
<h4 id="top1" style="">	<span style="background:rgb(245,245,245); padding:10px; border-radius:50%;font-weight:bold;color:rgb(250,10,100);">1.</span>Enter Details</h4>
</div>
<div id="top" style="">
<h1 id="top1" style="color:rgb(250,10,100);"><span style="background:rgb(245,245,245); padding:10px; border-radius:50%;font-weight:bold;">2.</span>Payment</h1>
</div>
<div id="top" style="">
<h1 id="top1" style=";"><span style="background:rgb(245,245,245); padding:10px; border-radius:50%;font-weight:bold;color:rgb(250,10,100);">3.</span>Details</h1>
</div>
</div>
<br/>

<a href="cart.php"><div style="padding:10px;min-width:180px; border-radius:5px;width:20%;float:left;margin-left:1%; height:50px; background:white;"><h4 style="color:rgb(100,100,100);margin-top:4px;">Go to cart</h4></div></a>
<br/>
<br/>
<br/>
<?php
if(empty($_GET['method'])){
	?>
<div style="display:block;text-align:left;min-width:340px; width:70%; height:300px; padding:10px; background:rgb(250,250,250); border:2px solid rgb(240,240,240);">
	<h2 style="color:rgb(100,100,100);min-width:300px; padding:15px; background:white;width:50%; ">Select Payment Method</h2>
	
	<br/>
	<a href="pay.php?method=paytm"><div style="background:white;float:left; min-width:140px; width:40%;padding:10px; border:2px solid rgb(230,230,230);">
	<img src="pay.png" style="width:50px; "><h4 style="color:rgb(10,10,10); font-size:14px; ">Pay Via Paytm</h4>
	
	
	
	</div></a>
	<a href="pay.php?method=cash"><div style="background:white;float:right; min-width:140px; width:40%;padding:10px; border:2px solid rgb(230,230,230);">
	<img src="pay2.png" style="width:50px; "><h4 style="color:rgb(10,10,10); font-size:14px; ">Cash On Delivery</h4>
	
	
	
	</div></a>
	
	</div>
	<p style="color:rgb(40,40,40); font-size:13px;padding:10px; ">! Fashion Addict uses Cash On Delivery to ease the payment becuase we care our customers</p>
	
	
	<?php
}
?>
<?php

if(!empty($_GET['method'])){
	if($_GET['method'] == 'paytm'){
$_SESSION['m'] = 'paytm';
	?>
	

<div style="display:block;text-align:left;min-width:340px; width:70%; height:400px; padding:10px; background:rgb(250,250,250); border:2px solid rgb(240,240,240);">

<a href="pay.php"><div style="padding:10px;min-width:160px; border-radius:5px;width:14%;float:right;margin-right:41%; height:50px; background:white;"><h4 style="color:rgb(100,100,100);margin-top:4px;">Change Method</h4></div></a>
	
<div style="margin-left:50%;margin-top:30px;position:absolute;	"><span style=";color:rgb(10,10,10);font-size:16px;font-weight:bold;padding:18px	">Scan QR Code To pay</span>
</div><div style="margin-left:16%;margin-top:290px;position:absolute;	"><span style=";color:rgb(50,50,50);float:left; font-size:12px;font-weight:bold;padding:18px;">You will get confirmation email on successful payment </span>
</div>	
<img src="pay3.png" style="width:200px; "><br/><h4 style="color:rgb(10,10,10);float:left; font-size:16px;font-weight:bold;padding:18px; ">Pay Via Paytm</h4>
	

</div>
	
	<?php
	}
}
	
	?>
<?php

if(!empty($_GET['method'])){
	if($_GET['method'] == 'cash'){
$_SESSION['m'] = 'cash';

	?>
	

<div style="display:block;text-align:left;min-width:340px; width:70%; height:200px; padding:10px; background:rgb(250,250,250); border:2px solid rgb(240,240,240);">
<center><h4 style="color:rgb(100,100,100);">You have choosen Cash on delivery</h4>
<a href="details.php"><button style="background:rgb(250,10,100);color:white;margin-top:60px; width:300px; height:50px;	  " class="btn btn-default">Proceed</button></a>
</div>
	
	<?php
	}
}
	
	?>

