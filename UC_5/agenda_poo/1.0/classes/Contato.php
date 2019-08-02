<?php
    require_once("ClasseBase.php");

    class Contato extends ClasseBase {
        private $telefone;
        private $email;

        function __construct($id = 0, $nome = "", $telefone = "", $email = "") {
            parent::__construct($id, $nome);
            $this->setNome($telefone);
            $this->setEmail($email);
        }

        public function getNome() {
            return $this->$nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getTelefone() {
            return $this->telefone;
        }

        public function setTelefone($telefone) {
            $this->telefone;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) {
            $this->email;
        }
    }
?>