<?php 
session_start();

require_once("settings.php");

$error = "0"; 

$u = mysqli_real_escape_string($db_handle, $_POST['username']);
$e = mysqli_real_escape_string($db_handle,$_POST['email']);
$p = mysqli_real_escape_string($db_handle,$_POST['password']);
$fn = mysqli_real_escape_string($db_handle,$_POST['fname']);
$ln = mysqli_real_escape_string($db_handle,$_POST['lname']);

if($u == "" || $e == "" || $p == "" || $fn == "" || $ln == "")
{
		//to be added
	echo "You did not complete all the information.";	 
?>
<script type="text/javascript">
	 window.location = "../login.php"
	</script>
<?php
}
else
{
//echo $u.' '.$e.' '.$p;
$p = hash('sha256', $p);
//echo '<br>'.$p;

$checkaccount = mysqli_query($db_handle, "SELECT * FROM users");
$checkacc  = mysqli_num_rows($checkaccount);
while ($check = mysqli_fetch_array($checkaccount))
{
if ($check['username']  == $u || $check['email'] == $e)
	{ 
	echo "Username and/or email are already registered.";
	$error = "1";
	die();
	}
}
if ($error == "0")
{
$register = mysqli_query($db_handle,"INSERT INTO users VALUES (NULL, '$fn', '$ln', '$e', '$p', '$u', '0')");  
if(!$register) echo mysqli_error($db_handle);
?>

<script type="text/javascript">
	window.location = "login.php"
	</script>
<?php
}
else
{
?>
	<script type="text/javascript">
	window.location = "../index.php"
	</script>
<?php } 
}?>