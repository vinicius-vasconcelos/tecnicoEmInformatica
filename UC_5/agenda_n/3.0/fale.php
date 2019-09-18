<?php
    if(isset($_POST['btGo'])) {
        //$dia = date('d/m/Y');



        $mensagemResp = '
                        <div class="msg-fale">
                            <h2>Obrigado</h2>
                            <p>Mensagem encaminhada com sucesso.</p>
                            <p><strong>Em breve entraremos em contato<strong>, uma cópia deste formulário foi enviado para seu e-mail.</p>
                        </div>
                    ';
        
        /*if(PATH_SEPARATOR == ';')
            $quebraLinha = "\r\n";
        else
            $quebraLinha = "\n";*/

        $nome = utf8_decode(@$_POST['txtNome']);
        $emailVisitante = utf8_decode(@$_POST['txtEmail']);
        $assunto = utf8_decode(@$_POST['textAssunto']);
        $mensagem = utf8_decode(@$_POST['txtMensagem']);
        $para = "viniciussouzav@gmail.com"; 

        /*$email = "viniciussouzav@gmail.com";
        //$ip = getenv('REMOTE_ADDR');

        $mensagemHTML = 'Nome' . $nome . '<br> E-mail' . 
            $emailVisitante . '<br> Assunto' . $assunto . 
            "<b>Mensagem</b>: " . $mensagem;

            $headers = "MIME-Version 1.1" . $quebraLinha . "<br>";
            $headers .= "Content-type: text/html; charset=iso-8859-1" . $quebraLinha;
            $headers .= "From" . $email . $quebraLinha;
            $headers .= "Cc: " . $emailvisitante . $quebra_linha;
            $headers .= "Reply-To: " . $emailvisitante . $quebra_linha;
            //Note que o email do remetente será usado no campo Reply-To (responder para)
            if ( !mail( $para, $assunto, $mensagemHTML, $headers, "-r" . $email ) ) {		//se for postfix
                $headers .= "Return-Path: " .$para . $quebra_linha;
                //se "não for postfix"
                mail( $para, $assunto, $mensagemHTML, $headers );
            }*/

            $subject = "Email recebido pelo site: " . $nome;
            $texto2 = "Nome: " .nome . "\n";
            $texto2 .= "Email: " .emailVisitante . "\n";
            $texto2 .= "Mensagem: " .mensagem . "\n";
            mail($para, $subject, $text2, "From: " .$emailVisitante);

            print_r($mensagem);

    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fale conosco</title>
    <link rel="stylesheet" href="./css/folha.css" type="text/css">
	<link rel="shortcut icon" type="image/x-icon" href="../image/favicon.ico">
</head>

<body>
    <header>
        <div id="logo"><img src="image/logoTwo.png" alt="Logo PokeAgenda"></div>
    </header>

    <nav>
        <ul>
            <li><a href="index.php"> | Inicio | </a></li>
            <li><a href="ctrlweb/index.php"> | Administração | </a></li>
            <li><a href="fale.php"> | Fale Conosco | </a></li>
            <li><a href="javascript:history.back();"> | Voltar | </a></li>
        </ul>
    </nav>

    <main>
        <article>
            <section id="acesso">
                <h2>Posso ajudar</h2>
                <form action="#" method="post" name="formContato" id="formContato">
                    <input type="text" name="txtNome" id="txtNome" placeholder="Nome">
                    <input type="text" name="txtEmail" id="txtEmail" placeholder="E-Mail*" required>
                    <input type="text" name="txtAssunto" id="txtAssunto" placeholder="Assunto">
                    <textarea name="txtMensagem" id="txtMensagem" cols="30" rows="10" placeholder="Mensagem*" required></textarea>
                    <input type="submit" name="btGo" id="btGo" value="Enviar">
                </form>
            </section>
        </article>
    </main>
    <footer>Desenvolvido por seres supremos &reg; &copy;</footer>
</body>

</html>