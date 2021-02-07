set @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
set @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
set @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

use `spark`;

drop table if exists `spark`.`TEXT`;

create table if not exists `spark`.`TEXT`(
    `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `Slug` TEXT NULL,
    `Text` TEXT NULL,
    primary key( `Id` )
    ) engine = InnoDB;

drop table if exists `spark`.`SLIDE`;

create table if not exists `spark`.`SLIDE`(
    `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `Text` TEXT NULL,
    `Image` TEXT NULL,
    `Video` TEXT NULL,
    `HasVideo` TINYINT UNSIGNED NULL,
    `Number` INT NULL,
    primary key( `Id` )
    ) engine = InnoDB;

drop table if exists `spark`.`PRODUCT`;

create table if not exists `spark`.`PRODUCT`(
    `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `Name` TEXT NULL,
    `Slug` TEXT NULL,
    `Text` TEXT NULL,
    `Image` TEXT NULL,
    `Video` TEXT NULL,
    primary key( `Id` )
    ) engine = InnoDB;

create table if not exists `spark`.`CONTACT`(
    `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `Name` TEXT NULL,
    `Email` TEXT NULL,
    `Message` TEXT NULL,
    `DateTime` DATETIME NULL,
    primary key( `Id` )
    ) engine = InnoDB;

drop table if exists `spark`.`USER`;

create table if not exists `spark`.`USER`(
    `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `Email` TEXT NULL,
    `Pseudonym` TEXT NULL,
    `Password` TEXT NULL,
    `Role` TEXT NULL,
    primary key( `Id` )
    ) engine = InnoDB;

set SQL_MODE=@OLD_SQL_MODE;
set FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
set UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
