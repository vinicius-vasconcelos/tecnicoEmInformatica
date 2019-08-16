<?php
    require_once("../models/Administrador.php");

    class UsuarioDAL {
        private $conexao;

        function __construct($conexao) {
            $this->conexao = $conexao;
        }

        public function insert($usu) {
            $nome = $usu->getNome();
            $telefone = $usu->getTelefone();
            $email = $usu->getEmail();

            $this
                ->conexao
                ->getBanco()
                ->query("INSERT INTO administradores VALUES(null, '$nome', '$telefone', '$email')");
        }

        public function update($usu) {
            $id = $usu->getId();
            $nome = $usu->getNome();
            $telefone = $usu->getTelefone();
            $email = $usu->getEmail();

            $this
                ->conexao
                ->getBanco()
                ->query("UPDATE administradores set nome = '$nome', tel = '$telefone', email = '$email' WHERE id = $id");
        }

        public function delete($id) {
            $this
            ->conexao
            ->getBanco()
            ->query("DELETE FROM administradores WHERE id = $id");
        }

        public function getLogar($login, $senha) {
            return $this
                    ->conexao
                    ->getBanco()
                    ->query("SELECT * FROM administradores WHERE email = '$login' AND senha = '$senha'");
        }
}

?>
