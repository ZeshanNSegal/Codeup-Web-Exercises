<?PHP
require_once '../config.php';
require_once '../db_connect.php';
require_once '../input.php';


function pageController($dbc)
{
	$limit = 3; 
	$pageNumber = Input::has('pageNumber') ? Input::get('pageNumber') : 1;
	$next = $pageNumber + 1;
	$previous= $pageNumber - 1;
	$selectAll = ("SELECT * FROM national_parks LIMIT " . $limit . " OFFSET " . ($limit * $pageNumber - $limit) . ";");
	$count = $dbc->query('SELECT COUNT(*) FROM national_parks;')->fetchColumn();

	$stmt = $dbc->query($selectAll);

	$parks = $stmt->fetchAll(PDO::FETCH_ASSOC);

	return array(
		'pageNumber' => $pageNumber,
		'next' => $next,
		'previous' => $previous,
		'count' => $count,
		'parks' => $parks,
		'limit' => $limit
	);
}

extract(pageController($dbc));

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>National Parks</title>
	<link rel= "stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel= "stylesheet" href="/css/national_parks.css">
</head>
<body>	
	<h2>National Parks</h2>
	<h3>Database Driven Web Application</h3>

	<table class="table table-striped">	
		<tr>
			<th>Park Name</th>
			<th>Location</th>
			<th>Date Established</th>
			<th>Area in Acres</th>
		</tr>
	<?php
		foreach($parks as $park): ?>
			<tr>	
				<td><a target="_blank" href="<?= $park['url'] ?>" ><?= $park['name'] ?></a></td>
				<td><?= $park['location'] ?></td>
				<td><?= $park['date_est'] ?></td>
				<td><?= ($park['area']) ?></td>
			</tr>	
		<?php endforeach ?>
	</table>
	
	
	<nav>
		<ul class="pager">
			<li>
				<?php if($pageNumber > 1): ?>
				<a href="national_parks.php?pageNumber=<?= $previous ?>" name='previous'>Previous</a>
				<?php endif ?>	
			</li>
			<li>
				<?php if($count/$limit > $pageNumber): ?>
				<a href= "national_parks.php?pageNumber=<?= $next ?>" name='next'>Next</a>
				<?php endif ?>
			</li>
		</ul>
	</nav>	
	<div class="container-fluid">
		<p>Page: <?= $pageNumber ?> of <?=ceil($count/$limit) ?></p>
	</div>	
</body>
</html>		