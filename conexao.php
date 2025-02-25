<?php 

//Definir fuso horário
date_default_timezone_set('America/Sao_Paulo');

//dados conexão bd local
$servidor = 'localhost';
$banco = 'biblioteca';
$usuario = 'root';
$senha = '';

try {
  $pdo = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", "$usuario", "$senha");
} catch (\Throwable $e) {
  echo "Erro ao conectar ao banco de dados! <br>";
  echo $e;
}



?>