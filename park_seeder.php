<?PHP

require 'park_migration.php';

$parks = [
    ['name' => 'Acadia',   'location' => 'Maine', 'date_est' =>  '1919-02-26', 'area' => '47389.67', 'url' => 'https://en.wikipedia.org/wiki/Acadia_National_Park'],
    ['name' => 'Arches',   'location' => 'Utah', 'date_est' => '1929-04-12', 'area' => '76518.98', 'url' => 'https://en.wikipedia.org/wiki/Arches_National_Park'],
    ['name' => 'Badlands',   'location' => 'South Dakota', 'date_est' => '1978-11-10', 'area' => '242755.94', 'url' => 'https://en.wikipedia.org/wiki/Badlands_National_Park'],
    ['name' => 'Big Bend',   'location' => 'Texas', 'date_est' => '1944-06-12', 'area' => '801163.21', 'url' => 'https://en.wikipedia.org/wiki/Big_Bend_National_Park'],
    ['name' => 'Bryce Canyon',   'location' => 'Utah', 'date_est' => '1928-02-25', 'area' => '35835.08', 'url' => 'https://en.wikipedia.org/wiki/Bryce_Canyon_National_Park'],
    ['name' => 'Canyonlands',   'location' => 'Utah', 'date_est' => '1964-09-12', 'area' => '337597.83', 'url' => 'https://en.wikipedia.org/wiki/Canyonlands_National_Park'],
    ['name' => 'Death Valley',   'location' => 'California', 'date_est' => '1994-10-31', 'area' => '3372401.96', 'url' => 'https://en.wikipedia.org/wiki/Death_Valley_National_Park'],
    ['name' => 'Denali',   'location' => 'Alaska', 'date_est' => '1917-02-26', 'area' => '4740911.72', 'url' => 'https://en.wikipedia.org/wiki/Denali_National_Park_and_Preserve'],
    ['name' => 'Everglades',   'location' => 'Florida', 'date_est' => '1934-05-30', 'area' => '1508537.90', 'url' => 'https://en.wikipedia.org/wiki/Everglades_National_Park'],
    ['name' => 'Glacier',   'location' => 'Montana', 'date_est' => '1910-05-11', 'area' => '1013572.41', 'url' => 'https://en.wikipedia.org/wiki/Glacier_National_Park_(U.S.)'],
];

foreach ($parks as $park) {
    $query = "INSERT INTO national_parks (name, location, date_est, area, url) 
    			VALUES ('{$park['name']}', 
	    			'{$park['location']}', 
	    			'{$park['date_est']}', 
	    			'{$park['area']}',
	    			'{$park['url']}')";

    $dbc->exec($query);

    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}