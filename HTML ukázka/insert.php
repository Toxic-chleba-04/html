<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="util.css">
</head>
  <body>

	<div class="wrapper" style="overflow: visible ;top: 30%;">

		<a href="ukazka.html" style="font-size: 50px;">🏠</a>
        <div class="container" style="height: 700px;">    
		  <h1>Registrace</h1>
		  
			<form method="post" action="process.php">
				First name:<br>
				<input type="text" name="first_name">
				<br>heslo:<br>
				<input type="password" name="heslo">
				<br>Email Id:<br>
				<input type="email" name="email">
				<br>
				<br>
				<input type="submit" name="save" value="Registrace">

			</form>
		</div>
	</div>


  </body>
</html>