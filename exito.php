<?php

include "pdo.php";
//var_dump($_POST);
// EJERCICIO NUMERO 1 CALSE BIDING

$title = $_POST["titulo"];
$rating = $_POST["rating"];
$awards = $_POST["awards"];
$release_date = $_POST['year'] ."-". $_POST['month'] ."-". $_POST['day'];
$length = $_POST["duracion"];
$genre_id = $_POST["genre"];

$stmt = $db->prepare("INSERT INTO movies VALUES(default, null, null, :title, :rating, :awards, :release_date, :length, :genre_id)"); 


$stmt->bindValue("title", $title);
$stmt->bindValue("rating", $rating);
$stmt->bindValue("awards", $awards);
$stmt->bindValue("release_date", $release_date);
$stmt->bindValue("length", $length);
$stmt->bindValue("genre_id", $genre_id);





$stmt->execute();

Echo "pelicula guardada.";






 ?>
