<?php
    class Categoria {
        private $id;
        private $nome;

        function __construct($nome = "", $id = 0) {
            $this->setNome($nome);
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
    }
?>