<?php
require 'conexao.php';

function escolherCasaAleatoria() {
    $casas = ['Grifinória', 'Sonserina', 'Corvinal', 'Lufa-Lufa'];
    return $casas[array_rand($casas)];
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['id'];
    $casa = escolherCasaAleatoria();

    $stmt = $pdo->prepare("UPDATE alunos SET casa = ? WHERE id = ?");
    $stmt->execute([$casa, $id]);

    echo "Aluno alocado na casa: $casa";
}
?>

<form method="post">
    ID do aluno: <input type="number" name="id" required><br>
    <input type="submit" value="Sortear Casa">
</form>