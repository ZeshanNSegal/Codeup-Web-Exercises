<?php
$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);

foreach ($books as $title => $book) {
		echo $title . PHP_EOL;
		foreach ($book as $info_type => $info) {
			echo $info_type . ": " . $info . PHP_EOL;
		}
}

echo "=================================================" . PHP_EOL;

foreach ($books as $title => $book) {
	if ($book['published'] > 1950) {
		echo $title . PHP_EOL;
		foreach ($book as $info_type => $info) {
			echo $info_type . ": " . $info . PHP_EOL;
		}
	}

echo "=================================================" . PHP_EOL;

foreach ($book as $title => $novel) {
    echo $title . PHP_EOL;
    echo"==============\n";
    foreach($novel as $key => $value) {
        echo "$key: $value\n";
    }
    echo"=====================\n\n";  
}

echo "=================================================" . PHP_EOL;

