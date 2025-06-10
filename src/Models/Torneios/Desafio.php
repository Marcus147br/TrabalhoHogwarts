<?php
require_once 'Resultado.php';

class Desafio {
    private string $titulo;
    private string $descricao;
    private array $resultados = [];

    public function __construct(string $titulo, string $descricao) {
        $this->titulo = $titulo;
        $this->descricao = $descricao;
    }

    public function adicionarResultado(Resultado $resultado): void {
        $this->resultados[] = $resultado;
    }

    public function getResultados(): array {
        return $this->resultados;
    }
}
