<?php
	require_once('../include/connectaBD.php');
	require_once('../include/validar.php');

	if(isset($_GET['sucesso']) || isset($_GET['error']))
		header("refresh:3; admin.php");

	$sqlU = "SELECT COUNT(*) AS qtde FROM users";
	$resultU = $banco->query($sqlU);
	$rowU = mysqli_fetch_assoc($resultU);

	$sqlC = "SELECT COUNT(*) AS qtde FROM contatos";
	$resultC = $banco->query($sqlC);
	$rowC = mysqli_fetch_assoc($resultC);

	$sqlA = "SELECT COUNT(*) AS qtde FROM agendamentos";
	$resultA = $banco->query($sqlA);
	$rowA = mysqli_fetch_assoc($resultA);
?>
<!doctype html>
	<html lang="pt-br">

	<head>
		<meta charset="utf-8">
		<title>PokeAgenda3.0 - AnDaNilo - Controle</title>

		
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400i,700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
		<link rel="stylesheet" href="../css/folha.css" type="text/css">
		<link rel="shortcut icon" type="image/x-icon" href="../image/favicon.ico">
	</head>

	<body>
		<header>
			<div id="logo"><img src="../image/top_key.png" alt="Logo PokeAgenda"> Paínel de controle</div>
			<div id="search">
				<form action="#" method="get" name="formBusca" id="formBusca">
					<input type="text" name="txtBusca" id="txtBusca" placeholder="Busca">
					<input type="submit" name="btSerach" id="btSearch" value="Buscar">
				</form>
			</div>
		</header>
		<nav>
			<ul>
				<li><a href="admin.php">Inicio</a></li>
				<li><a href="contatos.php">Contatos</a></li>
				<li><a href="users.php">Usuários</a></li>
				<li><a href="event.php">Eventos</a></li>
				<li><a href="sair.php">Sair</a></li>
			</ul>
		</nav>
		<main>
			<article>
				<?php if(isset($_GET['error'])) {?>
					<div class="error">
						<p><?= $_GET['error']?></p>
					</div>
				<?php }?>

				<?php if(isset($_GET['sucesso'])) {?>
					<div class="sucesso">
						<p><?= $_GET['sucesso']?></p>
					</div>
				<?php }?>

				<h1>DASHBOARD</h1>
				<section id="dashboard">
					<div class="cxDash"><a href="users.php">Usuários</a> <?= $rowU['qtde']?></div>
					<div class="cxDash"><a href="contatos.php">Contatos</a> <?= $rowC['qtde']?></div>
					<div class="cxDash"><a href="event.php">Eventos</a> <?= $rowA['qtde']?></div>

					<div id="chart_div"></div>
				</section>
			</article>
		</main>
		<footer>Desenvolvido por seres supremos &reg; &copy;</footer>
	</body>

	<!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Usuarios', <?= $rowU['qtde']?>],
          ['Contatos', <?= $rowC['qtde']?>],
          ['Agendamentos', <?= $rowA['qtde']?>],
         
        ]);

        // Set chart options
        var options = {'title':'How Much Pizza I Ate Last Night',
                       'width':400,
                       'height':300};

        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

</html>