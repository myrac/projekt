<?php
	session_start();
	include('form-anketa.php');
?>
<!DOCTYPE html>
<html>

<?php include 'header.php';?>
	
	<article>
		<h2>Prikaz odgovora na anketu: Koju biste ocjenu dali ovom predmetu?</h2>
		<form method="post" action="form-create.php">
			<label for="type">Prikaži odgovore kao:&nbsp;&nbsp;&nbsp;</label><select id="type" name="type" required>
				<option value="stat">Statistiku</option>			
				<option value="tablica">Tablicu</option>
				<option value="graf">Graf</option>
			</select>
		</form>

		<p>Prikazujem odgovore kao <b>Statistiku</b></p><br><br>
		<table style="width:100%">
			<tr>
				<th>a) 1</th>
				<th>b) 2</th>
				<th>c) 3</th>
				<th>b) 4</th>
				<th>c) 5</th>
			</tr>
			<tr>
				<td>0%</td>
				<td>0%</td>
				<td>5%</td>
				<td>10%</td>
				<td>85%</td>
			</tr>
		</table>
	</article>

	<footer>
		<div>© 2017 Team Product</div>
    </footer>
</body>
</html>