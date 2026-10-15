<?php require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../login/verifica_user.php';
 ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Consulta Cupcake</title>
</head>

<body>
    <?php include '../includes/header.php'; ?>
    <h3>Consulta de Cupcake</h3>
    <form action="" method="post">
        <label for="id">Cupcake ID: </label>
        <input type="number" name="id" id="id">
        <input type="submit" value="Consultar">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        consultar($conexao, $_POST['id']);
    }
    include '../includes/footer.php';
    ?>
</body>

</html>