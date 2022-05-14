<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Weapon</title>
</head>
<body>
    <h1>Weapon</h1>
    <form action="" method="post">
        <label for="type">Typ:</label><br>
        <input type="text" name="type" id="type"><br>
        <label for="name">Nazwa:</label><br>
        <input type="text" name="name" id="name"><br>
        <label for="dps">Obrażenia na sekundę:</label><br>
        <input type="number" name="dps" id="dps" step="0.01"><br>
        <input type="submit" id="submit" value="Utwórz obiekt">
    </form>
    <script type="text/javascript">
        function alertFunction(str){
            location.href="../index.php";
            alert(str);
        }
    </script>
    <?php
        require_once("../classes/Weapon.php");
        if(!empty($_POST['type'])&&!empty($_POST['name'])&&!empty($_POST['dps'])){
            $type=$_POST['type'];
            $name=$_POST['name'];
            $dps=$_POST['dps'];
            $db=mysqli_connect('localhost','root','','zaliczenie');
            $query=mysqli_query($db,"INSERT INTO weapon_objects VALUES ('','$type','$name','$dps');");
            mysqli_close($db);
            $weapon=new Weapon($type,$name,$dps);
            echo $weapon;
            echo "<script>
            alertFunction('Obiekt Weapon [type=$type, name=$name, dps=$dps] został zapisany');
            </script>";
        }
    ?>
</body>
</html>

CREATE TABLE weapon_objects(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    type TEXT,
    name TEXT,
    dps FLOAT
);
CREATE TABLE melee_objects(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    type TEXT,
    name TEXT,
    dps FLOAT,
    blade_length float,
    hands_required int
);
CREATE TABLE ranged_objects(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    type TEXT,
    name TEXT,
    dps FLOAT,
    ammunition_type text,
    ammunition_material text
);
CREATE TABLE magic_objects(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    type TEXT,
    name TEXT,
    dps FLOAT,
    aoe_radius float,
    element text
);
CREATE TABLE sword_objects(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    type TEXT,
    name TEXT,
    dps FLOAT,
    blade_length float,
    hands_required int,
    swordSkill1 text,
    swordSkill2 text
);
CREATE TABLE rapier_objects(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    type TEXT,
    name TEXT,
    dps FLOAT,
    blade_length float,
    hands_required int,
    rapierSkill1 text,
    rapierSkill2 text
);
CREATE TABLE firestaff_objects(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    type TEXT,
    name TEXT,
    dps FLOAT,
    aoe_radius float,
    element text,
    firestaffSkill1 text,
    firestaffSkill2 text
);
CREATE TABLE icegauntlet_objects(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    type TEXT,
    name TEXT,
    dps FLOAT,
    aoe_radius float,
    element text,
    icegauntletSkill1 text,
    icegauntletSkill2 text
);
