<?php 
  require_once("conexao.php");
  $query = $pdo->query("SELECT * from usuarios");
  $res = $query->fetchAll(PDO::FETCH_ASSOC);
  $linhas = @count($res);
  $senha = '123';
  $senha_crip = md5($senha);
  if($linhas == 0){
    $pdo->query("INSERT INTO usuarios SET nome =  '$nome_sistema', email = '$email_sistema', senha = '$senha', senha_cryp = '$senha_crip', nivel = 'Administrador', ativo = 'Sim' ");
  }
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0
  ">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" type="image/x-icon" href="img/pagina-de-login.png">
  <title>Login</title>
</head>

<body>
  <div class="login">
    <div class="form">
      <img class="login_logo" src="img/arrastao-logo.jpg" alt="
      logo arrastao">
      <form method="post" action="autenticar.php">
        <input type="email" name="usuario" placeholder="Seu Email">
        <input type="password" name="senha" placeholder="Senha">
        <button>Login</button>
      </form>
    </div>
  </div>
</body>

</html>