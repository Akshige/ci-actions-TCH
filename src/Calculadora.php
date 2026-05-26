<?php

namespace App;

/**
 * Classe Calculadora
 *
 * Realitza operacions aritmètiques bàsiques: suma, resta i divisió.
 *
 * @package App
 * @author Tomás Carcedo Hernández
 * @version 1.0
 */
class Calculadora
{
    /**
     * Suma dos enters.
     *
     * @param int $a Primer operador.
     * @param int $b Segon operador.
     * @return int Resultat de la suma.
     */
    public function suma(int $a, int $b): int
    {
        return $a + $b;
    }

    /**
     * Resta dos enters.
     *
     * @param int $a Primer operador.
     * @param int $b Segon operador.
     * @return int Resultat de la resta.
     */
    public function resta(int $a, int $b): int
    {
        return $a - $b;
    }

    /**
     * Divideix dos nombres (float).
     *
     * @param float $a Dividend.
     * @param float $b Divisor.
     * @return float Resultat de la divisió.
     * @throws \DivisionByZeroError Si el divisor és zero.
     */
    public function divideix(float $a, float $b): float
    {
        if ($b === 0.0) {
            throw new \DivisionByZeroError("No es pot dividir per zero");
        }
        return $a / $b;
    }
}
