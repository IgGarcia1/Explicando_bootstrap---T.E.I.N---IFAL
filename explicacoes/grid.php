<?php include("./cabecalhoExplicacoes.php");?>
	<style type="text/css">
		.col-sm, .col, .col-3, .col-4, .col-5, .col-6 { border: 1px solid black;}
	</style>

	<div class="container">
		<h1> Grid </h1>
		<div>
			<h2>Definição</h2>
			<p>É um gerenciador de layout composto por linhas e colunas utilizado para organizar os componentes visualmente.</p>

			<span class="tituloExemplificacao">Exemplo</span> <br><br>
			<div class="container">
				<div class="row">
					<div class="col-sm"> One of three columns </div>
					<div class="col-sm"> One of three columns </div>
					<div class="col-sm"> One of three columns </div>
				</div>
			</div>
			<br>
			<textarea class="form-control vresize" disabled rows="7">
<div class="container">
	<div class="row">
    	<div class="col-sm"> One of three columns </div>
    	<div class="col-sm"> One of three columns </div>
    	<div class="col-sm"> One of three columns </div>
	</div>
</div></textarea>
		<br>
		<ul>
			<li>A classe <em>.container</em> é responsável por criar um espaçamento horizontal no componente.</li>
			<li>A classe <em>.row</em> é responsável por ordenar os itens horizontalmente.</li>
			<li>A classe <em>.col-sm</em> indica o tamanho horizontal que a coluna deverá ter. Nesse caso o <em>-sm</em> indica pequeno.</li>
		</ul>
		</div>

		<div>
		<br>
			<h2>Opções de grid</h2>
			<br>
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th></th>
						<th class="text-center">
							Extra pequeno<br>
							<small>&lt;576px</small>
						</th>
						<th class="text-center">
							Pequeno<br>
							<small>≥576px</small>
						</th>
						<th class="text-center">
							Médio<br>
							<small>≥768px</small>
						</th>
						<th class="text-center">
							Grande<br>
							<small>≥992px</small>
						</th>
						<th class="text-center">
							Extra grande<br>
							<small>≥1200px</small>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th class="text-nowrap" scope="row">Largura máxina do componente.</th>
						<td>None (auto)</td>
						<td>540px</td>
						<td>720px</td>
						<td>960px</td>
						<td>1140px</td>
					</tr>
					<tr>
						<th class="text-nowrap" scope="row">Prefixo da classe</th>
							<td>.col-</td>
							<td>.col-sm-</td>
							<td>.col-md-</td>
							<td>.col-lg-</td>
						<td>.col-xl-</td>
					</tr>
					<tr>
						<th class="text-nowrap" scope="row"># de colunas</th>
						<td colspan="5">12</td>
					</tr>
					<tr>
						<th class="text-nowrap" scope="row">Largura de margem</th>
						<td colspan="5">30px (15px em cada lado de uma coluna)</td>
					</tr>
					<tr>
						<th class="text-nowrap" scope="row">Escalonável</th>
						<td colspan="5">Sim</td>
					</tr>
					<tr>
						<th class="text-nowrap" scope="row">Ordenação de colunas</th>
						<td colspan="5">Sim</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div>
			<br>
			<h2>Alterando tamanho das colunas</h2>
			<p>Também é possível alterar a largura das colunas usando numerais inteiros, que podem variar de um a doze.</p>
			<br>
			
			<!-- Exemplo -->
			<div class="container">
				<div class="col-3">Coluna número: 3</div>
				<div class="col-4">Coluna número: 4</div>
				<div class="col-5">Coluna número: 5</div>
				<div class="col-6">Coluna número: 6</div>
			</div>
			<br>
			<!-- Código -->
			<textarea class="form-control" disabled rows="6"><div class="container">
	<div class="col-3">Coluna número: 3</div>
	<div class="col-4">Coluna número: 4</div>
	<div class="col-5">Coluna número: 5</div>
	<div class="col-6">Coluna número: 6</div>
</div></textarea>

		</div>
	</div>

	<!-- ############################################################ -->

<?php include("./rodapeExplicacoes.php");?>