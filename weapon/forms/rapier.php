<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Rapier</title>
</head>
<body>
    <h1>Rapier</h1>
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
        <label for="rapierSkill1">Umiejętność 1:</label><br>
        <input type="text" name="rapierSkill1" id="rapierSkill1"><br>
        <label for="rapierSkill2">Umiejętność 2:</label><br>
        <input type="text" name="rapierSkill2" id="rapierSkill2"><br>
        <input type="submit" id="submit" value="Utwórz obiekt">
    </form>
    <script type="text/javascript">
        function alertFunction(str){
            location.href="../index.php";
            alert(str);
        }
    </script>
    <?php
        require_once("../classes/Rapier.php");
        if(!empty($_POST['type'])&&!empty($_POST['name'])&&!empty($_POST['dps'])&&!empty($_POST['blade_length'])&&!empty($_POST['hands_required'])&&!empty($_POST['rapierSkill1'])&&!empty($_POST['rapierSkill2'])){
            $type=$_POST['type'];
            $name=$_POST['name'];
            $dps=$_POST['dps'];
            $blade_length=$_POST['blade_length'];
            $hands_required=$_POST['hands_required'];
            $rapierSkill1=$_POST['rapierSkill1'];
            $rapierSkill2=$_POST['rapierSkill2'];
            $db=mysqli_connect('localhost','root','','zaliczenie');
            $query=mysqli_query($db,"INSERT INTO rapier_objects VALUES ('','$type','$name','$dps','$blade_length','$hands_required','$rapierSkill1','$rapierSkill2');");
            mysqli_close($db);
            $rapier=new Rapier($type,$name,$dps,$blade_length,$hands_required,$rapierSkill1,$rapierSkill2);
            echo $rapier;
            echo "<script>
            alertFunction('Obiekt Rapier [type=$type, name=$name, dps=$dps, blade_length=$blade_length, hands_required=$hands_required, rapierSkill1=$rapierSkill1, rapierSkill2=$rapierSkill2] został zapisany');
            </script>";
        }
    ?>
</body>
</html>