<?php

namespace App\Model\Funcionario;

class Professor extends Funcionario
{
    private array $disciplinas;

    public function __construct(string $nome, string $cargo, string $departamento, array $disciplinas)
    {
        parent::__construct($nome, cargo: $cargo, departamento: $departamento);
        $this->disciplinas = $disciplinas;
    }

    public function getDisciplinas(): array
    {
        return $this->disciplinas;
    }

    public function adicionarDisciplina(string $disciplina): void
    {
        $this->disciplinas[] = $disciplina;
    }
}

