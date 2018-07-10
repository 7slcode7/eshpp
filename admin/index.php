<?php
    session_start();
   
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Control Panel</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">

</head>


<body>

	<div id="content">
   

		<div id="center">

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

			<table  id="cnLeftTable">
				<caption> <h2 style="color: #ffe6e6;font-size: 45px;margin-top: -40px;"><br/>Welcome to the admin Page of eShopping</h2></caption>
                    <tbody>
                        <tr>
                            <td>
                                <img src="../images/adminDetails.png" class="tableImage">
                                <br/>
                                <a href="viewAdmin.php">Admin <br/>Details</a>
                            </td>
                            <td>
                                <img src="../images/addAdministrator.png" class="tableImage">
                                <br/>
                                <a href="addAdmin.php">Add <br/>Administrator</a>
                            </td>
                            <td>
                                <img src="../images/removeAdmin.png" class="tableImage">
                                <br/>
                                <a href="">Remove<br/> Administrator</a>
                            </td>
                            <td>
                                <img src="../images/addCategory.png" class="tableImage"> 
                                <br/>
                                <a href="">Add<br/> Category</a>
                            </td>
                            <td>
                                <img src="../images/addProduct.png" class="tableImage">
                                <br/>
                                <a href="">Add <br/> Product</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../images/addAdvertisement.png" class="tableImage">
                                <br/>
                                <a href="">Add<br/> Advertisement</a>
                            </td>
                            <td>
                                <img src="../images/orders.png" class="tableImage">
                                <br/>
                                <a href="">View Orders</a>
                            </td>
                            <td>
                                <img src="../images/offers.png" class="tableImage">
                                <br/>
                                <a href="">Manage<br/> Offers</a>
                            </td>
                            <td>
                               <img src="../images/report.png" class="tableImage">
                                <br/>
                                <a href="">Reports<br/></a>
                            </td>
                            <td>
                                <img src="../images/addMember.png" class="tableImage">
                                <br/>
                                <a href="">Add<br/></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../images/deleteMember.png" class="tableImage">
                                <br/>
                                <a href="">Remove<br/></a>
                            </td>
                            <td>
                                <img src="../images/memberSearch.png" class="tableImage">
                                <br/>
                                <a href="">ADD<br/></a>
                            </td>
                            <td>
                                
                            </td>
                            <td>14</td>
                            <td>15</td>
                        </tr></tr>
                    </tbody>
			</table>
		</div>
	</div>


<div id="idForm" class="model">
    <center>
        <form action="login.php" class="model-content animate" method="post">
    
        <div class="imgct">
            <span onclick="document.getElementById('idForm').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="../images/loginAvatar.png" class="avatar" width="20%" height="20%">
        </div>

        <div class="fromContainer">
            <br/>
            <b>Username</b>
            <input type="text" name="uName" required placeholder="Enter username">
            <br/><br/>
            <b>Password</b>
            <input type="password" name="psw" required placeholder="Enter username">
            <br/>
            <button type="submit" class="activeButton">Login</button>
        </div>
        </form>
    </center>
    


</div>




<style type="text/css">

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