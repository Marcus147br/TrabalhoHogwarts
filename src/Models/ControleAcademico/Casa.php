<?php
namespace App\Entity;

class Casa {
    private int $id;
    private string $nome;
    private int $pontuacao;

    public function __construct(int $id, string $nome, int $pontuacao = 0) {
        $this->id = $id;
        $this->nome = $nome;
        $this->pontuacao = $pontuacao;
    }

    public function getId(): int { return $this->id; }
    public function getNome(): string { return $this->nome; }
    public function getPontuacao(): int { return $this->pontuacao; }

    public function adicionarPontos(int $pontos): void {
        $this->pontuacao += $pontos;
    }
}
