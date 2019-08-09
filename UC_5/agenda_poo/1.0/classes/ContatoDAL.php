<?php
    require_once("Contato.php");

    class ContatoDAL {
        private $conexao;

        function __construct($conexao) {
            $this->conexao = $conexao;
        }

        public function insert($contato) {
            $nome = $contato->getNome();
            $telefone = $contato->getTelefone();
            $email = $contato->getEmail();

            $this->conexao->getBanco()->query("INSERT INTO contatos VALUES(null, '$nome', '$telefone', '$email')");
        }

        public function update($contato) {
            $sql = "";
        }

        public function delete($contato) {
            $sql = "";
        }

        public function getContatos() {
            $sql = "";
        }

        public function getContato($id) {
            $sql = "";
        }
    }
?>