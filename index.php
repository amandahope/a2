<?php require('scrabble-calculator.php'); ?>
<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8" />
  <title>Scrabble Word Score Calculator</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<body class="container-fluid">
  <h1>Scrabble Word Score Calculator</h1>

  <form method="GET" action="/">
    <div class="row">
      <fieldset class="col-xs-1">
        <legend>Letter 1:</legend>
        <select name="letter1[]" class="form-control">
          <option value=""></option>
          <option value="BLANK" <?php if($lettersArray["letter1"][0] == "BLANK") echo 'SELECTED'?>>BLANK</option>
          <option value="A" <?php if($lettersArray["letter1"][0] == "A") echo 'SELECTED'?>>A</option>
          <option value="B" <?php if($lettersArray["letter1"][0] == "B") echo 'SELECTED'?>>B</option>
          <option value="C" <?php if($lettersArray["letter1"][0] == "C") echo 'SELECTED'?>>C</option>
          <option value="D" <?php if($lettersArray["letter1"][0] == "D") echo 'SELECTED'?>>D</option>
          <option value="E" <?php if($lettersArray["letter1"][0] == "E") echo 'SELECTED'?>>E</option>
          <option value="F" <?php if($lettersArray["letter1"][0] == "F") echo 'SELECTED'?>>F</option>
          <option value="G" <?php if($lettersArray["letter1"][0] == "G") echo 'SELECTED'?>>G</option>
          <option value="H" <?php if($lettersArray["letter1"][0] == "H") echo 'SELECTED'?>>H</option>
          <option value="I" <?php if($lettersArray["letter1"][0] == "I") echo 'SELECTED'?>>I</option>
          <option value="J" <?php if($lettersArray["letter1"][0] == "J") echo 'SELECTED'?>>J</option>
          <option value="K" <?php if($lettersArray["letter1"][0] == "K") echo 'SELECTED'?>>K</option>
          <option value="L" <?php if($lettersArray["letter1"][0] == "L") echo 'SELECTED'?>>L</option>
          <option value="M" <?php if($lettersArray["letter1"][0] == "M") echo 'SELECTED'?>>M</option>
          <option value="N" <?php if($lettersArray["letter1"][0] == "N") echo 'SELECTED'?>>N</option>
          <option value="O" <?php if($lettersArray["letter1"][0] == "O") echo 'SELECTED'?>>O</option>
          <option value="P" <?php if($lettersArray["letter1"][0] == "P") echo 'SELECTED'?>>P</option>
          <option value="Q" <?php if($lettersArray["letter1"][0] == "Q") echo 'SELECTED'?>>Q</option>
          <option value="R" <?php if($lettersArray["letter1"][0] == "R") echo 'SELECTED'?>>R</option>
          <option value="S" <?php if($lettersArray["letter1"][0] == "S") echo 'SELECTED'?>>S</option>
          <option value="T" <?php if($lettersArray["letter1"][0] == "T") echo 'SELECTED'?>>T</option>
          <option value="U" <?php if($lettersArray["letter1"][0] == "U") echo 'SELECTED'?>>U</option>
          <option value="V" <?php if($lettersArray["letter1"][0] == "V") echo 'SELECTED'?>>V</option>
          <option value="W" <?php if($lettersArray["letter1"][0] == "W") echo 'SELECTED'?>>W</option>
          <option value="X" <?php if($lettersArray["letter1"][0] == "X") echo 'SELECTED'?>>X</option>
          <option value="Y" <?php if($lettersArray["letter1"][0] == "Y") echo 'SELECTED'?>>Y</option>
          <option value="Z" <?php if($lettersArray["letter1"][0] == "Z") echo 'SELECTED'?>>Z</option>
        </select>
        <div class="radio">
          <label for="none1">
            <input type="radio" name="letter1[]" value="none" id="none1" <?php if($lettersArray["letter1"][1] == "none") echo 'CHECKED'?> />No Bonus
          </label>
        </div>
        <div class="radio">
          <label for="doubleletter1">
            <input type="radio" name="letter1[]" value="doubleletter" id="doubleletter1" <?php if($lettersArray["letter1"][1] == "doubleletter") echo 'CHECKED'?> />Letter x2
          </label>
        </div>
        <div class="radio">
          <label for="tripleletter1">
            <input type="radio" name="letter1[]" value="tripleletter" id="tripleletter1" <?php if($lettersArray["letter1"][1] == "tripleletter") echo 'CHECKED'?> />Letter x3
          </label>
        </div>
        <div class="radio">
          <label for="doubleword1">
            <input type="radio" name="letter1[]" value="doubleword" id="doubleword1" <?php if($lettersArray["letter1"][1] == "doubleword") echo 'CHECKED'?> />Word x2
          </label>
        </div>
        <div class="radio">
          <label for="tripleword1">
            <input type="radio" name="letter1[]" value="tripleword" id="tripleword1" <?php if($lettersArray["letter1"][1] == "tripleword") echo 'CHECKED'?> />Word x3
          </label>
        </div>
      </fieldset>

      <fieldset  class="col-xs-1">
        <legend>Letter 2:</legend>
        <select name="letter2[]" class="form-control">
          <option value=""></option>
          <option value="BLANK" <?php if($lettersArray["letter2"][0] == "BLANK") echo 'SELECTED'?>>BLANK</option>
          <option value="A" <?php if($lettersArray["letter2"][0] == "A") echo 'SELECTED'?>>A</option>
          <option value="B" <?php if($lettersArray["letter2"][0] == "B") echo 'SELECTED'?>>B</option>
          <option value="C" <?php if($lettersArray["letter2"][0] == "C") echo 'SELECTED'?>>C</option>
          <option value="D" <?php if($lettersArray["letter2"][0] == "D") echo 'SELECTED'?>>D</option>
          <option value="E" <?php if($lettersArray["letter2"][0] == "E") echo 'SELECTED'?>>E</option>
          <option value="F" <?php if($lettersArray["letter2"][0] == "F") echo 'SELECTED'?>>F</option>
          <option value="G" <?php if($lettersArray["letter2"][0] == "G") echo 'SELECTED'?>>G</option>
          <option value="H" <?php if($lettersArray["letter2"][0] == "H") echo 'SELECTED'?>>H</option>
          <option value="I" <?php if($lettersArray["letter2"][0] == "I") echo 'SELECTED'?>>I</option>
          <option value="J" <?php if($lettersArray["letter2"][0] == "J") echo 'SELECTED'?>>J</option>
          <option value="K" <?php if($lettersArray["letter2"][0] == "K") echo 'SELECTED'?>>K</option>
          <option value="L" <?php if($lettersArray["letter2"][0] == "L") echo 'SELECTED'?>>L</option>
          <option value="M" <?php if($lettersArray["letter2"][0] == "M") echo 'SELECTED'?>>M</option>
          <option value="N" <?php if($lettersArray["letter2"][0] == "N") echo 'SELECTED'?>>N</option>
          <option value="O" <?php if($lettersArray["letter2"][0] == "O") echo 'SELECTED'?>>O</option>
          <option value="P" <?php if($lettersArray["letter2"][0] == "P") echo 'SELECTED'?>>P</option>
          <option value="Q" <?php if($lettersArray["letter2"][0] == "Q") echo 'SELECTED'?>>Q</option>
          <option value="R" <?php if($lettersArray["letter2"][0] == "R") echo 'SELECTED'?>>R</option>
          <option value="S" <?php if($lettersArray["letter2"][0] == "S") echo 'SELECTED'?>>S</option>
          <option value="T" <?php if($lettersArray["letter2"][0] == "T") echo 'SELECTED'?>>T</option>
          <option value="U" <?php if($lettersArray["letter2"][0] == "U") echo 'SELECTED'?>>U</option>
          <option value="V" <?php if($lettersArray["letter2"][0] == "V") echo 'SELECTED'?>>V</option>
          <option value="W" <?php if($lettersArray["letter2"][0] == "W") echo 'SELECTED'?>>W</option>
          <option value="X" <?php if($lettersArray["letter2"][0] == "X") echo 'SELECTED'?>>X</option>
          <option value="Y" <?php if($lettersArray["letter2"][0] == "Y") echo 'SELECTED'?>>Y</option>
          <option value="Z" <?php if($lettersArray["letter2"][0] == "Z") echo 'SELECTED'?>>Z</option>
        </select>
        <div class="radio">
          <label for="none2">
            <input type="radio" name="letter2[]" value="none" id="none2" <?php if($lettersArray["letter2"][1] == "none") echo 'CHECKED'?> />No Bonus
          </label>
        </div>
        <div class="radio">
          <label for="doubleletter2">
            <input type="radio" name="letter2[]" value="doubleletter" id="doubleletter2" <?php if($lettersArray["letter2"][1] == "doubleletter") echo 'CHECKED'?> />Letter x2
          </label>
        </div>
        <div class="radio">
          <label for="tripleletter2">
            <input type="radio" name="letter2[]" value="tripleletter" id="tripleletter2" <?php if($lettersArray["letter2"][1] == "tripleletter") echo 'CHECKED'?> />Letter x3
          </label>
        </div>
        <div class="radio">
          <label for="doubleword2">
            <input type="radio" name="letter2[]" value="doubleword" id="doubleword2" <?php if($lettersArray["letter2"][1] == "doubleword") echo 'CHECKED'?> />Word x2
          </label>
        </div>
        <div class="radio">
          <label for="tripleword2">
            <input type="radio" name="letter2[]" value="tripleword" id="tripleword2" <?php if($lettersArray["letter2"][1] == "tripleword") echo 'CHECKED'?> />Word x3
          </label>
        </div>
      </fieldset>

      <fieldset  class="col-xs-1">
        <legend>Letter 3:</legend>
        <select name="letter3[]" class="form-control">
          <option value=""></option>
          <option value="BLANK" <?php if($lettersArray["letter3"][0] == "BLANK") echo 'SELECTED'?>>BLANK</option>
          <option value="A" <?php if($lettersArray["letter3"][0] == "A") echo 'SELECTED'?>>A</option>
          <option value="B" <?php if($lettersArray["letter3"][0] == "B") echo 'SELECTED'?>>B</option>
          <option value="C" <?php if($lettersArray["letter3"][0] == "C") echo 'SELECTED'?>>C</option>
          <option value="D" <?php if($lettersArray["letter3"][0] == "D") echo 'SELECTED'?>>D</option>
          <option value="E" <?php if($lettersArray["letter3"][0] == "E") echo 'SELECTED'?>>E</option>
          <option value="F" <?php if($lettersArray["letter3"][0] == "F") echo 'SELECTED'?>>F</option>
          <option value="G" <?php if($lettersArray["letter3"][0] == "G") echo 'SELECTED'?>>G</option>
          <option value="H" <?php if($lettersArray["letter3"][0] == "H") echo 'SELECTED'?>>H</option>
          <option value="I" <?php if($lettersArray["letter3"][0] == "I") echo 'SELECTED'?>>I</option>
          <option value="J" <?php if($lettersArray["letter3"][0] == "J") echo 'SELECTED'?>>J</option>
          <option value="K" <?php if($lettersArray["letter3"][0] == "K") echo 'SELECTED'?>>K</option>
          <option value="L" <?php if($lettersArray["letter3"][0] == "L") echo 'SELECTED'?>>L</option>
          <option value="M" <?php if($lettersArray["letter3"][0] == "M") echo 'SELECTED'?>>M</option>
          <option value="N" <?php if($lettersArray["letter3"][0] == "N") echo 'SELECTED'?>>N</option>
          <option value="O" <?php if($lettersArray["letter3"][0] == "O") echo 'SELECTED'?>>O</option>
          <option value="P" <?php if($lettersArray["letter3"][0] == "P") echo 'SELECTED'?>>P</option>
          <option value="Q" <?php if($lettersArray["letter3"][0] == "Q") echo 'SELECTED'?>>Q</option>
          <option value="R" <?php if($lettersArray["letter3"][0] == "R") echo 'SELECTED'?>>R</option>
          <option value="S" <?php if($lettersArray["letter3"][0] == "S") echo 'SELECTED'?>>S</option>
          <option value="T" <?php if($lettersArray["letter3"][0] == "T") echo 'SELECTED'?>>T</option>
          <option value="U" <?php if($lettersArray["letter3"][0] == "U") echo 'SELECTED'?>>U</option>
          <option value="V" <?php if($lettersArray["letter3"][0] == "V") echo 'SELECTED'?>>V</option>
          <option value="W" <?php if($lettersArray["letter3"][0] == "W") echo 'SELECTED'?>>W</option>
          <option value="X" <?php if($lettersArray["letter3"][0] == "X") echo 'SELECTED'?>>X</option>
          <option value="Y" <?php if($lettersArray["letter3"][0] == "Y") echo 'SELECTED'?>>Y</option>
          <option value="Z" <?php if($lettersArray["letter3"][0] == "Z") echo 'SELECTED'?>>Z</option>
        </select>
        <div class="radio">
          <label for="none3">
            <input type="radio" name="letter3[]" value="none" id="none3" <?php if($lettersArray["letter3"][1] == "none") echo 'CHECKED'?> />No Bonus
          </label>
        </div>
        <div class="radio">
          <label for="doubleletter3">
            <input type="radio" name="letter3[]" value="doubleletter" id="doubleletter3" <?php if($lettersArray["letter3"][1] == "doubleletter") echo 'CHECKED'?> />Letter x2
          </label>
        </div>
        <div class="radio">
          <label for="tripleletter3">
            <input type="radio" name="letter3[]" value="tripleletter" id="tripleletter3" <?php if($lettersArray["letter3"][1] == "tripleletter") echo 'CHECKED'?> />Letter x3
          </label>
        </div>
        <div class="radio">
          <label for="doubleword3">
            <input type="radio" name="letter3[]" value="doubleword" id="doubleword3" <?php if($lettersArray["letter3"][1] == "doubleword") echo 'CHECKED'?> />Word x2
          </label>
        </div>
        <div class="radio">
          <label for="tripleword3">
            <input type="radio" name="letter3[]" value="tripleword" id="tripleword3" <?php if($lettersArray["letter3"][1] == "tripleword") echo 'CHECKED'?> />Word x3
          </label>
        </div>
      </fieldset>

      <fieldset  class="col-xs-1">
        <legend>Letter 4:</legend>
        <select name="letter4[]" class="form-control">
          <option value=""></option>
          <option value="BLANK" <?php if($lettersArray["letter4"][0] == "BLANK") echo 'SELECTED'?>>BLANK</option>
          <option value="A" <?php if($lettersArray["letter4"][0] == "A") echo 'SELECTED'?>>A</option>
          <option value="B" <?php if($lettersArray["letter4"][0] == "B") echo 'SELECTED'?>>B</option>
          <option value="C" <?php if($lettersArray["letter4"][0] == "C") echo 'SELECTED'?>>C</option>
          <option value="D" <?php if($lettersArray["letter4"][0] == "D") echo 'SELECTED'?>>D</option>
          <option value="E" <?php if($lettersArray["letter4"][0] == "E") echo 'SELECTED'?>>E</option>
          <option value="F" <?php if($lettersArray["letter4"][0] == "F") echo 'SELECTED'?>>F</option>
          <option value="G" <?php if($lettersArray["letter4"][0] == "G") echo 'SELECTED'?>>G</option>
          <option value="H" <?php if($lettersArray["letter4"][0] == "H") echo 'SELECTED'?>>H</option>
          <option value="I" <?php if($lettersArray["letter4"][0] == "I") echo 'SELECTED'?>>I</option>
          <option value="J" <?php if($lettersArray["letter4"][0] == "J") echo 'SELECTED'?>>J</option>
          <option value="K" <?php if($lettersArray["letter4"][0] == "K") echo 'SELECTED'?>>K</option>
          <option value="L" <?php if($lettersArray["letter4"][0] == "L") echo 'SELECTED'?>>L</option>
          <option value="M" <?php if($lettersArray["letter4"][0] == "M") echo 'SELECTED'?> <?php if($lettersArray["letter4"][0] == "Z") echo 'SELECTED'?>>M</option>
          <option value="N" <?php if($lettersArray["letter4"][0] == "N") echo 'SELECTED'?>>N</option>
          <option value="O" <?php if($lettersArray["letter4"][0] == "O") echo 'SELECTED'?>>O</option>
          <option value="P" <?php if($lettersArray["letter4"][0] == "P") echo 'SELECTED'?>>P</option>
          <option value="Q" <?php if($lettersArray["letter4"][0] == "Q") echo 'SELECTED'?>>Q</option>
          <option value="R" <?php if($lettersArray["letter4"][0] == "R") echo 'SELECTED'?>>R</option>
          <option value="S" <?php if($lettersArray["letter4"][0] == "S") echo 'SELECTED'?>>S</option>
          <option value="T" <?php if($lettersArray["letter4"][0] == "T") echo 'SELECTED'?>>T</option>
          <option value="U" <?php if($lettersArray["letter4"][0] == "U") echo 'SELECTED'?>>U</option>
          <option value="V" <?php if($lettersArray["letter4"][0] == "V") echo 'SELECTED'?>>V</option>
          <option value="W" <?php if($lettersArray["letter4"][0] == "W") echo 'SELECTED'?>>W</option>
          <option value="X" <?php if($lettersArray["letter4"][0] == "X") echo 'SELECTED'?>>X</option>
          <option value="Y" <?php if($lettersArray["letter4"][0] == "Y") echo 'SELECTED'?>>Y</option>
          <option value="Z" <?php if($lettersArray["letter4"][0] == "Z") echo 'SELECTED'?>>Z</option>
        </select>
        <div class="radio">
          <label for="none4">
            <input type="radio" name="letter4[]" value="none" id="none4" <?php if($lettersArray["letter4"][1] == "none") echo 'CHECKED'?> />No Bonus
          </label>
        </div>
        <div class="radio">
          <label for="doubleletter4">
            <input type="radio" name="letter4[]" value="doubleletter" id="doubleletter4" <?php if($lettersArray["letter4"][1] == "doubleletter") echo 'CHECKED'?> />Letter x2
          </label>
        </div>
        <div class="radio">
          <label for="tripleletter4">
            <input type="radio" name="letter4[]" value="tripleletter" id="tripleletter4" <?php if($lettersArray["letter4"][1] == "tripleletter") echo 'CHECKED'?> />Letter x3
          </label>
        </div>
        <div class="radio">
          <label for="doubleword4">
            <input type="radio" name="letter4[]" value="doubleword" id="doubleword4" <?php if($lettersArray["letter4"][1] == "doubleword") echo 'CHECKED'?> />Word x2
          </label>
        </div>
        <div class="radio">
          <label for="tripleword4">
            <input type="radio" name="letter4[]" value="tripleword" id="tripleword4" <?php if($lettersArray["letter4"][1] == "tripleword") echo 'CHECKED'?> />Word x3
          </label>
        </div>
      </fieldset>

      <fieldset  class="col-xs-1">
        <legend>Letter 5:</legend>
        <select name="letter5[]" class="form-control">
          <option value=""></option>
          <option value="BLANK" <?php if($lettersArray["letter5"][0] == "BLANK") echo 'SELECTED'?>>BLANK</option>
          <option value="A" <?php if($lettersArray["letter5"][0] == "A") echo 'SELECTED'?>>A</option>
          <option value="B" <?php if($lettersArray["letter5"][0] == "B") echo 'SELECTED'?>>B</option>
          <option value="C" <?php if($lettersArray["letter5"][0] == "C") echo 'SELECTED'?>>C</option>
          <option value="D" <?php if($lettersArray["letter5"][0] == "D") echo 'SELECTED'?>>D</option>
          <option value="E" <?php if($lettersArray["letter5"][0] == "E") echo 'SELECTED'?>>E</option>
          <option value="F" <?php if($lettersArray["letter5"][0] == "F") echo 'SELECTED'?>>F</option>
          <option value="G" <?php if($lettersArray["letter5"][0] == "G") echo 'SELECTED'?>>G</option>
          <option value="H" <?php if($lettersArray["letter5"][0] == "H") echo 'SELECTED'?>>H</option>
          <option value="I" <?php if($lettersArray["letter5"][0] == "I") echo 'SELECTED'?>>I</option>
          <option value="J" <?php if($lettersArray["letter5"][0] == "J") echo 'SELECTED'?>>J</option>
          <option value="K" <?php if($lettersArray["letter5"][0] == "K") echo 'SELECTED'?>>K</option>
          <option value="L" <?php if($lettersArray["letter5"][0] == "L") echo 'SELECTED'?>>L</option>
          <option value="M" <?php if($lettersArray["letter5"][0] == "M") echo 'SELECTED'?>>M</option>
          <option value="N" <?php if($lettersArray["letter5"][0] == "N") echo 'SELECTED'?>>N</option>
          <option value="O" <?php if($lettersArray["letter5"][0] == "O") echo 'SELECTED'?>>O</option>
          <option value="P" <?php if($lettersArray["letter5"][0] == "P") echo 'SELECTED'?>>P</option>
          <option value="Q" <?php if($lettersArray["letter5"][0] == "Q") echo 'SELECTED'?>>Q</option>
          <option value="R" <?php if($lettersArray["letter5"][0] == "R") echo 'SELECTED'?>>R</option>
          <option value="S" <?php if($lettersArray["letter5"][0] == "S") echo 'SELECTED'?>>S</option>
          <option value="T" <?php if($lettersArray["letter5"][0] == "T") echo 'SELECTED'?>>T</option>
          <option value="U" <?php if($lettersArray["letter5"][0] == "U") echo 'SELECTED'?>>U</option>
          <option value="V" <?php if($lettersArray["letter5"][0] == "V") echo 'SELECTED'?>>V</option>
          <option value="W" <?php if($lettersArray["letter5"][0] == "W") echo 'SELECTED'?>>W</option>
          <option value="X" <?php if($lettersArray["letter5"][0] == "X") echo 'SELECTED'?>>X</option>
          <option value="Y" <?php if($lettersArray["letter5"][0] == "Y") echo 'SELECTED'?>>Y</option>
          <option value="Z" <?php if($lettersArray["letter5"][0] == "Z") echo 'SELECTED'?>>Z</option>
        </select>
        <div class="radio">
          <label for="none5">
            <input type="radio" name="letter5[]" value="none" id="none5" <?php if($lettersArray["letter5"][1] == "none") echo 'CHECKED'?> />No Bonus
          </label>
        </div>
        <div class="radio">
          <label for="doubleletter5">
            <input type="radio" name="letter5[]" value="doubleletter" id="doubleletter5" <?php if($lettersArray["letter5"][1] == "doubleletter") echo 'CHECKED'?> />Letter x2
          </label>
        </div>
        <div class="radio">
          <label for="tripleletter5">
            <input type="radio" name="letter5[]" value="tripleletter" id="tripleletter5" <?php if($lettersArray["letter5"][1] == "tripleletter") echo 'CHECKED'?> />Letter x3
          </label>
        </div>
        <div class="radio">
          <label for="doubleword5">
            <input type="radio" name="letter5[]" value="doubleword" id="doubleword5" <?php if($lettersArray["letter5"][1] == "doubleword") echo 'CHECKED'?> />Word x2
          </label>
        </div>
        <div class="radio">
          <label for="tripleword5">
            <input type="radio" name="letter5[]" value="tripleword" id="tripleword5" <?php if($lettersArray["letter5"][1] == "tripleword") echo 'CHECKED'?> />Word x3
          </label>
        </div>
      </fieldset>
    </div>

    <div class="row">
      <div class="checkbox form-group">
        <label for="bingo">
          <input type="checkbox" name="bingo" value="bingo" id="bingo" <?php if($bingo) echo "CHECKED"?> />
          <span class="label-body">This word used all seven tiles.</span>
        </label>
      </div>
    </div>
    <div class="row">
      <div class="form-group">
        <input type="submit" value="Submit" class="btn btn-primary" />
      </div>
    </div>
  </form>


</body>

</html>
