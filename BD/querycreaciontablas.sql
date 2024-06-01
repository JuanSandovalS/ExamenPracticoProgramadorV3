-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema taller_reparaciones
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema taller_reparaciones
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `taller_reparaciones` DEFAULT CHARACTER SET utf8 ;
USE `taller_reparaciones` ;

-- -----------------------------------------------------
-- Table `taller_reparaciones`.`Tecnico (usuario)`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `taller_reparaciones`.`Tecnico (usuario)` (
  `idTecnico (usuario)` INT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `e-mail` VARCHAR(45) NULL,
  PRIMARY KEY (`idTecnico (usuario)`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `taller_reparaciones`.`Marca`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `taller_reparaciones`.`Marca` (
  `idMarca` INT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`idMarca`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `taller_reparaciones`.`Cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `taller_reparaciones`.`Cliente` (
  `idCliente` INT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `telefono` VARCHAR(45) NULL,
  `e-mail` VARCHAR(45) NULL,
  PRIMARY KEY (`idCliente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `taller_reparaciones`.`Equipo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `taller_reparaciones`.`Equipo` (
  `idEquipo` INT NULL AUTO_INCREMENT,
  `idCliente` INT NULL,
  `marca_id` INT NULL,
  `tipo_equipo` VARCHAR(45) NULL,
  `modelo` VARCHAR(45) NULL,
  `numero_serie` VARCHAR(45) NULL,
  PRIMARY KEY (`idEquipo`),
  CONSTRAINT `marca_id`
    FOREIGN KEY ()
    REFERENCES `taller_reparaciones`.`Marca` ()
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `idCliente`
    FOREIGN KEY ()
    REFERENCES `taller_reparaciones`.`Cliente` ()
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `taller_reparaciones`.`Servicio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `taller_reparaciones`.`Servicio` (
  `idServicio` INT NOT NULL AUTO_INCREMENT,
  `fecha_recepcion` DATE NULL,
  `problema` VARCHAR(75) NULL,
  `estado` VARCHAR(45) NULL,
  `diagnostico` VARCHAR(45) NULL,
  `solucion` VARCHAR(45) NULL,
  `tecnico_id` INT NULL,
  `equipo_id` INT NULL,
  CONSTRAINT `tecnico_id`
    FOREIGN KEY ()
    REFERENCES `taller_reparaciones`.`Tecnico (usuario)` ()
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `equipo_id`
    FOREIGN KEY ()
    REFERENCES `taller_reparaciones`.`Equipo` ()
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
