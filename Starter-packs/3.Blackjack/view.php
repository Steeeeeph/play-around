<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Casino royale - Blackjack</title>
</head>
<body>
   <h1>Blackjack</h1>
   <div class="dealer">
      <h2>Dealer's hand</h2>
      <!-- //TODO Insert images dynamically from php class Deck -->

   </div>
   <div class="user">
      <h2>Your hand</h2>
      <!-- //TODO Insert images dynamically from php class Deck -->
      <?= var_dump($_SESSION) ?>
      <p>Your cards have the value of XX</p> <!--//TODO add dynamical value-->
   </div>
   <h3>Result</h3>
   <form action="" method="post">
      <input type="submit" name="hit" value="Hit">
      <input type="submit" name="stand" value="Stand">
   </form>
</body>
</html>