<?php
    require_once("../models/Categoria.php");

    class CategoriaDAL {
        private $conexao;

        function __construct($conexao) {
            $this->conexao = $conexao;
        }

        public function insert($cat) {
            $nome = $cat->getNome();

            return $this
                    ->conexao
                    ->getBanco()
                    ->query("INSERT INTO categorias VALUES(null, '$nome')");
        }

        public function update($cat) {
            $id = $cat->getId();
            $nome = $cat->getNome();

            return $this
                    ->conexao
                    ->getBanco()
                    ->query("UPDATE categorias SET nome = '$nome' WHERE id = " . $id);
        }

        public function delete($id) {
            return $this
                    ->conexao
                    ->getBanco()
                    ->query("DELETE FROM categorias WHERE id = $id");
        }

        public function getCategorias() {
            return $this
                    ->conexao
                    ->getBanco()
                    ->query("SELECT * FROM categorias");
        }

        public function getCategoria($id) {
            return $this
                    ->conexao
                    ->getBanco()
                    ->query("SELECT * FROM categorias WHERE id = " . $id);
        }
    }
?>