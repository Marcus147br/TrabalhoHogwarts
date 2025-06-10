<?php
namespace App\Entity;

class Aluno {
    private int $id;
    private string $nome;
    private Casa $casa;

    public function __construct(int $id, string $nome, Casa $casa) {
        $this->id = $id;
        $this->nome = $nome;
        $this->casa = $casa;
    }

    public function getId(): int { return $this->id; }
    public function getNome(): string { return $this->nome; }
    public function getCasa(): Casa { return $this->casa; }
}
