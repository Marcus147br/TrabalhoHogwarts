<?php
require_once 'Desafio.php';
require_once 'Aluno.php';

class Torneio {
    private string $nome;
    private string $local;
    private array $desafios = [];
    private array $inscritos = [];

    public function __construct(string $nome, string $local) {
        $this->nome = $nome;
        $this->local = $local;
    }

    public function inscreverAluno(Aluno $aluno): void {
        $this->inscritos[] = $aluno;
    }

    public function adicionarDesafio(Desafio $desafio): void {
        $this->desafios[] = $desafio;
    }

    public function calcularPontuacoes(): void {
        foreach ($this->desafios as $desafio) {
            foreach ($desafio->getResultados() as $resultado) {
                $resultado->getAluno()->getCasa()->adicionarPontos($resultado->getPontuacao());
            }
        }
    }
}
