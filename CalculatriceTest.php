<?php

include 'Calculatrice.php';


use PHPUnit\Framework\TestCase;


class CalculatriceTest extends TestCase {

    public function testAdditionner() {
        $calc = new Calculatrice();
        $result = $calc->addition(15, 25);
        $this->assertEquals(40, $result);
    }

    public function testSoustraction() {
        $calc = new Calculatrice();
        $result = $calc->soustraction(20, 5);
        $this->assertEquals(15, $result);
    }

    public function testMultiplication() {
        $calc = new Calculatrice();
        $result = $calc->multi(5, 25);
        $this->assertEquals(125, $result);
    }

    public function testDivision() {
        $calc = new Calculatrice();
        $result = $calc->divi(25, 5);
        $this->assertEquals(5, $result);
    }

}