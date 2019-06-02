<?php include("./cabecalhoExplicacoes.php");?>

	<style type="text/css">
		img{
			max-height: 600px;
			max-height: 600px;
			width: 100%;
			height: auto;
		}
	</style>
	
	<div class="container">

			<h1>Carrossel</h1>

			<div>
				<h2>Definição</h2>
				<br>
				<p>Sequência de slides que ficam alternando entre si com o decorrer o tempo. </p>
				<span class="tituloExemplificacao"> Exemplo </span> 
				<br/> <br/>
			</div>
	</div>



	<div class="container">

			

			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="../imagens/praia.jpg" class="d-block w-100 img-fluid" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="../imagens/ceu.jpg" class="d-block w-100 img-fluid" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="../imagens/hqdefault.jpg" class="d-block w-100 img-fluid" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="../imagens/gato-de-oculos.jpg" class="d-block w-100 img-fluid" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="../imagens/arvore-roxa.jpg" class="d-block w-100 img-fluid" alt="...">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>

			<br><br>
			
			<div>

				<h5>Código</h5>
				<br/>
				<textarea disabled class="form-control vresize" rows="35">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="../imagens/praia.jpg" class="d-block w-100 img-fluid" alt="...">
		</div>
		<div class="carousel-item">
	  		<img src="../imagens/ceu.jpg" class="d-block w-100 img-fluid" alt="...">
		</div>
		<div class="carousel-item">
	  		<img src="../imagens/hqdefault.jpg" class="d-block w-100 img-fluid" alt="...">
		</div>
		<div class="carousel-item">
	  		<img src="../imagens/gato-de-oculos.jpg" class="d-block w-100 img-fluid" alt="...">
		</div>
		<div class="carousel-item">
	  		<img src="../imagens/arvore-roxa.jpg" class="d-block w-100 img-fluid" alt="...">
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
				</textarea>
				<br/><br/>
				<strong>Observação:</strong>
				<p>Para o carrossel ganhar animação de apresentação é necessário colocar o seguinte código no Javascript.</p>
				<br>
				<textarea class="form-control vresize" disabled rows="4">
$('.carousel').carousel({
	interval: 2000 // Tempo de transição entre uma imagem e outra
});
				</textarea>
			</div>

			<br><br>
		</div>
	</div>

	<script type="text/javascript">
		$('.carousel').carousel({
			interval: 2000
		});
	</script>

<?php include("./rodapeExplicacoes.php");?>