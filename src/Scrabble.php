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
          foreach ($lettersArray as $letter) {
            if (preg_match('/[aeioulnrst]/i', $letter)) {
              $score = $score + 1;
            }
          }

        // if (in_array('/[dg]/i', $lettersArray)) {
        //   foreach ($lettersArray as $letter) {
        //     if ($letter == '/[dg]/i') {
        //       $score = $score + 2;
        //     }
        //   }
        // }
        // if (in_array('/[bcmp]/i', $lettersArray)) {
        //   foreach ($lettersArray as $letter) {
        //     if ($letter == '/[bcmp]/i') {
        //       $score = $score + 3;
        //     }
        //   }
        // }
        // if (in_array('/[fhvwy]/i', $lettersArray)) {
        //   foreach ($lettersArray as $letter) {
        //     if ($letter == '/[fhvwy]/i') {
        //       $score = $score + 4;
        //     }
        //   }
        // }
        // if (in_array('k', $lettersArray)) {
        //   foreach ($lettersArray as $letter) {
        //     if ($letter == 'k') {
        //       $score = $score + 5;
        //     }
        //   }
        // }
        // if (in_array('/[jx]/i', $lettersArray)) {
        //   foreach ($lettersArray as $letter) {
        //     if ($letter == '/[jx]/i') {
        //       $score = $score + 8;
        //     }
        //   }
        // }
        // if (in_array('/[qz]/i', $lettersArray)) {
        //   foreach ($lettersArray as $letter) {
        //     if ($letter == '/[qz]/i') {
        //       $score = $score + 10;
        //     }
        //   }
        // }
        return $score;
      }
  }

?>
