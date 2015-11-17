<?php
require('functions.php');

function pageController()
{
	if (inputHas('gameOver')) {
		$gameOver = inputGet('gameOver');
		return array(
			'gameOver' => $gameOver 
		);
	}

	$counter = inputHas('counter') ? inputGet('counter') : 0;
	$hit = $counter + 1;
	$miss = $counter;

	return array(
		'counter'	=> $counter,
		'hit' 		=> $hit,
		'miss' 		=> $miss 	  
    );  
}

extract(pageController());

?>

<!doctype html>
<html>
    <head>
    	<meta charset="UTF-8">
        <title>PONG</title>
    </head>
    <body>

       	<?php if (isset($gameOver)): ?>
	       		<a href= "ping.php">New Game</a>
       	<?php else: ?>
       		<h2> COUNTER: <?= $counter ?></h2>
       		<a href="ping.php?counter=<?= $hit ?>" name='hit'> HIT </a></br>
       		<a href="ping.php?gameOver=true" name='miss'> MISS </a>	
   		<?php endif; ?>
	</body>
</html>