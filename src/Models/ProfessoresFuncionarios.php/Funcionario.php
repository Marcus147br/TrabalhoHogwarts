<?php

namespace App\Model\Funcionario;

class Funcionario
{
    protected string $nome;
    protected string $cargo;
    protected string $departamento;

    public function __construct(string $nome, string $cargo, string $departamento)
    {
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->departamento = $departamento;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCargo(): string
    {
        return $this->cargo;
    }

    public function getDepartamento(): string
    {
        return $this->departamento;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setCargo(string $cargo): void
    {
        $this->cargo = $cargo;
    }

    public function setDepartamento(string $departamento): void
    {
        $this->departamento = $departamento;
    }
}
 
