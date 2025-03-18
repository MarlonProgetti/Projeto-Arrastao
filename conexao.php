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

//Variaveis globais
$nome_sistema = 'Nome Sistema';
$email_sistema = 'marlop.dossantos@gmail.com';
$telefone_sistema = '(19)99628-6671';

?>