<?php
	session_start();
	include('form-anketa.php');
?>
<!DOCTYPE html>
<html>

<?php include 'header.php';?>
	
	<article>
		<h2>Pitanje: Koliko je 2+2?</h2>
		<form method="post" action="">
			<input type="radio" id="odgovor1" name="status" value="odgovor1" checked><label for="odgovor1">4</label><br><br>
			<input type="radio" id="odgovor2" name="status" value="odgovor2"><label for="odgovor2">5</label><br><br>
			<input type="radio" id="odgovor3" name="status" value="odgovor3"><label for="odgovor3">10</label><br><br>
			<input type="submit" name="posalji" value="Pošalji odgovor" class="button">
		</form>
	</article>

	<footer>
		<div>© 2017 Team Product</div>
    </footer>
</body>
</html>