<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Casino royale - guessing game</title>
</head>
<body>
	<h1>Guess the number!</h1>
	<!-- //TODO # efforts done vs left -->
	<div>
		<h4>Total # Guesses: <?=  $game->attempts; ?></h4>
		<h4># Guesses left: <?= $game->maxGuesses-$game->attempts;?></h4>
	</div>
	<fieldset>
		<form action="" method="post">
			<label for="max-guesses">How many rounds would you like?</label>
				<input type="number" min="1" name="max-guesses" id="max-guesses" value="<?= $game->maxGuesses?>">
				<input type="submit" name="set" value="set">
				<br>
			<label for="user-guess">Type a number between 1 and 10 included:</label>
				<input type="number" name="user-guess" id="user-guess">
				<input type="submit" name="submit" value="Go!">
				<br>
			<p> Result: <?=$game->run()?></p>
		</form>
	</fieldset>

</body>
</html>