<?php

class WordGames {

  /**
  * Properties
  */
  private $valuesArray;

  /**
  * Constructor function
  * Allowing the user to pass in letter values makes the class useful
  * for other kinds of word games, such as Words With Friends, which
  * follow a similar concept but assign different values to each letter.
  */
  public function __construct(array $letterValues) {
    $this->valuesArray = $letterValues;
  }

  /**
  * Method to calculate score, including bonuses
  */

  public function calculateScore($lettersArray, $bingo) {

    $score = 0;

    //for each letter passed in through the form, cycle through
    //array of values until a match is found

    foreach($lettersArray as $letterNumber => $wordLetter) {
      foreach($this->valuesArray as $letter => $value) {
        if($letter == $wordLetter[0]) {

          //once a match is found, see if the letter has a letter bonus
          //and if so, multiply before adding value to score

          if(isset($wordLetter[1])) {
            if ($wordLetter[1] == "doubleletter") {
              $score += ($value * 2);
              break;
            } elseif ($wordLetter[1] == "tripleletter") {
              $score += ($value * 3);
              break;

              //if no bonus, just add value to score

            } else {
              $score += $value;
              break;
            }
          } else {
            $score += $value;
            break;

            //loop ends once match is found

          }
        }
      }
    }

    //go through form input array again, checking for word scores

    foreach($lettersArray as $letterNumber => $wordLetter) {
      if(isset($wordLetter[1])) {

        //if found, multiply score accordingly
        
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
    return $score;
  }


} # end of class
