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
		<h2>Odgovori na pitanje: Koliko je 2+2?</h2>
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
				<th>a) 4</th>
				<th>b) 5</th>
				<th>c) 10</th>
			</tr>
			<tr>
				<td>80%</td>
				<td>15%</td>
				<td>5%</td>
			</tr>
		</table>
	</article>

	<footer>
		<div>© 2017 Team Product</div>
    </footer>
</body>
</html>