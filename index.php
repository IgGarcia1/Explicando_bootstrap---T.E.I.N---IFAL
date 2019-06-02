
<?php include("cabecalho.php");?>

	<div class="container">

		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <a class="navbar-brand" onclick="trocaConteudoIFrame('./explicacoes/bem-vindo.php')" style="color:white;">
				<img src="./imagens/if.svg.png" alt="Logo if" width="20px;">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    	</button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    
		    <ul class="navbar-nav">
		    	<li class="nav-item" id="alert">
		        	<a class="nav-link" onclick="trocaConteudoIFrame('./explicacoes/alert.php')" >Alert</a>
		      	</li>
		      	<li class="nav-item" id="button">
		        	<a class="nav-link" onclick="trocaConteudoIFrame('./explicacoes/botoes.php')">Button <span class="sr-only">(current)</span></a>
		        </li>
		        <li class="nav-item" id="carousel">
		        	<a class="nav-link" onclick="trocaConteudoIFrame('./explicacoes/carrossel.php')" >Carrossel</a>
		      	</li>
		        <li class="nav-item" id="grid">
		        	<a class="nav-link" onclick="trocaConteudoIFrame('./explicacoes/grid.php')" >Grid</a>
		      	</li>
		      
		      	<li class="nav-item" id="input">
		       		<a class="nav-link" onclick="trocaConteudoIFrame('./explicacoes/input.php')" >Input</a>
		      	</li>
		      	<li class="nav-item" id="navbar">
		        	<a class="nav-link" onclick="trocaConteudoIFrame('./explicacoes/navbar.php')" >Navbar</a>
		      	</li>
		      	<li class="nav-item" id="table">
		        	<a class="nav-link" onclick="trocaConteudoIFrame('./explicacoes/table.php')" >Table</a>
						</li>
						<li class="nav-item" id="geral">
		        	<a class="nav-link" onclick="trocaConteudoIFrame('./explicacoes/classes-gerais.php')" >Classes gerais</a>
		      	</li>
		    </ul>

		  </div>
		</nav>

		<div id="conteudo">
			<iframe src="./explicacoes/bem-vindo.php" id="iframeDeConteudo"></iframe>
		</div>
	</div>

<?php include("rodape.php");?>