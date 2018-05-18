

<?php

$con = mysqli_connect("localhost", "id3497772_root", "iamanewprogrammer");
          
mysqli_select_db($con,"id3497772_user");


	$file = $_FILES['file']['name'];
	$tmp = $_FILES['file']['tmp_name'];
    $type = $_FILES['file']['type'];
$a = "";
$file = $time.$file;
move_uploaded_file($tmp,$a.$file);


 
	$results = mysqli_query($con,"INSERT INTO image (file,descr) VALUES ('$file','hello')") or die(mysqli_error());
	


?>