<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Sword</title>
</head>
<body>
    <h1>Sword</h1>
    <form action="" method="post">
        <label for="type">Typ:</label><br>
        <input type="text" name="type" id="type"><br>
        <label for="name">Nazwa:</label><br>
        <input type="text" name="name" id="name"><br>
        <label for="dps">Obrażenia na sekundę:</label><br>
        <input type="number" name="dps" id="dps" step="0.01"><br>
        <label for="blade_length">Długość ostrza</label><br>
        <input type="number" name="blade_length" id="blade_length" step="0.01"><br>
        <label for="hands_required">Wymagane ręce:</label><br>
        <input type="number" name="hands_required" id="hands_required" min="1" max="2"><br>
        <label for="swordSkill1">Umiejętność 1:</label><br>
        <input type="text" name="swordSkill1" id="swordSkill1"><br>
        <label for="swordSkill2">Umiejętność 2:</label><br>
        <input type="text" name="swordSkill2" id="swordSkill2"><br>
        <input type="submit" id="submit" value="Utwórz obiekt">
    </form>
    <script type="text/javascript">
        function alertFunction(str){
            location.href="../index.php";
            alert(str);
        }
    </script>
    <?php
        require_once("../classes/Sword.php");
        if(!empty($_POST['type'])&&!empty($_POST['name'])&&!empty($_POST['dps'])&&!empty($_POST['blade_length'])&&!empty($_POST['hands_required'])&&!empty($_POST['swordSkill1'])&&!empty($_POST['swordSkill2'])){
            $type=$_POST['type'];
            $name=$_POST['name'];
            $dps=$_POST['dps'];
            $blade_length=$_POST['blade_length'];
            $hands_required=$_POST['hands_required'];
            $swordSkill1=$_POST['swordSkill1'];
            $swordSkill2=$_POST['swordSkill2'];
            $db=mysqli_connect('localhost','root','','zaliczenie');
            $query=mysqli_query($db,"INSERT INTO sword_objects VALUES ('','$type','$name','$dps','$blade_length','$hands_required','$swordSkill1','$swordSkill2');");
            mysqli_close($db);
            $sword=new Sword($type,$name,$dps,$blade_length,$hands_required,$swordSkill1,$swordSkill2);
            echo $sword;
            echo "<script>
            alertFunction('Obiekt Sword [type=$type, name=$name, dps=$dps, blade_length=$blade_length, hands_required=$hands_required, swordSkill1=$swordSkill1, swordSkill2=$swordSkill2] został zapisany');
            </script>";
        }
    ?>
</body>
</html>