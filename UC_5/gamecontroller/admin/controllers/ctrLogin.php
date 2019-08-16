<?php
    require_once("../config/Conexao.php");
    require_once("../models/Administrador.php");
    require_once("../DAL/AdministradorDAL.php");

    $conexao = new Conexao("localhost", "root", "", "gameControllerDB");
    $operacao = new AdministradorDAL($conexao);

    if(isset($_GET['op'])) {

        switch($_GET['op']) {
            /*case 'insert':
                $adm = new Administrador($_POST['txtNome'], $_POST['txtTelefone'], $_POST['txtEmail']);
                $operacao->insert($adm);
                header("location: ../index.php?sucesso=Cadastrado com sucesso !!!");
            break;
 
            case 'update':
                $adm = new Administrador($_POST['txtNome'], $_POST['txtTelefone'], $_POST['txtEmail'], $_POST['id']);
                $operacao->update($adm);
            break;
 
            case 'delete':
                $operacao->delete($_GET['id']);
                header("location: ../index.php?sucesso=Deletado com sucesso !!!");
            break;*/

            case 'logar':
                $result =  $operacao->getLogar($_POST['inputEmail'], $_POST['inputPassword']);

                if($row  = mysqli_fetch_array($result)) {

                    if(isset($_SESSION)) {
                        $_SESSION['liberado'] = true;
                        $_SESSION['login'] = $login;
                        $_SESSION['nome'] = $row['nome'];
                    }
            
                    header("location: ../painel.php?nomeLogado=" . $row['nome']);
                }
                else {
                    if(isset($_SESSION))
                        $_SESSION['liberado'] = false;
            
                     header("location: ../index.php?erro=Falha de autenticação");
                }
            break;
 


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
