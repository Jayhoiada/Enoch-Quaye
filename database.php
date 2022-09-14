<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'quiz';

$conn= mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if ($conn) {
	
 // echo "Connected";
}else{
 echo "Could not Connect";
}
// mysqli_select_db("quiz" ,$conn);
?>
