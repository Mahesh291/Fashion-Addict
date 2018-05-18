<script>
	function ref(){
					
					var req = new XMLHttpRequest();
					
					req.onreadystatechange = function(){
					
					if(req.readyState == 4 && req.status == 200){
					
					var data = JSON.parse(req.responseText);
					ToHtml(data);
					
					} 
					}
					req.open('POST','http://localhost/j/new.php',true); 
					req.send();
					
					}
					setInterval(function(){ref()},1000);

function ToHtml(data){
	var res = "";
	for(i=0; i<data["details"].length; i++){
res +="<h1>"+data["details"][i].email+"</h1>";

}
console.log(res);
document.getElementById('res').source=res;

}

					
</script>
