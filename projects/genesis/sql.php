<?php
$replyquery = mysql_query('
	CREATE TABLE palavras (
	  id int NOT NULL,
	  nome text(10),
	  PRIMARY KEY  (id)
	);
	CREATE TABLE equivalencias (
	  id int NOT NULL,
	  pal_id int,
	  equiv_id int,
	  PRIMARY KEY  (id)
	);
	CREATE TABLE acoes(
	  id int NOT NULL,
	  nome text(40),
	  PRIMARY KEY  (id)
	);
	CREATE TABLE gp_palavras_acoes(
	  id int NOT NULL,
	  pal_id int,
     frase_acao_id int,
	  PRIMARY KEY  (id)
	);
	CREATE TABLE gp_frases_acoes(
	  id int NOT NULL,
	  acao_id int,
	  PRIMARY KEY  (id)
	);
	CREATE TABLE frases(
	  id int NOT NULL,
	  texto text(80),
	  PRIMARY KEY  (id)
	);
	CREATE TABLE relacao_acao_frases(
	  id int NOT NULL,
	  acao_id int,

	  frase_id int,
	  PRIMARY KEY  (id)
	);


	CREATE TABLE log_acesso(
	  id int NOT NULL,
	  ip varchar(30),
     data date,
     hora time,
	  PRIMARY KEY  (id)
	);
	CREATE TABLE log_conversa(
	  id int NOT NULL,
	  acao_id int,

	  frase_id int,
	  PRIMARY KEY  (id)
	);'
);
?>
