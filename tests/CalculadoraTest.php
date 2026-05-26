<?php

use PHPUnit\Framework\TestCase;
use App\Calculadora;

/**
 * Tests per a la classe Calculadora.
 *
 * @package App\Tests
 * @author Tomás Carcedo Hernández
 * @version 1.0
 */
class CalculadoraTest extends TestCase
{
    /** @var Calculadora Instància de Calculadora per als tests. */
    private Calculadora $calc;

    /**
     * Configura l'entorn abans de cada test.
     *
     * @return void
     */
    protected function setUp(): void
    {
        $this->calc = new Calculadora();
    }

    /**
     * Test que comprova la suma de dos enters.
     *
     * @return void
     */
    public function testSuma(): void
    {
        $this->assertSame(99, $this->calc->suma(2, 3));
    }

    /**
     * Test que comprova la resta de dos enters.
     *
     * @return void
     */
    public function testResta(): void
    {
        $this->assertSame(-1, $this->calc->resta(2, 3));
    }

    /**
     * Test que comprova la divisió de dos nombres.
     *
     * @return void
     */
    public function testDivideix(): void
    {
        $this->assertEqualsWithDelta(2.5, $this->calc->divideix(5, 2), 0.001);
    }

    /**
     * Test que comprova que es llança una excepció en dividir per zero.
     *
     * @return void
     */
    public function testDivideixPerZero(): void
    {
        $this->expectException(\DivisionByZeroError::class);
        $this->calc->divideix(5, 0);
    }
}
