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

$sql="SELECT prenom FROM abonne";
$x = $conn->query($sql);
$table='<table class="table">';
$table.='<thead>';
$table.='<tr>';
$table.='<th>PRENOM</th>';
$table.='</tr>';
$table.='</thead>';
$table.='<tbody>';

while($y=$x->fetch_assoc()) {
    $table.= "<tr>";
    $table.= "<td>".$y['prenom']."</td>";
    $table.= "</tr>";
}
$table.='</tbody>';
$table.='</table>';
echo $table;
$conn->close();
    ?>
</body>
</html>