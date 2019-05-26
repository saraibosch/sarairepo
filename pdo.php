<?php

$dsn = "mysql:host=localhost;dbname=movies_db;port=3306";
$user = "root";
$pass = "";

try {

$db = new PDO ($dsn, $user, $pass);
//le dice a la base de datos que muestre los errores
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo "todo bien";

} catch (\Exception $e) {
  echo "hubo un error". "<br>";
  echo $e->getMessage();
  exit;

}








 ?>
