<?php
    require_once("../config/Conexao.php");
    require_once("../models/Categoria.php");
    require_once("../DAL/CategoriaDAL.php");

    $conexao = new Conexao("localhost", "root", "", "gameControllerDB");
    $operacao = new CategoriaDAL($conexao);

    if(isset($_GET['op'])) {

        switch($_GET['op']) {

            case 'insert':
                $cat = new Categoria($_POST['nome']);
                
                if($operacao->insert($cat))
                    header("location: ../cadCategoria.php?sucesso=Cadastrado com sucesso !!!");
                else
                    header("location: ../cadCategoria.php?erro=Erro ao cadastrar !!!");
            break;
 
            case 'update':
                $cat = new Categoria($_POST['nome'], $_POST['codigo']);
                $strError = 'id='.$cat->getId().'&nome='.$cat->getNome();
                
                if($operacao->update($cat))
                    header("location: ../listCategorias.php?sucesso=Alterado com sucesso !!!");
                else
                    header("location: ../cadCategoria.php?erro=Erro ao alterar !!!&".$strError);
            break;
 
            case 'delete':
                if($operacao->delete($_GET['id']))
                    echo "sucesso=Deletado com sucesso !!!";
                else
                    echo "erro=Falha ao deletar !!!";
            break;
 
            case 'gets':
                $arrCat = $operacao->getCategorias();
                $str = "";
            
                while($row = mysqli_fetch_array($arrCat)) {
                    $arguments = "'".$row["id"]."', '".$row["nome"]."'";
                    $urlView = "'"."cadCategoria.php"."'";
                    $urlCtr = "'"."ctrCategoria.php"."'";

                    $str .= '<tr>';
                        $str .= '<th class="d-none d-md-table-cell">'. $row["id"] .'</th>';
                        $str .= '<td>'. $row["nome"] .'</td>';
                        $str .= '<td class="text-center">';
                            $str .= '<button type="button" class="btn btn-sm btn-outline-info mx-1" onclick="showPreview('.$arguments.')"><i class="fas fa-eye"></i></button>';
                            $str .= '<button type="button" class="btn btn-sm btn-outline-warning mx-1" onclick="updateForm('.$row["id"].', '.$urlView.', '. $urlCtr.')"><i class="far fa-edit"></i></button>';
                            $str .= '<a href="" type="button" class="btn btn-sm btn-outline-danger mx-1" onclick="showPreviewDelete('.$row["id"].')"><i class="far fa-trash-alt"></i></a>';
                        $str .= '</td>';

                    $str .= '</tr>';
                }
                
                echo $str;
            break;

            case 'getsC':
                $arrCat = $operacao->getCategorias();
                $str = "";

                if(isset($_GET['idCat']) && $_GET['idCat'] == 0) 
                    while($row = mysqli_fetch_array($arrCat)) 
                        $str .= '<option value="'.$row["id"].'">'.$row["nome"].'</option>';
                else
                    while($row = mysqli_fetch_array($arrCat))
                        if($_GET['idCat'] == $row["id"]) 
                            $str .= '<option value="'.$row["id"].'" selected>'.$row["nome"].'</option>';
                        else
                            $str .= '<option value="'.$row["id"].'">'.$row["nome"].'</option>';

                
                echo $str;
            break;

            case 'get':
                $cat = $operacao->getCategoria($_GET['id']);
                $str = "";
            
                if($row = mysqli_fetch_assoc($cat))
                    $str .= 'id='.$row["id"].'&nome='.$row["nome"];
                
                echo $str;
            break;
        }
     }
