<?php

	session_start();
	if($_SESSION["id"] != "UCSC"){
		 header("Location:index.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Add Admin</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<body>

	<?php
		
		


		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			include "../dbConnect/dbConnect.php";
			$conn = dbConnect();
			
			$un = $_POST['uName'];
			$nam = $_POST['adminName'];
			$pwd = $_POST['password'];
			$tel = $_POST['tel'];


			$sql = "INSERT INTO admin VALUES ('$un' ,'$nam' , '$pwd'  , '$tel' )";
			
				if ($conn->query($sql) === TRUE) {
    			echo "<script>window.alert('Successfully added !');
    			window.location='index.php'</script>";

		} else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
		}
				$conn -> close();

		}
	?>

		<a href="logout.php"><button class="warnButton"  style="float: right;">Logout</button></a>

        <button class="activeButton" onclick="document.getElementById('idForm').style.display='block'" style="float: right;">Login</button>

        <?php
               if(isset($_SESSION['name'])){
                    if($_SESSION['name'] != null){
        ?>
        <label id='helloLabel' >Hello 

        <?php
             echo $_SESSION['name'] ?>
                 
             </label>
             <?php
                    }
               }
                
        ?>

        
        <a href="index.php"><button class="warnButton"  style="float: right;background-color:#9db4b7;">Admin Home</button></a>
        <a href="#.php"><button class="warnButton"  style="float: right;background-color:#c60084;">eShopping Home</button></a>


		<form method="post" action="" id="mainForm">
			<br/><br/>
			<table cellpadding="20">
				<caption>Admin Registration</caption>
				<tr>
					<td>Username</td>
					<td><input type="text" name="uName" placeholder="Username" class="inputField"></td>				
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="adminName" placeholder="Name" class="inputField"></td>				
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="Password" name="password" placeholder="Password" class="inputField"></td>				
				</tr>
				<tr>
					<td>Telephone</td>
					<td><input type="text" name="tel" placeholder="Telephone" class="inputField"></td>				
				</tr>
				<tr>
					<td><input type="submit" name="" class="basicButton"></td>
					<td><input type="reset" name="" class="basicButton"></td>				
				</tr>
			</table>
		</form>


		<?php

		// 	include "../dbConnect/dbConnect.php";

		// 	function addAdmin(){
		// 		$conn = dbConnect();

		// 		$sql = "INSERT INTO admin VALUES ($adminID , $name , $password , $telephone)";

		// 		if($conn -> query($sql) == TRUE){
		// 			echo document.alert("New Admin Added to the site !");
		// 		}
		// 		else{
					
		// 		}
		// 		$conn -> close();
		// 	}

		// 	function display(){
				
		// 	}

		// echo "HIIIII !";
			
		?>


		<script  src="js/formValidation.js"></script>


		
</body>
</html>