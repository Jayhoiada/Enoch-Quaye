<?php 
session_start();
// $_SESSION['lid'];

	include("header.php");
	$array_holder = extract($_POST);
	var_dump($array_holder);
	include "database.php";
 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
$rs = mysql_query("select * from mst_user where login= '{$_POST['lid']}'");
var_dump($rs);die();
if (mysql_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
	exit;
}
$query="INSERT INTO mst_user
		 (login, pass, username, address, city, phone, email) 
		VALUES
		 ($lid','$pass','$name','$address','$city','$phone','$email')";
$res = mysql_query($query);

echo "<br><br><br><div class=head1>Your Login ID  $lid Created Sucessfully</div>";
echo "<br><div class=head1>Please Login using your Login ID to take Quiz</div>";
echo "<br><div class=head1><a href=index.php>Login</a></div>";


?>
</body>
</html>

