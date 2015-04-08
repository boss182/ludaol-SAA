-- VISTA v1 --

CREATE OR REPLACE VIEW v_formulario_data AS
SELECT  fd.cod_formulario_data as codigo, 
        fd.cod_objeto as cod_objeto, 
        ot.cod_objeto_tipo as cod_tipo, 
        ot.txt_nombre as nombre_tipo, 
        obj.cod_propietario as cod_propietario, 
        cp.cod_formulario as cod_formulario, 
        cp.txt_id as campo, 
        fd.txt_valor as valor
FROM app_formulario_data fd
INNER JOIN app_campo cp ON cp.cod_campo = fd.cod_campo
INNER JOIN app_objeto obj ON obj.cod_objeto = fd.cod_objeto
INNER JOIN app_objeto_tipo ot ON ot.cod_objeto_tipo = obj.cod_objeto_tipo;


-- SP OBTENER OBJETO POR CODIGO --

DELIMITER $$

DROP PROCEDURE IF EXISTS `sp_getObjeto` $$

CREATE PROCEDURE `sp_getObjeto`(
  IN in_cod_objecto INT(10)
)
BEGIN

  SET @sql = NULL;
SELECT
  GROUP_CONCAT(DISTINCT
    CONCAT(
      'MAX(IF(df.campo = ''',
      campo,
      ''', df.valor, NULL)) AS ',
      campo
    )
  ) INTO @sql
FROM v_formulario_data;


SELECT GROUP_CONCAT(DISTINCT CONCAT(' MAX(IF(campo = ''',campo,''', valor, NULL)) AS ',campo)) INTO @sql FROM v_formulario_data;

SET @sql = CONCAT('SELECT cod_objeto, nombre_tipo, cod_tipo, cod_propietario, ', @sql, ' FROM v_formulario_data WHERE cod_objeto = ', in_cod_objecto);

PREPARE stmt FROM @sql;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;

END $$

DELIMITER ;

-- SP OBTENER DATA POR FORMULARIO --

DELIMITER $$

DROP PROCEDURE IF EXISTS `sp_getObjectoColeccion` $$

CREATE PROCEDURE `sp_getObjectoColeccion`(
  IN in_cod_objeto_tipo INT(10),
  IN in_cod_propietario INT(10)
)
BEGIN

  SET @sql = NULL;
SELECT
  GROUP_CONCAT(DISTINCT
    CONCAT(
      'MAX(IF(df.campo = ''',
      campo,
      ''', df.valor, NULL)) AS ',
      campo
    )
  ) INTO @sql
FROM v_formulario_data;


SELECT GROUP_CONCAT(DISTINCT CONCAT(' MAX(IF(campo = ''',campo,''', valor, NULL)) AS ',campo)) INTO @sql FROM v_formulario_data;

SET @sql = CONCAT('SELECT cod_objeto, nombre_tipo, cod_tipo, cod_propietario, ', @sql, ' FROM v_formulario_data WHERE cod_objeto = ', in_cod_objeto_tipo,' AND cod_propietario = ', in_cod_propietario);

PREPARE stmt FROM @sql;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;

END $$

DELIMITER ;