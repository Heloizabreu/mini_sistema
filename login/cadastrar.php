<?php 
require_once __DIR__ . '/../includes/functions.php';
//require_once __DIR__ . '/verifica_user.php';
;?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Cadastro Usuario</title>
</head>
<body>
    <?php include '../includes/header.php';?>
    <main>
        <h1>Cadastre-se</h1>
        <form action="" method="post">
            <label for="email">E-mail: </label>
            <input type="email" name="email" id="email" required><br>
            <label for="senha">Senha: </label>
            <input type="password" name="senha" id="senha" required><br>
            <input type="submit" value="Cadastrar">
        </form>
        <?php 
        if($_SERVER['REQUEST_METHOD']=="POST"){
            cadastrar_user($conexao, $_POST['email'], $_POST['senha']);
        }
        ?>
    </main>
    <?php include '../includes/footer.php';?>
</body>
</html>