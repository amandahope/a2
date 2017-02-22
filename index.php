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
      <span class="help-block col-xs-12">Fields marked with * are required.</span>
    </div>

    <div class="row">

      <fieldset class="col-xs-1">
        <legend>*Letter 1:</legend>
        <select name="letter1[]" class="form-control">
          <option value=""></option>
          <option value="BLANK" <?php if($letter1 == "BLANK") echo 'SELECTED'?>>BLANK</option>
          <option value="A" <?php if($letter1 == "A") echo 'SELECTED'?>>A</option>
          <option value="B" <?php if($letter1 == "B") echo 'SELECTED'?>>B</option>
          <option value="C" <?php if($letter1 == "C") echo 'SELECTED'?>>C</option>
          <option value="D" <?php if($letter1 == "D") echo 'SELECTED'?>>D</option>
          <option value="E" <?php if($letter1 == "E") echo 'SELECTED'?>>E</option>
          <option value="F" <?php if($letter1 == "F") echo 'SELECTED'?>>F</option>
          <option value="G" <?php if($letter1 == "G") echo 'SELECTED'?>>G</option>
          <option value="H" <?php if($letter1 == "H") echo 'SELECTED'?>>H</option>
          <option value="I" <?php if($letter1 == "I") echo 'SELECTED'?>>I</option>
          <option value="J" <?php if($letter1 == "J") echo 'SELECTED'?>>J</option>
          <option value="K" <?php if($letter1 == "K") echo 'SELECTED'?>>K</option>
          <option value="L" <?php if($letter1 == "L") echo 'SELECTED'?>>L</option>
          <option value="M" <?php if($letter1 == "M") echo 'SELECTED'?>>M</option>
          <option value="N" <?php if($letter1 == "N") echo 'SELECTED'?>>N</option>
          <option value="O" <?php if($letter1 == "O") echo 'SELECTED'?>>O</option>
          <option value="P" <?php if($letter1 == "P") echo 'SELECTED'?>>P</option>
          <option value="Q" <?php if($letter1 == "Q") echo 'SELECTED'?>>Q</option>
          <option value="R" <?php if($letter1 == "R") echo 'SELECTED'?>>R</option>
          <option value="S" <?php if($letter1 == "S") echo 'SELECTED'?>>S</option>
          <option value="T" <?php if($letter1 == "T") echo 'SELECTED'?>>T</option>
          <option value="U" <?php if($letter1 == "U") echo 'SELECTED'?>>U</option>
          <option value="V" <?php if($letter1 == "V") echo 'SELECTED'?>>V</option>
          <option value="W" <?php if($letter1 == "W") echo 'SELECTED'?>>W</option>
          <option value="X" <?php if($letter1 == "X") echo 'SELECTED'?>>X</option>
          <option value="Y" <?php if($letter1 == "Y") echo 'SELECTED'?>>Y</option>
          <option value="Z" <?php if($letter1 == "Z") echo 'SELECTED'?>>Z</option>
        </select>
        <div class="radio">
          <label for="none1">
            <input type="radio" name="letter1[]" value="none" id="none1" <?php if($letter1Bonus == "none") echo 'CHECKED'?> />No Bonus
          </label>
        </div>
        <div class="radio">
          <label for="doubleletter1">
            <input type="radio" name="letter1[]" value="doubleletter" id="doubleletter1" <?php if($letter1Bonus == "doubleletter") echo 'CHECKED'?> />Letter x2
          </label>
        </div>
        <div class="radio">
          <label for="tripleletter1">
            <input type="radio" name="letter1[]" value="tripleletter" id="tripleletter1" <?php if($letter1Bonus == "tripleletter") echo 'CHECKED'?> />Letter x3
          </label>
        </div>
        <div class="radio">
          <label for="doubleword1">
            <input type="radio" name="letter1[]" value="doubleword" id="doubleword1" <?php if($letter1Bonus == "doubleword") echo 'CHECKED'?> />Word x2
          </label>
        </div>
        <div class="radio">
          <label for="tripleword1">
            <input type="radio" name="letter1[]" value="tripleword" id="tripleword1" <?php if($letter1Bonus == "tripleword") echo 'CHECKED'?> />Word x3
          </label>
        </div>
      </fieldset>

      <fieldset  class="col-xs-1">
        <legend>*Letter 2:</legend>
        <select name="letter2[]" class="form-control">
          <option value=""></option>
          <option value="BLANK" <?php if($letter2 == "BLANK") echo 'SELECTED'?>>BLANK</option>
          <option value="A" <?php if($letter2 == "A") echo 'SELECTED'?>>A</option>
          <option value="B" <?php if($letter2 == "B") echo 'SELECTED'?>>B</option>
          <option value="C" <?php if($letter2 == "C") echo 'SELECTED'?>>C</option>
          <option value="D" <?php if($letter2 == "D") echo 'SELECTED'?>>D</option>
          <option value="E" <?php if($letter2 == "E") echo 'SELECTED'?>>E</option>
          <option value="F" <?php if($letter2 == "F") echo 'SELECTED'?>>F</option>
          <option value="G" <?php if($letter2 == "G") echo 'SELECTED'?>>G</option>
          <option value="H" <?php if($letter2 == "H") echo 'SELECTED'?>>H</option>
          <option value="I" <?php if($letter2 == "I") echo 'SELECTED'?>>I</option>
          <option value="J" <?php if($letter2 == "J") echo 'SELECTED'?>>J</option>
          <option value="K" <?php if($letter2 == "K") echo 'SELECTED'?>>K</option>
          <option value="L" <?php if($letter2 == "L") echo 'SELECTED'?>>L</option>
          <option value="M" <?php if($letter2 == "M") echo 'SELECTED'?>>M</option>
          <option value="N" <?php if($letter2 == "N") echo 'SELECTED'?>>N</option>
          <option value="O" <?php if($letter2 == "O") echo 'SELECTED'?>>O</option>
          <option value="P" <?php if($letter2 == "P") echo 'SELECTED'?>>P</option>
          <option value="Q" <?php if($letter2 == "Q") echo 'SELECTED'?>>Q</option>
          <option value="R" <?php if($letter2 == "R") echo 'SELECTED'?>>R</option>
          <option value="S" <?php if($letter2 == "S") echo 'SELECTED'?>>S</option>
          <option value="T" <?php if($letter2 == "T") echo 'SELECTED'?>>T</option>
          <option value="U" <?php if($letter2 == "U") echo 'SELECTED'?>>U</option>
          <option value="V" <?php if($letter2 == "V") echo 'SELECTED'?>>V</option>
          <option value="W" <?php if($letter2 == "W") echo 'SELECTED'?>>W</option>
          <option value="X" <?php if($letter2 == "X") echo 'SELECTED'?>>X</option>
          <option value="Y" <?php if($letter2 == "Y") echo 'SELECTED'?>>Y</option>
          <option value="Z" <?php if($letter2 == "Z") echo 'SELECTED'?>>Z</option>
        </select>
        <div class="radio">
          <label for="none2">
            <input type="radio" name="letter2[]" value="none" id="none2" <?php if($letter2Bonus == "none") echo 'CHECKED'?> />No Bonus
          </label>
        </div>
        <div class="radio">
          <label for="doubleletter2">
            <input type="radio" name="letter2[]" value="doubleletter" id="doubleletter2" <?php if($letter2Bonus == "doubleletter") echo 'CHECKED'?> />Letter x2
          </label>
        </div>
        <div class="radio">
          <label for="tripleletter2">
            <input type="radio" name="letter2[]" value="tripleletter" id="tripleletter2" <?php if($letter2Bonus == "tripleletter") echo 'CHECKED'?> />Letter x3
          </label>
        </div>
        <div class="radio">
          <label for="doubleword2">
            <input type="radio" name="letter2[]" value="doubleword" id="doubleword2" <?php if($letter2Bonus == "doubleword") echo 'CHECKED'?> />Word x2
          </label>
        </div>
        <div class="radio">
          <label for="tripleword2">
            <input type="radio" name="letter2[]" value="tripleword" id="tripleword2" <?php if($letter2Bonus == "tripleword") echo 'CHECKED'?> />Word x3
          </label>
        </div>
      </fieldset>

      <fieldset  class="col-xs-1">
        <legend>Letter 3:</legend>
        <select name="letter3[]" class="form-control">
          <option value=""></option>
          <option value="BLANK" <?php if($letter3 == "BLANK") echo 'SELECTED'?>>BLANK</option>
          <option value="A" <?php if($letter3 == "A") echo 'SELECTED'?>>A</option>
          <option value="B" <?php if($letter3 == "B") echo 'SELECTED'?>>B</option>
          <option value="C" <?php if($letter3 == "C") echo 'SELECTED'?>>C</option>
          <option value="D" <?php if($letter3 == "D") echo 'SELECTED'?>>D</option>
          <option value="E" <?php if($letter3 == "E") echo 'SELECTED'?>>E</option>
          <option value="F" <?php if($letter3 == "F") echo 'SELECTED'?>>F</option>
          <option value="G" <?php if($letter3 == "G") echo 'SELECTED'?>>G</option>
          <option value="H" <?php if($letter3 == "H") echo 'SELECTED'?>>H</option>
          <option value="I" <?php if($letter3 == "I") echo 'SELECTED'?>>I</option>
          <option value="J" <?php if($letter3 == "J") echo 'SELECTED'?>>J</option>
          <option value="K" <?php if($letter3 == "K") echo 'SELECTED'?>>K</option>
          <option value="L" <?php if($letter3 == "L") echo 'SELECTED'?>>L</option>
          <option value="M" <?php if($letter3 == "M") echo 'SELECTED'?>>M</option>
          <option value="N" <?php if($letter3 == "N") echo 'SELECTED'?>>N</option>
          <option value="O" <?php if($letter3 == "O") echo 'SELECTED'?>>O</option>
          <option value="P" <?php if($letter3 == "P") echo 'SELECTED'?>>P</option>
          <option value="Q" <?php if($letter3 == "Q") echo 'SELECTED'?>>Q</option>
          <option value="R" <?php if($letter3 == "R") echo 'SELECTED'?>>R</option>
          <option value="S" <?php if($letter3 == "S") echo 'SELECTED'?>>S</option>
          <option value="T" <?php if($letter3 == "T") echo 'SELECTED'?>>T</option>
          <option value="U" <?php if($letter3 == "U") echo 'SELECTED'?>>U</option>
          <option value="V" <?php if($letter3 == "V") echo 'SELECTED'?>>V</option>
          <option value="W" <?php if($letter3 == "W") echo 'SELECTED'?>>W</option>
          <option value="X" <?php if($letter3 == "X") echo 'SELECTED'?>>X</option>
          <option value="Y" <?php if($letter3 == "Y") echo 'SELECTED'?>>Y</option>
          <option value="Z" <?php if($letter3 == "Z") echo 'SELECTED'?>>Z</option>
        </select>
        <div class="radio">
          <label for="none3">
            <input type="radio" name="letter3[]" value="none" id="none3" <?php if($letter3Bonus == "none") echo 'CHECKED'?> />No Bonus
          </label>
        </div>
        <div class="radio">
          <label for="doubleletter3">
            <input type="radio" name="letter3[]" value="doubleletter" id="doubleletter3" <?php if($letter3Bonus == "doubleletter") echo 'CHECKED'?> />Letter x2
          </label>
        </div>
        <div class="radio">
          <label for="tripleletter3">
            <input type="radio" name="letter3[]" value="tripleletter" id="tripleletter3" <?php if($letter3Bonus == "tripleletter") echo 'CHECKED'?> />Letter x3
          </label>
        </div>
        <div class="radio">
          <label for="doubleword3">
            <input type="radio" name="letter3[]" value="doubleword" id="doubleword3" <?php if($letter3Bonus == "doubleword") echo 'CHECKED'?> />Word x2
          </label>
        </div>
        <div class="radio">
          <label for="tripleword3">
            <input type="radio" name="letter3[]" value="tripleword" id="tripleword3" <?php if($letter3Bonus == "tripleword") echo 'CHECKED'?> />Word x3
          </label>
        </div>
      </fieldset>

      <fieldset  class="col-xs-1">
        <legend>Letter 4:</legend>
        <select name="letter4[]" class="form-control">
          <option value=""></option>
          <option value="BLANK" <?php if($letter4 == "BLANK") echo 'SELECTED'?>>BLANK</option>
          <option value="A" <?php if($letter4 == "A") echo 'SELECTED'?>>A</option>
          <option value="B" <?php if($letter4 == "B") echo 'SELECTED'?>>B</option>
          <option value="C" <?php if($letter4 == "C") echo 'SELECTED'?>>C</option>
          <option value="D" <?php if($letter4 == "D") echo 'SELECTED'?>>D</option>
          <option value="E" <?php if($letter4 == "E") echo 'SELECTED'?>>E</option>
          <option value="F" <?php if($letter4 == "F") echo 'SELECTED'?>>F</option>
          <option value="G" <?php if($letter4 == "G") echo 'SELECTED'?>>G</option>
          <option value="H" <?php if($letter4 == "H") echo 'SELECTED'?>>H</option>
          <option value="I" <?php if($letter4 == "I") echo 'SELECTED'?>>I</option>
          <option value="J" <?php if($letter4 == "J") echo 'SELECTED'?>>J</option>
          <option value="K" <?php if($letter4 == "K") echo 'SELECTED'?>>K</option>
          <option value="L" <?php if($letter4 == "L") echo 'SELECTED'?>>L</option>
          <option value="M" <?php if($letter4 == "M") echo 'SELECTED'?>>M</option>
          <option value="N" <?php if($letter4 == "N") echo 'SELECTED'?>>N</option>
          <option value="O" <?php if($letter4 == "O") echo 'SELECTED'?>>O</option>
          <option value="P" <?php if($letter4 == "P") echo 'SELECTED'?>>P</option>
          <option value="Q" <?php if($letter4 == "Q") echo 'SELECTED'?>>Q</option>
          <option value="R" <?php if($letter4 == "R") echo 'SELECTED'?>>R</option>
          <option value="S" <?php if($letter4 == "S") echo 'SELECTED'?>>S</option>
          <option value="T" <?php if($letter4 == "T") echo 'SELECTED'?>>T</option>
          <option value="U" <?php if($letter4 == "U") echo 'SELECTED'?>>U</option>
          <option value="V" <?php if($letter4 == "V") echo 'SELECTED'?>>V</option>
          <option value="W" <?php if($letter4 == "W") echo 'SELECTED'?>>W</option>
          <option value="X" <?php if($letter4 == "X") echo 'SELECTED'?>>X</option>
          <option value="Y" <?php if($letter4 == "Y") echo 'SELECTED'?>>Y</option>
          <option value="Z" <?php if($letter4 == "Z") echo 'SELECTED'?>>Z</option>
        </select>
        <div class="radio">
          <label for="none4">
            <input type="radio" name="letter4[]" value="none" id="none4" <?php if($letter4Bonus == "none") echo 'CHECKED'?> />No Bonus
          </label>
        </div>
        <div class="radio">
          <label for="doubleletter4">
            <input type="radio" name="letter4[]" value="doubleletter" id="doubleletter4" <?php if($letter4Bonus == "doubleletter") echo 'CHECKED'?> />Letter x2
          </label>
        </div>
        <div class="radio">
          <label for="tripleletter4">
            <input type="radio" name="letter4[]" value="tripleletter" id="tripleletter4" <?php if($letter4Bonus == "tripleletter") echo 'CHECKED'?> />Letter x3
          </label>
        </div>
        <div class="radio">
          <label for="doubleword4">
            <input type="radio" name="letter4[]" value="doubleword" id="doubleword4" <?php if($letter4Bonus == "doubleword") echo 'CHECKED'?> />Word x2
          </label>
        </div>
        <div class="radio">
          <label for="tripleword4">
            <input type="radio" name="letter4[]" value="tripleword" id="tripleword4" <?php if($letter4Bonus == "tripleword") echo 'CHECKED'?> />Word x3
          </label>
        </div>
      </fieldset>

      <fieldset  class="col-xs-1">
        <legend>Letter 5:</legend>
        <select name="letter5[]" class="form-control">
          <option value=""></option>
          <option value="BLANK" <?php if($letter5 == "BLANK") echo 'SELECTED'?>>BLANK</option>
          <option value="A" <?php if($letter5 == "A") echo 'SELECTED'?>>A</option>
          <option value="B" <?php if($letter5 == "B") echo 'SELECTED'?>>B</option>
          <option value="C" <?php if($letter5 == "C") echo 'SELECTED'?>>C</option>
          <option value="D" <?php if($letter5 == "D") echo 'SELECTED'?>>D</option>
          <option value="E" <?php if($letter5 == "E") echo 'SELECTED'?>>E</option>
          <option value="F" <?php if($letter5 == "F") echo 'SELECTED'?>>F</option>
          <option value="G" <?php if($letter5 == "G") echo 'SELECTED'?>>G</option>
          <option value="H" <?php if($letter5 == "H") echo 'SELECTED'?>>H</option>
          <option value="I" <?php if($letter5 == "I") echo 'SELECTED'?>>I</option>
          <option value="J" <?php if($letter5 == "J") echo 'SELECTED'?>>J</option>
          <option value="K" <?php if($letter5 == "K") echo 'SELECTED'?>>K</option>
          <option value="L" <?php if($letter5 == "L") echo 'SELECTED'?>>L</option>
          <option value="M" <?php if($letter5 == "M") echo 'SELECTED'?>>M</option>
          <option value="N" <?php if($letter5 == "N") echo 'SELECTED'?>>N</option>
          <option value="O" <?php if($letter5 == "O") echo 'SELECTED'?>>O</option>
          <option value="P" <?php if($letter5 == "P") echo 'SELECTED'?>>P</option>
          <option value="Q" <?php if($letter5 == "Q") echo 'SELECTED'?>>Q</option>
          <option value="R" <?php if($letter5 == "R") echo 'SELECTED'?>>R</option>
          <option value="S" <?php if($letter5 == "S") echo 'SELECTED'?>>S</option>
          <option value="T" <?php if($letter5 == "T") echo 'SELECTED'?>>T</option>
          <option value="U" <?php if($letter5 == "U") echo 'SELECTED'?>>U</option>
          <option value="V" <?php if($letter5 == "V") echo 'SELECTED'?>>V</option>
          <option value="W" <?php if($letter5 == "W") echo 'SELECTED'?>>W</option>
          <option value="X" <?php if($letter5 == "X") echo 'SELECTED'?>>X</option>
          <option value="Y" <?php if($letter5 == "Y") echo 'SELECTED'?>>Y</option>
          <option value="Z" <?php if($letter5 == "Z") echo 'SELECTED'?>>Z</option>
        </select>
        <div class="radio">
          <label for="none5">
            <input type="radio" name="letter5[]" value="none" id="none5" <?php if($letter5Bonus == "none") echo 'CHECKED'?> />No Bonus
          </label>
        </div>
        <div class="radio">
          <label for="doubleletter5">
            <input type="radio" name="letter5[]" value="doubleletter" id="doubleletter5" <?php if($letter5Bonus == "doubleletter") echo 'CHECKED'?> />Letter x2
          </label>
        </div>
        <div class="radio">
          <label for="tripleletter5">
            <input type="radio" name="letter5[]" value="tripleletter" id="tripleletter5" <?php if($letter5Bonus == "tripleletter") echo 'CHECKED'?> />Letter x3
          </label>
        </div>
        <div class="radio">
          <label for="doubleword5">
            <input type="radio" name="letter5[]" value="doubleword" id="doubleword5" <?php if($letter5Bonus == "doubleword") echo 'CHECKED'?> />Word x2
          </label>
        </div>
        <div class="radio">
          <label for="tripleword5">
            <input type="radio" name="letter5[]" value="tripleword" id="tripleword5" <?php if($letter5Bonus == "tripleword") echo 'CHECKED'?> />Word x3
          </label>
        </div>
      </fieldset>
    </div>

    <div class="row">
      <div class="checkbox form-group col-xs-12">
        <label for="bingo">
          <input type="checkbox" name="bingo" value="bingo" id="bingo" <?php if($bingo) echo "CHECKED"?> />
          <span class="label-body">This word used all seven tiles.</span>
        </label>
      </div>
    </div>
    <div class="row">
      <div class="form-group col-xs-12">
        <input type="submit" value="Submit" class="btn btn-primary" />
      </div>
    </div>
  </form>

  <?php if($form->isSubmitted()): ?>
    <?php if($errors): ?>
      <div class="alert alert-danger">
        <?php foreach($errors as $error): ?>
          <?=$error?><br />
        <?php endforeach; ?>
      </div>
    <?php else: ?>
      <div class="alert alert-info">Your word is worth <?=$score?> points.</div>
    <?php endif; ?>
  <?php endif; ?>


</body>

</html>
