<?php
class Casa {
    private string $nome;
    private int $pontuacao = 0;

    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getPontuacao(): int {
        return $this->pontuacao;
    }

    public function adicionarPontos(int $pontos): void {
        $this->pontuacao += $pontos;
    }
}
