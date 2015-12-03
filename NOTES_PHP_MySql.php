<?PHP

// Tell PDO to throw exceptions on error
// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

echo PDO::ATTR_ERRMODE;
echo PDO::ERRMODE_EXCEPTION;


pretend: pdo_test

define(DB_HOST....)
define

require 'db_connect.php'

$dbc->getAttribute

define('DB_HOST', '127.0.0.1');


	// Get new instance of PDO object
$dbc = new PDO('mysql:host=' . DB_HOST .';dbname=database_name', 'USERNAME', 'PASSWORD');


///////////////////////////////////////

$stmt = $dbc->query('SELECT * FROM parks');
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

///////////////////////////////////////