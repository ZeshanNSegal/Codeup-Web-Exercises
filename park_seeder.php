<?PHP

require 'park_migration.php';

$parks = [
    ['name' => 'Acadia',   'location' => 'Maine', 'date_est' =>  '1919-02-26', 'area' => '47389.67', 'url' => 'https://en.wikipedia.org/wiki/Acadia_National_Park', 'description' => 'Acadia National Park is a 47,000-acre Atlantic coast recreation area primarily on Maine\'s Mount Desert Island. Its landscape is marked by woodland, rocky beaches and glacier-scoured granite peaks like Cadillac Mountain, the highest point on the United States’ East Coast. Among the wildlife are moose, bear, whales and seabirds. The bayside town of Bar Harbor, with restaurants and shops, is a popular gateway.'],
    
    ['name' => 'Arches',   'location' => 'Utah', 'date_est' => '1929-04-12', 'area' => '76518.98', 'url' => 'https://en.wikipedia.org/wiki/Arches_National_Park', 'description' => 'Arches National Park is a US National Park in eastern Utah. The park is located on the Colorado River 4 miles north of Moab, Utah.'],

    ['name' => 'Badlands',   'location' => 'South Dakota', 'date_est' => '1978-11-10', 'area' => '242755.94', 'url' => 'https://en.wikipedia.org/wiki/Badlands_National_Park','description' => 'Badlands National Park is a national park in southwestern South Dakota that protects 242,756 acres of sharply eroded buttes, pinnacles, and spires blended with the largest undisturbed mixed grass prairie in the United States.'],

    ['name' => 'Big Bend',   'location' => 'Texas', 'date_est' => '1944-06-12', 'area' => '801163.21', 'url' => 'https://en.wikipedia.org/wiki/Big_Bend_National_Park','description' => 'Big Bend National Park in the U.S. state of Texas has national significance as the largest protected area of Chihuahuan Desert topography and ecology in the United States.'],

    ['name' => 'Bryce Canyon',   'location' => 'Utah', 'date_est' => '1928-02-25', 'area' => '35835.08', 'url' => 'https://en.wikipedia.org/wiki/Bryce_Canyon_National_Park','description' => 'Bryce Canyon National Park, a sprawling reserve in southern Utah, is known for its crimson-colored hoodoos, or spire-shaped rock formations. The park’s main road leads past the expansive Bryce Amphitheater, a hoodoo-filled depression lying below the Rim Trail hiking path. It has overlooks at Sunrise Point, Sunset Point, Inspiration Point and Bryce Point. Prime viewing times are around sunup and sundown.'],

    ['name' => 'Canyonlands',   'location' => 'Utah', 'date_est' => '1964-09-12', 'area' => '337597.83', 'url' => 'https://en.wikipedia.org/wiki/Canyonlands_National_Park','description' => 'Canyonlands National Park is a U.S. National Park located in southeastern Utah near the town of Moab.'],

    ['name' => 'Death Valley',   'location' => 'California', 'date_est' => '1994-10-31', 'area' => '3372401.96', 'url' => 'https://en.wikipedia.org/wiki/Death_Valley_National_Park','description' => 'Death Valley National Park is a national park in the U.S. states of California and Nevada that is located east of the Sierra Nevada, occupying an interface zone between the arid Great Basin and Mojave deserts in the United States.'],

    ['name' => 'Denali',   'location' => 'Alaska', 'date_est' => '1917-02-26', 'area' => '4740911.72', 'url' => 'https://en.wikipedia.org/wiki/Denali_National_Park_and_Preserve','description' => 'Denali National Park and Preserve encompasses 6 million acres of Alaska’s interior wilderness. Its centerpiece is 20,310-ft.-high Denali (fka Mount McKinley), North America’s tallest peak. With terrain of tundra, spruce forest and glaciers, the park is home to wildlife including grizzly bears, wolves, moose, caribou and Dall sheep. Popular means of exploration are biking, backpacking and hiking, on maintained trails or in backcountry.'],

    ['name' => 'Everglades',   'location' => 'Florida', 'date_est' => '1934-05-30', 'area' => '1508537.90', 'url' => 'https://en.wikipedia.org/wiki/Everglades_National_Park','description' => 'Everglades National Park is a U.S. National Park in Florida that protects the southern 20 percent of the original Everglades.'],

    ['name' => 'Glacier',   'location' => 'Montana', 'date_est' => '1910-05-11', 'area' => '1013572.41', 'url' => 'https://en.wikipedia.org/wiki/Glacier_National_Park_(U.S.)','description' => 'Glacier National Park is a national park located in the U.S. state of Montana, on the Canada–United States border with the Canadian provinces of Alberta and British Columbia.'],

];

foreach ($parks as $park) {
    $query = "INSERT INTO national_parks (name, location, date_est, area, url, description) 
    			VALUES (:name, 
	    			:location, 
	    			:date_est, 
	    			:area,
	    			:url,
	    			:description)";

 
 	$stmt = $dbc->prepare($query);
	$stmt->bindValue(':name', $park['name'], PDO::PARAM_STR);
	$stmt->bindValue(':location', $park['location'], PDO::PARAM_STR);
	$stmt->bindValue(':date_est', $park['date_est'], PDO::PARAM_STR);
	$stmt->bindValue(':area', $park['area'], PDO::PARAM_STR);
	$stmt->bindValue(':url', $park['url'], PDO::PARAM_STR);
	$stmt->bindValue(':description', $park['description'], PDO::PARAM_STR);
	$stmt->execute();

    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}