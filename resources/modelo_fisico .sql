SET @OLD_UNIQUE_CHECKS = @@UNIQUE_CHECKS, UNIQUE_CHECKS = 0;
SET @OLD_FOREIGN_KEY_CHECKS = @@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS = 0;
SET @OLD_SQL_MODE = @@SQL_MODE, SQL_MODE =
        'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

DROP SCHEMA IF EXISTS `disc`;
CREATE SCHEMA IF NOT EXISTS `disc` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE `disc`;
-- -----------------------------------------------------
-- Table `disc`.`centros`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `disc`.`centros`
(
    `nombre`       VARCHAR(45) NOT NULL,
    `direccion`    VARCHAR(45),
    `localidad`    VARCHAR(45),
    `codigopostal` VARCHAR(5),
    `provincia`    VARCHAR(20),
    PRIMARY KEY (`nombre`)
)
    ENGINE = InnoDB
    DEFAULT CHARACTER SET = utf8mb4
    COLLATE = utf8mb4_spanish_ci;


-- -----------------------------------------------------
-- Table `disc`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `disc`.`usuarios`
(
    `dni`            VARCHAR(9)   NOT NULL,
    `nombre`         VARCHAR(45)  NULL DEFAULT NULL,
    `apellidos`      VARCHAR(100) NULL DEFAULT NULL,
    `clave`          VARCHAR(45)  NULL DEFAULT NULL,
    `centros_nombre` VARCHAR(45)  NOT NULL,
    `tipo`           VARCHAR(45)  NULL DEFAULT NULL,
    PRIMARY KEY (`dni`),
    INDEX `fk_usuarios_centros_idx` (`centros_nombre` ASC) VISIBLE,
    CONSTRAINT `fk_usuarios_centros`
        FOREIGN KEY (`centros_nombre`)
            REFERENCES `disc`.`centros` (`nombre`)
)
    ENGINE = InnoDB
    DEFAULT CHARACTER SET = utf8mb4
    COLLATE = utf8mb4_spanish_ci;


-- -----------------------------------------------------
-- Table `disc`.`admins`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `disc`.`admins`
(
    `usuarios_dni` VARCHAR(9) NOT NULL,
    PRIMARY KEY (`usuarios_dni`),
    INDEX `fk_admins_usuarios1_idx` (`usuarios_dni` ASC) VISIBLE,
    CONSTRAINT `fk_admins_usuarios1`
        FOREIGN KEY (`usuarios_dni`)
            REFERENCES `disc`.`usuarios` (`dni`)
)
    ENGINE = InnoDB
    DEFAULT CHARACTER SET = utf8mb4
    COLLATE = utf8mb4_spanish_ci;


-- -----------------------------------------------------
-- Table `disc`.`cursos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `disc`.`cursos`
(
    `codigo`         VARCHAR(10) NOT NULL,
    `departamento`   VARCHAR(45) NULL DEFAULT NULL,
    `centros_nombre` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`codigo`, `centros_nombre`),
    INDEX `fk_cursos_centros1_idx` (`centros_nombre` ASC) VISIBLE,
    CONSTRAINT `fk_cursos_centros1`
        FOREIGN KEY (`centros_nombre`)
            REFERENCES `disc`.`centros` (`nombre`)
)
    ENGINE = InnoDB
    DEFAULT CHARACTER SET = utf8mb4
    COLLATE = utf8mb4_spanish_ci;


-- -----------------------------------------------------
-- Table `disc`.`equipos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `disc`.`equipos`
(
    `id` INT(3) NOT NULL,
    PRIMARY KEY (`id`)
)
    ENGINE = InnoDB
    DEFAULT CHARACTER SET = utf8mb4
    COLLATE = utf8mb4_spanish_ci;


-- -----------------------------------------------------
-- Table `disc`.`alumnos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `disc`.`alumnos`
(
    `usuarios_dni`          VARCHAR(9)  NOT NULL,
    `equipos_id`        INT(3) NOT NULL,
    `cursos_codigo`         VARCHAR(10) NOT NULL,
    `cursos_centros_nombre` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`usuarios_dni`),
    INDEX `fk_alumnos_equipos1_idx` (`equipos_id` ASC) VISIBLE,
    INDEX `fk_alumnos_cursos1_idx` (`cursos_codigo` ASC, `cursos_centros_nombre` ASC) VISIBLE,
    CONSTRAINT `fk_alumnos_cursos1`
        FOREIGN KEY (`cursos_codigo`, `cursos_centros_nombre`)
            REFERENCES `disc`.`cursos` (`codigo`, `centros_nombre`),
    CONSTRAINT `fk_alumnos_equipos1`
        FOREIGN KEY (`equipos_id`)
            REFERENCES `disc`.`equipos` (`id`),
    CONSTRAINT `fk_alumnos_usuarios1`
        FOREIGN KEY (`usuarios_dni`)
            REFERENCES `disc`.`usuarios` (`dni`)
)
    ENGINE = InnoDB
    DEFAULT CHARACTER SET = utf8mb4
    COLLATE = utf8mb4_spanish_ci;


-- -----------------------------------------------------
-- Table `disc`.`preguntas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `disc`.`preguntas`
(
    `id`    INT          NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `term`  VARCHAR(255) NULL DEFAULT NULL,
    `desc`  VARCHAR(255) NULL DEFAULT NULL,
    `color` VARCHAR(25)  NULL DEFAULT NULL
)
    ENGINE = InnoDB
    DEFAULT CHARACTER SET = utf8mb4
    COLLATE = utf8mb4_spanish_ci;


-- -----------------------------------------------------
-- Table `disc`.`alumnos_has_preguntas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `disc`.`alumnos_has_preguntas`
(
    `alumno_dni`  VARCHAR(9)  NOT NULL PRIMARY KEY,
    `pregunta_id` INT         NOT NULL,
    `respuesta`   VARCHAR(45) NULL DEFAULT NULL,
    INDEX `fk_alumnos_has_preguntas_pregunta_id` (`pregunta_id` ASC) VISIBLE,
    INDEX `fk_alumnos_has_preguntas_alumno_dni` (`alumno_dni` ASC) VISIBLE,
    CONSTRAINT `fk_alumnos_has_preguntas_alumnos_dni`
        FOREIGN KEY (`alumno_dni`)
            REFERENCES `disc`.`alumnos` (`usuarios_dni`),
    CONSTRAINT `fk_alumnos_has_preguntas_pregunta_id`
        FOREIGN KEY (`pregunta_id`)
            REFERENCES `disc`.`preguntas` (`id`)
)
    ENGINE = InnoDB
    DEFAULT CHARACTER SET = utf8mb4
    COLLATE = utf8mb4_spanish_ci;


-- -----------------------------------------------------
-- Table `disc`.`profesores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `disc`.`profesores`
(
    `usuarios_dni` VARCHAR(9)  NOT NULL,
    `departamento` VARCHAR(45) NULL DEFAULT NULL,
    `isAdmin`      TINYINT     NULL DEFAULT NULL,
    PRIMARY KEY (`usuarios_dni`),
    INDEX `fk_profesores_usuarios1_idx` (`usuarios_dni` ASC) VISIBLE,
    CONSTRAINT `fk_profesores_usuarios1`
        FOREIGN KEY (`usuarios_dni`)
            REFERENCES `disc`.`usuarios` (`dni`)
)
    ENGINE = InnoDB
    DEFAULT CHARACTER SET = utf8mb4
    COLLATE = utf8mb4_spanish_ci;


-- -----------------------------------------------------
-- Table `disc`.`profesores_has_cursos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `disc`.`profesores_has_cursos`
(
    `profesores_usuarios_dni` VARCHAR(9)  NOT NULL,
    `cursos_codigo`           VARCHAR(10) NOT NULL,
    `cursos_centros_nombre`   VARCHAR(45) NOT NULL,
    PRIMARY KEY (`profesores_usuarios_dni`, `cursos_codigo`, `cursos_centros_nombre`),
    INDEX `fk_profesores_has_cursos_cursos1_idx` (`cursos_codigo` ASC, `cursos_centros_nombre` ASC) VISIBLE,
    INDEX `fk_profesores_has_cursos_profesores1_idx` (`profesores_usuarios_dni` ASC) VISIBLE,
    CONSTRAINT `fk_profesores_has_cursos_cursos1`
        FOREIGN KEY (`cursos_codigo`, `cursos_centros_nombre`)
            REFERENCES `disc`.`cursos` (`codigo`, `centros_nombre`),
    CONSTRAINT `fk_profesores_has_cursos_profesores1`
        FOREIGN KEY (`profesores_usuarios_dni`)
            REFERENCES `disc`.`profesores` (`usuarios_dni`)
)
    ENGINE = InnoDB
    DEFAULT CHARACTER SET = utf8mb4
    COLLATE = utf8mb4_spanish_ci;


SET SQL_MODE = @OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS = @OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS = @OLD_UNIQUE_CHECKS;
