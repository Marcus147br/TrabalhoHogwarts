<?php
namespace App\Service;

use App\Entity\Aluno;
use App\Entity\Disciplina;
use App\Entity\Nota;
use App\Entity\Professor;
use App\Entity\RegistroDisciplinar;

class ControleAcademicoService {
    private array $notas = [];
    private array $registros = [];

    public function registrarNota(Aluno $aluno, Disciplina $disciplina, float $valor, Professor $professor): Nota {
        $nota = new Nota($aluno, $disciplina, $valor, $professor);
        $this->notas[] = $nota;
        return $nota;
    }

    public function registrarOcorrencia(Aluno $aluno, Professor $professor, string $descricao, int $pontos): RegistroDisciplinar {
        $registro = new RegistroDisciplinar($aluno, $professor, $descricao, $pontos);
        $this->registros[] = $registro;
        $aluno->getCasa()->adicionarPontos($pontos);
        return $registro;
    }

    public function getNotas(): array {
        return $this->notas;
    }

    public function getRegistros(): array {
        return $this->registros;
    }
}
