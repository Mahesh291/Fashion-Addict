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
@media screen and (min-width: 1000px) {

#products2{
margin-top:700px;;
font-size:35px;


}	
#content{
	font-size:20px;
}

#about{
	margin-top:140px;
}
.hori{margin-top:140px;
}

 #back{
	 height:250px;
 }
 
 #back span{
	 font-size:35px;
 }
#head{
	height:110px;
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
	height:40px;
	
	background:red;
}	

#logo{
	margin-top:-2px;	
}

#profile{
	margin-top:7px;
	margin-right:2%;
}


}

@media screen and (max-width: 1000px) {
	.hori{
		margin-top:40px;
	}
		
#content{
	font-size:12px;
}
#about{
	margin-top:50px;
}
 #back{
	 height:150px;
	
 } #back span{
	 
	 font-size:20px;
 }
 
	#menus
	{
		display:none;
	}
	
#nav{
		display:none;
	}
	 
#head{
height:70px;
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

#menus i{
	margin-left:10%;
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

.wordWrap {
    word-wrap: break-word;     
    white-space: -moz-pre-wrap; 
    white-space: pre-wrap; 
}
#menus div {
	width:40px;position:absolute;margin-left:29%;margin-top:-3px;border:0px solid rgb(240,240,240);border-radius:50%; height:40px; overflow:hidden;
	float:left;
	margin-left:%;

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
#menus li a:hover span{
	
background:rgb(40,40,40);

text-decoration:none;

border-radius:10px;

}
#r li a:hover span{
 width:80%;
 margin-left:0px;
 color:#f8f8f8;
 background:rgb(250,0,0);
 
 padding:10px;
 
 margin-top:0px;

 

}
a:hover{
	text-decoration:none;
}



#menus li {
	display:inline; float:left;
	list-style-type:none;
	margin-left:4%;
	
}
#menus li a span{
	
	border-radius:10px;
	padding:10px; color:rgb(250,250,250); font-size:16px; font-family: 'Roboto', sans-serif;
	
	letter-spacing:0.6px;
	
}

.r {
	
    width: 0px;
    position: fixed;
  list-style-type:none;
    top: 0;
    left: 0;
    background-color: ;
    overflow-x: hidden;
	overflow-y: auto;

height:600px;    transition: 0.5s;
   
}
#r li span {
	margin-top:10px;
	font-family: 'Oswald', sans-serif;
 display:inline; float:left;
 padding:10px;
 padding-top:0px;
  margin-left:30px;
  
  
 font-weight:bold;
  font-size:15px;
  
 color:#f8f8f8;
	
}
#r li a{

	color:rgb(250,150,0);
	
}
#item span{
	
	background:rgb(0,0,0);
	height:170px;
	
	opacity:0.8;position:absolute; margin-left:0px;font-family: 'Roboto', sans-serif; margin-top:80px;  color:rgb(200,200,200); text-shadow:0.2px 0.1px rgb(100,100,100);font-size:30px; font-weight:bold;
}

.col-sm-3 span{
	
	
	width:200px;

	padding-left:50px;
	padding-right:50px;
	
	opacity:0.8; margin-top:10px;font-family: 'Roboto', sans-serif;  color:rgb(100,100,100); text-shadow:0.2px 0.1px rgb(100,100,100);font-size:20px; font-weight:bold;
}


 
 #social_icons a li{
 
 display:inline; float:left;
 
 
 
 
 
 }
 li{
 
 list-style-type:none;
 }
 
 #nav a li{
	 font-family: 'Oswald', sans-serif;
 display:inline; float:left;
 padding:10px;
 padding-top:0px;
  margin-left:30px;
  
  
 font-weight:bold;
  font-size:15px;
  
 color:#f8f8f8;
 
 
 }
 #nav a li:hover {
 
 color:#f8f8f8;
 background:rgb(20,0,0);
 
 padding:10px;
 padding-top:20px;
 margin-top:-20px;
 height:60px;
 

 }
 #list li 
 {
	 color:rgb(250,250,250);
 }
 
 
</style>
<body style="padding:0px;margin:0px; ;background:rgb(250,250,250); background-size:100%;;">

<div id="top-nav"  style="position:fixed;width:100%;z-index:2;opacity:;  ">

<span style="font-size:30px;margin-top:-px;position:fixed;left:90%; height:5px;cursor:pointer" onclick="openA()"><h4  id="open" style="font-size:30px;color:rgb(250,40,40);">&#9776;</h4></span>


 <div id="nav" style=" width:100%; 	height:60px; background:#1f1f1f;">
 <br/><div  style="margin-left:50px;"><center><a  href="upload.php"><li style="
 color:#f8f8f8;
 background:rgb(20,0,0);
 
 padding:10px;
 padding-top:20px;
 margin-top:-20px;
 height:60px;">Upload Products</li> </a>

 
 
 
 <a href="orders.php"><li>New Orders</li></a>
 <a href="products.php?id1=1"><li>View Products<span class="caret"></span></li></a>
 <a href="sell1.php"><li>Sell Requests<span class="caret"></span></li></a>
 <a href="deletep.php"><li>Delete Products<span class="caret"></span></li></a>
 
</center></div> 
 
 </div>
 
 
 
 
 
 
 
 
 </div>
 




<div id="r" style="z-index:2;background:rgb(0,0,0); margin-top:45px;" class="r">
 <a href="javascript:void(0)" class="closebtn" onclick="closeA()"><h1 style="font-size:30px;color:rgb(240,20,20);float:right;">&times;</h1></a>

  <li><a href="Home.php"><span style="">Upload Products</span></a></li>
  <li><a href="tutorial1.php?file=video"><span style="">New Orders</span></a></li>
  <li><a href="tutorial1.php?file=pdf"><span style="">View Products</span></a></li>
  <li><a href="Home.php"><span style="">Sell Requests</span></a></li>
  <li><a href="Home.php"><span style="">Delete Products</a></li>
 
</div>	


<br/>


</div>
<br/>


<script>
function openA() {
    document.getElementById("r").style.width = "200px";
}

function closeA() {
    document.getElementById("r").style.width = "0";
}
</script>