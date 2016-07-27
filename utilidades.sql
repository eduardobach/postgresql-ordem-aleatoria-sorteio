
/*Manipular schema*/
CREATE SCHEMA nameschema;
ALTER SCHEMA nameschema RENAME TO newname;
DROP SCHEMA nameschema; --cascade
ALTER TABLE nameschema.nametable SET SCHEMA nameschema_alter; --alterar tabela de um schema para outro
SET search_path TO schema_alter;

--hash de um registro da tabela
SELECT tb.id, md5(CAST((tb.*) AS text)) FROM tb_teste AS tb limit 10;

--json completo de um registro
SELECT tb.id, row_to_json(tb) FROM tb_teste AS tb limit 10;

--criar view
CREATE VIEW nome_view AS SELECT * FROM tb_teste AS tb;




