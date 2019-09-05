<?php
	require_once('../include/connectaBD.php');
	require_once('../include/validar.php');

	if (isset($_GET['sucesso']) || isset($_GET['error']))
		header("refresh:3; event.php");
	if (isset($_GET['op']))
		header("refresh:1; event.php");

	$sql = "SELECT * FROM agendamentos WHERE users_idusers = ".$_SESSION['idLogado']." ORDER BY data DESC";

	$result = $banco->query($sql);


	if (isset($_GET['op'])) {
		$sql = "UPDATE agendamentos SET concluido = '" . $_GET['concluido'] . "' WHERE idagendamentos = " . $_GET['id'];
		$banco->query($sql);
	}

	
	//capturando número de registros por mês
	$sql = $sql = "SELECT month(a.data) as 'mes', count(*) as 'qtde' FROM agendamentos a WHERE users_idusers = ".$_SESSION['idLogado']." AND a.data between '2019-01-01' AND '2019-12-31' GROUP BY mes";
	$data = $banco->query($sql);

	//capturando número de tarefas concluidas
	$sql = $sql = "SELECT COUNT('concluido') as 'qtdeFin' FROM agendamentos a WHERE concluido = '1' AND users_idusers = " . $_SESSION['idLogado'];
	$num = $banco->query($sql);
?>

<!doctype html>
<html lang="pt-br">

	<head>
		<meta charset="utf-8">
		<title>PokeAgenda3.0 - AnDaNilo - Controle</title>
		<link rel="stylesheet" href="../css/folha.css" type="text/css">
		<link rel="shortcut icon" type="image/x-icon" href="../image/favicon.ico">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
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
				<?php if (isset($_GET['error'])) { ?>
				<div class="error">
					<p><?= $_GET['error'] ?></p>
				</div>
				<?php } ?>

				<?php if (isset($_GET['sucesso'])) { ?>
				<div class="sucesso">
					<p><?= $_GET['sucesso'] ?></p>
				</div>
				<?php } ?>

				<h2>Listando Eventos</h2>
				<h3><a href="eventAdd.php">Cadastrar Evento</a></h3>

				<div class="layout-graphc">
					<div class="graph">
						<div id="chart_div" class="graphc-style"></div>
						<div id="chart_div2" class="graphc-style"></div>
					</div>

					<div class="todos-eventos">
						<div id="listar">
							<?php while ($row = mysqli_fetch_array($result)) { ?>
							<div class="list-item">
								<div class="listEvent">
									<p class="text-bold">Título:</p> <?= $row['titulo'] ?>
								</div>
								<div class="listEvent">
									<p class="text-bold">Local:</p> <?= $row['local'] ?>
								</div>
								<div class="listEvent">
									<p class="text-bold">Obs:</p> <?= $row['obs'] ?>
								</div>
								<?php if ($row['concluido'] == 0) { ?>
								<div class="listEvent inacabado"><a href="event.php?op=con&id=<?= $row['idagendamentos'] ?>&concluido=1"><i class="far fa-check-square"></i></a></div>
								<?php } else { ?>
								<div class="listEvent concluido"><a href="event.php?op=con&id=<?= $row['idagendamentos'] ?>&concluido=0"><i class="fas fa-check-double"></i></a></div>
								<?php } ?>
								<div class="up btn" style="font-size:14px;">
									<a href="eventUp.php?id=<?= $row['idagendamentos'] ?>">Editar</a>
								</div>
								<div class="del btn" style="font-size:14px;"><a href="eventDel.php?id=<?= $row['idagendamentos'] ?>">Excluir</a></div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>

			</article>
		</main>
		<footer>Desenvolvido por seres supremos &reg; &copy;</footer>
	</body>

	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
		google.charts.load('current', {
			'packages': ['corechart']
		});
		google.charts.setOnLoadCallback(drawVisualization);

		let dados = new Array();

		<?php while($row = mysqli_fetch_array($data)) {?>
			dados.push({
				mes: parseInt(<?= $row["mes"]?>) - 1,
				qtde: <?= $row["qtde"]?>
			});
		<?php }?>

		async function drawVisualization() {
			// Some raw data (not necessarily accurate)
			var data = await google.visualization.arrayToDataTable([
				['Month', 'Eventos Cad.'],
		
				['Jan.', 0],
				['Fev.', 0],
				['Mar.', 0],
				['Abr.', 0],
				['Mai.', 0],
				['Jun.', 0],
				['Jul.', 0],
				['Ago.', 0],
				['Set.', 0],
				['Out.', 0],
				['Nov.', 0],
				['Dez.', 0],
			]);

			var options = await {
				title: 'Número de eventos cadastrados por mês',
				vAxis: {
					title: 'Qtde'
				},
				hAxis: {
					title: 'meses'
				},
				seriesType: 'bars',
				series: {
					5: {
						type: 'line'
					}
				}
			};

			for (let i = 0; i < dados.length; i++) 
				data.wg[dados[i].mes].c[1].v = dados[i].qtde;
			
			var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
			chart.draw(data, options);
		}
	</script>

	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<script type="text/javascript">

		google.charts.load('current', {'packages':['corechart']});

		google.charts.setOnLoadCallback(drawChart);

		function drawChart() {

			let tarefasConcluidas = <?= mysqli_fetch_assoc($num)['qtdeFin'];?>;
			let tarefasSemConcluir = <?= intval(mysqli_num_rows($result));?> - tarefasConcluidas; 

			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Topping');
			data.addColumn('number', 'Slices');
			data.addRows([
			['Concluído', tarefasConcluidas],
			['Não Concluído', tarefasSemConcluir],
			]);

			var options = {
				'title':'Tarefas concluídas',
				is3D: true,
			};

			var chart = new google.visualization.PieChart(document.getElementById('chart_div2'));
			chart.draw(data, options);
		}
	</script>
</html>