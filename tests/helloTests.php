<?php

require_once("hello_library.php");

class HelloTest extends \PHPUnit_Framework_TestCase
{
    // ...
    
    public function testDefaultNameIsSet()
    {
        // Arrange
        $a = new HelloWorld();

        // Assert
        $this->assertEquals("foo", $a->getName());
    }

    // ...
}

?>
