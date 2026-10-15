<?php
require_once __DIR__ . "/../includes/functions.php";
require_once __DIR__ . '/../login/verifica_user.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Deleta Cupcake</title>
</head>

<body>
    <?php include '../includes/header.php'; ?>
    <h1>Pagina para deletar</h1>
    <form action="" method="post">
        <label for="id">ID: </label>
        <input type="number" name="id" id="id">
        <input type="submit" value="Apagar">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        deletar($conexao, $_POST['id']);
    }
    ?>
    <a href="select.php">Consulta DB</a>
    <?php include '../includes/footer.php'; ?>
</body>

</html>