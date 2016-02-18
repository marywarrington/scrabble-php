<?php
  class Scrabble
  {
      function splitString($input)
      {
        return $lettersArray = str_split($input);
      }

      function playScrabble($input)
      {
        $score = 0;
        $lettersArray = str_split($input);
        if (in_array("u", $lettersArray)) {
          $score = $score + 1;
        }
        return $score;
      }
  }

?>
