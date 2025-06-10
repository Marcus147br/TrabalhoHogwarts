<?php
require 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST['nome'];
    $caracteristicas = $_POST['caracteristicas'];

    $stmt = $pdo->prepare("INSERT INTO alunos (nome, caracteristicas) VALUES (?, ?)");
    $stmt->execute([$nome, $caracteristicas]);

    echo "Aluno registrado com sucesso!";
}
?>

<form method="post">
    Nome: <input type="text" name="nome" required><br>
    Características: <textarea name="caracteristicas" required></textarea><br>
    <input type="submit" value="Registrar">
</form>