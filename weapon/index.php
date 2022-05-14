<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zaliczenie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="table">
<?php
$db=mysqli_connect('localhost','root','','zaliczenie');
$query=mysqli_query($db,"SELECT * FROM classes");
echo "<table>
<tr>
<th>id</th><th>name</th><th>imgSrc</th><th>title</th><th>level</th><th>parentId</th>
</tr>";
while($row=mysqli_fetch_row($query)){
    echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td></tr>";
}
echo "</table></div><div id='main' style='clear:both;'>";
$imgid=1;
$main_query=mysqli_query($db,"SELECT COUNT(DISTINCT level) FROM classes;");
$main_count=mysqli_fetch_row($main_query);
for($main=1;$main<=$main_count[0];$main++){
    $query=mysqli_query($db,"SELECT COUNT(level) FROM classes WHERE level=$main;");
    $count=mysqli_fetch_row($query);
    $img_query=mysqli_query($db,"SELECT imgSrc FROM classes WHERE level=$main;");
    $form_query=mysqli_query($db,"SELECT name FROM classes WHERE level=$main;");
    echo "<div style='width:100%;height:200px;'>";
    if($main-1<1)
        $query1=mysqli_query($db,"SELECT MIN(id) FROM classes WHERE level=$main");
    else
        $query1=mysqli_query($db,"SELECT MIN(id) FROM classes WHERE level=$main-1");
    $x=mysqli_fetch_row($query1);
    if($main-1<1)
        $query2=mysqli_query($db,"SELECT MAX(id) FROM classes WHERE level=$main");
    else
        $query2=mysqli_query($db,"SELECT MAX(id) FROM classes WHERE level=$main-1");
    $y=mysqli_fetch_row($query2);
    for($j=$x[0];$j<=$y[0];$j++){
        if($main-1<1)
        $query3=mysqli_query($db,"SELECT COUNT(parentId) FROM classes WHERE parentId=$j-1");
        else
        $query3=mysqli_query($db,"SELECT COUNT(parentId) FROM classes WHERE parentId=$j");
        $result=mysqli_fetch_row($query3);
        if($main-1<1)
        $widthQuery=mysqli_query($db,"SELECT COUNT(level) FROM classes WHERE level=$main");
        else
        $widthQuery=mysqli_query($db,"SELECT COUNT(level) FROM classes WHERE level=$main-1");
        $widthResult=mysqli_fetch_row($widthQuery);
        $width=100/$widthResult[0];
        echo "<div style='width:$width%;height:200px;float:left;text-align:center;'>";
        for($k=1;$k<=$result[0];$k++){
            $img=mysqli_fetch_row($img_query);
            $form=mysqli_fetch_row($form_query);
            $imgWidth=100/$result[0];
            echo "<div id='img$imgid' style='width:$imgWidth%;float:left;height:200px;'><a href='forms/$form[0].php'><img src='$img[0]'></a><br>
            <form action='' method='post'>
            <input name='imgChg$imgid' type='file' accept='image/png, image/gif, image/jpeg' value='Wybierz plik'><br><button type='submit'>Zapisz</button></div>
            </form>";
            if(!empty($_POST["imgChg$imgid"])){
                $imgChg=$_POST["imgChg$imgid"];
                $db1=mysqli_connect('localhost','root','','zaliczenie');
                $imgQuery=mysqli_query($db1,"UPDATE classes SET imgSrc='img/$imgChg' WHERE id=$imgid;");
                mysqli_close($db1);
            }
            $imgid++;
        }
        echo "</div>";

    }
    echo "</div>";
}
mysqli_close($db);
?>
</body>
</html>