<?php
    require_once("../config/Conexao.php");
    require_once("../models/Jogo.php");
    require_once("../DAL/JogoDAL.php");

    $conexao = new Conexao("localhost", "root", "", "gameControllerDB");
    $operacao = new JogoDAL($conexao);

    if(isset($_GET['op'])) {

        switch($_GET['op']) {

            case 'insert':
                $jog = new Jogo($_POST['nome'], $_POST['categoria']);
                
                if($operacao->insert($jog))
                    header("location: ../cadJogo.php?sucesso=Cadastrado com sucesso !!!");
                else
                    header("location: ../cadJogo.php?erro=Erro ao cadastrar !!!");
            break;
 
            case 'update':
                $jog = new Jogo($_POST['nome'], $_POST['categoria'], $_POST['codigo']);
                $strError = 'id='.$jog->getId().'&nome='.$jog->getNome().'&categoria='.$jog->getCategoria();

                if($operacao->update($jog))
                    header("location: ../listJogos.php?sucesso=Alterado com sucesso !!!");
                else
                    header("location: ../cadJogo.php?erro=Erro ao alterar !!!&".$strError);
            break;
 
            case 'delete':
                if($operacao->delete($_GET['id']))
                    echo "sucesso=Deletado com sucesso !!!";
                else
                    echo "erro=Falha ao deletar !!!";
            break;
 
            case 'gets':
                $arrJog = $operacao->getJogos();
                $str = "";
            
                while($row = mysqli_fetch_array($arrJog)) {
                    $arguments = "'".$row["idJogo"]."', '".$row["nomeJogo"]."', '".$row["nomeCategoria"]."'";
                    $urlView = "'"."cadJogo.php"."'";
                    $urlCtr = "'"."ctrJogo.php"."'";

                    $str .= '<tr>';
                        $str .= '<th class="d-none d-md-table-cell">'. $row["idJogo"] .'</th>';
                        $str .= '<td>'. $row["nomeJogo"] .'</td>';
                        $str .= '<td>'. $row["nomeCategoria"] .'</td>';
                        $str .= '<td class="text-center">';
                            $str .= '<button type="button" class="btn btn-sm btn-outline-info mx-1" onclick="showPreview('.$arguments.')"><i class="fas fa-eye"></i></button>';
                            $str .= '<button type="button" class="btn btn-sm btn-outline-warning mx-1" onclick="updateForm('.$row["idJogo"].', '.$urlView.', '. $urlCtr.')"><i class="far fa-edit"></i></button>';
                            $str .= '<button type="button" class="btn btn-sm btn-outline-danger mx-1" onclick="showPreviewDelete('.$row["idJogo"].')"><i class="far fa-trash-alt"></i></button>';
                        $str .= '</td>';

                    $str .= '</tr>';
                }
                
                echo $str;
            break;

            case 'getsC':
                $arrJog = $operacao->getJogos();
                $str = "";

                if(isset($_GET['idJog']) && $_GET['idJog'] == 0) 
                    while($row = mysqli_fetch_array($arrJog)) 
                        $str .= '<option value="'.$row["id"].'">'.$row["nome"].'</option>';
                else
                    while($row = mysqli_fetch_array($arrJog))
                        if($_GET['idCat'] == $row["id"]) 
                            $str .= '<option value="'.$row["id"].'" selected>'.$row["nome"].'</option>';
                        else
                            $str .= '<option value="'.$row["id"].'">'.$row["nome"].'</option>';

                
                echo $str;
            break;

            case 'get':
                $jog = $operacao->getJogo($_GET['id']);
                $str = "";
            
                if($row = mysqli_fetch_assoc($jog))
                    $str .= 'id='.$row["idJogo"].'&nome='.$row["nomeJogo"].'&idCat='.$row["idCategoria"];
                
                echo $str;
            break;
        }
     }
