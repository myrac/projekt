<?php
	session_start();
	include('form-anketa.php');
?>
<!DOCTYPE html>
<html>

<?php include 'header.php';?>
	
	<article>
		<h2>Kreiranje nove ankete</h2>
		<form method="post" action="form-create.php">
			<label for="title">Naslov:</label><input id="title" type="text" name="title" max="50" required>
			<label for="description">Opis:</label><textarea id="description" name="description" maxlength="250"></textarea><br><br>
			<label for="type">Vrsta odgovora:&nbsp;&nbsp;</label><select id="type" name="type" required>
				<option value="multiple">Višestruki izbor</option>
				<option value="single">Jednostruki izbor</option>
				<option value="descriptive">Odgovor opisnog tipa</option>
			</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="number">Vremensko ograničenje (sati):&nbsp;&nbsp;</label><input type="number" id="number" name="quantity" min="1" max="48"><br><br>
			
			<label for="odgovor">a) Odgovor - postavi kao točan odgovor</label><input type="checkbox"><input id="option" type="text" name="option1" max="50" placeholder="Unesite tekst odgovora" required>
			<label for="odgovor">b) Odgovor - postavi kao točan odgovor</label><input type="checkbox"><input id="option" type="text" name="option2" max="50" placeholder="Unesite tekst odgovora" required>
			<label for="odgovor">c) Odgovor - postavi kao točan odgovor</label><input type="checkbox"><input id="option" type="text" name="option3" max="50" placeholder="Unesite tekst odgovora" required>
			
			
			
			<input type="submit" name="dodaj" value="+ DODAJ ODGOVOR" class="button">
			<input type="submit" name="posalji" value="Kreiraj anketu" class="button">
		</form>
	</article>

	<footer>
		<div>© 2017 Team Product</div>
    </footer>
</body>
</html>