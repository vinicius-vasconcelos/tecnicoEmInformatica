<?php 
    require_once("Conexao.php");
    require_once("Contato.php");
    require_once("ContatoDAL.php");
    $conexao = new Conexao("localhost", "root", "", "agenda1.0");
    $operacao = new ContatoDAL($conexao);

    if(isset($_GET['op'])){
       

       switch($_GET['op']) {
            case 'insert':
                $contato = new Contato($_POST['txtNome'], $_POST['txtTelefone'], $_POST['txtEmail']);
                $operacao->insert($contato);
                header("location: ../index.php?sucesso=Cadastrado com sucesso !!!");
            break;

            case 'update':
                $contato = new Contato($_POST['txtNome'], $_POST['txtTelefone'], $_POST['txtEmail'], $_POST['id']);
                $operacao->update($contato);
            break;

            case 'delete':
                $operacao->delete($_GET['id']);
                header("location: ../index.php?sucesso=Deletado com sucesso !!!");
            break;

            case 'gets':
                $arrContatos = $operacao->getContatos();
                $str = "";

                while($row = mysqli_fetch_array($arrContatos)) {
                    $str .= '<div class="list-item">';
                        $str .= '<div>'. $row["nome"] .'</div>';
                        $str .= '<div>'. $row["tel"] .'</div>';
                        $str .= '<div>'. $row["email"] .'</div>';
                        $str .= '<div class="del"><a href="classes/ctrContato.php?op=delete&id=' . $row['idcontatos'] . '"><i class="fas fa-user-times"></i></a></div>';
                    $str .= '</div>';
                } 

                echo $str;
            break;

            case 'get':
                $con = $operacao->getContato($_GET['id']);
            break;

            case 'buscarNome':
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
            break;
       }
    }
?>
