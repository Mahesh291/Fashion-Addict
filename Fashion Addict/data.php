<html>
<body><head>

	 <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 <script src = "http://code.jquery.com/jquery-1.11.1.min.js"></script>
	

<?php
if(isset($_POST['create']) && ($_POST['name'])){
$con = mysqli_connect("localhost", "root", "");
          
mysqli_select_db($con,"shop");
 
 
 $query = "INSERT INTO accounts (username,phone,password) VALUES ('$_POST[name]','$_POST[phone]','$_POST[password]')";
 $result = mysqli_query($con,$query)
  or die("query failed" . mysqli_error());
  
 if($result){
echo "<h2 style='color:green'>your account has been created</h2>", "<br>";
 }
else {echo "username exists already";}
echo "<a href='login.php'>
	<h1>login<br /><br /></h1></a>";

 


 
}


?>