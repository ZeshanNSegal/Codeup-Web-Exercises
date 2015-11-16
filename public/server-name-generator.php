<?php
function pageController()
{

    $adjs = ['funny', 'cute', 'nice', 'clean', 'ferocious', 'small', 'large', 'fantastic', 'sly', 'fancy'];

    $nouns = ['French Canadian', 'Frenchie', 'Scot', 'Brit', 'American', 'Indian', 'Canadian', 'Mexican', 'Brazilian', 'Aussie'];
    $colors = ['red', 'orange', 'yellow', 'green', 'blue'];

    $randomAdjs = array_rand($adjs);
    $randomNouns = array_rand($nouns);
    $randomColor = array_rand($colors); 

    return array(
        'adjs' => $adjs,
        'nouns' => $nouns,
        'colors' => $colors,
        'randomAdjs' => $randomAdjs,
        'randomNouns' => $randomNouns,
        'randomColor' => $randomColor
        );
}
extract(pageController());
?>

<!DOCTYPE html>
<html>
<head>
    <title>Randomizer Name</title>
</head>
<body>
    <h1 style="text-align: center;">Randomizer, Please Describe Someone For Me:</h1>

    <h2 style = "text-transform:uppercase; color:<?= $colors[$randomColor]?>; text-align: center"><?= $adjs[$randomAdjs] . " " . $nouns[$randomNouns]?></h2>
</body>
</html>