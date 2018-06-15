﻿<?php
   header("Content-Type: text/html; charset=UTF-8",true);
	include("config.php");
	include('function.php');
?>
<html>
   <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
		<title>Fl. Bt.</title>
		<link rel="StyleSheet" href="css/geral.css">
      <link rel="StyleSheet" href="css/dark-hive/jquery-ui-1.10.3.custom.css">

		<script src="js/jquery-1.9.1.min.js"></script>
      <script src="js/jquery-ui-1.10.3.custom.js"></script>
		<script src="js/three.min.js"></script>
		<script src="js/tween.min.js"></script>
		<script src="js/TrackballControls.js"></script>
		<script src="js/CSS3DRenderer.js"></script>
		<script src="js/menu.js"></script>
	</head>
   <body>
		<div id="menuMovel"></div>

      <div id="supTudo">
         <div id="conteudoTudo">
            <div id="separadorTela"></div>
            <div id="menu">
               <div id="titulo" onclick="abrirSobre();">G.E.N.E.S.I.S</div>
               <div class="optMenu menutopesq" onclick="abrirConversa();">Conversar</div>
               <div class="optMenu menuinfesq" onclick="abrirComportameto();">Comportamento</div>
               <div class="optMenu menutopdir" onclick="abrirAprenderPalavra();">Ensinar Palavras</div>
               <div class="optMenu menuinfdir" onclick="abrirAprenderFrase();">Ensinar Frases</div>

               <div class="optMenu menuinfcen" onclick="abrirInfo();">Info</div>
            </div>
            <div id="comportamento" class="blocoT" style="display: none;"></div>
            <div id="info" class="blocoT" style="display: none;"></div>
            <div id="sobre" class="blocoT" style="display: none;"></div>
            <div id="telaConversa" class="blocoT" style="display: none;"></div>
            <div id="telaSite" class="blocoT" style="display: none;"></div>
            <div id="ensinarF" class="blocoT" style="display: none;"></div>
            <div id="ensinar" class="blocoT" style="display: none;"></div>
         </div>
      </div>
      <div id="processar" class="inferiorDireito">
         Programa criado por Eduardo Bach
      </div>
		<script>
         iniciarMenu();

         $('#textUser').on('keyup', function(e) {
            if (e.which == 13 || e.which == 9) {
               e.preventDefault();
               falar();
            }
         });

         $(function() {
            $( ".blocoT" ).draggable();
         });

         function fecharJanela(nome,limpar){
            $(nome).hide();
            if(limpar == true)
               $(nome).html('');
         }
         function abrirJanela(nome){
            $(nome).show();
         }
         function abrirConversa(){
            var nome = '#telaConversa';
            $.ajax({url: "conversar.php"}).done(
               function( html ) {
                  $(nome).html(html);
                  abrirJanela(nome);
                  $('#textUser').focus();
               }
            );
         }
         function abrirSite(){
            var nome = '#telaSite';
            $.ajax({url: "curl.php"}).done(
               function( html ) {
                  $(nome).html(html);
                  abrirJanela(nome);
               }
            );
         }
         function abrirAprenderPalavra(retornar,local){
            var data = {retornar:retornar,local:local};
            var nome = '#ensinar';
            $.ajax({url: "aprender_palavra_tela.php",data: data,type: "POST"}).done(
               function( html ) {
                  $(nome).html(html);
                  abrirJanela(nome);
               }
            );
         }
         function abrirAprenderFrase(){
            var nome = '#ensinarF';
            $.ajax({url: "aprender_frase_tela.php"}).done(
               function( html ) {
                  $(nome).html(html);
                  abrirJanela(nome);
               }
            );
         }
         function abrirSobre(){
            var nome = '#sobre';
            $.ajax({url: "sobre.php"}).done(
               function( html ) {
                  $(nome).html(html);
                  abrirJanela(nome);
               }
            );
         }
         function abrirInfo(){
            var nome = '#info';
            $.ajax({url: "info.php"}).done(
               function( html ) {
                  $(nome).html(html);
                  abrirJanela(nome);
               }
            );
         }
         function abrirComportameto(){
            var nome = '#comportamento';
            $.ajax({url: "comportamento.php"}).done(
               function( html ) {
                  $(nome).html(html);
                  abrirJanela(nome);
               }
            );
         }

		</script>
   </body>
</html>
