<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Odloty samolotów</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
<div id="baner1">
	<h2>Odloty z lotniska</h2>
</div>
<div id="baner2">
	<img src="zad6.png" alt="logotyp">
</div>
<div id="glowny">
	<h4>tabela odlotów</h4>
	<table>
		<tr>
			<th>lp.</th>
			<th>numer rejsu</th>
			<th>czas</th>
			<th>kierunek</th>
			<th>status</th>
		</tr>
		<?php
		$db=mysqli_connect('localhost','root','','egzamin');
		$query="SELECT id, nr_rejsu, czas, kierunek, status_lotu FROM odloty ORDER BY czas DESC;";
		$result=mysqli_query($db,$query);
		while($row=mysqli_fetch_row($result)){
			echo "
			<tr>
				<td>$row[0]</td>
				<td>$row[1]</td>
				<td>$row[2]</td>
				<td>$row[3]</td>
				<td>$row[4]</td>
			</tr>
			";
		}
		mysqli_close($db);
		?>
	</table>
</div>
<div id="stopka1">
	<a href="kw1.jpg" target=_blank>Pobierz obraz</a>
</div>
<div id="stopka2">
	<?php
	if(!isset($_COOKIE['first'])){
	setcookie('first','ciastko',time()+3600);
	echo "Dzień dobry! Sprawdź regulamin naszej strony";
	}else{
		echo "<p><b>Miło, nam, że nas znowu odwiedziłeś</b></p>";
	}
	?>
</div>
<div id="stopka3">
	Autor: 02261000579
</div>
</body>
</html>