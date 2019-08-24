<?php
    //require_once("../models/Categoria.php");
    require_once("../models/Jogo.php");

    class JogoDAL {
        private $conexao;

        function __construct($conexao) {
            $this->conexao = $conexao;
        }

        public function insert($jog) {
            $nome = $jog->getNome();
            $categoria = $jog->getCategoria();

            return $this
                    ->conexao
                    ->getBanco()
                    ->query("INSERT INTO jogos VALUES(null, '$nome', $categoria)");
        }

        public function update($jog) {
            $id = $jog->getId();
            $nome = $jog->getNome();
            $categoria = $jog->getCategoria();

            return $this
                    ->conexao
                    ->getBanco()
                    ->query("UPDATE jogos SET nome = '$nome', categorias_id = " . $categoria . " WHERE id = " . $id);
        }

        public function delete($id) {
            return $this
                    ->conexao
                    ->getBanco()
                    ->query("DELETE FROM jogos WHERE id = $id");
        }

        public function getJogos() {
            return $this
                    ->conexao
                    ->getBanco()
                    ->query("SELECT"
                    . "	jogos.id as idJogo, categorias.id as idCategoria,"
                    . "	jogos.nome as nomeJogo, categorias.nome as nomeCategoria"
                    . " FROM jogos JOIN categorias ON categorias_id = categorias.id");
        }

        public function getJogo($id) {
            return $this
                    ->conexao
                    ->getBanco()
                    ->query("SELECT"
                    . "	jogos.id as idJogo, categorias.id as idCategoria,"
                    . "	jogos.nome as nomeJogo, categorias.nome as nomeCategoria"
                    . " FROM jogos JOIN categorias ON categorias_id = categorias.id AND jogos.id = " . $id);
        }
    }
?>