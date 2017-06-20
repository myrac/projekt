<?php
	session_start();
	if (!isset($_SESSION['user']))
	{
		header('Location: index.php');
	}
?>
<!DOCTYPE html>
<html>

<?php include 'header.php';?>
	
	<article>
		<h2>Arhiva prijašnjih anketa</h2>
		
		<a href="anketa1.php">Anketa 15.05.2017. - Koliko je 2+2?</a><br><br>
		<a href="anketa2.php">Anketa 21.05.2017. - Koju biste ocjenu dali ovom predmetu?</a><br><br>
		<a href="anketa3.php">Anketa 30.05.2017. - Je li ova tvrdnja istinita (C++)?</a><br><br>
		<a href="anketa4.php">Anketa 10.06.2017. - Je li ova tvrdnja istinita (Java)?</a><br><br>
		<a href="anketa5.php">Anketa 16.06.2017. - Opišite koliko ste zadovoljni sa Projektnim Programiranjem.</a><br>
	</article>

	<footer>
		<div>© 2017 Team Product</div>
    </footer>
</body>
</html>