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

            $this
                ->conexao
                ->getBanco()
                ->query("INSERT INTO contatos VALUES(null, '$nome', '$telefone', '$email')");
        }

        public function update($contato) {
            $id = $contato->getId();
            $nome = $contato->getNome();
            $telefone = $contato->getTelefone();
            $email = $contato->getEmail();

            $this
                ->conexao
                ->getBanco()
                ->query("UPDATE contatos set nome = '$nome', tel = '$telefone', email = '$email' WHERE idcontatos = $id");
        }

        public function delete($id) {
            $this
            ->conexao
            ->getBanco()
            ->query("DELETE FROM contatos WHERE idcontatos = $id");
        }

        public function getContatos() {
            return $this
                    ->conexao
                    ->getBanco()
                    ->query("SELECT * FROM contatos");
        }

        public function getContato($id) {
            return $this
                    ->conexao
                    ->getBanco()
                    ->query("SELECT * FROM contatos WHERE idcontatos = $id");
        }

        public function buscarNome($str) {
            return $this
                    ->conexao
                    ->getBanco()
                    ->query("SELECT * FROM contatos WHERE nome LIKE '%$str%'");
        }
        
    }
?>