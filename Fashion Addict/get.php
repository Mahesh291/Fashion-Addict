<?php
session_start();
$con = mysqli_connect("localhost", "root", "");
          
mysqli_select_db($con,"shop");

?>


<html>
<head><link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<meta charset="utf-8"/>
<title>search </title>
</head>
<style> 

</style>
<body>

<div id="header">
</div>
<div style="display:block; overflow-x:hidden;height:450px;margin-top:110px;float:left;margin-left:%;width:100%; border:none;">
    <div style="margin-top:40px;"></div>

<?php

if(!empty($_GET['q'])){
$query = $_GET['q'];
$min_length = 1;
if(strlen($query) >= $min_length){
	$query = htmlspecialchars($query);
	$query = mysqli_real_escape_string($con,$query);
	
	$row_results = mysqli_query($con,"SELECT * FROM products WHERE (`type` LIke '%".$query."%') OR (`category` LIke '%".$query."%') ") or die(mysqli_error());
	
	if(mysqli_num_rows($row_results) > 0){
		while($row1 = mysqli_fetch_array($row_results)){
		
		
?>

<a style="text-decoration:none; color:rgb(100,20,200);" href="search.php?query=<?php echo $row1['type'];?>&id=<?php echo $row1['id'];?>">
		<div class="thumbnail"style="background:white;margin-top:-10px;height:60px;border:none; border-bottom:1px solid rgb(244,244,244);width:340px;">

		<span style="color:rgb(100,100,100); font-size:16px; "></span><span style="font-size:13px; float:left;margin-left:10%;color:rgb(50,50,50);"><?php echo $row1['title'];?></span></span>
		
		 <img src="<?php echo $row1['file'];?>" style="width:40px; float:right;height:;;">
</div>

<?php

}
	}
}
}

?>

