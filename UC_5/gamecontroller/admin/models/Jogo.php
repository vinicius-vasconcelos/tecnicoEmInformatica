<?php
    class Jogo {
        private $id;
        private $nome;
        private $categoria;

        function __construct($nome = "", $categoria = 0, $id = 0) {
            $this->setNome($nome);
            $this->setCategoria($categoria);
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

        public function getCategoria() {
            return $this->categoria;
        }

        public function setCategoria($categoria) {
            $this->categoria = $categoria;
        }
    }
?>