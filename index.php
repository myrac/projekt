<?php
	session_start();
	include('form-login.php');
?>
<!DOCTYPE html>
<html>

<?php include 'header.php';?>
	
	<article>
		<h2>Prijava sa TVZ podacima</h2>
			<form method="post" action="">
				<input type="username" id="username" name="username" placeholder="Username" required>
				<input type="password" id="password" name="password" placeholder="Password" required>
				<input type="submit" name="login" value="Prijava" class="button">
			</form>
	</article>
	
	<footer>
		<div>© 2017 Team Product</div>
    </footer>
</body>
</html>
