<?php
    session_start();
    $_SESSION["id"] = "UCSC";

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

        <button class="activeButton" onclick="document.getElementById('idForm').style.display='block'">Login</button>


			<table  id="cnLeftTable">
				<caption> <h2 style="color: #ffe6e6;font-size: 45px;"><br/>Welcome to the admin Page of eShopping</h2></caption>
                    <tbody>
                        <tr>
                            <td>
                                <img src="../images/adminDetails.png" class="tableImage">
                                <br/>
                                <a href="">Admin <br/>Details</a>
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
        background-color: rgb(0,9,0);
        background-color: rgba(0,0,0,0.4);
        padding-top: 70px;
        width: 100%;
        height: 100%;
        font-family: verdana;
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

    .activeButton{
    background-color: #37ed34;
    padding: 10px 32px;
    color: black;
    border:none;
    cursor: pointer; 
    display: inline-block;
    font-size: 20px;
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