<?php
    require_once("Pessoa.php");

    class Usuario extends Pessoa {
        private $foto;
        private $jogos;

        function __construct($id = 0, $nome = "", $email = "", $senha = "", $foto = "") {
            parent::__construct($id, $nome, $email, $senha);
            $this->setFoto($foto);
            $this->jogos = [];
        }

        public function getFoto() {
            return $this->foto;
        }

        public function setFoto($foto) {
            $this->foto = $foto;
        }

        public function getJogos() {
            return $this->jogos;
        }

        public function setJogo($jogo) {
            $this->jogos[] = $jogo;
        }
    }
?>