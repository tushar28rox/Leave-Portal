<?php
session_start();
?>
<html>
<head>

<!--<style>.h2{
	background-image:url("miss.jpg");
	color:#3D9970;
	text-align:centre; 	
	padding: 150px;
	position:centre;
	font-size:50px;

	
}
</style>-->
	<title>login page</title>
	<link rel="stylesheet" href="style.css">
<img src="log.jpg" >

</head>
<body >
<h1 ><br>An India Russia Joint Venture</h1>
		<form action="process.php" method="post" enctype="multipart/form-data"> 
<fieldset>
			<legend>Personal Info</legend>
			<p>
			<label>username</label>
			<input type="text" name="user" id="user">
			</p>	
			<p>
			<label>password</label>
			<input type="password" name="pass" id="pass">
			</p>
			<p>
		
			<input type="submit" align="centre" id="btn"  value="login">
		</p>
		</fieldset>
	</form> 
	</div>

</body>
</html>
