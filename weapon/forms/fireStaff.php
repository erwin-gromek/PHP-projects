<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>FireStaff</title>
</head>
<body>
    <h1>FireStaff</h1>
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
        <label for="fireStaffSkill1">Umiejętność 1:</label><br>
        <input type="text" name="fireStaffSkill1" id="fireStaffSkill1"><br>
        <label for="fireStaffSkill2">Umiejętność 2:</label><br>
        <input type="text" name="fireStaffSkill2" id="fireStaffSkill2"><br>
        <input type="submit" id="submit" value="Utwórz obiekt">
    </form>
    <script type="text/javascript">
        function alertFunction(str){
            location.href="../index.php";
            alert(str);
        }
    </script>
    <?php
        require_once("../classes/FireStaff.php");
        if(!empty($_POST['type'])&&!empty($_POST['name'])&&!empty($_POST['dps'])&&!empty($_POST['aoe_radius'])&&!empty($_POST['element'])&&!empty($_POST['fireStaffSkill1'])&&!empty($_POST['fireStaffSkill2'])){
            $type=$_POST['type'];
            $name=$_POST['name'];
            $dps=$_POST['dps'];
            $aoe_radius=$_POST['aoe_radius'];
            $element=$_POST['element'];
            $fireStaffSkill1=$_POST['fireStaffSkill1'];
            $fireStaffSkill2=$_POST['fireStaffSkill2'];
            $db=mysqli_connect('localhost','root','','zaliczenie');
            $query=mysqli_query($db,"INSERT INTO fireStaff_objects VALUES ('','$type','$name','$dps','$aoe_radius','$element','$fireStaffSkill1','$fireStaffSkill2');");
            mysqli_close($db);
            $fireStaff=new FireStaff($type,$name,$dps,$aoe_radius,$element,$fireStaffSkill1,$fireStaffSkill2);
            echo $fireStaff;
            echo "<script>
            alertFunction('Obiekt FireStaff [type=$type, name=$name, dps=$dps, aoe_radius=$aoe_radius, element=$element, fireStaffSkill1=$fireStaffSkill1, fireStaffSkill2=$fireStaffSkill2] został zapisany');
            </script>";
        }
    ?>
</body>
</html>