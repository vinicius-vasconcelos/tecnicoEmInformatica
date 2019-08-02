<?php
    class ClasseBase {
        private $id;
        private $nome;


        function __construct($id = 0, $nome = "") {
            $this->setId($id);
            $this->setNome($nome);
        }

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getNome() {
            return $this->id;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }
    }
?>