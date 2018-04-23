<?php
include('config.php'); 
include('functions.php');

$action = $_GET['action'];

// Get package_id from the URL
$package_id = get('package_id');

$package = null;

// If member id is not empty, get member 
// Set $member equal to the first member in $members
// Set $member_packages equal to a list of packages
if(!empty($package_id)) {
	
	$sql = file_get_contents('sql/getPackage.sql');
	$params = array(
		'package_id' => $package_id
	);
	$statement = $database->prepare($sql);
	$statement->execute($params);
	$packages = $statement->fetchAll(PDO::FETCH_ASSOC);
	
	$package = $packages[0];


	}
	

// If form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	$package_name = $_POST['package_name'];
	$package_price = $_POST['package_price'];


	
	if ($action == 'add') {
	// Add book
	$sql = file_get_contents('sql/addPackage.sql');
    $params = array( 
			'package_name' => $package_name,
			'package_price' => $package_price

		);

        
        $statement = $database->prepare($sql);
        $statement->execute($params);

	}
	
	header('location: viewPackages.php');	
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Erin's Globo Gym - New Package</title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
</head>
<body>
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1>Erin's Globo Gym</a></h1>
      <h1>Edit Package</h1>
	  <br>
	  <h2>Currently accessed by <?php echo $_SESSION['username']; ?></h2>
    </div>
    <nav>
      <ul>
      <li><a href="submit.php">View All Members</a></li>
	  <li><a href="viewPackages.php">View Packages</a></li>
	  <li><a href="logout.php">Log Out</a></li>
      </ul>
    </nav>
  </header>
</div>
<br>
<br>
	<body>
	<div class="page">
		<form action="" method="POST">
			<div class="form-element" align="center">
				<label>Package Name:</label>
				<input type="text" name="package_name" class="textbox"  />
			</div>
			<div class="form-element" align="center">
				<label>Package Price:</label>
				<input type="text" name="package_price" class="textbox"  />
			</div>
			<div class="form-element" align="center">
				<input type="submit" class="button" />&nbsp;
				<input type="reset" class="button" />
			</div>
		</form>
	</div>
</body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="wrapper row3">
<footer id="footer" class="clear">
<p class="fl_left">Copyright &copy; 2012 - All Rights Reserved - <a href="#">Erin Wilson 2018</a></p>
</footer>
</html>

