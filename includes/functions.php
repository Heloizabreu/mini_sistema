<?php
require_once __DIR__ . '/../database/connect.php';

function cadastrar($conexao, $nome, $sabor, $tema, $preco, $disponivel)
{
    $sql = "INSERT INTO cupcakes (nome, sabor, tema, preco, disponivel) VALUES (:nome, :sabor, :tema, :preco, :disponivel)";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":sabor", $sabor);
    $stmt->bindParam(":tema", $tema);
    $stmt->bindParam(":preco", $preco);
    $stmt->bindParam(":disponivel", $disponivel);

    $stmt->execute();
    echo "Cupcake cadastrado com sucesso!";
}

function deletar($conexao, $id)
{
    $sql = "DELETE FROM cupcakes WHERE id = :id";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    echo "Registro $id deletado.";
}

function listar($conexao)
{
    $sql = "SELECT * FROM cupcakes";

    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    $cupcakes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($cupcakes as $cupcake) {
        echo "<hr>";
        echo "<img src='/mini_sistema/imagens/{$cupcake['id']}.png' alt='{$cupcake['nome']}' width='150'><br>";
        echo "ID: {$cupcake['id']}<br>";
        echo "Nome: {$cupcake['nome']}<br>";
        echo "Sabor: {$cupcake['sabor']}<br>";
        echo "Tema: {$cupcake['tema']}<br>";
        echo "Preço: R$ {$cupcake['preco']}<br>";
        echo "Disponível: {$cupcake['disponivel']}<br>";
    }
}

function consultar($conexao, $id)
{
    $sql = "SELECT nome, sabor, tema, preco, disponivel FROM cupcakes WHERE id = :id";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    $cupcake = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($cupcake) {
        echo "<img src='/mini_sistema/imagens/{$id}.png' alt='{$cupcake['nome']}' width='200'><br>";
        echo "Cupcake: {$cupcake['nome']}<br> Sabor: {$cupcake['sabor']}<br> Tema: {$cupcake['tema']}<br> Preço: R$ {$cupcake['preco']}<br> Disponível: {$cupcake['disponivel']}<br>";
    }
}

function atualizar($conexao, $id, $nome, $sabor, $tema, $preco, $disponivel)
{
    $sql = "UPDATE cupcakes SET nome = :nome , sabor = :sabor , tema = :tema , preco = :preco , disponivel = :disponivel WHERE id = :id";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":sabor", $sabor);
    $stmt->bindParam(":tema", $tema);
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":preco", $preco);
    $stmt->bindParam(":disponivel", $disponivel);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
}

//Funções para sistema de login:

function cadastrar_user($conexao, $email, $senha)
{
    $sql = "INSERT INTO usuarios (email, senha) VALUES (:email, :senha)";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":senha", $senha);

    $stmt->execute();
    echo "Usuário cadastrado com sucesso!";
}

function consulta_user($conexao, $email)
{
    $sql = "SELECT id, email, senha FROM usuarios WHERE email = :email";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    return $usuario;
}