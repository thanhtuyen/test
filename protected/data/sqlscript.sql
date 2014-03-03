SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`user` (
  `userid` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `userpass` VARCHAR(45) NOT NULL,
  `user_fullname` VARCHAR(45) NOT NULL,
  `user_mobile` VARCHAR(45) NULL,
  `user_address` VARCHAR(45) NULL,
  `user_role` INT NULL,
  `create_date` DATETIME NULL,
  `create_user` INT NULL,
  `update_date` DATETIME NULL,
  PRIMARY KEY (`userid`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`keyword`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`keyword` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `keyword` VARCHAR(45) NULL,
  `keyword_eng` VARCHAR(45) NULL,
  `create_date` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`detailmenu`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`detailmenu` (
  `id` INT NOT NULL,
  `menu_id` INT NULL,
  `title` VARCHAR(45) NULL,
  `caption` TEXT NULL,
  `detial` TEXT NULL,
  `title_eng` VARCHAR(45) NULL,
  `caption_eng` TEXT NULL,
  `detail_eng` TEXT NULL,
  `image_path` VARCHAR(45) NULL,
  `list_file_attach` VARCHAR(45) NULL,
  `create_date` DATETIME NULL,
  `create_user` INT NULL,
  `update_date` DATETIME NULL,
  `del_flg` TINYINT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Menu`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Menu` (
  `id` INT NOT NULL,
  `parent_menu_id` INT NULL,
  `menu_name` VARCHAR(45) NULL,
  `menu_name_eng` VARCHAR(45) NULL,
  `menu_type` TINYINT NOT NULL,
  `create_date` DATETIME NULL,
  `create_user_id` INT NULL,
  `update_date` DATETIME NULL,
  `del_flg` TINYINT NULL,
  `detailmenu_id` INT NOT NULL,
  PRIMARY KEY (`id`, `detailmenu_id`),
  INDEX `fk_Menu_Menu_idx` (`id` ASC, `parent_menu_id` ASC),
  INDEX `fk_Menu_detailmenu1_idx` (`detailmenu_id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`news`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`news` (
  `id` INT NOT NULL,
  `menu_id` INT NULL,
  `title` VARCHAR(45) NULL,
  `caption` TEXT NULL,
  `detail` TEXT NULL,
  `title_eng` VARCHAR(45) NULL,
  `caption_eng` TEXT NULL,
  `detail_eng` TEXT NULL,
  `thumb_image_path` VARCHAR(45) NULL,
  `listfile_attach` VARCHAR(45) NULL,
  `create_user_id` INT NULL,
  `create_date` DATETIME NULL,
  `feature_flag` TINYINT NULL,
  `update_date` DATETIME NULL,
  `is_public` TINYINT NULL,
  `del_flg` TINYINT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_news_Menu1_idx` (`menu_id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`imageslide`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`imageslide` (
  `id` INT NOT NULL,
  `image_path` VARCHAR(45) NULL,
  `title` VARCHAR(45) NULL,
  `caption` VARCHAR(45) NULL,
  `title_eng` VARCHAR(45) NULL,
  `caption_eng` VARCHAR(45) NULL,
  `create_date` DATETIME NULL,
  `create_user_id` INT NULL,
  `update_date` DATETIME NULL,
  `del_flg` TINYINT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
