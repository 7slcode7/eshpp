<?php

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>

<button onclick="document.getElementById('idForm').style.display='block'" style="width:auto;">Login</button>

<div id="idForm" class="model">
	<form action="index.php" class="model-content animate">
	
		<div class="imgct">
			<span onclick="document.getElementById('idForm').style.display='none'" class="close" title="Close Modal">&times;</span>
			<img src="../images/loginAvatar.png" class="avatar" width="20%" height="20%">
		</div>

		<div class="fromContainer">
			<b>Username</b><br/>
			<input type="text" name="uName" required placeholder="Enter username">
			<br/>
			<b>Password</b><br/>
			<input type="password" name="psw" required placeholder="Enter username">
			<br/>
			<button type="submit">Login</button>
		</div>
	</form>


</div>



<style type="text/css">

	.model{
		display: none;
		position: fixed;
		z-index: 1;
		background-color: rgb(0,0,0);
		background-color: rgba(0,0,0,0.4);
		padding-top: 70px;
	}

	.model-content{
			background-color: #fefefe;
			border: 1px solid #888;
			width: 80%;
	}

	.close{
		position: absolute;
		right: 25px;
		top: 0;
		color: #FF0000;
		font-size: 35px;
		font-weight: bold;
	}
	.close:hover,.close:focus{
		color: red;
		cursor: pointer;
		background-color: white;
	}
</style>



<script type="text/javascript">
	
	var model = document.getElementById("idForm");

	window.onclick = function(event){
		if(event.target == model){
			model.style.display = "none";
		}
	}
</script>

</body>
</html>