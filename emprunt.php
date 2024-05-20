<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <?php
include 'private.php';

$sql="SELECT date_sortie,date_rendu FROM emprunt";
$x = $conn->query($sql);
$table='<table class="table">';
$table.='<thead>';
$table.='<tr>';
$table.='<th>Date sortie</th>';
$table.='<th>Date entrée</th>';
$table.='</tr>';
$table.='</thead>';
$table.='<tbody>';

while($y=$x->fetch_assoc()) {
    $table.= "<tr>";
    $table.= "<td>".$y['date_sortie']."</td>";
    $table.= "<td>".$y['date_rendu']."</td>";
    $table.= "</tr>";
}
$table.='</tbody>';
$table.='</table>';
echo $table;
$conn->close();
    ?>
</body>
</html>