<?php
$Lowisko = $_POST['lowisko'];
$Data = $_POST['data'];
$Sedzia = $_POST['sedzia'];
$db=mysqli_connect("localhost","root","","wedkarstwo");
$sql="INSERT INTO zawody_wedkarskie (Karty_wedkarskie_id, Lowisko_id, data_zawodow, sedzia)
VALUES (0, $Lowisko, '$Data', '$Sedzia');";
mysqli_query($db,$sql);
mysqli_close($db);
?>