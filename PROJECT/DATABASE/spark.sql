set @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
set @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
set @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

drop schema if exists `spark`;

create schema if not exists `spark` default character set utf8mb4 collate utf8mb4_general_ci;

use `spark`;

drop table if exists `spark`.`TEXT`;

create table if not exists `spark`.`TEXT`(
    `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `Slug` TEXT NULL,
    `Text` TEXT NULL,
    primary key( `Id` )
    ) engine = InnoDB;

drop table if exists `spark`.`SECTION`;

create table if not exists `spark`.`SECTION`(
    `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `Name` TEXT NULL,
    `Slug` TEXT NULL,
    primary key( `Id` )
    ) engine = InnoDB;

drop table if exists `spark`.`ARTICLE`;

create table if not exists `spark`.`ARTICLE`(
    `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `Title` TEXT NULL,
    `Slug` TEXT NULL,
    `Text` TEXT NULL,
    `Image` TEXT NULL,
    `Video` TEXT NULL,
    `SectionSlug` TEXT NULL,
    primary key( `Id` )
    ) engine = InnoDB;

drop table if exists `spark`.`CONTACT`;

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
