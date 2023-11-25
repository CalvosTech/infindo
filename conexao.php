<?php
session_start();
$servername = "localhost:3306";
$username = "root";
$password = "";

global $conn;

try {
  $conn = new PDO("mysql:host=$servername;dbname=db_infindo", $username, $password);
// set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// echo "Conectado com sucesso ao banco de dados";
} catch(PDOException $e) {
  echo "Falha na conexão: " . $e->getMessage();
}
?>