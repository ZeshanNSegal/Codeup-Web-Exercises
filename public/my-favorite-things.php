<?php

function pageController()
{
	$faveTunes = 
	[
				'Wu-Tang Clan', 
				'DipSet', 
				'KOL', 
				'LCD Soundsytem', 
				'Modest Mouse', 
				'Kanye West', 
				'Leon Bridges'
	];

	return array 
	(
		'faveTunes' => $faveTunes
	);
}

extract(pageController());
?>

<!DOCTYPE html>
<html>
<head>
    <title>Favorite JAMZ</title>
    <link rel="stylesheet" href="/favTunes.css">
</head>
<body>

   <h1>My Favorite JAMZ:</h1>

   <ul>
		<?php foreach($faveTunes as $fave): ?>
			<li class="list-items"><?= $fave; ?></li>
		<?php endforeach; ?>
	</ul>

</body>
</html>