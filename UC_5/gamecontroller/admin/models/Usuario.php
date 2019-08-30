<?php
    require_once("Administrador.php");

    class Usuario extends Administrador {
        private $foto;
        private $bio;
        private $jogos;

        function __construct($nome = "", $email = "", $senha = "", $foto = "", $bio = "", $id = 0) {
            parent::__construct($nome, $email, $senha, $id);
            $this->setBio($bio);
            $this->setFoto($foto);
           // $this->jogos = [];
        }

        public function getBio() {
            return $this->bio;
        }

        public function setBio($bio) {
            $this->bio = $bio;
        }

        public function getFoto() {
            return $this->foto;
        }

        public function setFoto($foto) {
            $this->foto = $foto;
        }

        /*public function getJogos() {
            return $this->jogos;
        }

        public function setJogo($jogo) {
            $this->jogos[] = $jogo;
        }*/
    }
?>