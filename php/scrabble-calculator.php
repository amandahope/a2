<?php

require('tools.php');

//check for form submission and set data to variables
$word = (isset($_GET["word"])) ? $_GET["word"] : "";
$bonus = (isset($_GET["bonus"])) ? $_GET["bonus"] : "";
$bingo = (isset($_GET["bingo"])) ? true : false;
$score = 0;

//sanitize text input


//capitalize word and separate into letters
$lettersArray = str_split(strtoupper($word));

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

foreach($lettersArray as $index => $wordLetter) {
  foreach($letterValueArray as $letter => $value) {
    if($letter == $wordLetter) {
      $score += $value;
      break;
    }
  }
}

//multiply sum by bonus points, if necessary

if($bonus == "double") {
  $score = $score * 2;
} elseif ($bonus == "triple") {
  $score = $score * 3;
}

//add bingo points, if necessary

if($bingo == true) {
  $score = $score + 50;
}

dump($score);
