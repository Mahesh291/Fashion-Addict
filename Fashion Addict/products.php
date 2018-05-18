<?php
session_start();
$con = mysqli_connect("localhost", "root", "");
          
mysqli_select_db($con,"shop");
$id = $_GET['id'];
$b4 = $_SESSION['b4'];

?><html>
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

	
<?php

if(!empty($_GET['add'])){
if(!empty($_GET['id'])){
	if($_GET['add'] == $_GET['id']){
	if(!empty($_SESSION['cart'])){
	
	$item_id = array_column($_SESSION['cart'],'id');
	if(!in_array($_GET['id'],$item_id)){
		
		$count = count($_SESSION['cart']);
		
		$item = array(
	    'id'=>$_GET['id'],
	    'qty'=>1
	);
		$_SESSION['cart'][$count] = $item;
	?><script>window.location='products.php?id=<?php echo $_GET['id'];?>#move';</script>
	
	
<?php	
		
	}
	?>
	<?php
	}
	

else
{
	$item = array(
	'id'=>$_GET['id'],
	'qty'=>1
	);
	$_SESSION['cart'][0] = $item;
	?>
	<script>window.location='products.php?id=<?php echo $_GET['id'];?>';</script>
	
	<?php
}
}
}
}

if(!empty($_SESSION['cart'])){
foreach($_SESSION['cart'] as $key=>$val){
		  
		  $id = $_SESSION['cart'][$key]['id'];
		 
		 $qty = $_SESSION['cart'][$key]['qty'];
		 
		 
		
		$result1 = mysqli_query($con,"SELECT * FROM cart WHERE (phone = '$b4') AND (i_id = '$id')") or die(mysqli_error());
	if(mysqli_num_rows($result1) < 1){
	$result2 = mysqli_query($con,"INSERT INTO cart (i_id,quantity,phone) VALUES ('$id','$qty','$b4')") or die(mysqli_error());
		
	}
	}
	
}	
	
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
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
<center>
<br/>
<div id="menus1"  style="float:left; z-index:3; width:100%; background:white;height:47px; ">

<a onclick="load()" href="main.php"><div style="margin-left:6%;"><a href="main.php"><img src="home1.png" style="width:30px;margin-left:0px;"></div></a>
	<a onclick="load()"href="type.php?cat=Mens"><div style="margin-left:26%;"><img src="m31.jpg" style="width:70px;margin-left:-15px"></div><span style="color:white;background:rgb(250,20,20);	font-size:10;padding:2px 4px 3px 4px; border-radius:40%;position:absolute; margin-left:-16%;">new</span></a>
  <a onclick="load()" href="type.php?cat=Womens"><div style=";margin-left:46%;"><img src="w8.jpg" style="width:60px;margin-left:-10px"></div><span style="color:white;background:rgb(250,20,20);	font-size:10px;padding:2px 4px 3px 4px; border-radius:40%;position:absolute; margin-left:6%;">new</span></a>
  <a onclick="load()" href="search.php"><div style="margin-left:66%;"><img src="search1.png" style="width:28px;margin-left:0px"></div></a>
  <a onclick="load()"href="cart.php"> <div style="margin-left:86%;"><img src="cart1.png" style="width:30px;margin-left:0px"></div><span style="color:white;background:rgb(250,20,20);	font-size:10px;padding:2px 6px 3px 6px; border-radius:50%;position:absolute; margin-left:43%;"><?php if(!empty($_SESSION['cart'])){echo count($_SESSION['cart']);} else {echo "0";}?></span></a>
  

	
      </div>





<div id="loader" class="loader"></div>
<script>
function load(){
   document.getElementById("loader").style="position:fixed;  z-index:2;left:40%; top:60%; display:block; ";
}
</script>

<?php
   
   
   ?>

</div>
<center>

		
<div id="main" style="">


<?php
    
	$result = mysqli_query($con,"SELECT * FROM products WHERE id = '$id'") or die(mysqli_error());
	while($row = mysqli_fetch_array($result)){
		
	
	?>
<div class="col-sm-5">

<div class="thumbnail" style="border:none;">

<div id="product" style="width:70%; height:300px;border:1px solid rgb(250,250,250);">

<img id="image" src="<?php echo $row['file'];?>" style="width:100%;">
</div>
<div id="more" style="border:0px solid rgb(250,250,250);margin-left:0px;width:80%; min-width:340px;height:80px;">
<?php
for($i=1; $i<=4; $i++){
	$i2  = 'i'.$i;
	if(!empty($row[$i2])){
	?>
	<div style="float:left;margin-left:3%;border:1px solid rgb(240,240,240);border-radius:10px;width:70px; height:70px;overflow:hidden;"><img src="<?php echo $row[$i2];?>" style="height:70px;margin-left:-10px"></div>

<?php
	}
}
?>
</div>
</div>

</div>
<hr/>

<div id="move"class="col-sm-7" style="margin-bottom:80px;">

<h2 style="color:rgb(10,10,10);opacity:0.8;margin-left:-40%;text-shadow:0.3px 0.3px rgb(10,10,10); margin-top:-10px;padding:20px;font-weight:bold;font-family: 'Roboto', sans-serif;font-size:18px;">
<?php echo $row['title'];?>
</h2>
<h4 style="color:rgb(20,20,20);margin-left:-40%; margin-top:-30px;max-width:220px; padding:20px;font-weight:;font-family: 'Roboto', sans-serif;font-size:14px;">
<?php echo $row['descr'];?>
</h4>

<?php
$p = $row['price'];
$o = $row['off'];
$f = ($p/100)*$o;
$final = $p-$f;

?>

<span style="position:absolute; margin-left:14%; color:rgb(250,10,100); margin-top:-95px;margin-right:10px;font-weight:bold; font-size:18px; ">
Price : <span style="color:rgb(250,10,100);font-size:18px;">₹<?php echo $final;?></span> <span style="color:rgb(100,100,100);"><strike>₹<?php echo $p;?></strike></span>
</span>

<span style="position:absolute; margin-left:20%; color:rgb(250,10,10); margin-top:-46px;margin-right:10px; ">
 <span style="color:rgb(250,10,50);font-weight:bold; font-size:18px;"><?php echo $row['off'];?>% OFF</span>
</span>
<br/>

<h4  style="color:rgb(10,10,10);margin-left:0; margin-top:-20px; padding:20px;font-weight:bold;font-family: 'Roboto', sans-serif;font-size:15px;">
 Exclusively Available
</h4>
<?php
if(!empty($_SESSION['cart'])){
$item_id = array_column($_SESSION['cart'],'id');
	if(in_array($_GET['id'],$item_id)){
		?>
		<button class="btn btn-default" id="add" value="add to cart" name="add"  style="border:none;position:absolute;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.04), 0 6px 20px 0 rgba(0, 0, 0, 0.01);border-radius:10px;width:30%;min-width:240px;padding:10px;outline:none;margin-bottom:10px; margin-left:-30%;margin-top:-20px;color:white;background:rgb(30,30,30);">Added</button>
  
	<?php
	}
	else{
	?>
<a href="products.php?id=<?php echo $_GET['id'];?>&add=<?php echo $_GET['id'];?>#move"><button class="btn btn-default" id="add" value="add to cart" name="add"  style="border:none;position:absolute;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.04), 0 6px 20px 0 rgba(0, 0, 0, 0.01);border-radius:10px;min-width:240px;padding:10px;outline:none;margin-bottom:10px; margin-left:-30%;margin-top:-20px;color:white;background:rgb(250,10,100);">Add to Cart</button>
  
  <?php
	}
	}
	else{
  ?>
  	
<a href="products.php?id=<?php echo $_GET['id'];?>&add=<?php echo $_GET['id'];?>#move"><button class="btn btn-default" id="add" value="add to cart" name="add"  style="border:none;position:absolute;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.04), 0 6px 20px 0 rgba(0, 0, 0, 0.01);border-radius:10px;min-width:240px;padding:10px;outline:none;margin-bottom:10px; margin-left:-30%;margin-top:-20px;color:white;background:rgb(250,10,100);">Add to Cart</button>
  
  <?php
	}
  ?>
  </a>
  
  <br/>
<div id="details" class="caption" style="border:;padding:20px;;">


<span style="color:rgb(10,10,10);float:left;font-family: 'Roboto', sans-serif;font-size:16px;">
Product details</span><br/><br/>
<span style="font-size:12px;text-align:left; background:white;padding:10px;float:left;color:rgb(70,70,70);">
This is a very good product at this short rate
this is a very good product at this short rate
<br/>
Product
<br/>
Size:7
<br/>
color:grey</span>
<br/><br/><br/><br/><br/><br/>

<span style="color:rgb(10,10,10);float:left;margin-top:10px;font-family: 'Roboto', sans-serif;font-size:16px;">
Rating</span>
<?php
for($i=0; $i<5; $i++){
	?>
	<img src="rate3.png" style="width:25px;margin-top:15px;loat:left;">
	<?php
}
	?>
<br/>
<br/>
<span style="color:rgb(10,10,10);margin-top:3px;float:left;font-weight:bold;margin-top:0px;font-family: 'Roboto', sans-serif;font-size:16px;">
Write a Review</span>
<br/>
<br/>

<form action="products.php?id=<?php echo $id;?>" method="post">
<div id="review" style="">
<textarea placeholder="hfdffd"class="form-control" name="review"  style="max-width:300px;float:left;border:1px solid rgb(100,100,100);" >

</textarea>
<input type="hidden" name="id" value="<?php echo $id;?>">



<button  name="submit" class="btn btn-default" style="border-radius:10px;margin-top:4px;background:rgb(100,100,100);color:white;margin-left:10px;float:left">Submit</button>
</form>
<br/>
<br/>
<span style="color:rgb(10,10,10);float:right;font-weight:bold;margin-top:20px;font-family: 'Roboto', sans-serif;font-size:16px;">
All Reviews</span>
<?php
if(isset($_POST['submit'])){

$rev = $_POST['review']; 
if(strpos($rev,'<script>') !== false){
}
else{
if($rev ==' '){
	
echo '<span style="color:rgb(100,100,100);">Please Write Something</span>';
}
else{
$rev = mysqli_query($con,"INSERT INTO review (review,i_id) VALUES ('$rev','$id')") or die(mysqli_error());
}?>
<?php	
	

}
}
?>

<div style="display:block;margin-top:50px;float:right;	margin-right:-10%; width:30%;min-width:300px; ">
<?php
$result1 = mysqli_query($con,"SELECT * FROM review WHERE (i_id = '$id') ORDER BY id DESC limit 6") or die(mysqli_error());
	while($row1 = mysqli_fetch_array($result1)){
		if(!empty($row1['review'])){
		?>
		
		

<h4  style="color:rgb(100,100,100);float:left;">
<img src="rate2.png" style="width:10px;"><span style="font-family: 'Roboto', sans-serif; font-size:12px;"> <?php
 
echo $row1['review'];?></span>
</h4><br/><br/>
		
		<?php
		}
	}
		
		?>
		</div>
 </div>
</div>
</div>

<?php
	
	?>
<br/>
<br/>

</div>


<div id="products2" style=" border:none;margin-bottom:40px;;">
<center>
<br/><br/>
<br/><br/><br/>
<br/>
<br/>
<h3 style="padding:20px; background:rgb(250,10,100);color:white;font-size:18px;">
Related Products</h3>



<div id="main" class="hori" style="display:block; background:white;margin-top:40px; margin-bottom:40px; ">

<?php

	$result = mysqli_query($con,"SELECT * FROM products WHERE (type='$row[type]') AND (id != '$_GET[id]') ORDER BY  id  DESC limit 10 ") or die(mysqli_error());
	while($row = mysqli_fetch_array($result)){
		
	
	?>
<a style="text-decoration:none;" href="products.php?id=<?php echo $row['id'];?>">	
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
	
	}
	
	?>
	
	</div>
		
	<div class="h" style="background:white; height:20px;position:absolute; margin-top:-60px;width:100%; " ></div>
		
		
		
	<?php
?>


