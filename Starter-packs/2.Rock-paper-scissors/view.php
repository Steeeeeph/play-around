<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Casino royale - rock, paper, scissors</title>
</head>
<body>
	<h1>Rock, paper, scissors...</h1>
	<h2>You: <?=$game->userScore ?></h2>
	<h2>Computer: <?=$game->computerScore ?></h2>

	<fieldset>
		<form method="post">Your pick:</label>
			<select name="user-weapon" id="user-weapon" value="<?= $_POST["user-weapon"] ?>">
				<option value="rock">Rock</option>
				<option value="paper">Paper</option>
				<option value="scissors">Scissors</option>
			</select>
			<input type="submit" name="submit" value="Play">
			<input type="submit" name="reset" value="Reset">
		</form>
		<p> Computer's pick: <?= ucfirst($game->computerWeapon) ?> </p>
		<h3><?= $game->result ?></h3>
	</fieldset>
</body>
</html>