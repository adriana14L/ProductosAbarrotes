

<?php
//include ("functions.php");
$conn = new mysqli("localhost", "root", "1234", "miscelanea");
if(mysqli_connect_errno()){
	echo 'Conexión Fallida: ', mysqli_connect_errno();
	exit();
}
?>
