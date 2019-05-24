<?php include("./cabecalhoExplicacoes.php");?>

	<div class="container">
		
		<h1> Tabela </h1>
		<div>
			<br>
			<p>	
				Estrutura usada para organizar dados.
			</p>
			<span class="tituloExemplificacao"> Exemplos </span> 
			
			<div>
				<br/>

				<div>
					<h5>Exemplo simples</h5>
					<br/>
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
					<textarea class="form-control vresize" rows="27" disabled>
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
					</textarea>				
				</div>
			</div>

			<br/>
			<div>
				<div>
					<h5>Tabela com tema escuro</h5>
					<br/>
					<table class="table table-dark">
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
				<div class="codeDivList">
					<h5>Código</h5>
					Basta que adicione a classe .table-dark na tag table
					<pre>
						<code>
							<span class="tag">table class="table table-dark"</span>
							...
							<span class="tag">/table</span>
						</code>
					</pre>

				</div>
			</div>

			<br/>
			<hr/>
			
			<div>

				<h5>Tabela com cabeçário tematizados</h5>

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
									<textarea class="form-control" rows="9" disabled>
<table class="table">
	<thead class="thead-light">
		...
	</thead>
	<tbody>
		...
	</tbody>
</table>
									</textarea>
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
									<textarea class="form-control" rows="9" disabled>
<table class="table">
	<thead class="thead-dark">
		...
	</thead>
	<tbody>
		...
	</tbody>
</table>
									</textarea>
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