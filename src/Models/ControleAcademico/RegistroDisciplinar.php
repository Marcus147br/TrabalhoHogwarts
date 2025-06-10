<?php
namespace App\Entity;

class RegistroDisciplinar {
    private Aluno $aluno;
    private Professor $professor;
    private string $descricao;
    private int $pontos;
    private \DateTime $data;

    public function __construct(Aluno $aluno, Professor $professor, string $descricao, int $pontos) {
        $this->aluno = $aluno;
        $this->professor = $professor;
        $this->descricao = $descricao;
        $this->pontos = $pontos;
        $this->data = new \DateTime();
    }

    public function getAluno(): Aluno { return $this->aluno; }
    public function getProfessor(): Professor { return $this->professor; }
    public function getDescricao(): string { return $this->descricao; }
    public function getPontos(): int { return $this->pontos; }
    public function getData(): \DateTime { return $this->data; }
}
