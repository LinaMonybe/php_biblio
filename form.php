<?php
include 'private.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prenom = $_POST["prenom"];
    $auteur = $_POST["auteur"];
    $titre = $_POST["titre"];
    $dates = $_POST["dates"];
    $datee = $_POST["datee"];

    $sql = "INSERT INTO abonne (prenom) VALUES ('$prenom')";
    if ($conn->query($sql) === TRUE) {
        $id_abonne = $conn->insert_id;
    } else {
        echo "Error inserting into abonne: " . $conn->error . "<br>";
        exit; 
    }

    $sql2 = "INSERT INTO livre (auteur, titre) VALUES ('$auteur', '$titre')";
    if ($conn->query($sql2) === TRUE) {
        $id_livre = $conn->insert_id;
    } else {
        echo "Error inserting into livre: " . $conn->error . "<br>";
        exit; 
    }

    $sql3 = "INSERT INTO emprunt (id_livre, id_abonne, date_sortie, date_rendu) VALUES ('$id_livre', '$id_abonne', '$dates', '$datee')";
    if ($conn->query($sql3) === TRUE) {
        echo "<script>alert('Record sent successfully');
        window.location.href='index.html';</script>";
    } else {
        echo "Error inserting into emprunt: " . $conn->error . "<br>";
        exit; 
    }
}

$conn->close();
?>
