<?php
	session_start();
	include('form-anketa.php');
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>TVZ Anketa</title>
	<meta name="description" content="TVZ aplikacija za ankete">
	<meta name="author" content="Team Product">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <nav id="links">
            <ul>
                <li><a href="#">Home</a></li>
				<?php
				if ($_SESSION['user'] == 'user')
				{
					echo '<li><a href="profile.php">' . $_SESSION['user'] . '</a></li><li><a href="anketa.php">Aktivna anketa</a></li><li><a href="logout.php">Odjava</a></li>';
				}
				else if ($_SESSION['user'] == 'admin')
				{
					echo '<li><a href="profile.php">' . $_SESSION['user'] . '</a></li><li><a href="anketa.php">Aktivna anketa</a></li><li><a href="anketanova.php">Kreiranje ankete</a></li><li><a href="arhiva.php">Arhiva</a></li><li><a href="logout.php">Odjava</a></li>';
				}
				else
				{
					echo '<li><a href="login.php">Login</a></li>';
				}
				?>		
            </ul>
        </nav>
    </header>
	
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