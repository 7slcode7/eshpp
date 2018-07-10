<?php

	session_start();
	if($_SESSION["id"] != "UCSC"){
		 header("Location:index.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>View Admin</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="css/form.css">
	<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>


<body style="background-image:url(../images/bkImage.jpg);color:white;">

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

        <button class="activeButton" onclick="document.getElementById('idForm').style.display='block'" style="float: right;box-shadow:5px 5px;">Login</button>

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

        <br/><br/><br/><br/>

			<center>
				<h3 >eshopping Admin Details </h3>
				<table cellpadding="20" id="adminViewTable">
				<br/>
				<caption></caption>
				<tr>
					<td><u><b>Name</b></u></td>
					<td><u><b>Telephone</b></u></td>		
				</tr>

				<?php 

					include "../dbConnect/dbConnect.php";

					$conn = dbConnect();

					$sql = "SELECT name, telephone from Admin";

					$result = $conn->query($sql);

					if($result-> num_rows > 0){
						while ( $row = $result->fetch_assoc()) {
							echo "<tr><td>";
							echo $row['name'];
							echo "</td><td>";
							echo $row['telephone'];
							echo "</td></tr>";
						}
					}

				?>
				<tr>
					<td></td>
					<td></td>				
				</tr>
				
				</table>

			</center>
			
		


		<script  src="js/formValidation.js"></script>



		<style type="text/css">
				#adminViewTable{
					background-image: url(../images/bk2.jpeg);
					color: white;
					width: 50%;
					height: 50%;
					text-align: center;
					border: 2px;
				}

		</style>


		
</body>
</html>