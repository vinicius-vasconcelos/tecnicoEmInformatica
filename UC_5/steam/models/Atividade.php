<?php
    class Atividade {
        private $id;
        private $usuario;
        private $data;
        private $pontuacao;
        private $tempo;

        function __construct($id = 0, $usuario = null, $data = "", $pontuacao = 0, $tempo = 0) {
            $this->setId($id);
            $this->setUsuario($usuario);
            $this->setData($data);
            $this->setPontuacao($pontuacao);
            $this->setTempo($tempo);
        }

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getUsuario() {
            return $this->usuario;
        }

        public function setUsuario($usuario) {
            $this->usuario = $usuario;
        }

        public function getData() {
            return $this->data;
        }

        public function setData($data) {
            $this->data = $data;
        }

        public function getPontuacao() {
            return $this->pontuacao;
        }

        public function setPontuacao($pontuacao) {
            $this->pontuacao = $pontuacao;
        }

        public function getTempo() {
            return $this->tempo;
        }

        public function setTempo($tempo) {
            $this->tempo = $tempo;
        }
    }
?>