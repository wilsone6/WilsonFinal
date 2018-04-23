SELECT *
FROM member_packages
JOIN packages on member_packages.package_id = packages.package_id
WHERE member_id = :member_id