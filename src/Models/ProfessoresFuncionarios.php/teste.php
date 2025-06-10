<?php

require 'vendor/autoload.php';

use App\Model\Funcionario\Funcionario;
use App\Model\Funcionario\Professor;

$funcionarios = [
    new Funcionario('Argus Filch', 'Zelador', 'Administração'),
    new Professor('Minerva McGonagall', 'Professora', 'Transfiguração', ['Transfiguração']),
    new Professor('Severo Snape', 'Professor', 'Poções', ['Poções', 'Defesa Contra as Artes das Trevas']),
];

echo "📋 Lista de Funcionários e Professores:\n";

foreach ($funcionarios as $f) {
    echo "- Nome: {$f->getNome()}\n";
    echo "  Cargo: {$f->getCargo()}\n";
    echo "  Departamento: {$f->getDepartamento()}\n";

    if ($f instanceof Professor) {
        echo "  Disciplinas: " . implode(', ', $f->getDisciplinas()) . "\n";
    }

    echo "\n";
}

$snape = array_filter($funcionarios, fn($f) => $f->getNome() === 'Severo Snape');
if (!empty($snape)) {
    $encontrado = array_values($snape)[0];
    echo "🔍 Encontrado: {$encontrado->getNome()} ({$encontrado->getCargo()})\n";
}
