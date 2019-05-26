<?php
include 'pdo.php';
$stmt = $db->prepare("SELECT first_name, last_name FROM actors;");
$stmt->execute();

$actores = $stmt->fetchAll(PDO::FETCH_ASSOC);



 ?>

<!-- ejercicio numero 4 clase biding -->
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>


   </head>
   <body>

     <h1>actores de base de datos movies</h1>

     <ul>
       <ul>
         <?php foreach ($actores as $actor): ?>
           <li><?= $actor["first_name"] ?> <?= $actor["last_name"] ?></li>
         <?php endforeach; ?>
       </ul>

     </ul>








   </body>
 </html>
