<?php
    require_once("../config/Conexao.php");
    require_once("../models/Administrador.php");
    require_once("../DAL/AdministradorDAL.php");

    $conexao = new Conexao("localhost", "root", "", "gameControllerDB");
    $operacao = new AdministradorDAL($conexao);

    if(isset($_GET['op'])) {

        switch($_GET['op']) {

            case 'insert':
                $adm = new Administrador($_POST['nome'], $_POST['email'], $_POST['senha']);
                
                if($operacao->insert($adm))
                    header("location: ../cadAdmistrador.php?sucesso=Cadastrado com sucesso !!!");
                else
                    header("location: ../cadAdmistrador.php?erro=Erro ao cadastrar !!!");
            break;
 
            case 'update':
                $adm = new Administrador($_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['id']);
                $operacao->update($adm);
            break;
 
            case 'delete':
                $operacao->delete($_GET['id']);
                header("location: ../index.php?sucesso=Deletado com sucesso !!!");
            break;

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
 
            case 'gets':
                $arrAdms = $operacao->getAdministradores();
                $str = "";
            
                while($row = mysqli_fetch_array($arrAdms)) {
                    $str .= '<tr>';
                        $str .= '<th class="d-none d-md-table-cell">'. $row["id"] .'</th>';
                        $str .= '<td>'. $row["nome"] .'</td>';
                        $str .= '<td class="d-none d-md-table-cell">'. $row["email"] .'</td>';
                        $str .= '<td class="text-center">';
                            $str .= '<button type="button" class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></button>';
                            $str .= '<button type="button" class="btn btn-sm btn-outline-warning"><i class="far fa-edit"></i></button>';
                            $str .= '<a href="" type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalConfirmaExcluir"><i class="far fa-trash-alt"></i></a>';
                        $str .= '</td>';

                    $str .= '</tr>';
                }
                
                echo $str;
            break;
        }
     }
