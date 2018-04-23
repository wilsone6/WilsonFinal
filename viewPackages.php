<?php
include('config.php'); 
include('functions.php'); 

$sql = file_get_contents('sql/getPackages.sql');

$params = array();
	
$statement = $database->prepare($sql);
$statement->execute($params);
$packages = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Erin's Globo Gym - Packages</title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->

</head>
<body>

<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1>Erin's Globo Gym</a></h1>
      <center><h1>Packages</h1></center>
	  <br>
	  <h2>Currently accessed by <?php echo $_SESSION['username']; ?></h2>
    </div>
    <nav>
      <ul>
	    <li><a href="newPackage.php?action=add">Add New Package</a></li>
		<li><a href="submit.php">View All Members</a></li>
	    <li><a href="search.php">Search Members</a></li>
       <li><a href="logout.php">Log Out</a></li>
      </ul>
    </nav>
  </header>
</div>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
   		<?php 
					//print_r($members);
					//echo $sql;
					foreach($packages as $package) : ?>
					<p><h2><?php echo $package['package_name']; ?></h2>   
					<li>$<?php echo $package['package_price']; ?></li>
					<a href="editPackage.php?action=edit&package_id=<?php echo $package['package_id'] ?>">Edit Package</a><br><br>
					</p>
				<?php endforeach; ?>

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