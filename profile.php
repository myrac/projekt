<?php
	session_start();
	if (!isset($_SESSION['user']))
	{
		header('Location: index.php');
	}
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
		<h2>Profil korisnika: <?php echo $_SESSION['user'] ?></h2>
		
		<img src="user.jpg">
		<?php
			if ($_SESSION['user'] == 'user')
			{
				echo '<ul style="float:right;text-align:left"><li>Ime: Ivica</li><li>Prezime: Horvat</li><li>Status: Student</li><li></li><br><li>Fakultet: Tehničko Veleučilište u Zagrebu</li><li>Studij: Informatika</li><li>Smjer: Elektroničko poslovanje</li><li></li><br><li>Broj riješenih anketa: 13</li><li>Točnost odgovora: 89.53%</li></ul>';
			}
			else if ($_SESSION['user'] == 'admin')
			{
				echo '<ul style="float:right;text-align:left"><li>Ime: Mirko</li><li>Prezime: Filipović</li><li>Status: Nositelj kolegija</li><li></li><br><li>Fakultet: Tehničko Veleučilište u Zagrebu</li><li>Studij: Informatika</li><li>Smjer: Elektroničko poslovanje</li><li>Kolegij: Projektno Programiranje</li><br><li>Broj objavljenih anketa: 530</li></ul>';
			}
		?>
	</article>

	<footer>
		<div>© 2017 Team Product</div>
    </footer>
</body>
</html>