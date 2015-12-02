<?PHP

require 'park_migration.php';

$parks = [
    ['name' => 'Acadia',   'location' => 'Maine', 'date_est' =>  '1919-02-26', 'area' => '47389.67'],
    ['name' => 'Arches',   'location' => 'Utah', 'date_est' => '1929-04-12', 'area' => '76518.98'],
    ['name' => 'Badlands',   'location' => 'South Dakota', 'date_est' => '1978-11-10', 'area' => '242755.94'],
    ['name' => 'Big Bend',   'location' => 'Texas', 'date_est' => '1944-06-12', 'area' => '801163.21'],
    ['name' => 'Bryce Canyon',   'location' => 'Utah', 'date_est' => '1928-02-25', 'area' => '35835.08'],
    ['name' => 'Canyonlands',   'location' => 'Utah', 'date_est' => '1964-09-12', 'area' => '337597.83'],
    ['name' => 'Death Valley',   'location' => 'California', 'date_est' => '1994-10-31', 'area' => '3372401.96'],
    ['name' => 'Denali',   'location' => 'Alaska', 'date_est' => '1917-02-26', 'area' => '4740911.72'],
    ['name' => 'Everglades',   'location' => 'Florida', 'date_est' => '1934-05-30', 'area' => '1508537.90'],
    ['name' => 'Glacier',   'location' => 'Montana', 'date_est' => '1910-05-11', 'area' => '1013572.41'],
];

foreach ($parks as $park) {
    $query = "INSERT INTO national_parks (name, location, date_est, area) 
    			VALUES ('{$park['name']}', 
	    			'{$park['location']}', 
	    			'{$park['date_est']}', 
	    			'{$park['area']}')";

    $dbc->exec($query);

    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}