<?php
$nome_1 = $_POST['nome1'];
$N1 = $_POST['n01'];
$N2 = $_POST['n02'];
$N3 = $_POST['n03'];

$media_1 = ($N1 + $N2 + $N3)/3;

if($media_1 >= 7){
	$situacao1 = "Aprovado";
}else{
	$situacao1 = "Reprovado";
}
$nome_2 = $_POST['nome2'];
$N4 = $_POST['n04'];
$N5 = $_POST['n05'];
$N6 = $_POST['n06'];

$media_2 = ($N4 + $N5 + $N6)/3;

if($media_2 >= 7){
	$situacao2 = "Aprovado";
}else{
	$situacao2 = "Reprovado";
}

$nome_3 = $_POST['nome3'];
$N7 = $_POST['n07'];
$N8 = $_POST['n08'];
$N9 = $_POST['n09'];

$media_3 = ($N4 + $N5 + $N6)/3;
$nome_1 = $_POST['nome1'];
$N1 = $_POST['n01'];
$N2 = $_POST['n02'];
$N3 = $_POST['n03'];

$media_1 = ($N1 + $N2 + $N3)/3;

if($media_1 >= 7){
	$situacao1 = "Aprovado";
}else{
	$situacao1 = "Reprovado";
}
$nome_2 = $_POST['nome2'];
$N4 = $_POST['n04'];
$N5 = $_POST['n05'];
$N6 = $_POST['n06'];

$media_2 = ($N4 + $N5 + $N6)/3;

if($media_2 >= 7){
	$situacao2 = "Aprovado";
}else{
	$situacao2 = "Reprovado";
}

$nome_3 = $_POST['nome3'];
$N7 = $_POST['n07'];
$N8 = $_POST['n08'];
$N9 = $_POST['n09'];

$media_3 = ($N4 + $N5 + $N6)/3;

if($media_3 >= 7){
	$situacao3 = "Aprovado";
}else{
	$situacao3 = "Reprovado";
}

$nome_4 = $_POST['nome4'];
$N10 = $_POST['n10'];
$N11 = $_POST['n11'];
$N12 = $_POST['n12'];

$media_4 = ($N10 + $N11 + $N12)/3;

if($media_4 >= 7){
	$situacao4 = "Aprovado";
}else{
	$situacao4 = "Reprovado";
}

$nome_5 = $_POST['nome5'];
$N13 = $_POST['n13'];
$N14 = $_POST['n14'];
$N15 = $_POST['n15'];

$media_5 = ($N13 + $N14 + $N15)/3;

if($media_5 >= 7){
	$situacao5 = "Aprovado";
}else{
	$situacao5 = "Reprovado";
}

$nome_6 = $_POST['nome6'];
$N16 = $_POST['n16'];
$N17 = $_POST['n17'];
$N18 = $_POST['n18'];

$media_6 = ($N16 + $N17 + $N18)/3;

if($media_6 >= 7){
	$situacao6 = "Aprovado";
}else{
	$situacao6 = "Reprovado";
}

$nome_7 = $_POST['nome7'];
$N19 = $_POST['n19'];
$N20 = $_POST['n20'];
$N21 = $_POST['n21'];

$media_7 = ($N19 + $N20 + $N21)/3;

if($media_7 >= 7){
	$situacao7 = "Aprovado";
}else{
	$situacao7 = "Reprovado";
}
$nome_8= $_POST['nome8'];
$N22 = $_POST['n22'];
$N23 = $_POST['n23'];
$N24 = $_POST['n24'];

$media_8 = ($N22 + $N23 + $N24)/3;

if($media_8 >= 7){
	$situacao8 = "Aprovado";
}else{
	$situacao8 = "Reprovado";
}
$nome_9 = $_POST['nome9'];
$N25 = $_POST['n25'];
$N26 = $_POST['n26'];
$N27 = $_POST['n27'];

$media_9 = ($N25 + $N26 + $N27)/3;

if($media_9 >= 7){
	$situacao9 = "Aprovado";
}else{
	$situacao9 = "Reprovado";
}
$nome_10 = $_POST['nome10'];
$N28 = $_POST['n28'];
$N29 = $_POST['n29'];
$N30 = $_POST['n30'];

$media_10 = ($N28 + $N29 + $N30)/3;

if($media_10 >= 7){
	$situacao10 = "Aprovado";
}else{
	$situacao10 = "Reprovado";
}
?>
<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Cadastro Estudantil</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="no-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper" class="wrapper">
					<div id="header">

						<!-- Logo -->
							<div id="logo">
								<h1><a href="index.html">Cadastro Estudantil</a></h1>
								<p>"A árvore da liberdade deve ser regada de quando em quando com o sangue dos patriotas e dos tiranos." - Thomas Jefferson</p>
							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li class="current"><a href="index.html">Home</a></li>
									<li><a href="cadastroestudantil.html">Cadastro Estudantil</a></li>
									<li><a href="login.html">Login do Educador</a></li>
								</ul>
							</nav>

					</div>
				</div>

			<!-- Main -->
				<div class="wrapper style2">
					<div class="title">Boletim</div>
					<div id="main" class="container">
<table border="2" id="border">
	<tr id="linha1">
		<td align="center"><strong>Nº</strong></td>
		<td align="center"><strong>NOME</strong></td>
		<td align="center"><strong>N1</strong></td>
		<td align="center"><strong>N2</strong></td>
		<td align="center"><strong>N3</strong></td>
		<td align="center"><strong>Media</strong></td>
		<td align="center"><strong>Situação</strong></td>
	</tr>
<?php
echo "<tr> <td>1</td> <td>$nome_1</td> <td>$N1</td> <td>$N2</td> <td>$N3</td> <td>$media_1</td> <td>$situacao1</td></tr>";
echo "<tr> <td>2</td> <td>$nome_2</td> <td>$N4</td> <td>$N5</td> <td>$N6</td> <td>$media_2</td> <td>$situacao2</td></tr>";
echo "<tr> <td>3</td> <td>$nome_3</td> <td>$N7</td> <td>$N8</td> <td>$N9</td> <td>$media_3</td> <td>$situacao3</td></tr>";
echo "<tr> <td>4</td> <td>$nome_4</td> <td>$N10</td> <td>$N11</td> <td>$N12</td> <td>$media_4</td> <td>$situacao4</td></tr>";
echo "<tr> <td>5</td> <td>$nome_5</td> <td>$N13</td> <td>$N14</td> <td>$N15</td> <td>$media_5</td> <td>$situacao5</td></tr>";
echo "<tr> <td>6</td> <td>$nome_6</td> <td>$N16</td> <td>$N17</td> <td>$N18</td> <td>$media_6</td> <td>$situacao6</td></tr>";
echo "<tr> <td>7</td> <td>$nome_7</td> <td>$N19</td> <td>$N20</td> <td>$N21</td> <td>$media_7</td> <td>$situacao7</td></tr>";
echo "<tr> <td>8</td> <td>$nome_8</td> <td>$N22</td> <td>$N23</td> <td>$N24</td> <td>$media_8</td> <td>$situacao8</td></tr>";
echo "<tr> <td>9</td> <td>$nome_9</td> <td>$N25</td> <td>$N26</td> <td>$N27</td> <td>$media_9</td> <td>$situacao9</td></tr>";
echo "<tr> <td>10</td> <td>$nome_10</td> <td>$N28</td> <td>$N29</td> <td>$N30</td> <td>$media_10</td> <td>$situacao10</td></tr>";
?>

		</table>
		<br />
		<br />
		<br />

<!-- Highlights -->
				<div class="wrapper style3">
					<div class="title">A equipe:</div>
					<div id="highlights" class="container">
						<div class="row 150%">
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
									<h3><a href="#">II Semana de Meio Ambiente</a></h3>
									<p>Evento que contará com varias atividades de cunho social no inicio de Junho/2018</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Leia mais...</a></li>
									</ul>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
									<h3><a href="#">Os membros do DEE e Profesores.</a></h3>
									<p>Equipe altamente treinada e engajada para fomentar nos jovens não so conhecimentos didáticos, mas possibilitar a formação de verdadeiros cidadãos.</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Conheça-os...</a></li>
									</ul>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
									<h3><a href="#">Participação em eventos locais</a></h3>
									<p>Alunos inseridos no calendário dos eventos locais, fomentando conhecimento regional.</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Veja mais...</a></li>
									</ul>
								</section>
							</div>
						</div>
					</div>
				</div>

			<!-- Footer -->
				<div id="footer-wrapper" class="wrapper">
					<div class="title">Entre em contato conosco.</div>
					<div id="footer" class="container">
						<header class="style1">
							<h2>Quer saber mais sobre nossas atividades?</h2>
							<p>
								Mande sua mensagem como qualquer duvida que assim que possivel entraremos em contato.
							</p>
						</header>
						<hr />
						<div class="row 150%">
							<div class="6u 12u(mobile)">

								<!-- Contact Form -->
									<section>
										<form method="post" action="#">
											<div class="row 50%">
												<div class="6u 12u(mobile)">
													<input type="text" name="name" id="contact-name" placeholder="Nome" />
												</div>
												<div class="6u 12u(mobile)">
													<input type="text" name="email" id="contact-email" placeholder="Email" />
												</div>
											</div>
											<div class="row 50%">
												<div class="12u">
													<textarea name="message" id="contact-message" placeholder="Messagem" rows="4"></textarea>
												</div>
											</div>
											<div class="row">
												<div class="12u">
													<ul class="actions">
														<li><input type="submit" class="style1" value="Enviar" /></li>
														<li><input type="reset" class="style2" value="Limpar" /></li>
													</ul>
												</div>
											</div>
										</form>
									</section>

							</div>
							<div class="6u 12u(mobile)">

								<!-- Contact -->
									<section class="feature-list small">
										<div class="row">
											<div class="6u 12u(mobile)">
												<section>
													<h3 class="icon fa-home">Endereço:</h3>
													<p>
														Escola Clarindo Santiago<br />
														Em frente a Praça Getulio Vargas<br />
														Porto Franco, Maranhão.
													</p>
												</section>
											</div>
											<div class="6u 12u(mobile)">
												<section>
													<h3 class="icon fa-comment">Rede Social</h3>
													<p>
														<a href="#">@ifmapf</a><br />
														<a href="#">linkedin.com/ifmapf</a><br />
														<a href="#">facebook.com/ifmapf</a>
													</p>
												</section>
											</div>
										</div>
										<div class="row">
											<div class="6u 12u(mobile)">
												<section>
													<h3 class="icon fa-envelope">Email</h3>
													<p>
														<a href="#">ifmapf@edu.com</a>
													</p>
												</section>
											</div>
											<div class="6u 12u(mobile)">
												<section>
													<h3 class="icon fa-phone">Telefone</h3>
													<p>
														(099) 555-0000
													</p>
												</section>
											</div>
										</div>
									</section>

							</div>
						</div>
						<hr />
					</div>
					<div id="copyright">
						<ul>
							<li>&copy; LeoJaime</li><li>Design: <a href="http://html5up.net">Webdesigner</a></li>
						</ul>
					</div>
				</div>

		</div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
