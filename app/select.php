<?php
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../login/verifica_user.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Relatorio</title>
</head>

<body>
    <?php include '../includes/header.php'; ?>
    <main>
        <div style="width: 30%; margin:auto; text-align:center; border:1px solid black; border-radius:5px;">
            <h3>Lista completa de alunos:</h3>
            <?php
            listar($conexao);
            ?>
        </div>
    </main>
    <?php include '../includes/footer.php'; ?>
</body>

</html>