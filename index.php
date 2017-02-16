<?php require('./php/scrabble-calculator.php'); ?>
<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8" />
  <title>Scrabble Word Score Calculator</title>
</head>

<body>
  <h1>Scrabble Word Score Calculator</h1>

  <form method="GET" action="/">
    <label for="word">*Your word:</label>
    <input type="text" name="word" id="word" required />
    <fieldset>
      <legend>Bonus Points:</legend>
      <input type="radio" name="bonus" value="none" id="none" /><label for="none">None</label>
      <input type="radio" name="bonus" value="double" id="double" /><label for="double">Double Word Score</label>
      <input type="radio" name="bonus" value="triple" id="triple" /><label for="triple">Triple Word Score</triple>
    </fieldset>
    <input type="checkbox" name="bingo" value="bingo" id="bingo" /><label for="bingo">This word used all seven tiles.</label>
    <input type="submit" value="Submit" />
  </form>


</body>

</html>
