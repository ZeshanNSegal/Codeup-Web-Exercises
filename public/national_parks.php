<?PHP

require_once '../nat_config.php';
require_once '../db_connect.php';
require_once '../input.php';

function getAllParks($dbc, $limit, $offset){
	$preparedSelectAll = "SELECT * FROM national_parks LIMIT :limit OFFSET :offset;";

	$stmt = $dbc->prepare($preparedSelectAll);
	$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
	$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
	$stmt->execute();

	$parks = $stmt->fetchAll(PDO::FETCH_ASSOC);

	return $parks;
}

function checkFormEntry()
{
	return Input::get('name') != '' && Input::get('location') != '' && Input::get('date_est')  != '' && Input::get('area')  != '' && Input::get('description') != '';
}

function deletePark($dbc)
{	
	if (!empty($_POST) && Input::get('park_to_delete') != '' )
	{
		var_dump(Input::get('park_to_delete'));
		$park_to_delete= Input::getString('park_to_delete');
		$stmt = $dbc->prepare('DELETE FROM national_parks WHERE name= :park_to_delete;');
		$stmt->bindValue(':park_to_delete', $park_to_delete, PDO::PARAM_STR);
		$stmt->execute();

		$limit = 3; 
		$pageNumber = Input::has('pageNumber') ? Input::get('pageNumber') : 1;
		$next = $pageNumber + 1;
		$previous= $pageNumber - 1;
		$offset= ($limit * $pageNumber - $limit);
		$parks = getAllParks($dbc, $limit, $offset);
	}
}

function pageController($dbc)
{
	$errors = [];
	$limit = 3; 
	$pageNumber = Input::has('pageNumber') ? Input::get('pageNumber') : 1;
	$next = $pageNumber + 1;
	$previous= $pageNumber - 1;
	$offset = ($limit * $pageNumber - $limit);

	$count = $dbc->query('SELECT COUNT(*) FROM national_parks;')->fetchColumn();

	if (!empty($_POST) && checkFormEntry()) 
	{
		
			try {
				$name = Input::getString('name');
			} catch (Exception $e) {
				 array_push($errors, $e->getMessage());	 
			}

			try {
				$location = Input::getString('location');
			} catch (Exception $e) {
				 array_push($errors, $e->getMessage());
			}
	
			try {
				$date_est = Input::getDate('date_est');
			} catch (Exception $e) {
				 array_push($errors, $e->getMessage());
			}

			try {
				$area = Input::getNumber('area');
			} catch (Exception $e) {
				 array_push($errors, $e->getMessage());
			}

			try {
				$url = Input::getString('url');
			} catch (Exception $e) {
				 array_push($errors, $e->getMessage());
			}

			try {
				$description = Input::getString('description');
			} catch (Exception $e) {
				 array_push($errors, $e->getMessage());
			}


			if (empty($errors)){

			 	$query = "INSERT INTO national_parks (name, location, date_est, area, url, description) 
		    			VALUES (
		    				:name, 
			    			:location, 
			    			:date_est, 
			    			:area,
			    			:url,
			    			:description)";

				$stmt = $dbc->prepare($query);
				$stmt->bindValue(':name', $name, PDO::PARAM_STR);
				$stmt->bindValue(':location', $location, PDO::PARAM_STR);
				$stmt->bindValue(':date_est', $date_est, PDO::PARAM_STR);
				$stmt->bindValue(':area', $area, PDO::PARAM_STR);
				$stmt->bindValue(':url', $url, PDO::PARAM_STR);
				$stmt->bindValue(':description', $description, PDO::PARAM_STR);
				$stmt->execute();
			}	
	}

	$parks = getAllParks($dbc, $limit, $offset);

	return array(
		'pageNumber' => $pageNumber,
		'next' => $next,
		'previous' => $previous,
		'count' => $count,
		'parks' => $parks,
		'limit' => $limit,
		'errors' => $errors
	);	 
}

extract(pageController($dbc));

deletePark($dbc);

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
	<div class="container">	
		<div class="row">

			<div class="col-md-12">
				<h2>National Parks</h2>
				<h3>Database Driven Web Application</h3>
			</div>
		</div>

		<div class="row">
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-12">
						<table class="table table-striped">	
							<tr>
								<th>Park Name</th>
								<th>Location</th>
								<th>Date Established</th>
								<th>Area in Acres</th>
								<th>Description of the Park</th>
							</tr>

							<?php
								foreach($parks as $park): ?>
									<tr>	
										<td><a target="_blank" href="<?= $park['url'] ?>" ><?= $park['name'] ?></a></td>
										<td><?= $park['location'] ?></td>
										<td><?= $park['date_est'] ?></td>
										<td><?= ($park['area']) ?></td>
										<td><?= ($park['description']) ?></td>
									</tr>	
							<?php endforeach ?>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4 col-sm-offset-4 text-center">
						<?php if($pageNumber > 1): ?>
							<a class="btn btn-default" href="national_parks.php?pageNumber=<?= $previous ?>" role="button" name='previous'>Previous</a>
						<?php endif ?>	
					
						<?php if($count/$limit > $pageNumber): ?>
							<a class="btn btn-default" href= "national_parks.php?pageNumber=<?= $next ?>" role="button" name='next'>Next</a>
						<?php endif ?>
					</div>
					
					<div class="col-sm-4 text-right">
						<span>Page: <?= $pageNumber ?> of <?=ceil($count/$limit) ?></span>
					</div>
				</div>
			</div>	

			<div class="col-md-2 text-center">
				<form method="POST">
					  Park Name:
					  <input type="text" name="name"><br>
					  Wikipedia Link:
					  <input type="text" name="url"><br>
					  Location:
					  <input type="text" name="location"><br>
					  Date Established:
					  <input type="text" name="date_est"><br>
					  Area:
					  <input type="text" name="area"><br>
					  Description:
					  <input type="text" name="description"><br>

					  <button type="submit" value="Submit">Submit</button>
				</form>	
			
				<form method="POST">
					<h4> Delete A Park: </h4>
					<input type="text" name="park_to_delete">
					<button type="delete" value="Delete">Delete</button>
				</form>

			</div>
		</div>	
	</div>	
</body>
</html>		