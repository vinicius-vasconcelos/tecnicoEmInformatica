<?php
    class Administrador {
        private $id;
        private $nome;
        private $email;
        private $senha;

        function __construct($nome = "", $email = "", $senha = "", $id = 0) {
            $this->setNome($nome);
            $this->setEmail($email);
            $this->setSenha($senha);
            $this->setId($id);
        }

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function getSenha() {
            return $this->senha;
        }

        public function setSenha($senha) {
            $this->senha = $senha;
        }
    }
?>