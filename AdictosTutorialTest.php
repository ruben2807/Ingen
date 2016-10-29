<?php
/** /mis-proyectos/autentia/php/tutorial/php-unit/test/AdictosTutorialTest.php */

require_once './AdictosTutorial.php';

class AdictosTutorialTest extends PHPUnit_Framework_TestCase {

    public function testReturnGreeting() {
        $adictos = new AdictosTutorial();
        $this->assertEquals('Hola Adictos Al Trabajo !!!', $adictos->greet());
    }
}

?>