<?php
// Connecting to the MySQL database
$username = 'wilsone6';
$password = 'cha6ESTu';
$database = new PDO('mysql:host=csweb.hh.nku.edu;dbname=db_spring18_wilsone6', $username, $password);


//spl_autoload_register('my_autoloader');

session_start();

$current_url = basename($_SERVER['REQUEST_URI']);


if (!isset($_SESSION['member_id']) && $current_url == false ) {
	header('location: login.php'); 
	die(); }
		else if(!empty($member_id)) { 
			$sql = file_get_contents('sql/getMember.sql');
			$params = array(
				'member_id' => $member_id );
			$statement = $database->prepare($sql);
			$statement->execute($params);
			$members = $statement->fetchAll(PDO::FETCH_ASSOC);

		}
		

?>