<?php
namespace App\Controller;

use App\Entity\Aluno;
use App\Entity\Professor;
use App\Entity\Disciplina;
use App\Service\ControleAcademicoService;

class ProfessorController {
    private ControleAcademicoService $servico;

    public function __construct(ControleAcademicoService $servico) {
        $this->servico = $servico;
    }

    public function registrarNota(Aluno $aluno, Disciplina $disciplina, float $valor, Professor $professor) {
        return $this->servico->registrarNota($aluno, $disciplina, $valor, $professor);
    }

    public function registrarOcorrencia(Aluno $aluno, Professor $professor, string $descricao, int $pontos) {
        return $this->servico->registrarOcorrencia($aluno, $professor, $descricao, $pontos);
    }
}
