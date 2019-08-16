<?php
    require_once("../config/Conexao.php");
    require_once("../models/Usuario.php");
    require_once("../DAL/UsuarioDAL.php");

    $conexao = new Conexao("localhost", "root", "", "gameControllerDB");
    $operacao = new UsuarioDAL($conexao);

    if(isset($_GET['op'])) {

        switch($_GET['op']) {
            /*case 'insert':
                $usu = new Usuario($_POST['txtNome'], $_POST['txtTelefone'], $_POST['txtEmail']);
                $operacao->insert($usu);
                header("location: ../index.php?sucesso=Cadastrado com sucesso !!!");
            break;
 
            case 'update':
                $usu = new Administrador($_POST['txtNome'], $_POST['txtTelefone'], $_POST['txtEmail'], $_POST['id']);
                $operacao->update($usu);
            break;
 
            case 'delete':
                $operacao->delete($_GET['id']);
                header("location: ../index.php?sucesso=Deletado com sucesso !!!");
            break;*/


            /*case 'buscarNome':
                $arrContatos = $operacao->buscarNome($_GET['str']);
                $str = "";
            
            
                if(mysqli_num_rows($arrContatos) == 0) {
                    $str .= '<div class="list-item"><p>Não há resultados</p></div>';
                } else {
                    while($row = mysqli_fetch_array($arrContatos)) {
                        $str .= '<div class="list-item">';
                            $str .= '<div>'. $row["nome"] .'</div>';
                            $str .= '<div>'. $row["tel"] .'</div>';
                            $str .= '<div>'. $row["email"] .'</div>';
                            $str .= '<div class="del"><a href="classes/ctrContato.php?op=delete&id=' . $row['idcontatos'] . '"><i class="fas fa-user-times"></i></a></div>';
                        $str .= '</div>';
                    }
                }
                echo $str;
            break;*/
        }
     }
