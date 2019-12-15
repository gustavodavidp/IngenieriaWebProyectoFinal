-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


CREATE SCHEMA IF NOT EXISTS `SecretariaAdministrativa` ;
USE `SecretariaAdministrativa` ;

-- -----------------------------------------------------
-- Table `SecretariaAdministrativa`.`Edificio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SecretariaAdministrativa`.`Edificio` (
  `ID_edificio` INT(11) NOT NULL AUTO_INCREMENT,
  `Nombre_edif` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`ID_edificio`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `SecretariaAdministrativa`.`Materiales`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SecretariaAdministrativa`.`Materiales` (
  `idMateriales` INT(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` VARCHAR(25) NOT NULL,
  `Unidad` INT(11) NOT NULL,
  `Cantidad` INT(11) NOT NULL,
  PRIMARY KEY (`idMateriales`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `SecretariaAdministrativa`.`Usuario_Temporal`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SecretariaAdministrativa`.`Usuario_Temporal` (
  `ID_UST` INT(10) NOT NULL AUTO_INCREMENT,
  `Nombre Completo` VARCHAR(30) NOT NULL,
  `Nombre_Usuario` VARCHAR(30) NOT NULL,
  `Correo_Ins` VARCHAR(25) NOT NULL,
  `Contraseña` VARCHAR(12) NOT NULL,
  `Cedula` VARCHAR(11) NOT NULL,
  `Departamento` VARCHAR(30) NOT NULL,
  `Facultad` VARCHAR(20) NOT NULL,
  `Cargo` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`ID_UST`),
  UNIQUE INDEX `Correo_Ins_UNIQUE` (`Correo_Ins` ASC),
  UNIQUE INDEX `Cedula_UNIQUE` (`Cedula` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `SecretariaAdministrativa`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SecretariaAdministrativa`.`Usuario` (
  `idUsuario` INT(10) NOT NULL AUTO_INCREMENT,
  `Nom_Usuario` VARCHAR(30) NOT NULL,
  `Contraseña` VARCHAR(12) NOT NULL,
  `Usuario_Temporal_ID_UST` INT(10) NOT NULL,
  PRIMARY KEY (`idUsuario`, `Usuario_Temporal_ID_UST`),
  INDEX `fk_Usuario_Usuario_Temporal1_idx` (`Usuario_Temporal_ID_UST` ASC),
  CONSTRAINT `fk_Usuario_Usuario_Temporal1`
    FOREIGN KEY (`Usuario_Temporal_ID_UST`)
    REFERENCES `SecretariaAdministrativa`.`Usuario_Temporal` (`ID_UST`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `SecretariaAdministrativa`.`Piso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SecretariaAdministrativa`.`Piso` (
  `idPiso` INT(11) NOT NULL AUTO_INCREMENT,
  `Nom_Piso` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`idPiso`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `SecretariaAdministrativa`.`Lugar`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SecretariaAdministrativa`.`Lugar` (
  `idLugar` INT(11) NOT NULL AUTO_INCREMENT,
  `Salon` VARCHAR(10) NULL DEFAULT NULL,
  `Laboratorio` VARCHAR(15) NULL DEFAULT NULL,
  `Oficina` VARCHAR(15) NULL DEFAULT NULL,
  `Baños` VARCHAR(10) NULL DEFAULT NULL,
  `Pasillo` VARCHAR(15) NULL DEFAULT NULL,
  `Lobby` VARCHAR(10) NULL DEFAULT NULL,
  PRIMARY KEY (`idLugar`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `SecretariaAdministrativa`.`Solicitud`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SecretariaAdministrativa`.`Solicitud` (
  `Cod_solicitud` INT(11) NOT NULL AUTO_INCREMENT,
  `Descripciòn` VARCHAR(100) NULL DEFAULT NULL,
  `Solicitado_por` VARCHAR(25) NULL DEFAULT NULL,
  `Fecha_Solicitud` DATE NULL DEFAULT NULL,
  `Tipo_Solicitud` VARCHAR(25) NULL DEFAULT NULL,
  `Estado` VARCHAR(45) NULL DEFAULT NULL,
  `Usuario_idUsuario` INT(10) NOT NULL,
  `Piso_idPiso` INT(11) NOT NULL,
  `Edificio_ID_edificio` INT(11) NOT NULL,
  `Lugar_idLugar` INT(11) NOT NULL,
  PRIMARY KEY (`Cod_solicitud`, `Usuario_idUsuario`, `Piso_idPiso`, `Edificio_ID_edificio`, `Lugar_idLugar`),
  INDEX `fk_Solicitud_Usuario_idx` (`Usuario_idUsuario` ASC),
  INDEX `fk_Solicitud_Piso1_idx` (`Piso_idPiso` ASC),
  INDEX `fk_Solicitud_Edificio1_idx` (`Edificio_ID_edificio` ASC),
  INDEX `fk_Solicitud_Lugar1_idx` (`Lugar_idLugar` ASC),
  CONSTRAINT `fk_Solicitud_Usuario`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `SecretariaAdministrativa`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Solicitud_Piso1`
    FOREIGN KEY (`Piso_idPiso`)
    REFERENCES `SecretariaAdministrativa`.`Piso` (`idPiso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Solicitud_Edificio1`
    FOREIGN KEY (`Edificio_ID_edificio`)
    REFERENCES `SecretariaAdministrativa`.`Edificio` (`ID_edificio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Solicitud_Lugar1`
    FOREIGN KEY (`Lugar_idLugar`)
    REFERENCES `SecretariaAdministrativa`.`Lugar` (`idLugar`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `SecretariaAdministrativa`.`Inspecciones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SecretariaAdministrativa`.`Inspecciones` (
  `idInspiciones` INT(11) NOT NULL AUTO_INCREMENT,
  `Tec_1` VARCHAR(25) NOT NULL,
  `Tec_2` VARCHAR(25) NULL DEFAULT NULL,
  `Inspector` VARCHAR(25) NOT NULL,
  `F_Inspecion` DATETIME NULL DEFAULT NULL,
  `Observaciones` VARCHAR(45) NULL DEFAULT NULL,
  `Materiales_idMateriales` INT(11) NOT NULL,
  `Solicitud_Cod_solicitud` INT(11) NOT NULL,
  `Solicitud_Usuario_idUsuario` INT(10) NOT NULL,
  `Solicitud_Piso_idPiso` INT(11) NOT NULL,
  `Solicitud_Edificio_ID_edificio` INT(11) NOT NULL,
  `Solicitud_Lugar_idLugar` INT(11) NOT NULL,
  PRIMARY KEY (`idInspiciones`, `Materiales_idMateriales`, `Solicitud_Cod_solicitud`, `Solicitud_Usuario_idUsuario`, `Solicitud_Piso_idPiso`, `Solicitud_Edificio_ID_edificio`, `Solicitud_Lugar_idLugar`),
  INDEX `fk_Inspecciones_Materiales1_idx` (`Materiales_idMateriales` ASC),
  INDEX `fk_Inspecciones_Solicitud1_idx` (`Solicitud_Cod_solicitud` ASC, `Solicitud_Usuario_idUsuario` ASC, `Solicitud_Piso_idPiso` ASC, `Solicitud_Edificio_ID_edificio` ASC, `Solicitud_Lugar_idLugar` ASC),
  CONSTRAINT `fk_Inspecciones_Materiales1`
    FOREIGN KEY (`Materiales_idMateriales`)
    REFERENCES `SecretariaAdministrativa`.`Materiales` (`idMateriales`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Inspecciones_Solicitud1`
    FOREIGN KEY (`Solicitud_Cod_solicitud` , `Solicitud_Usuario_idUsuario` , `Solicitud_Piso_idPiso` , `Solicitud_Edificio_ID_edificio` , `Solicitud_Lugar_idLugar`)
    REFERENCES `SecretariaAdministrativa`.`Solicitud` (`Cod_solicitud` , `Usuario_idUsuario` , `Piso_idPiso` , `Edificio_ID_edificio` , `Lugar_idLugar`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
