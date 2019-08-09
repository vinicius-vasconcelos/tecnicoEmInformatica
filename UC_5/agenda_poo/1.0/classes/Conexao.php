<?php
    class Conexao {
        private $servidor;
        private $usuario;
        private $senha;
        private $nomeBanco;
        private $banco;
        private $connectado;

        function __construct($servidor, $usuario, $senha, $nomeBanco) {
            $this->setServidor($servidor);
            $this->setUsuario($usuario);
            $this->setSenha($senha);
            $this->setNomeBanco($nomeBanco);
            $this->setConnectado(false); 
            
            if(!$this->geConnectado())
                $this->conectar();
        }

        public function getServidor() {
            return $this->servidor;
        }

        public function setServidor($servidor) {
            $this->servidor = $servidor;
        }

        public function getUsuario() {
            return $this->usuario;
        }

        public function setUsuario($usuario) {
            $this->usuario = $usuario;
        }

        public function getSenha() {
            return $this->senha;
        }

        public function setSenha($senha) {
            $this->senha = $senha;
        }

        public function getNomeBanco() {
            return $this->nomeBanco;
        }

        public function setNomeBanco($nomeBanco) {
            $this->nomeBanco = $nomeBanco;
        }

        public function geConnectado() {
            return $this->connectado;
        }

        public function setConnectado($connectado) {
            $this->connectado = $connectado;
        }

        public function getBanco() {
            return $this->banco;
        }

        private function conectar() {
    
            $this->banco = new mysqli(
                $this->getServidor(),
                $this->getUsuario(),
                $this->getSenha(),
                $this->getNomeBanco()
            );
            
            if($this->banco->connect_errno) {
                $this->setConnectado(false); 
                die("Falha na conxeão com o banco de dados, entre em contato com seu suporte. [ERROR:" . $this->banco->connect_errno . "]");
            } else {
                $this->setConnectado(true);
                return $this->getBanco();
            }
        }
    }


?>