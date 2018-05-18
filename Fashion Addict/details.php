<?php
session_start();

$con = mysqli_connect("localhost", "root", "");
          
mysqli_select_db($con,"shop");


$name = $_SESSION['n1'];
$email = $_SESSION['e'];
$address = $_SESSION['a'];
$number = $_SESSION['n2'];
$landmark = $_SESSION['l'];
$method = $_SESSION['m'];	
$pincode = $_SESSION['p'];
$amt = 0;
$qty = 0;
$sum = 0;
$dis = 0;
$date = date('Y-m-d-H');
foreach($_SESSION['cart'] as $k=>$v){
	$id = $v['id'];
	
	$result1 = mysqli_query($con,"SELECT * FROM products WHERE (id = '$id')") or die(mysqli_error());
	while($row1 = mysqli_fetch_array($result1)){
	   $sum = $sum + $v['qty']*$row1['price'];
	
$p = $row1['price'];
$o = $row1['off'];
$f = ($p/100)*$o;
$final = $p-$f;


    $dis = $dis + $v['qty']*$f;
	
$p = $sum - $dis;
$tax = ($p/100)*6;	

$amt = $sum-$dis+$tax;
$amt = round($amt);
	
	
$qty = $qty + $v['qty'];
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
<style>
#d{
width:80%; height:50px; min-width:310px;	
}
#d1{
	color:rgb(100,100,100);font-family: 'Roboto', sans-serif; padding:5px;float:left;font-size:13px;
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

<body style="background:rgb(245,245,245);">
<br/>

<center>
<div style="display:block; width:98%; height:90px; padding:10px; background:white; border:2px solid rgb(240,240,240);">
<div id="top" style="">
<h4 id="top1" style="">	<span style="background:rgb(245,245,245); padding:10px; border-radius:50%;font-weight:bold;color:rgb(250,10,100);">1.</span>Enter Details</h4>
</div>
<div id="top" style="">
<h1 id="top1" style=";"><span style="background:rgb(245,245,245); padding:10px; border-radius:50%;font-weight:bold;color:rgb(250,10,100);">2.</span>Payment</h1>
</div>
<div id="top" style="">
<h1 id="top1" style="color:rgb(250,10,100);"><span style="background:rgb(245,245,245); padding:10px; border-radius:50%;font-weight:bold;color:rgb(250,10,100);">3.</span>Details</h1>
</div>
</div>
<br/>

<a href="cart.php"><div style="padding:10px;min-width:180px; border-radius:5px;width:20%;float:left;margin-left:1%; height:50px; background:white;"><h4 style="color:rgb(100,100,100);margin-top:4px;">Go to cart</h4></div></a>
<br/><br/>
<br/>

<center>
<?php $detail='
<div style="background:white; width:50%;padding:10px; min-width:340px;height:560px;border:2px solid rgb(240,240,240);">

<h1 style="color:rgb(100,100,100);">Order Details</h1>

<div id="d" style="">

<span id="d1" style=" ">Name</span><span style="float:right;margin-right:10px;">'.$_SESSION["n1"].'</span>
<br/><br/>
</div>
<div id="d"style="">

<span id="d1" style=" ">Phone Number</span><span style="float:right;margin-right:10px;">'. $_SESSION["n2"].'</span>
<br/><br/>
</div>

<div id="d"style="">

<span id="d1" style=" ">Email</span><span style="float:right;margin-right:10px;">'.$_SESSION["e"].'</span>
<br/><br/>
</div>

<div id="d"style="">

<span id="d1" style=" ">Pincode</span><span style="float:right;margin-right:10px;">'.$_SESSION["p"].'</span>
<br/><br/>
</div>

<div id="d"style="">

<span id="d1" style=" ">Address</span><span style="float:right;margin-right:10px;">'. $_SESSION["a"].'</span>
<br/><br/>
</div>


<div id="d"style="">

<span id="d1" style=" ">Landmark</span><span style="float:right;margin-right:10px;">'.$_SESSION["l"].'</span>
<br/><br/>

</div>

<div id="d"style="">

<span id="d1" style=" ">Amount</span><span style="float:right;margin-right:10px;">'.

$amt.'
	
</span>
<br/><br/>
</div>
<div id="d"style="">

<span id="d1" style=" ">Estimated Delivery</span><span style="float:right;margin-right:10px;">3-4days
	
</span>
<br/><br/>
</div>
<div id="d"style="">

<span id="d1" style=" ">Quantity</span><span style="float:right;margin-right:10px;">'.$qty.'
	
</span>
<br/><br/>
</div>
</div>

';?>
<?php 
echo $detail;

foreach($_SESSION['cart'] as $k=>$v){
	$id = $v['id'];
	$qty = $v['qty'];

?>



<?php
	$result = mysqli_query($con,"INSERT INTO payment (name,email,address,number,landmark,method,p_id,qty,date) VALUES ('$name','$email','$address','$number','$landmark','$method','$id','$qty','$date')") or die(mysqli_error());

	
}	


?>
<?php
require("class.phpmailer.php");
$mail             = new PHPMailer();

$body             = "<h2>  is your OTP</h2>";

$mail->IsSMTP(); // telling the class to use SMTP

$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
$mail->Username   = "mahesh29sharm@gmail.com";  // GMAIL username
$mail->Password   = "newtojabalpur123";            // GMAIL password

$mail->setFrom('mahesh29sharm@gmail.com','Studyforfun');

$mail->Subject    = "Your OTP is here";

//$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

$address = $email;
$mail->AddAddress($address, "testmail");

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}

?>



<?php 
