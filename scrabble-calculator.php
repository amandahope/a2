<?php

require("tools.php");
require("Form.php");
require("WordGames.php");

use DWA\Form;

$lettersArray = $_GET;

$letter1 = (isset($lettersArray["letter1"][0])) ?
    $lettersArray["letter1"][0] : "";
$letter1Bonus = (isset($lettersArray["letter1"][1])) ?
    $lettersArray["letter1"][1] : "";

$letter2 = (isset($lettersArray["letter2"][0])) ?
    $lettersArray["letter2"][0] : "";
$letter2Bonus = (isset($lettersArray["letter2"][1])) ?
    $lettersArray["letter2"][1] : "";

$letter3 = (isset($lettersArray["letter3"][0])) ?
    $lettersArray["letter3"][0] : "";
$letter3Bonus = (isset($lettersArray["letter3"][1])) ?
    $lettersArray["letter3"][1] : "";

$letter4 = (isset($lettersArray["letter4"][0])) ?
    $lettersArray["letter4"][0] : "";
$letter4Bonus = (isset($lettersArray["letter4"][1])) ?
    $lettersArray["letter4"][1] : "";

$letter5 = (isset($lettersArray["letter5"][0])) ?
    $lettersArray["letter5"][0] : "";
$letter5Bonus = (isset($lettersArray["letter5"][1])) ?
    $lettersArray["letter5"][1] : "";

$letter6 = (isset($lettersArray["letter6"][0])) ?
    $lettersArray["letter6"][0] : "";
$letter6Bonus = (isset($lettersArray["letter6"][1])) ?
    $lettersArray["letter6"][1] : "";

$letter7 = (isset($lettersArray["letter7"][0])) ?
    $lettersArray["letter7"][0] : "";
$letter7Bonus = (isset($lettersArray["letter7"][1])) ?
    $lettersArray["letter7"][1] : "";

$letter8 = (isset($lettersArray["letter8"][0])) ?
    $lettersArray["letter8"][0] : "";
$letter8Bonus = (isset($lettersArray["letter8"][1])) ?
    $lettersArray["letter8"][1] : "";

$errors = "";
$bingo = "";

$letterValueArray = [
    "_" => 0,
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

$form = new Form($_GET);
$wordGames = new WordGames($letterValueArray);

function hasValue($formData) {
    if($formData !="" && !is_null($formData)) {
        return TRUE;
    } else {
        return FALSE;
    }
}

if($form->isSubmitted()) {

    if(!hasValue($_GET["letter1"][0])) {
        $errors = "Scrabble words must be at least two letters long.
            Please enter values for Letter 1 and Letter 2.";
    } elseif(!hasValue($_GET["letter2"][0])) {
        $errors = "Scrabble words must be at least two letters long.
            Please enter values for Letter 1 and Letter 2.";
    }

    if(!$errors) {
        $userWord = trim($form->sanitize($letter1.$letter2.$letter3.$letter4.$letter5.$letter6.
            $letter7.$letter8));
        $bingo = $form->isChosen("bingo");
        $score = $wordGames->calculateScore($lettersArray, $bingo);
        $warnings = $wordGames->generateWarnings($lettersArray, $bingo);
    }
}
