
<?php

session_start();
require_once('settings.php');

$myusername=$_POST['usermail']; 
$mypassword=$_POST['password']; 

$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($db_handle,$myusername);
$mypassword = mysqli_real_escape_string($db_handle,$mypassword);
$encpass = hash('sha256', $mypassword);
//echo $encpass;
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$encpass'";
$result=mysqli_query($db_handle, $sql);
$getuserid = mysqli_fetch_array($result);

$count=mysqli_num_rows( $result);

if($count==1){
$_SESSION['logged'] = "1";
$_SESSION['id'] = $getuserid['id'];
?>
	<script type="text/javascript">
	window.location = "/login.php"
	</script>
<?php
}
else {
echo "Wrong username or password.";
?>
	<script type="text/javascript">
	//window.location = "../index.php?act=log_no"
	</script>
<?php
}
?>