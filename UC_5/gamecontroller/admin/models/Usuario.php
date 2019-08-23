<?php
    require_once("Pessoa.php");

    class Usuario extends Administrador {
        private $foto;
        private $bio;
        private $jogos;

        function __construct($nome = "", $email = "", $senha = "", $foto = "", $bio = "", $id = 0) {
            parent::__construct($nome, $email, $senha, $id);
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