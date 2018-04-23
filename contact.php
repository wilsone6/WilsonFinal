
<?php
include('config.php');
include('functions.php'); 

$sql = file_get_contents('sql/getContact.sql');

$params = array();
	
$statement = $database->prepare($sql);
$statement->execute($params);
$contacts = $statement->fetchAll(PDO::FETCH_ASSOC);

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
      <center><h1>Contact</h2></center>
    </div>
    <nav>
      <ul>
	   <li><a href="home.php">Home</a></li>
	    <li><a href="packages.php">Packages</a></li>
		  <li><a href="contact.php">Contact</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </nav>
  </header>
</div>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- content body -->
    <section id="slider"><img src="images/demo/contact.jpg" alt=""></a></section>
				<center><?php 
					//echo $sql;
					foreach($contacts as $contact) : ?>
					<p><h2><?php echo $contact['contact_name']; ?> 
					<p><h2><?php echo $contact['contact_address']; ?> 
					<p><h2><?php echo $contact['contact_phone']; ?> 
					<p><h2><?php echo $contact['contact_email']; ?> 
				<?php endforeach; ?> </center>
     
     
    </section>
  </div>
</div>
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
</div>
</body>
</html>