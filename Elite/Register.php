<?php require_once("settings.php"); ?>
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
											<form name="login" action="addAccount.php" method="post" accept-charset="utf-8">  
    <ul>
		<table>
				<tr>
			<td>
				<label for="name">First Name</label>  
			</td>
			<td>
				<input type="text" name="fname" placeholder="First Name" required></li>  
			</td>
				<td>
				<label for="name">Last Name</label>  
			</td>
			<td>
				<input type="text" name="lname" placeholder="Last  Name" required></li>  
			</td>
		
		</tr>

		<tr>
			<td>
				<label for="email">Email</label>  
			</td>
			<td>
				<input type="email" name="email" placeholder="yourname@email.com" required></li>  
			</td>
		</tr>
		<tr>
			<td>
				<label for="username">Username</label>  
			</td>
			<td>
				<input type="text" name="username" placeholder="Username" required></li>  
			</td>
		</tr>
		
		<tr>
			<td>
				<label for="password">Password</label>  
			</td>
			<td>
				<input type="password" name="password" placeholder="password" required></li>  
			</td>
         <tr>
			<td>
				<input type="submit" value="Login"></li>  
			</td>
		</tr>
		</table>
    </ul>  
</form>
	
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