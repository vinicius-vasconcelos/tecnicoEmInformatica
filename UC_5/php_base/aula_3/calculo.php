<?php
    if(isset( $_POST['idade']))
        $idade = $_POST['idade'];
    else
        $idade = '';

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loops</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            margin:0;
            padding:0;
            box-sizing: borde-box;
            font-family: Arial, Helvetica, sans-serif;
            outline: none;
        }

        body {
            width: 100%;
            height: 100vh;
            background-color: #eee;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        form {
            width: 20%;
            padding: 1em;
            background-color: #fff;
            border: 1px solid #ddd;
            text-align: center;
            box-shadow: 5px 10px 20px 1px #bbb; 
        }

        h1 {
            text-transform: uppercase;
            font-weight: bold;
            color: #aaa;
        }

        input {
            width: 70%;
            height: 2em;
            margin: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
        }

        input[type=number]:active  {
            border: 2px solid #007bff;
            border-radius: 5px;
        }

        input[type=submit] {
            width: 100%;
            height: 3em;
            margin: 10px auto;
            background-color: #28a745;
            color: #fff;
            border-radius: 0;
            padding: 0;
            box-shadow: 5px 7px 10px 1px #aaa; 
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 4px;
            cursor:pointer;
        }

        input[type=submit]:hover {
            transition: all;
            transition-delay: 80ms;
            transition-duration: 550ms;
            opacity: 0.8;
        }

        div input[type=checkbox] {
            margin:0;
        }
        
    </style>

</head>
<body>
   <form method="POST" action="#">
        <h1>BEM VINDO !</h1>
        <input type="number" id="valor1" name="valor1" placeholder="Valor 1" autofocus> <br>
        <input type="number" id="valor2" name="valor2" placeholder="Valor 2" autofocus> <br>

        <div>
            <input type="checkbox" name="vezes" value="*">*
            <input type="checkbox" name="dividir" value="/">/
            <input type="checkbox" name="mais" value="+" checked>+
            <input type="checkbox" name="menos" value="-">-
        </div>
        <input type="submit" id="btgo" name="btgo" value="Enviar"> <br>

        <?php
        for($i = 0; isset($_POST['valor']) &&  $i < $_POST['valor']; $i++)
            echo('Gol da Alemanha <i class="fas fa-futbol"></i><br>');
    ?>
   </form>

   
        
</body>
</html>