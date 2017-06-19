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
		<h2>Kreiranje nove ankete</h2>
		<form method="post" action="form-create.php">
			<label for="title">Naslov:</label><input id="title" type="text" name="title" max="50" required>
			<label for="description">Opis:</label><textarea id="description" name="description" maxlength="250"></textarea><br><br>
			<select name="type" required>
				<option value="multiple">Višestruki izbor</option>
				<option value="single">Jednostruki izbor</option>
				<option value="descriptive">Odgovor opisnog tipa</option>
			</select><br><br>
			<input type="radio" id="option1" name="status" value="option1" checked><label for="option1">Option 1</label><br><br>
			<input type="radio" id="newoption" name="status" value="newoption"><label for="newoption">Click to add new option</label><br><br>
			<input type="submit" name="posalji" value="Kreiraj anketu" class="button">
		</form>
	</article>

	<footer>
		<div>© 2017 Team Product</div>
    </footer>
</body>
</html>