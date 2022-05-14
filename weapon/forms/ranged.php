<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Ranged</title>
</head>
<body>
    <h1>Ranged</h1>
    <form action="" method="post">
        <label for="type">Typ:</label><br>
        <input type="text" name="type" id="type"><br>
        <label for="name">Nazwa:</label><br>
        <input type="text" name="name" id="name"><br>
        <label for="dps">Obrażenia na sekundę:</label><br>
        <input type="number" name="dps" id="dps" step="0.01"><br>
        <label for="ammunition_type">Typ amunicji:</label><br>
        <input type="text" name="ammunition_type" id="ammunition_type"><br>
        <label for="ammunition_material">Materiał amunicji:</label><br>
        <input type="text" name="ammunition_material" id="ammunition_material"><br>
        <input type="submit" id="submit" value="Utwórz obiekt">
    </form>
    <script type="text/javascript">
        function alertFunction(str){
            location.href="../index.php";
            alert(str);
        }
    </script>
    <?php
        require_once("../classes/Ranged.php");
        if(!empty($_POST['type'])&&!empty($_POST['name'])&&!empty($_POST['dps'])&&!empty($_POST['ammunition_type'])&&!empty($_POST['ammunition_material'])){
            $type=$_POST['type'];
            $name=$_POST['name'];
            $dps=$_POST['dps'];
            $ammunition_type=$_POST['ammunition_type'];
            $ammunition_material=$_POST['ammunition_material'];
            $db=mysqli_connect('localhost','root','','zaliczenie');
            $query=mysqli_query($db,"INSERT INTO ranged_objects VALUES ('','$type','$name','$dps','$ammunition_type','$ammunition_material');");
            mysqli_close($db);
            $ranged=new Ranged($type,$name,$dps,$ammunition_type,$ammunition_material);
            echo $ranged;
            echo "<script>
            alertFunction('Obiekt Ranged [type=$type, name=$name, dps=$dps, ammunition_type=$ammunition_type, ammunition_material=$ammunition_material] został zapisany');
            </script>";
        }
    ?>
</body>
</html>