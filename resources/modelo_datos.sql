SET
FOREIGN_KEY_CHECKS=0;
TRUNCATE TABLE `disc`.`admins`;
TRUNCATE TABLE `disc`.`alumnos`;
TRUNCATE TABLE `disc`.`alumnos_has_preguntas`;
TRUNCATE TABLE `disc`.`centros`;
TRUNCATE TABLE `disc`.`equipos`;
TRUNCATE TABLE `disc`.`preguntas`;
TRUNCATE TABLE `disc`.`profesores`;
TRUNCATE TABLE `disc`.`profesores_has_cursos`;
TRUNCATE TABLE `disc`.`usuarios`;
SET
FOREIGN_KEY_CHECKS=1;

INSERT INTO `disc`.`centros` (`nombre`, `localidad`, `codigopostal`)
VALUES ('Q4400415H', 'Alcañíz', '44600');

INSERT INTO `disc`.`usuarios` (`dni`, `nombre`, `apellidos`, `clave`, `centros_nombre`, `tipo`)
VALUES ('1111', 'admin_general', 'admin general', '1111', 'Q4400415H', 'admin general');
INSERT INTO `disc`.`usuarios` (`dni`, `nombre`, `apellidos`, `clave`, `centros_nombre`, `tipo`)
VALUES ('2222', 'admin_centro', 'admin centro', '2222', 'Q4400415H', 'admin centro');
INSERT INTO `disc`.`usuarios` (`dni`, `nombre`, `apellidos`, `clave`, `centros_nombre`, `tipo`)
VALUES ('3333', 'profe', 'profe', '3333', 'Q4400415H', 'profesor');
INSERT INTO `disc`.`usuarios` (`dni`, `nombre`, `apellidos`, `clave`, `centros_nombre`, `tipo`)
VALUES ('4444', 'alumno', 'alumno', '4444', 'Q4400415H', 'alumno');

INSERT INTO `disc`.`admins` (`usuarios_dni`)
VALUES ('1111');
INSERT INTO `disc`.`profesores` (`usuarios_dni`, `departamento`, `isAdmin`)
VALUES ('3333', 'informatica', true);
-- INSERT INTO `disc`.`alumnos` (`usuarios_dni`, `equipos_nombre`, `cursos_codigo`, `cursos_centros_nombre`) VALUES ('4444', '0', '0', 'Q4400415H');
