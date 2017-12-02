CREATE TABLE `mt4`.`cad_dispositivo` (
  `id_dispositivo` INT NOT NULL AUTO_INCREMENT,
  `hostname` VARCHAR(255) NULL,
  `ip` VARCHAR(255) NULL,
  `tipo` INT NULL,
  `fabricante` VARCHAR(255) NULL,
  `modelo` VARCHAR(255) NULL,
  `status` TINYINT(1) NULL,
  `dta_cadastro` DATE NULL,
  PRIMARY KEY (`id_dispositivo`));
