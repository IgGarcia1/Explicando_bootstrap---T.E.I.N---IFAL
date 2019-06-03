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

				<h5>Código completo</h5>
				<br/>
				<textarea disabled class="form-control vresize" rows="34">
01. <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
02.		<ol class="carousel-indicators">
03.			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
04.			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
05.			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
06.			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
07.			<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
08.		</ol>
09.		<div class="carousel-inner">
10.			<div class="carousel-item active">
11.				<img src="../imagens/praia.jpg" class="d-block w-100 img-fluid" alt="...">
12.			</div>
13.			<div class="carousel-item">
14.	  			<img src="../imagens/ceu.jpg" class="d-block w-100 img-fluid" alt="...">
15.			</div>
16.			<div class="carousel-item">
17.	  			<img src="../imagens/hqdefault.jpg" class="d-block w-100 img-fluid" alt="...">
18.			</div>
19.			<div class="carousel-item">
20.	  			<img src="../imagens/gato-de-oculos.jpg" class="d-block w-100 img-fluid" alt="...">
21.			</div>
22.			<div class="carousel-item">
23.	  			<img src="../imagens/arvore-roxa.jpg" class="d-block w-100 img-fluid" alt="...">
24.			</div>
25.		</div>
26.		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
27.			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
28.			<span class="sr-only">Previous</span>
29.		</a>
30.		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
31.			<span class="carousel-control-next-icon" aria-hidden="true"></span>
32.			<span class="sr-only">Next</span>
33.		</a>
34.	</div></textarea>
				<br/><br/>

			<div>
					<span class="tituloExemplificacao">Explicando código</span>	<br><br>
					<p>Na primeira linha usamos a classe <em>.carousel</em> indica que essa div deverá receber as formatações gerais de um carrosel. A classe 
					<em>.slide</em> é responsável pelas animações das imagens.</p>		
					<p>Entre a segunda linha e a oitava se referem aos slotes que ficam em baixo das imagens. São responsáveis por referenciar a ordem das imagens. Ou seja,
					 o número de itens na lista deve ser igual ao número de imagens que estarão no componente de classe <em>.carousel-inner</em>.</p>

					<textarea class="form-control vresize" disabled rows="5"><ol class="carousel-indicators">
	3.			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	...			<li data-target="#carouselExampleIndicators" data-slide-to="..."></li>
	n.			<li data-target="#carouselExampleIndicators" data-slide-to="n"></li>
</ol></textarea>
					<br>

					<p>Na nona linha é declarado o componente que conterá todas as imagens, ou seja, o conteúdo de mídia de nosso carrossel. Essas imagens ficam escondindas, exceto a que contiver a class <em>.active</em>. A classe <em>.carousel-item</em> 
					indica que aquela imagem fará parte do carrossel.</p>
					<textarea class="form-control vresize" rows="6" disabled>09. <div class="carousel-inner">
10.			<div class="carousel-item active">
11.				<img src="../imagens/praia.jpg" class="d-block w-100 img-fluid" alt="...">
12.			</div>
...
25. </div></textarea>
					<br>
					<p>Entre as linhas vinte e seis e trinta e três formam os controles de passar para o próximo conteúdo ou voltar a um estado anterior.</p>
					<textarea class="form-control vresize" rows="8" disabled>26. <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
27.			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
28.			<span class="sr-only">Previous</span>
29.		</a>
30.		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
31.			<span class="carousel-control-next-icon" aria-hidden="true"></span>
32.			<span class="sr-only">Next</span>
33.</a></textarea>
					<br>
			</div>


				<strong>Observação:</strong>
				<p>Para o carrossel ganhar animação de apresentação é necessário colocar o seguinte código no Javascript.</p>
				<textarea class="form-control vresize" disabled rows="3">$('.carousel').carousel({
	interval: 2000 // Tempo de transição entre uma imagem e outra
});</textarea>
			</div>

			<br><br>
		</div>
	</div>

	<script type="text/javascript">
		$('.carousel').carousel({
			interval: 500
		});
	</script>

<?php include("./rodapeExplicacoes.php");?>