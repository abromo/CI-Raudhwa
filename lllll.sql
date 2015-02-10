SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


CREATE SCHEMA IF NOT EXISTS `raudhwa` DEFAULT CHARACTER SET utf8 ;
USE `raudhwa` ;

-- -----------------------------------------------------
-- Table `raudhwa`.`users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `raudhwa`.`users` (
  `id` INT(100) NOT NULL AUTO_INCREMENT ,
  `user_name` VARCHAR(200) NOT NULL ,
  `password` VARCHAR(250) NOT NULL ,
  `user_type` VARCHAR(100) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `raudhwa`.`user_profiles`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `raudhwa`.`user_profiles` (
  `user_id` INT(100) NOT NULL ,
  `firstname` VARCHAR(45) NULL ,
  `lastname` VARCHAR(45) NULL ,
  `image_url` VARCHAR(145) NULL ,
  `email` VARCHAR(45) NULL ,
  PRIMARY KEY (`user_id`) ,
  INDEX `fk_User_profile_users_idx` (`user_id` ASC) ,
  CONSTRAINT `fk_User_profile_users`
    FOREIGN KEY (`user_id` )
    REFERENCES `raudhwa`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `raudhwa`.`categories`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `raudhwa`.`categories` (
  `category_id` INT NOT NULL ,
  `category_name` VARCHAR(45) NULL ,
  PRIMARY KEY (`category_id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `raudhwa`.`posts`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `raudhwa`.`posts` (
  `post_id` INT NOT NULL AUTO_INCREMENT ,
  `user_id` INT(100) NOT NULL ,
  `title` VARCHAR(45) NULL ,
  `created_date` DATETIME NULL ,
  `category` INT NULL ,
  PRIMARY KEY (`post_id`) ,
  INDEX `fk_posts_categories1_idx` (`category` ASC) ,
  CONSTRAINT `fk_posts_users1`
    FOREIGN KEY (`user_id` )
    REFERENCES `raudhwa`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_posts_categories1`
    FOREIGN KEY (`category` )
    REFERENCES `raudhwa`.`categories` (`category_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `raudhwa`.`articles`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `raudhwa`.`articles` (
  `post_id` INT NOT NULL ,
  `content` TEXT NULL ,
  `views` INT NULL ,
  INDEX `fk_articles_posts1_idx` (`post_id` ASC) ,
  PRIMARY KEY (`post_id`) ,
  CONSTRAINT `fk_articles_posts1`
    FOREIGN KEY (`post_id` )
    REFERENCES `raudhwa`.`posts` (`post_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `raudhwa` ;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
