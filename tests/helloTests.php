<?php

require_once("hello_library.php");

class HelloTest extends \PHPUnit_Framework_TestCase
{
    // ...
    
    public function testDefaultNameIsSet()
    {
        // Arrange
        $a = new HelloWorld();

        // Act
        // $b = $a->negate();

        // Assert
        $this->assertEquals("foo", $a->getName());
        // $this->assertEquals(-1, $b->getAmount());
    }

    // ...
}

?>