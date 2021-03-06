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

        #for each letter passed in through the form, cycle through
        #array of values until a match is found
        foreach($lettersArray as $letterNumber => $wordLetter) {
            foreach($this->valuesArray as $letter => $value) {
                if($letter == $wordLetter[0]) {

                    #once a match is found, see if the letter has a letter bonus
                    #and if so, multiply before adding value to score
                    if(isset($wordLetter[1])) {
                        if ($wordLetter[1] == "doubleletter") {
                            $score += ($value * 2);
                            break;
                        } elseif ($wordLetter[1] == "tripleletter") {
                            $score += ($value * 3);
                            break;

                        #if no bonus, just add value to score
                        } else {
                            $score += $value;
                            break;
                        }
                    } else {
                        $score += $value;
                        break;

                        #loop ends once match is found

                    }
                }
            }
        }


        #go through form input array again, checking for word scores
        foreach($lettersArray as $letterNumber => $wordLetter) {
            if(isset($wordLetter[1])) {

                #if found, make sure there's a corresponding letter
                if($wordLetter[0]!="") {

                    #if found, multiply score accordingly
                    if($wordLetter[1] == "doubleword") {
                        $score = $score * 2;
                    } elseif($wordLetter[1] == "tripleword") {
                        $score = $score * 3;
                    }
                }
            }
        }

        #add bingo points, if necessary
        if($bingo) {

            #when bingo has been selected, the last item in the array is
            #the bingo, not a letter, so it is removed first
            array_pop($lettersArray);

            #find out how many letters have been entered
            $numberOfLetters = 0;
            foreach($lettersArray as $letterNumber => $wordLetter) {
                if($wordLetter[0]!="") {
                    ++$numberOfLetters;
                }
            }

            #if at least 7, add bingo bonus
            if($numberOfLetters > 6) {
                $score = $score + 50;
            }
        }

        return $score;
    }


    /**
    * Method to generate warnings when invalid bonuses are selected.
    */
    public function generateWarnings($lettersArray, $bingo) {
        $warnings = [];

        #If a bonus has been selected, make sure its corresponding letter
        #has also been selected
        foreach($lettersArray as $letterNumber => $wordLetter) {
            if(isset($wordLetter[1]) && $wordLetter[1] != "none") {

                #If not, issue a warning
                if($wordLetter[0] == "") {
                    $warnings[] = "If you have not selected a letter, you cannot
                    activate a bonus for that letter. Bonus for ".$letterNumber."
                    was not included in the calculation of your score.";
                }
            }
        }

        #If bingo bonus has been selected, check that at least 7 letters
        #were used, and issue a warning if not.
        if($bingo) {

            #when bingo has been selected, the last item in the array is
            #the bingo, not a letter, so it is removed first
            array_pop($lettersArray);

            #find out how many letters have been entered
            $numberOfLetters = 0;
            foreach($lettersArray as $letterNumber => $wordLetter) {
                if($wordLetter[0]!="") {
                    ++$numberOfLetters;
                }
            }

            #if less than 7, issue warning
            if($numberOfLetters < 7) {
                $warnings[] = "To claim a bonus for using all seven tiles,
                    your word must have at least seven letters. Bonus for
                    using all tiles was not included in the calculation of
                    your score.";
            }
        }

        return $warnings;
    }


} # end of class
