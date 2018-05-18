<?php
session_start();
$con = mysqli_connect("localhost", "root", "");
          
mysqli_select_db($con,"shop");
?>

<?php
if(isset($_POST['submit'])){	


   
	

$name = $_SESSION['n1'] = $_POST['name'];
$email = $_SESSION['e'] = $_POST['email'];
$address = $_SESSION['a'] = $_POST['address'];
$number = $_SESSION['n2'] = $_POST['number'];
$landmark = $_SESSION['l'] = $_POST['landmark'];
$pincode = $_SESSION['p'] = $_POST['pincode'];
 if(!empty($name)){
		if(!empty($email)){
			{if(!empty($address)){
				if(!empty($number)){
	
	?>
	<script>window.location='pay.php';</script>
		
	<?php
				}
				
			}
			}
		}
	}

	else{
		
		?>
		<script>window.location='checkout.php';</script>
		
		<?php
	
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
<h4 id="top1" style="color:rgb(250,10,100);">	<span style="background:rgb(245,245,245); padding:10px; border-radius:50%;font-weight:bold;color:rgb(250,10,100);">1.</span>Enter Details</h4>
</div>
<div id="top" style="">
<h1 id="top1" style=";"><span style="background:rgb(245,245,245); padding:10px; border-radius:50%;font-weight:bold;color:rgb(250,10,100);">2.</span>Payment</h1>
</div>
<div id="top" style="">
<h1 id="top1" style=";"><span style="background:rgb(245,245,245); padding:10px; border-radius:50%;font-weight:bold;color:rgb(250,10,100);">3.</span>Details</h1>
</div>
</div>
<br/>


<div style="display:block;text-align:left; width:98%; height:600px; padding:10px; background:rgb(250,250,250); border:2px solid rgb(240,240,240);">
	
<a href="cart.php"><div style="padding:10px;positin:absolute; min-width:180px; border-radius:5px;width:20%;float:left;margin-left:40%; height:50px; background:white;"><h4 style="color:rgb(100,100,100);margin-top:4px;">Go to cart 	 	</h4></div></a>

<div style="width:70%;float:left; min-width:340px;">
<form action="checkout.php" method="post">
<div class="col-sm-5">
<input type="text" style=" " name="name" placeholder="Name">
</div>
<div class="col-sm-5">
<input type="text" style=" "  name="email" placeholder="Email">
</div>

<div class="col-sm-10">
<textarea type="text" name="address" style="width:97%; min-width:350px;height:100px;padding:20px; background:white; border:2px solid rgb(230,230,230); border-radius:2px;" placeholder="Address"></textarea>
</div>

<div class="col-sm-5">
<input type="text" style=" width:200px;"name="pincode"   placeholder="pincode">
</div>

<div class="col-sm-5">
<input type="text" style=" "name="number"  placeholder="Phone Number">
</div>
<div class="col-sm-5">
<input type="text" style=" "name="landmark"   placeholder="Landmark">
</div>


<div class="col-sm-10">
<button class="btn btn-default" name="submit" style="width:30%; min-width:200px;height:50px; color:white;background:rgb(250,10,100);">Continue to Payment</button>
</div>
</form>
</div>
<br/>

<div class="" style="float:right;margin-top:30px;margin-bottom:100px;">


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
</div>
<br/>
<br/>
</div>
  


</div>

</body>
</html>