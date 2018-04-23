<?php
include('config.php'); 
include('functions.php'); 


if (isset($_GET['term'])) {
	$term = $_GET['term'];
	$term = '%' . $term . '%';
	$members = searchMembers($term, $database);
}

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
      <center><h1>Search</h1></center>
	  <br>
	  <h2>Currently accessed by <?php echo $_SESSION['username']; ?></h2>
    </div>
    <nav>
      <ul>
	  <li><a href="form.php?action=add">Add New Member</a></li>
	  <li><a href="submit.php">View All Members</a></li>
      <li><a href="logout.php">Log Out</a></li>
      </ul>
    </nav>
  </header>
</div>
<br>
<br>
<br><div class="wrapper row2">
  <div id="container" class="clear">
<form action="" method="GET">
			<input type="text" name="term" placeholder="Search Last Name..." />
			<input type="submit" />
		</form>
		<br>
		<br>
		<?php // Search Members
			if(isset($members)) : ?>
				<?php if (empty($members)) : ?>
					<br><center><p><strong>No Results Found</strong></p></center>
				<?php else : ?>
					<div class="result-block">
						<?php foreach($members as $member) : ?>
							<br>
							<center><h1><?php echo $member['first_name']; ?> <?php echo $member['last_name']; ?></h1>
						<a href="editform.php?action=edit&member_id=<?php echo $member['member_id'] ?>">Edit Member</a><br>
						<a href="member.php?member_id=<?php echo $member['member_id'] ?>">View Member</a></center>
					</p>
							<?php endforeach; ?>
					</div>
				<?php endif;
			endif; 
		?>
			<br>
		<br>
			<br>
		<br>
			<br>
		<br>
			<br>
		<br>
	</div>
</body>
<div class="wrapper row3">
  <footer id="footer" class="clear">
    <p class="fl_left">Copyright &copy; 2012 - All Rights Reserved - <a href="#">Erin Wilson 2018</a></p>
  </footer>
</html>