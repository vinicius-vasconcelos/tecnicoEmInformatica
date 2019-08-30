<?php
    require_once("../config/Conexao.php");
    require_once("../models/Usuario.php");
    require_once("../DAL/UsuarioDAL.php");

    $conexao = new Conexao("localhost", "root", "", "gameControllerDB");
    $operacao = new UsuarioDAL($conexao);

    if(isset($_GET['op'])) {

        switch($_GET['op']) {
            case 'insert':
                $data = date('d-m-YH:i:s');
                $sup = $_FILES['foto']['size'];

               //var_dump(($sup));
                
               if($sup != 0) {
                    $nomeFoto = $_FILES['foto']['name'];
                    $completo = $nomeFoto . "_" . $data;
                    $path_parts = pathinfo($nomeFoto);
                    $targetPath = 0;
                    $nome_foto_md5 = md5($completo);
                    $nome_final = $nome_foto_md5 . "." . $path_parts['extension'];
        
                    $targetFile = str_replace('//', '/', $targetPath).$nome_final;
                    $temporario = $_FILES['foto']['tmp_name'];
                    $diretorio = "../imagens/upload" . $targetFile;
                    
                    move_uploaded_file($temporario, $diretorio);
                    $foto = $targetFile;
                }
                else
                    $foto = "";
                    
                $usu = new Usuario($_POST['nome'], $_POST['email'], $_POST['senha'], $foto, $_POST['bio']);
                
                if($operacao->insert($usu))
                    header("location: ../listUsuario.php?sucesso=Cadastrado com sucesso !!!");
                else
                    header("location: ../cadUsuario.php?erro=Erro ao cadastrar !!!");
            break;
 
            /*case 'update':
                $adm = new Administrador($_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['codigo']);
                $strError = 'id='.$adm->getId().'&nome='.$adm->getNome().'&email='.$adm->getEmail();
                
                if($operacao->update($adm))
                    header("location: ../listAdministradores.php?sucesso=Alterado com sucesso !!!");
                else
                    header("location: ../listAdministradores.php?erro=Erro ao alterar !!!&".$strError);
            break;
 
            case 'delete':
                if($operacao->delete($_GET['id']))
                    echo "sucesso=Deletado com sucesso !!!";
                else
                    echo "erro=Falha ao deletar !!!";
            break;

            case 'logar':
                $result =  $operacao->getLogar($_POST['inputEmail'], $_POST['inputPassword']);

                if($row  = mysqli_fetch_array($result)) {

                    if(isset($_SESSION)) {
                        $_SESSION['liberado'] = true;
                        $_SESSION['login'] = $login;
                        $_SESSION['nome'] = $row['nome'];
                    }
            
                    header("location: ../painel.php");
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
                    $arguments = "'".$row["id"]."', '".$row["nome"]."','".$row["email"]."'";
                    $urlView = "'"."cadAdministrador.php"."'";
                    $urlCtr = "'"."ctrAdministrador.php"."'";

                    $str .= '<tr>';
                        $str .= '<th class="d-none d-md-table-cell">'. $row["id"] .'</th>';
                        $str .= '<td>'. $row["nome"] .'</td>';
                        $str .= '<td class="d-none d-md-table-cell">'. $row["email"] .'</td>';
                        $str .= '<td class="text-center">';
                            $str .= '<button type="button" class="btn btn-sm btn-outline-info mx-1" onclick="showPreview('.$arguments.')"><i class="fas fa-eye"></i></button>';
                            $str .= '<button type="button" class="btn btn-sm btn-outline-warning mx-1" onclick="updateForm('.$row["id"].', '.$urlView.', '. $urlCtr.')"><i class="far fa-edit"></i></button>';
                            $str .= '<a href="" type="button" class="btn btn-sm btn-outline-danger mx-1" onclick="showPreviewDelete('.$row["id"].')"><i class="far fa-trash-alt"></i></a>';
                        $str .= '</td>';

                    $str .= '</tr>';
                }
                
                echo $str;
            break;

            case 'get':
                $adm = $operacao->getAdministrador($_GET['id']);
                $str = "";
            
                if($row = mysqli_fetch_assoc($adm))
                    $str .= 'id='.$row["id"].'&nome='.$row["nome"].'&email='.$row["email"];
                
                echo $str;
            break;*/
        }
     }
