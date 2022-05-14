<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Magic</title>
</head>
<body>
    <h1>Magic</h1>
    <form action="" method="post">
        <label for="type">Typ:</label><br>
        <input type="text" name="type" id="type"><br>
        <label for="name">Nazwa:</label><br>
        <input type="text" name="name" id="name"><br>
        <label for="dps">Obrażenia na sekundę:</label><br>
        <input type="number" name="dps" id="dps" step="0.01"><br>
        <label for="aoe_radius">Obszar działania:</label><br>
        <input type="number" name="aoe_radius" id="aoe_radius" step="0.01"><br>
        <label for="element">Żywioł:</label><br>
        <input type="text" name="element" id="element"><br>
        <input type="submit" id="submit" value="Utwórz obiekt">
    </form>
    <script type="text/javascript">
        function alertFunction(str){
            location.href="../index.php";
            alert(str);
        }
    </script>
    <?php
        require_once("../classes/Magic.php");
        if(!empty($_POST['type'])&&!empty($_POST['name'])&&!empty($_POST['dps'])&&!empty($_POST['aoe_radius'])&&!empty($_POST['element'])){
            $type=$_POST['type'];
            $name=$_POST['name'];
            $dps=$_POST['dps'];
            $aoe_radius=$_POST['aoe_radius'];
            $element=$_POST['element'];
            $db=mysqli_connect('localhost','root','','zaliczenie');
            $query=mysqli_query($db,"INSERT INTO magic_objects VALUES ('','$type','$name','$dps','$aoe_radius','$element');");
            mysqli_close($db);
            $magic=new Magic($type,$name,$dps,$aoe_radius,$element);
            echo $magic;
            echo "<script>
            alertFunction('Obiekt Magic [type=$type, name=$name, dps=$dps, aoe_radius=$aoe_radius, element=$element] został zapisany');
            </script>";
        }
    ?>
</body>
</html>