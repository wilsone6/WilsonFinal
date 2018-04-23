SELECT *
FROM members
WHERE
	username = :username AND
	password = :password
	