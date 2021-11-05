-- SET FOREIGN_KEY_CHECKS = 0;
-- TRUNCATE TABLE `disc`.`usuarios`;
-- TRUNCATE TABLE `disc`.`centros`;
-- SET FOREIGN_KEY_CHECKS = 1;

INSERT INTO `disc`.`centros` (`nombre`, `localidad`, `codigopostal`) VALUES ('Q4400415H', 'Alcañíz', '44600');
INSERT INTO `disc`.`usuarios` (`dni`, `nombre`, `apellidos`, `clave`, `centros_nombre`, `tipo`) VALUES ('1111', 'admin general', 'admin general', '1111', 'Q4400415H', 'admin general');
INSERT INTO `disc`.`usuarios` (`dni`,`nombre`,`apellidos`,`clave`,`centros_nombre`,`tipo`) VALUES ('2222','admin centro','admin centro','2222','CPIFP Bajo Aragon','admin centro');
INSERT INTO `disc`.`usuarios` (`dni`,`nombre`,`apellidos`,`clave`,`centros_nombre`,`tipo`) VALUES ('3333','profe','profe','3333','CPIFP Bajo Aragon','profesor');
INSERT INTO `disc`.`usuarios` (`dni`,`nombre`,`apellidos`,`clave`,`centros_nombre`,`tipo`) VALUES ('4444','alumno','alumno','4444','CPIFP Bajo Aragon','alumno');
