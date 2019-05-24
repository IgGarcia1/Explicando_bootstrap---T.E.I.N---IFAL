
<?php include("cabecalho.php");?>

	<div class="container">

		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <a class="navbar-brand" onclick="trocaConteudoIFrame('./bem-vindo.php')" style="color:white;">IF</a>

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
		    </ul>

		  </div>
		</nav>

		<div id="conteudo">
			<iframe src="./bem-vindo.php" id="iframeDeConteudo"></iframe>
		</div>
	</div>

<?php include("rodape.php");?>