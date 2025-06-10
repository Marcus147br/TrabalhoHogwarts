<?php
require_once 'Aluno.php';

class Resultado {
    private Aluno $aluno;
    private int $pontuacao;

    public function __construct(Aluno $aluno, int $pontuacao) {
        $this->aluno = $aluno;
        $this->pontuacao = $pontuacao;
    }

    public function getAluno(): Aluno {
        return $this->aluno;
    }

    public function getPontuacao(): int {
        return $this->pontuacao;
    }
}
