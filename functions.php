<?php
	function searchMembers($searchTerm, $database) {
		$sql = file_get_contents('sql/searchMembers.sql');
		$params = array(
			'search_term' => $searchTerm
		);
		$stmt = $database->prepare($sql);
		$stmt->execute($params);
		$members = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $members;
	}
	
	//function my_autoloader($class) {
   // include 'classes/class.' . $class . '.php';
//}
	
	function get($key) {
		if(isset($_GET[$key])) {
			return $_GET[$key];
		}
		
		else {
			return '';
		}
	}