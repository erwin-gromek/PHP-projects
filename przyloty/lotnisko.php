<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Port Lotniczy</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
<div id="baner1">
	<img src="zad5.png" alt="logo lotnisko">

</div>
<div id="baner2">
	<h1>Przyloty</h1>
</div>
<div id="baner3">
	<h3>przydatne linki</h3>
	<a href="kwerendy.txt" target=_blank>Pobierz...</a>
</div>
<div id="glowny">
	<table>
		<tr>
			<th>czas</th>
			<th>kierunek</th>
			<th>numer rejsu</th>
			<th>status</th>
		</tr>
		<?php
		$db=mysqli_connect('localhost','root','','egzamin');
		$query="SELECT czas, kierunek, nr_rejsu, status_lotu FROM przyloty ORDER BY czas ASC;";
		$result=mysqli_query($db,$query);
		while($row=mysqli_fetch_row($result)){
			echo "
			<tr>
				<td>$row[0]</td>
				<td>$row[1]</td>
				<td>$row[2]</td>
				<td>$row[3]</td>
			</tr>
			";
		}
		mysqli_close($db);
		?>
	</table>
</div>
<div id="stopka1">
	<?php
	if(!isset($_COOKIE['first'])){
	setcookie('first','ciastko',time()+7200);
	echo "Dzień dobry! Strona lotniska używa ciasteczek";
	}else{
		echo "<p><i>Witaj ponownie na stronie lotniska</i></p>";
	}
	?>
</div>
<div id="stopka2">
	Autor: 02261000579
</div>
</body>
</html>