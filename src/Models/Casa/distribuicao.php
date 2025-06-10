<?php
require 'conexao.php';

$stmt = $pdo->query("SELECT casa, COUNT(*) as total FROM alunos GROUP BY casa");

echo "<h3>Distribuição de alunos por casa:</h3>";
echo "<ul>";
while ($row = $stmt->fetch()) {
    echo "<li>" . $row['casa'] . ": " . $row['total'] . " aluno(s)</li>";
}
echo "</ul>";
?>