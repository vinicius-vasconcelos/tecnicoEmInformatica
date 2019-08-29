<?php
require_once('../include/connectaBD.php');
require_once('../include/validar.php');

if (isset($_GET['sucesso']) || isset($_GET['error']))
	header("refresh:3; event.php");
if (isset($_GET['op']))
	header("refresh:1; event.php");

$sql = "SELECT * FROM agendamentos ORDER BY data DESC";

$result = $banco->query($sql);


if (isset($_GET['op'])) {
	$sql = "UPDATE agendamentos SET concluido = '" . $_GET['concluido'] . "' WHERE idagendamentos = " . $_GET['id'];
	$banco->query($sql);
}
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

	function drawVisualization() {
		// Some raw data (not necessarily accurate)
		var data = google.visualization.arrayToDataTable([
			['Month', 'Bolivia', 'Ecuador', 'Madagascar', 'Papua New Guinea', 'Rwanda', 'Average'],
			['2004/05', 165, 938, 522, 998, 450, 614.6],
			['2005/06', 135, 1120, 599, 1268, 288, 682],
			['2006/07', 157, 1167, 587, 807, 397, 623],
			['2007/08', 139, 1110, 615, 968, 215, 609.4],
			['2008/09', 136, 691, 629, 1026, 366, 569.6]
		]);

		var options = {
			title: 'Monthly Coffee Production by Country',
			vAxis: {
				title: 'Cups'
			},
			hAxis: {
				title: 'Month'
			},
			seriesType: 'bars',
			series: {
				5: {
					type: 'line'
				}
			}
		};

		var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
		chart.draw(data, options);
	}
</script>

<script type="text/javascript">
	
	google.charts.load('current', {packages: ['corechart', 'line']});
	google.charts.setOnLoadCallback(drawBasic);

	function drawBasic() {

		var data = new google.visualization.DataTable();
		data.addColumn('number', 'X');
		data.addColumn('number', 'Dogs');

		data.addRows([
		[0, 0],   [1, 10],  [2, 23],  [3, 17],  [4, 18],  [5, 9],
		[6, 11],  [7, 27],  [8, 33],  [9, 40],  [10, 32], [11, 35],
		[12, 30], [13, 40], [14, 42], [15, 47], [16, 44], [17, 48],
		[18, 52], [19, 54], [20, 42], [21, 55], [22, 56], [23, 57],
		[24, 60], [25, 50], [26, 52], [27, 51], [28, 49], [29, 53],
		[30, 55], [31, 60], [32, 61], [33, 59], [34, 62], [35, 65],
		[36, 62], [37, 58], [38, 55], [39, 61], [40, 64], [41, 65],
		[42, 63], [43, 66], [44, 67], [45, 69], [46, 69], [47, 70],
		[48, 72], [49, 68], [50, 66], [51, 65], [52, 67], [53, 70],
		[54, 71], [55, 72], [56, 73], [57, 75], [58, 70], [59, 68],
		[60, 64], [61, 60], [62, 65], [63, 67], [64, 68], [65, 69],
		[66, 70], [67, 72], [68, 75], [69, 80]
		]);

		var options = {
		hAxis: {
			title: 'Time'
		},
		vAxis: {
			title: 'Popularity'
		}
		};

		var chart = new google.visualization.LineChart(document.getElementById('chart_div2'));

		chart.draw(data, options);
	}
</script>

</html>