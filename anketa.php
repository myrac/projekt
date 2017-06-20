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
		
		<br><p>Preostalo vrijeme do kraja ankete: </p><p id="demo"></p>

		<script>
		var countDownDate = new Date("Jul 5, 2017 00:00:00").getTime();
		var x = setInterval(function()
		{
		  var now = new Date().getTime();
		  var distance = countDownDate - now;

		  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

		  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
		  + minutes + "m " + seconds + "s ";
		  
		  if (distance < 0)
		  {
			clearInterval(x);
			document.getElementById("demo").innerHTML = "EXPIRED";
		  }
		}, 1000);
		</script>
		
	</article>

	<footer>
		<div>© 2017 Team Product</div>
    </footer>
</body>
</html>