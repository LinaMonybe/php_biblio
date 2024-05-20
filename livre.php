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

$sql="SELECT auteur,titre FROM livre";
$x = $conn->query($sql);
$table='<table class="table">';
$table.='<thead>';
$table.='<tr>';
$table.='<th>Auteur</th>';
$table.='<th>Titre</th>';
$table.='</tr>';
$table.='</thead>';
$table.='<tbody>';

while($y=$x->fetch_assoc()) {
    $table.= "<tr>";
    $table.= "<td>".$y['auteur']."</td>";
    $table.= "<td>".$y['titre']."</td>";
    $table.= "</tr>";
}
$table.='</tbody>';
$table.='</table>';
echo $table;
$conn->close();
    ?>
</body>
</html>