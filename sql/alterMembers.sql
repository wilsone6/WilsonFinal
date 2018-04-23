ALTER TABLE `members` 
ADD COLUMN `username` VARCHAR(45) NULL AFTER `zipcode`,
ADD COLUMN `password` VARCHAR(45) NULL AFTER `username`,
ADD UNIQUE INDEX `username_UNIQUE` (`username` ASC);

UPDATE members
SET username = "trainer",
    password = 'password'
WHERE member_id = 1