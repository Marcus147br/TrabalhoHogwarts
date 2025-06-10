<?php
namespace App\Entity;

class Nota {
    private Aluno $aluno;
    private Disciplina $disciplina;
    private float $valor;
    private Professor $professor;

    public function __construct(Aluno $aluno, Disciplina $disciplina, float $valor, Professor $professor) {
        $this->aluno = $aluno;
        $this->disciplina = $disciplina;
        $this->valor = $valor;
        $this->professor = $professor;
    }

    public function getAluno(): Aluno { return $this->aluno; }
    public function getDisciplina(): Disciplina { return $this->disciplina; }
    public function getValor(): float { return $this->valor; }
    public function getProfessor(): Professor { return $this->professor; }
}
