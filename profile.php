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
		<h2>Profil korisnika: <?php echo $_SESSION['user'] ?></h2>
		
		<img src="user.jpg">
		<?php
			if ($_SESSION['user'] == 'user')
			{
				echo '<ul style="float:right;text-align:left"><li>Ime: Ivica</li><li>Prezime: Horvat</li><li>Status: Student</li><li></li><br><li>Fakultet: Tehničko Veleučilište u Zagrebu</li><li>Studij: Informatika</li><li>Smjer: Elektroničko poslovanje</li><li></li><br><li>Broj riješenih anketa: 13</li><li>Točnost odgovora: 89.53%</li></ul>';
			}
			else if ($_SESSION['user'] == 'admin')
			{
				echo '<ul style="float:right;text-align:left"><li>Ime: Mia</li><li>Prezime: Čarapina</li><li>Status: Nositelj kolegija</li><li></li><br><li>Fakultet: Tehničko Veleučilište u Zagrebu</li><li>Studij: Informatika</li><li></li><li>Kolegij: Projektno Programiranje</li><br><li>Broj objavljenih anketa: 53</li></ul>';
			}
		?>
	</article>

	<footer>
		<div>© 2017 Team Product</div>
    </footer>
</body>
</html>