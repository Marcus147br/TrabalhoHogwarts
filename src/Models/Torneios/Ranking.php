<?php
require_once 'Casa.php';

class Ranking {
    public static function gerarRankingCasas(array $casas): array {
        usort($casas, function($a, $b) {
            return $b->getPontuacao() <=> $a->getPontuacao();
        });
        return $casas;
    }
}
