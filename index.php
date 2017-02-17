<?php require('./php/scrabble-calculator.php'); ?>
<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8" />
  <title>Scrabble Word Score Calculator</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
</head>

<body class="container">
  <h1>Scrabble Word Score Calculator</h1>

  <form method="GET" action="/">
    <div class="row">
      <fieldset class="two columns">
        <legend>Letter 1:</legend>
        <select name="letter1[]">
          <option value=""></option>
          <option value="">BLANK</option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
          <option value="D">D</option>
          <option value="E">E</option>
          <option value="F">F</option>
          <option value="G">G</option>
          <option value="H">H</option>
          <option value="I">I</option>
          <option value="J">J</option>
          <option value="K">K</option>
          <option value="L">L</option>
          <option value="M">M</option>
          <option value="N">N</option>
          <option value="O">O</option>
          <option value="P">P</option>
          <option value="Q">Q</option>
          <option value="R">R</option>
          <option value="S">S</option>
          <option value="T">T</option>
          <option value="U">U</option>
          <option value="V">V</option>
          <option value="W">W</option>
          <option value="X">X</option>
          <option value="Y">Y</option>
          <option value="Z">Z</option>
        </select>
        <label for="none">
          <input type="radio" name="letter1[]" value="none" id="none" />
          <span class="label-body">No Bonus</span>
        </label>
        <label for="doubleletter">
          <input type="radio" name="letter1[]" value="doubleletter" id="doubleletter" />
          <span class="label-body">Double Letter</span>
        </label>
        <label for="tripleletter">
          <input type="radio" name="letter1[]" value="tripleletter" id="tripleletter" />
          <span class="label-body">Triple Letter</span>
        </label>
        <label for="doubleword">
          <input type="radio" name="letter1[]" value="doubleword" id="doubleword" />
          <span class="label-body">Double Word</span>
        </label>
        <label for="tripleword">
          <input type="radio" name="letter1[]" value="tripleword" id="tripleword" />
          <span class="label-body">Triple Word</span>
        </label>
      </fieldset>

      <fieldset class="two columns">
        <legend>Letter 2:</legend>
        <select name="letter2[]">
          <option value=""></option>
          <option value="">BLANK</option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
          <option value="D">D</option>
          <option value="E">E</option>
          <option value="F">F</option>
          <option value="G">G</option>
          <option value="H">H</option>
          <option value="I">I</option>
          <option value="J">J</option>
          <option value="K">K</option>
          <option value="L">L</option>
          <option value="M">M</option>
          <option value="N">N</option>
          <option value="O">O</option>
          <option value="P">P</option>
          <option value="Q">Q</option>
          <option value="R">R</option>
          <option value="S">S</option>
          <option value="T">T</option>
          <option value="U">U</option>
          <option value="V">V</option>
          <option value="W">W</option>
          <option value="X">X</option>
          <option value="Y">Y</option>
          <option value="Z">Z</option>
        </select>
        <label for="none">
          <input type="radio" name="letter2[]" value="none" id="none" />
          <span class="label-body">No Bonus</span>
        </label>
        <label for="doubleletter">
          <input type="radio" name="letter2[]" value="doubleletter" id="doubleletter" />
          <span class="label-body">Double Letter</span>
        </label>
        <label for="tripleletter">
          <input type="radio" name="letter2[]" value="tripleletter" id="tripleletter" />
          <span class="label-body">Triple Letter</span>
        </label>
        <label for="doubleword">
          <input type="radio" name="letter2[]" value="doubleword" id="doubleword" />
          <span class="label-body">Double Word</span>
        </label>
        <label for="tripleword">
          <input type="radio" name="letter2[]" value="tripleword" id="tripleword" />
          <span class="label-body">Triple Word</span>
        </label>
      </fieldset>

      <fieldset class="two columns">
        <legend>Letter 3:</legend>
        <select name="letter3[]">
          <option value=""></option>
          <option value="">BLANK</option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
          <option value="D">D</option>
          <option value="E">E</option>
          <option value="F">F</option>
          <option value="G">G</option>
          <option value="H">H</option>
          <option value="I">I</option>
          <option value="J">J</option>
          <option value="K">K</option>
          <option value="L">L</option>
          <option value="M">M</option>
          <option value="N">N</option>
          <option value="O">O</option>
          <option value="P">P</option>
          <option value="Q">Q</option>
          <option value="R">R</option>
          <option value="S">S</option>
          <option value="T">T</option>
          <option value="U">U</option>
          <option value="V">V</option>
          <option value="W">W</option>
          <option value="X">X</option>
          <option value="Y">Y</option>
          <option value="Z">Z</option>
        </select>
        <label for="none">
          <input type="radio" name="letter3[]" value="none" id="none" />
          <span class="label-body">No Bonus</span>
        </label>
        <label for="doubleletter">
          <input type="radio" name="letter3[]" value="doubleletter" id="doubleletter" />
          <span class="label-body">Double Letter</span>
        </label>
        <label for="tripleletter">
          <input type="radio" name="letter3[]" value="tripleletter" id="tripleletter" />
          <span class="label-body">Triple Letter</span>
        </label>
        <label for="doubleword">
          <input type="radio" name="letter3[]" value="doubleword" id="doubleword" />
          <span class="label-body">Double Word</span>
        </label>
        <label for="tripleword">
          <input type="radio" name="letter3[]" value="tripleword" id="tripleword" />
          <span class="label-body">Triple Word</span>
        </label>
      </fieldset>

      <fieldset class="two columns">
        <legend>Letter 4:</legend>
        <select name="letter4[]">
          <option value=""></option>
          <option value="">BLANK</option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
          <option value="D">D</option>
          <option value="E">E</option>
          <option value="F">F</option>
          <option value="G">G</option>
          <option value="H">H</option>
          <option value="I">I</option>
          <option value="J">J</option>
          <option value="K">K</option>
          <option value="L">L</option>
          <option value="M">M</option>
          <option value="N">N</option>
          <option value="O">O</option>
          <option value="P">P</option>
          <option value="Q">Q</option>
          <option value="R">R</option>
          <option value="S">S</option>
          <option value="T">T</option>
          <option value="U">U</option>
          <option value="V">V</option>
          <option value="W">W</option>
          <option value="X">X</option>
          <option value="Y">Y</option>
          <option value="Z">Z</option>
        </select>
        <label for="none">
          <input type="radio" name="letter4[]" value="none" id="none" />
          <span class="label-body">No Bonus</span>
        </label>
        <label for="doubleletter">
          <input type="radio" name="letter4[]" value="doubleletter" id="doubleletter" />
          <span class="label-body">Double Letter</span>
        </label>
        <label for="tripleletter">
          <input type="radio" name="letter4[]" value="tripleletter" id="tripleletter" />
          <span class="label-body">Triple Letter</span>
        </label>
        <label for="doubleword">
          <input type="radio" name="letter4[]" value="doubleword" id="doubleword" />
          <span class="label-body">Double Word</span>
        </label>
        <label for="tripleword">
          <input type="radio" name="letter4[]" value="tripleword" id="tripleword" />
          <span class="label-body">Triple Word</span>
        </label>
      </fieldset>

      <fieldset class="two columns">
        <legend>Letter 5:</legend>
        <select name="letter5[]">
          <option value=""></option>
          <option value="">BLANK</option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
          <option value="D">D</option>
          <option value="E">E</option>
          <option value="F">F</option>
          <option value="G">G</option>
          <option value="H">H</option>
          <option value="I">I</option>
          <option value="J">J</option>
          <option value="K">K</option>
          <option value="L">L</option>
          <option value="M">M</option>
          <option value="N">N</option>
          <option value="O">O</option>
          <option value="P">P</option>
          <option value="Q">Q</option>
          <option value="R">R</option>
          <option value="S">S</option>
          <option value="T">T</option>
          <option value="U">U</option>
          <option value="V">V</option>
          <option value="W">W</option>
          <option value="X">X</option>
          <option value="Y">Y</option>
          <option value="Z">Z</option>
        </select>
        <label for="none">
          <input type="radio" name="letter5[]" value="none" id="none" />
          <span class="label-body">No Bonus</span>
        </label>
        <label for="doubleletter">
          <input type="radio" name="letter5[]" value="doubleletter" id="doubleletter" />
          <span class="label-body">Double Letter</span>
        </label>
        <label for="tripleletter">
          <input type="radio" name="letter5[]" value="tripleletter" id="tripleletter" />
          <span class="label-body">Triple Letter</span>
        </label>
        <label for="doubleword">
          <input type="radio" name="letter5[]" value="doubleword" id="doubleword" />
          <span class="label-body">Double Word</span>
        </label>
        <label for="tripleword">
          <input type="radio" name="letter5[]" value="tripleword" id="tripleword" />
          <span class="label-body">Triple Word</span>
        </label>
      </fieldset>
    </div>
    <div class="row">
      <label for="bingo">
        <input type="checkbox" name="bingo" value="bingo" id="bingo" />
        <span class="label-body">This word used all seven tiles.</span>
      </label>
    </div>
    <div class="row">
      <input class="button-primary" type="submit" value="Submit" />
    </div>
  </form>


</body>

</html>
