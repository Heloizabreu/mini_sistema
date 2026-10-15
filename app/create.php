<?php 
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../login/verifica_user.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/mini_sistema/style/style.css">
    <title>Cadastro Cupcake</title>
</head>
<body>
    <?php include __DIR__  . '/../includes/header.php';?>
    <form action="" method="post">
      <label for="nome">Nome: </label>
      <input type="text" name="nome" id="nome"><br>
      <label for="sabor">Sabor: </label>
      <input type="text" name="sabor" id="sabor"><br>
      <label for="tema">Tema: </label>
      <input type="text" name="tema" id="tema"><br>
      <label for="preco">Preço: </label>
      <input type="number" step="0.01" name="preco" id="preco"><br>
      <label for="disponivel">Disponível: </label>
      <input type="radio" name="disponivel" id="sim" value="Sim">
      <label for="sim">SIM </label>
      <input type="radio" name="disponivel" id="nao" value="Não">
      <label for="nao">NÃO </label><br>
      <input type="reset" value="Limpar">
      <input type="submit" value="Cadastrar">
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD']== "POST"){ 
    var_dump($_POST);
    cadastrar($conexao, $_POST['nome'], $_POST['sabor'], $_POST['tema'], $_POST['preco'], $_POST['disponivel']);
    }
    include __DIR__ . '/../includes/footer.php';
    ?>
</body>
</html>