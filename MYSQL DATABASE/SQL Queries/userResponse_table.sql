
/*User Response Table*/

CREATE TABLE `cybertrom_user_db`.`userResponse` ( `Uid` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `address` VARCHAR(100) NOT NULL , `phone` VARCHAR(10) NOT NULL , `email` VARCHAR(30) NOT NULL , `dob` DATE NOT NULL , `photo` VARCHAR(25) NOT NULL , PRIMARY KEY (`Uid`), UNIQUE `email` (`email`)) ENGINE = InnoDB;