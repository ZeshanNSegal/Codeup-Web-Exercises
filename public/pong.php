<?php
require_once('../Input.php');

function pageController()
{
	if (Input::has('gameOver')) {
		$gameOver = Input::get('gameOver');
		return array(
			'gameOver' => $gameOver 
		);
	}

	$counter = Input::has('counter') ? Input::get('counter') : 0;
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