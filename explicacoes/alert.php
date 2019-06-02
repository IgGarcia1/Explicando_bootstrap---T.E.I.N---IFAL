<?php include("cabecalhoExplicacoes.php");?>

	<div class="container">
		
		<h1> Alertas </h1>

		<div>
			
			<div>
				<h2>Definição</h2>
				<p> 
				Alertas são usadas para dar respostas sobre determinadas ações para o usuário. Como por exemplo quando um item é adicionado a uma lista ou deletado.
				</p>
			</div>
			<div>
				<h2>Usando alerts</h2>
				<p>Para indicar que uma div será um alerta basta colocar a classe <strong><em>.alert</em></strong>. </p>
				<p>Para adicionar cor ao alerta recém criado podem ser usadas as <a href="./classes-gerais.php">"classes gerais"</a>, adicionando a classe 
				<strong><em>.alert-</em></strong>[uma classe geral]. 
				</p>

				<div class="container">
					<span class="tituloExemplificacao"> Exemplo </span> 
					<br>
					<div class="demonstracaoList"> Demonstração </div>
					<div class="alert alert-success"> Alerta simples para demonstração de sucesso. </div>
					<div class="codeDivList">
						<div class="codigoList"> Código </div> 
						<span class="tag" >div class="alert alert-success"</span> 
						Alerta simples para demonstração de sucesso.
						<span class="tag">/div</span> 
					</div>
				</div>
				<br>

				<hr>

				Podemos ainda adicionar a opção de fechar esse alert. Basta que seja feito duas coisas: <br>
				<ul>
					<li>Adicione o seguinte trecho na classe .alert: <strong><em>-dismissible</em> </strong>. </li>
					<li>
						Adicionar o seguinte código dentro da div que será o alerta
						<textarea  rows="1" disabled class="form-control">
<button type="button" class="close" data-dismiss="alert">×</button></textarea>
					</li>
				</ul>

				<div class="container">
					<span class="tituloExemplificacao"> Exemplo </span> 
					<br>
					<div class="demonstracaoList"> Demonstração </div>
					<div class="alert alert-success alert-dismissible"> 
						<button type="button" class="close" data-dismiss="alert">×</button>
						Alerta simples para demonstração de sucesso. 
					</div>
					<div class="codeDivList">
						<div class="codigoList"> Código </div> 
						<span class="tag" >div class="alert alert-success alert-dismissible"</span>
						<br>
						<span class="tag">button type="button" class="close" data-dismiss="alert"</span>x<span class="tag">/button</span> <br>
						Alerta simples para demonstração de sucesso. <br>
						<span class="tag">/div</span> 
					</div>
				</div>
			</div>

			
		</div>
	
	</div>
	<br><br><br>
<?php include("rodapeExplicacoes.php");?>