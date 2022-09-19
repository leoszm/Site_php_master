<?php

    class Celular{

        //  ATRIBUTOS = Caracteristicas
        
        /*  VISIBILIDADE
            + Publico     (Tel. Publico)      (Classe atual e todas as outras)  
            - Privado     (Celular)           (Somente a classe atual)
            # Protegido   (Tel. Residencial)  (Classe atual e subclasses)
        */

        public $marca;
        public $modelo;
        var $cor;
        protected $memoria;
        private $camera;
        public $ligado;

        //  MÉTODOS = Comportamentos
        function ligar(){
            if ( $this->ligado ){
                echo "<br>O celular já está ligado!<br>";
            } else {
                echo "Ligando...";
            }
        }

        function desligar(){
            if ( $this->ligado ){
                echo "<br>Desligando o celular...<br>";
                $this->ligado = false;                
            }
        }

        function fotografar(){
            if( $this->ligado ){
                echo "<br>Foto...<br>";
                echo "<img src=\"https://www.uninove.br/logo-uninove.svg\" alt=\"Uninove\">";
            }    
        }


    }