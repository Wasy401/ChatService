<?php

include('../controller/login_controller.php');



?>

<html>  
    <head>  
        <title>Chat With your Heart!</title>  
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>  
    <body>  
        <div class="container">
			<br />
			
			<h3 align="center">Chat With your Heart!</h3><br />
			<br />
			<div class="panel panel-default">
  				<div class="panel-heading">Chat Application Login</div>
				<div class="panel-body">
					<p class="text-danger"><?php echo $message; ?></p>
					<form method="post">
						<div class="form-group">
							<label>Enter Username</label>
							<input type="text" name="username" class="form-control" required />
						</div>
						<div class="form-group">
							<label>Enter Password</label>
							<input type="password" name="password" class="form-control" required />
						</div>
						<div class="form-group">
							<input type="submit" name="login" class="btn btn-info" value="Login" />
						</div>
						
					</form>
						<form action="signup.php">
							<input type="submit" value="New User?Press here!" />
						</form>
						
					<br />
					<br />
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- webslesson_mainblogsec_Blog1_1x1_as -->
					<ins class="adsbygoogle"
						 style="display:block"
						 data-ad-client="ca-pub-4529508631166774"
						 data-ad-host="ca-host-pub-1556223355139109"
						 data-ad-host-channel="L0007"
						 data-ad-slot="6573078845"
						 data-ad-format="auto"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
					<br />
					<br />
					
					<br />
					<br />
				</div>
			</div>
		</div>

    </body>  
</html>