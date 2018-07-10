<?php
	session_start();
	session_unset();
	session_destroy();

	echo "You logged out";
	header("Location:index.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>