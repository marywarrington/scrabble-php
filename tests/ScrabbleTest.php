<!-- testing with php unit, use this template for guidance -->
<?php
    require_once __DIR__ . '/../src/Scrabble.php';

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function test_splitString()
        {
            // Arrange
            $test_Scrabble = new Scrabble;
            $input = "runner";
            // Act
            $result = $test_Scrabble->splitString($input);
            // Assert
            $this->assertEquals(array('r','u','n','n','e','r'), $result);
        }

        function test_playScrabble_findU()
        {
            // Arrange
            $test_Scrabble = new Scrabble;
            $input = "runner";
            // Act
            $result = $test_Scrabble->playScrabble($input);
            // Assert
            $this->assertEquals(1, $result);
        }
    }
 ?>
