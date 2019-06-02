<?php include("./cabecalhoExplicacoes.php");?>

	<div class="container">
		
		<h1> Tabela </h1>
		<div>
			<h2>Definição</h2> <br>
			<p>Estrutura usada para organizar dados. Em geral esses dados são categorizados com os chamados cabeçarios. </p>

			<h2>Usando tabelas</h2>
			<p>Para utilizar as opções de tabela do bootstrap basta que coloque a classe <em>.table</em>.</p>

			<span class="tituloExemplificacao"> Exemplo</span> 
			<div>
				<br/>
				<div class="container" >
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nome</th>
								<th scope="col">Email</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>mark@email.com</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>jacob@email.com</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>larry@email.com</td>
							</tr>
						</tbody>
					</table>
				</div>
				
				<div>
					<br/>
					<h5>Código</h5>

					<div class="codeDivList">
						<pre><code>
							<span class="tag">table class="table"</span> 
								<span class="tag">thead</span>  
									<span class="tag">tr</span>
										<span class="tag">th scope="col"</span> # <span class="tag">/th</span>
										<span class="tag">th scope="col"</span> Nome <span class="tag">/th</span>
										<span class="tag">th scope="col"</span> Email <span class="tag">/th</span>  
									<span class="tag">/tr</span> 
								<span class="tag">/thead</span>
								<span class="tag">tbody</span>
									<span class="tag">tr</span> 
										<span class="tag">td scope="row"</span>1<span class="tag">/th</span>
										<span class="tag">td</span>Mark<span class="tag">/td</span>
										<span class="tag">td</span>mark@email.com<span class="tag">/td</span>

									<span class="tag">/tr</span>
									
									<span class="tag">tr</span>
										<span class="tag">td scope="row"</span>2<span class="tag">/th</span>
										<span class="tag">td</span>Jacob<span class="tag">/td</span>
										<span class="tag">td</span>jacob@email.com<span class="tag">/td</span>

									<span class="tag">/tr</span>

									<span class="tag">tr</span> 
										<span class="tag">td scope="row"</span>3<span class="tag">/th</span>
										<span class="tag">td</span>Larry<span class="tag">/td</span>
										<span class="tag">td</span>larry@email.com<span class="tag">/td</span>

									<span class="tag">/tr</span>
								<span class="tag">/tbody</span> 
							<span class="tag">/table</span>
						</code></pre>
					</div>

				</div>
				<br>
				<ul>
					<li>A classe <em>.table</em> indica a formatação de uma tabela.</li>
					<li>As classes <em>.col</em> e <em>.row</em> são formatações de <a href="./grid.php" target="_black">grid</a>.</li>
				</ul>
			</div>
			<br/>
			
			<div>
				<div>
					<h2>Tabela com personalização de tema</h2>
					<br/>
					<p>A personalização das tabelas pode ser feita tanto manualmente, quanto utilizando as 
					<a href="./classes-gerais.php">"classes gerais"</a> do bootstrap, basta que coloque o prefixo <em>.table-</em> mais o tema desejado.
					Por exemplo, para deixarmos uma tabela com tema de sucesso basta colocarmos a classe <em>.table-success</em> na tag <i>table</i>.</p>
					<br>
					<table class="table table-success">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nome</th>
								<th scope="col">Email</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>mark@email.com</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>jacob@email.com</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>larry@email.com</td>
							</tr>
						</tbody>
					</table>
				</div>
				<h5>Código</h5>
				<div class="codeDivList">
					<pre><code>
							<span class="tag">table class="table table-success"</span>
							...
							<span class="tag">/table</span></code></pre>
				</div>
			</div>
			<!-- ##################################################	-->
			<div>
				<br> <br>
				<p>É possível tematizar apenas parte da tabela, como, por exemplo, os cabeçarios.</p>
				<div>
					<table class="table">
						<thead>
							<th>Tema</th>
							<th>Demonstração</th>
							<th>Código</th>
						</thead>
						<tbody>
							<tr>
								<td>Claro</td>
								<td>
									<table class="table">
										<thead class="thead-light">
											<tr>
												<th scope="col">#</th>
												<th scope="col">Nome</th>
												<th scope="col">Email</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>Mark</td>
												<td>mark@email.com</td>
											</tr>
										</tbody>
									</table>
								</td>
								<td>
									<textarea class="form-control" rows="8" disabled><table class="table">
	<thead class="thead-light">
		...
	</thead>
	<tbody>
		...
	</tbody>
</table></textarea>
								</td>
							</tr>
							<tr>
								<td>Escuro</td>
								<td>
									<table class="table">
										<thead class="thead-dark">
											<tr>
												<th scope="col">#</th>
												<th scope="col">Nome</th>
												<th scope="col">Email</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>Mark</td>
												<td>mark@email.com</td>
											</tr>
										</tbody>
									</table>
								</td>
								<td>
									<textarea class="form-control" rows="8" disabled><table class="table">
	<thead class="thead-dark">
		...
	</thead>
	<tbody>
		...
	</tbody>
</table></textarea>
								</td>
							</tr>
						</tbody>
					</table>

				</div>

			</div>

		</div>



		<div>
			<br/>
			<h5>Tabelas listradas</h5>

			<p>Para deixar as tabelas com efeito de listras, basta adicionar a classe <strong><em>.table-striped</em></strong> na tag <em>table</em>.</p>
			<br/>	
			<table class="table table-striped">
				<thead class="thead-dark">
					<tr>
						<th scope="col">#</th>
						<th scope="col">Nome</th>
						<th scope="col">Email</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Igor</td>
						<td>igor@email.com</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>Gabriela</td>
						<td>gabriela@email.com</td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td>Mirela</td>
						<td>mirela@email.com</td>
					</tr>
				</tbody>
			</table>

		</div>

		<div>
			<br><br><br>
			<h5>Bordas</h5>
			<br>
			<p>Para adicionar bordas às tabelas, basta adicionar a classe <strong> <em>.table-bordered </em> </strong> </p>
			<br>
			<table class="table table-striped table-bordered">
				<thead class="thead-dark">
					<tr>
						<th scope="col">#</th>
						<th scope="col">Nome</th>
						<th scope="col">Email</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Igor</td>
						<td>igor@email.com</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>Gabriela</td>
						<td>gabriela@email.com</td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td>Mirela</td>
						<td>mirela@email.com</td>
					</tr>
				</tbody>
			</table>
		</div>
	
	</div>

<?php include("./rodapeExplicacoes.php");?>