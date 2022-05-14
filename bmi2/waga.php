<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Twój wskaźnik BMI</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
<div id="baner">
<h2>Oblicz wskaźnik BMI</h2>
</div>
<div id="logo">
<img src="wzor.png" alt="liczymy BMI">
</div>
<div id="lewy">
<img src="rys1.png" alt="zrzuć kalorie!">
</div>
<div id="prawy">
<h1>Podaj dane</h1>
<form method="post">
<label for="waga">Waga:</label>
<input type="number" name="waga"></input><br>
<label for="wzrost">Wzrost [cm]:</label>
<input type="number" name="wzrost"></input><br>
<button action="submit">Licz BMI i zapisz wynik</button>
</form>
<?php
	$db=mysqli_connect('localhost','root','','egzamin');
	if(!empty($_POST['waga'])&&!empty($_POST['wzrost'])){
		$waga=$_POST['waga'];
		$wzrost=$_POST['wzrost'];
		$bmi=$waga/($wzrost*$wzrost)*10000;
		echo "Twoja waga: $waga; Twój wzrost: $wzrost \n BMI wynosi: $bmi";
		switch($bmi){
			case $bmi<19:
				$id=1;
				break;
			case $bmi<26:
				$id=2;
				break;
			case $bmi<31:
				$id=3;
				break;
			case $bmi<100:
				$id=4;
				break;
			default:
				break;
		}
		$date=date("Y-m-d");
		$query="INSERT INTO wynik VALUES ('',$id,$date,$bmi);";
		mysqli_query($db,$query);
	}
	mysqli_close($db);
?>
</div>
<div id="glowny">
<table>
	<tr>
		<th>lp.</th>
		<th>Interpretacja</th>
		<th>zaczyna się od...</th>
	</tr>
	<?php
	$db=mysqli_connect('localhost','root','','egzamin');
	$query="SELECT id, informacja, wart_min FROM bmi;";
	$result=mysqli_query($db,$query);
	while($fetch=mysqli_fetch_row($result)){
	echo"<tr>
		<td>$fetch[0]</td>
		<td>$fetch[1]</td>
		<td>$fetch[2]</td>
	</tr>";}
	mysqli_close($db);
	?>
</table>
</div>
<div id="stopka">
Autor: 02261000579
<a href="kw2.jpg">Wynik działania kwerendy 2</a>
</div>
</body>
</html>