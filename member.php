<?php

include('config.php');

include('functions.php');

// Get member_id from the URL
$member_id = get('member_id');

// Get a list of members
$sql = file_get_contents('sql/getMember.sql');
$params = array(
	'member_id' => $member_id
);
$statement = $database->prepare($sql);
$statement->execute($params);
$members = $statement->fetchAll(PDO::FETCH_ASSOC);

// Set $book equal to the first book in $books
$member = $members[0];

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Erin's Globo Gym - Members</title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->

</head>
<body>
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1>Erin's Globo Gym</a></h1>
      <center><h1>Members</h1></center>
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
<!-- content -->
<br>
<div class="wrapper row2">
  <div id="container" class="clear">
<body>
	<div class="page">
		<h2><?php echo $member['first_name']; ?>   <?php echo $member['last_name']; ?></h2>
					<?php echo $member['birth_month'];?>/<?php echo $member['birth_date']; ?>/<?php echo $member['birth_year']; ?></li> <br>
					<?php echo $member['address'];?> 
					<br><?php echo $member['city'];?>, <?php echo $member['state'];?> <?php echo $member['zipcode'];?>
	</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</body>
<div class="wrapper row3">
  <footer id="footer" class="clear">
    <p class="fl_left">Copyright &copy; 2012 - All Rights Reserved - <a href="#">Erin Wilson 2018</a></p>
  </footer>
</html>