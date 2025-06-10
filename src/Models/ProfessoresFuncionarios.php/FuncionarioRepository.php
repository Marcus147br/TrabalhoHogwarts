<?php

namespace App\Model\Funcionario;

class FuncionarioRepository
{
    private array $funcionarios = [];

    public function adicionar(Funcionario $funcionario): void
    {
        $this->funcionarios[] = $funcionario;
    }

    public function listar(): array
    {
        return $this->funcionarios;
    }

    public function buscarPorNome(string $nome): ?Funcionario
    {
        foreach ($this->funcionarios as $funcionario) {
            if (strtolower($funcionario->getNome()) === strtolower($nome)) {
                return $funcionario;
            }
        }
        return null;
    }
}

