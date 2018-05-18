<?php
session_start();
$con = mysqli_connect("localhost", "root", "");
          
mysqli_select_db($con,"shop");
	
$rev = mysqli_query($con,"SELECT * FROM products") or die(mysqli_error());
while($row = mysqli_fetch_array($rev)){
	
?>
<?php echo $row['title'];?><br/>
<a href="add.php?id=<?php echo $row['id'];?>">add</a>



<?php
}
?>


<?php

if(!empty($_GET['delete'])){
	
	foreach($_SESSION['cart'] as $k=>$v){
		if($v['id'] ==$_GET['delete']){
			unset($_SESSION['cart'][$k]);
		}
	}
}
if(!empty($_GET['id'])){
	
	$item_id = array_column($_SESSION['cart'],'id');
	if(!in_array($_GET['id'],$item_id)){
		
		$count = count($_SESSION['cart']);
		
		$item = array(
	    'id'=>$_GET['id'],
	    'qty'=>1
	);
		$_SESSION['cart'][$count] = $item;
		
		
	}
	else{
		?>
		<h1>Already Added</h1>
		<?php
	}
	
}
else
{
	$item = array(
	'id'=>$_GET['id'],
	'qty'=>1
	);
	$_SESSION['cart'][0] = $item;
}


foreach($_SESSION['cart'] as $k=>$v){
	echo $v['id'];

	
	?>
	<a href="add.php?delete=<?php echo $v['id'];?>">remove</a>
	
	<?php
}

	?>
	