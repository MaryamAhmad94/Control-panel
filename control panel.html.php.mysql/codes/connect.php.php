



<?php

$user = 'root';
$pass = '';
$db = 'task2_db';
$conn = new mysqli ('localhost', $user, $pass, $db) or  die (" Unable to connect");


   	if (isset($_POST['Right'])) {
   		echo"<h1 align =center>Right</h1>";
   		$query = $conn->query("INSERT INTO `direct control`  (`Right`) VALUES ('right')") ;
}
	if (isset($_POST['Left'])) {
   		echo "<h1 align =center>Left</h1>";
   		$query = $conn->query("INSERT INTO `direct control`  (`Left`) VALUES ('left')") ;
}

	if (isset($_POST['Backward'])) {
   		echo "<h1 align =center>Backward</h1>";
   		$query = $conn->query("INSERT INTO `direct control`  (`Backward`) VALUES ('Backward')") ;
}
if (isset($_POST['Forward'])) {
   		echo "<h1 align =center>Forward</h1>";
   		$query = $conn->query("INSERT INTO `direct control`  (`Forward`) VALUES ('Forward')") ;
   	}
   	if (isset($_POST['STOP'])) {
   		echo "<h1 align =center>STOP</h1>";
   		$query = $conn->query("INSERT INTO `direct control`  (`STOP`) VALUES ('STOP')") ;
   	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			background: #29293d;
		}
			.but {
            margin-left:  650px ;
			

		}

	</style>
</head>
<body >
<form >
<input  class="but" type="button" onclick="history.back()" value="Back">;
</form>
</body>
</html>


<!-- My name is / maryam ahmad fouad  -->
