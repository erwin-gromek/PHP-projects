<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wycieczki i urlopy</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <div id="baner">
        <h1>BIURO PODRÓŻY</h1>
    </div>
    <div id="lewy">
        <h2>KONTAKT</h2>
        <a href="biuro@wycieczki.pl">napisz do nas</a>
        <p>telefon: 555666777</p>
    </div>
    <div id="srodkowy">
        <h2>GALERIA</h2>
        <?php
            $db=mysqli_connect('localhost','root','','egzamin3');
            $query=mysqli_query($db,"SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis ASC;");
            while($row=mysqli_fetch_row($query)){
                echo "<img src='img/$row[0]' alt='$row[1]'>";
            }
            mysqli_close($db);
        ?>
    </div>
    <div id="prawy">
        <h2>PROMOCJE</h2>
        <table>
            <tr>
                <td>Jesień</td><td>Grupa 4+</td><td>Grupa 10+</td>
            </tr>
            <tr>
                <td>5%</td><td>10%</td><td>15%</td>
            </tr>
        </table>
    </div>
    <div id="dane">
        <h2>LISTA WYCIECZEK</h2>
        <?php
            $db=mysqli_connect('localhost','root','','egzamin3');
            $query=mysqli_query($db,"SELECT id, dataWyjazdu, cel, cena FROM wycieczki WHERE dostepna=1;");
            while($row=mysqli_fetch_row($query)){
                echo "$row[0]. $row[1], $row[2], cena: $row[3]<br>";
            }
            mysqli_close($db);
        ?>
    </div>
    <div id="stopka">
        <p>Stronę wykonał: 01234567890</p>
    </div>
</body>
</html>