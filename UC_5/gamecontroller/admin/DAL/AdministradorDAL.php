<?php
    require_once("../models/Administrador.php");

    class AdministradorDAL {
        private $conexao;

        function __construct($conexao) {
            $this->conexao = $conexao;
        }

        public function insert($adm) {
            $nome = $adm->getNome();
            $email = $adm->getEmail();
            $senha = md5($adm->getSenha());

            return $this
                    ->conexao
                    ->getBanco()
                    ->query("INSERT INTO administradores VALUES(null, '$nome', '$email', '$senha')");
        }

        public function update($adm) {
            $id = $adm->getId();
            $nome = $adm->getNome();
            $email = $adm->getEmail();
            $senha = md5($adm->getSenha());

            return $this
                    ->conexao
                    ->getBanco()
                    ->query("UPDATE administradores set nome = '$nome',email = '$email', senha = '$senha' WHERE id = $id");
        }

        public function delete($id) {
            return $this
                    ->conexao
                    ->getBanco()
                    ->query("DELETE FROM administradores WHERE id = $id");
        }

        public function getLogar($login, $senha) {
            $senha = md5($senha);
            return $this
                    ->conexao
                    ->getBanco()
                    ->query("SELECT * FROM administradores WHERE email = '$login' AND senha = '$senha'");
        }

        public function getAdministradores() {
            return $this
                    ->conexao
                    ->getBanco()
                    ->query("SELECT * FROM administradores");
        }

        public function getAdministrador($id) {
            return $this
                    ->conexao
                    ->getBanco()
                    ->query("SELECT * FROM administradores WHERE id = " . $id);
        }
    }
?>