SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `devphase` ;
CREATE SCHEMA IF NOT EXISTS `devphase` DEFAULT CHARACTER SET latin1 ;
USE `devphase` ;

-- -----------------------------------------------------
-- Table `devphase`.`userpass`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `devphase`.`userpass` (
  `id_userpass` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `hashedPassword` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`id_userpass`),
  UNIQUE INDEX `username_userpass_UNIQUE` (`username` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 36
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
