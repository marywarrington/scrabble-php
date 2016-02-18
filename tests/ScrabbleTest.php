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

        function test_playScrabble_findOne()
        {
            // Arrange
            $test_Scrabble = new Scrabble;
            $input1 = "a";
            $input2 = "nn";
            // Act
            $result1 = $test_Scrabble->playScrabble($input1);
            $result2 = $test_Scrabble->playScrabble($input2);
            // Assert
            $this->assertEquals(1, $result1);
            $this->assertEquals(2, $result2);
        }

        function test_playScrabble_fullWords()
        {
            // Arrange
            $test_Scrabble = new Scrabble;
            $input1 = "zebra";
            $input2 = "cheese";
            // Act
            $result1 = $test_Scrabble->playScrabble($input1);
            $result2 = $test_Scrabble->playScrabble($input2);
            // Assert
            $this->assertEquals(16, $result1);
            $this->assertEquals(11, $result2);
        }
    }
 ?>
