<?php

function pageController()
{
	$counter = isset($_GET['counter']) ? $_GET['counter'] : 0;
	$up = $counter + 1;
	$down = $counter - 1;

    return array(
    	'counter'	=> $counter,
    	'up' 		=> $up,
    	'down' 		=> $down    
    );  
}

extract(pageController());

?>

<!doctype html>
<html>
    <head>
    	<meta charset="UTF-8">
        <title>Counting</title>
    </head>
    <body>

       <h2> SCORE COUNTER: <?= $counter ?></h2>
     
       		<a href="counter.php?counter=<?= $up; ?>" name='up'> UP </a></br>
       		<a href="counter.php?counter=<?= $down; ?>" name='down'> DOWN </a>
     
	</body>
</html>