<?php

require("tools.php");
require("Form.php");

//check for form submission and set data to a variable

if(isset($_GET["letter1"])) {
  $lettersArray = $_GET;
} else {
  $lettersArray = [
    "letter1" => ["", ""],
    "letter2" => ["", ""],
    "letter3" => ["", ""],
    "letter4" => ["", ""],
    "letter5" => ["", ""]
  ];
}

$bingo = (isset($lettersArray["bingo"])) ? true : false;

$score = 0;

//match each letter to its value and sum the values

$letterValueArray = [
  "A" => 1,
  "B" => 3,
  "C" => 3,
  "D" => 2,
  "E" => 1,
  "F" => 4,
  "G" => 2,
  "H" => 4,
  "I" => 1,
  "J" => 8,
  "K" => 5,
  "L" => 1,
  "M" => 3,
  "N" => 1,
  "O" => 1,
  "P" => 3,
  "Q" => 10,
  "R" => 1,
  "S" => 1,
  "T" => 1,
  "U" => 1,
  "V" => 4,
  "W" => 4,
  "X" => 8,
  "Y" => 4,
  "Z" => 10
];

foreach($lettersArray as $letterNumber => $wordLetter) {
  foreach($letterValueArray as $letter => $value) {
    if($letter == $wordLetter[0]) {
      if(isset($wordLetter[1])) {
        if ($wordLetter[1] == "doubleletter") {
          $score += ($value * 2);
          break;
        } elseif ($wordLetter[1] == "tripleletter") {
          $score += ($value * 3);
          break;
        } else {
          $score += $value;
          break;
        }
      } else {
        $score += $value;
        break;
      }
    }
  }
}

//multiply sum by bonus points, if necessary

foreach($lettersArray as $letterNumber => $wordLetter) {
  if(isset($wordLetter[1])) {
    if($wordLetter[1] == "doubleword") {
      $score = $score * 2;
    } elseif($wordLetter[1] == "tripleword") {
      $score = $score * 3;
    }
  }
}

//add bingo points, if necessary

if($bingo) {
  $score = $score + 50;
}

dump($score);
