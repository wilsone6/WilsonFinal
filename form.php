<?php
include('config.php'); 
include('functions.php');

$action = $_GET['action'];

// Get member_id from the URL
$member_id = get('member_id');

// Set member to null	
$member = null;


if(!empty($member_id)) {
	
	$sql = file_get_contents('sql/getMember.sql');
	$params = array(
		'member_id' => $member_id
	);
	$statement = $database->prepare($sql);
	$statement->execute($params);
	$members = $statement->fetchAll(PDO::FETCH_ASSOC);
	
	$members = $members[0];

	}


// If form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$birth_month = $_POST['birth_month'];
	$birth_date = $_POST['birth_date'];
	$birth_year = $_POST['birth_year'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zipcode = $_POST['zipcode'];
	$member_packages = $_POST['member-package'];
	
	// Add book
	if($action == 'add') {
		$sql = file_get_contents('sql/addMember.sql');
		$params = array(
			'first_name' => $first_name,
			'last_name' => $last_name,
			'birth_month' => $birth_month,
			'birth_date' => $birth_date,
			'birth_year' => $birth_year,
			'address' => $address,
			'city' => $city,
			'state' => $state,
			'zipcode' => $zipcode
			
		);
		
		$statement = $database->prepare($sql);
		$statement->execute($params);
	
	}

	header('location: submit.php');
}	
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Erin's Globo Gym</title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
</head>
<body>
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1>Erin's Globo Gym</a></h1>
      <center><h1>Add New Member</h1></center>
	  <br>
	  <h2>Currently accessed by <?php echo $_SESSION['username']; ?></h2>
    </div>
    <nav>
      <ul>
	  <li><a href="submit.php">View All Members</a></li>
	  <li><a href="logout.php">Log Out</a></li>
 
      </ul>
    </nav>
  </header>
</div>
<br>
<br>
	<body>
	<div class="page">
		<br><br>
		<form action="" method="POST">
			<div class="form-element" align="center">
				<label>First Name:</label>
				<input type="text" name="first_name" class="textbox" />
			</div>
			<div class="form-element" align="center">
				<label>Last Name:</label>
				<input type="text" name="last_name" class="textbox" />
			</div>
			<div class="form-element" align="center">
				<label>Birth Month:</label>
				<input type="number" name="birth_month" class="textbox" />
			</div>
			<div class="form-element" align="center">
				<label>Birth Day:</label>
				<input type="number" name="birth_date" class="textbox" />
			</div>
			<div class="form-element" align="center">
				<label>Birth Year:</label>
				<input type="number"  name="birth_year" class="textbox" />
			</div>
			<div class="form-element" align="center">
				<label>Address:</label>
				<input type="text"  name="address" class="textbox" />
			</div>
			<div class="form-element" align="center">
				<label>City:</label>
				<input type="text"  name="city" class="textbox" />
			</div>
			<div class="form-element" align="center">
				<label>State:</label>
				<input type="text"  name="state" class="textbox" />
			</div>
			<div class="form-element" align="center">
				<label>Zip Code:</label>
				<input type="number"  name="zipcode" class="textbox" />
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

