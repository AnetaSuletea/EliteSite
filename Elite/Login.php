		<?php
	session_start();
	require_once("settings.php"); ?>
	<html>
	<head>
		<meta charset="UTF-8">
		<title>Elite - DeathWatch</title>
		<link rel="stylesheet" href="css/style.css" type="text/css">
	</head>
	<body>
		<div id="background">
			<div id="header">
				<div>
					<div>
						<a href="acasa.html" class="logo"><img src="images/logo.png" alt=""></a>
						<ul>
							<li>
								<a href="acasa.html" id="menu1">acasĂ</a>
							</li>
							<li>
								<a href="media.html" id="menu2">media</a>
							</li>
							<li>
								<a href="jocuri.html" id="menu3">jocuri</a>
							</li>
							<li>
								<a href="despre.html" id="menu4">despre</a>
							</li>
							<li class="selected">
								<a href="ceva_nou.html" id="menu5">Ceva Nou</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div id="body">
				<div>
					<div>
					  <div class="blog">
							<div class="content">
								<ul>
								  <li>
										<div class="header">
										<h3>Register</h3></div>
										<div class="article">
											<p><br> 
											<?php
											if(isset($_SESSION['id'])){
												$id = $_SESSION['id'];
												$query = "SELECT * FROM USERS where id = '$id'";
												$DOTHEDEW = mysqli_query($db_handle, $query);
												$user = mysqli_fetch_object($DOTHEDEW);
												
												echo "WELCOME, ". $user->userlname. " ". $user->userfname;
												echo "<br>";
												echo "Email: ". $user->email;
												echo "<br>";
												echo "Username: ". $user->username;
												echo "<br>";
												
												echo "<br>";
												echo "<a href='logout.php'>Logout </a>";
											}
											else
											{
												?>
											<form name="login" action="checklogin.php" method="post" accept-charset="utf-8">  
    <ul>  
        <label for="usermail">Username</label>  
        <input style="width:180px;"type="input" name="usermail" placeholder="yourname@email.com" required><br>
        <label for="password">Password</label>  
        <input  style="width:180px;"type="password" name="password" placeholder="password" required>
        <li>  
        <input type="submit" value="Login"></li>  
    </ul>  
</form>
											<?php } ?>
	

											</p> <br>
									 </li>
								  <li></li>   
								</ul>
						  </div>
					  </div>
					</div>
				</div>
			</div>
			<div id="footer">
				<div>
					<ul>
						<li id="facebook">
							<a href="https://www.facebook.com/elitegaminghouse?fref=ts">facebook</a>
						</li>
						<li id="twitter">
							<a href="https://twitter.com/ELITE___GAMING">twitter</a>
						</li>
						<li id="googleplus">
							<a href="https://plus.google.com/communities/108472112332539365613">googleplus</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</body>
	</html>