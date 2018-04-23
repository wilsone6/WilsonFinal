SELECT member_id, first_name, last_name, address FROM members
	WHERE last_name LIKE :search_term;
	
	