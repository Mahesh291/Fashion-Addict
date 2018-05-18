<?php
session_start();
$b4 = $_SESSION['b4'] = $_POST['phone'];

$b5 = $_SESSION['b5'] = $_POST['pass'];
?>
<html>

<head>
<script>
function red()
{
	window.location="main.php";
}
</script>

</head>

<body>
<script>
window.onload = red();


</script>

</body>

</html>