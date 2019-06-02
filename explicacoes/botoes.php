<?php include("./cabecalhoExplicacoes.php");?>
	
	<div class="container">
		
		<h1> Botões </h1>

		<div>
			<div>
				<h2>Definição</h2>
				<p>Botões são utilizados para executar ações indicadas pelo usuário.</p>
			</div>
			<br>
			<div>
				<h2>Usando botões</h2>
				<p>Para usar os botões, basta que adicione a classe <strong><em>.btn</em></strong> ao elemento HTML.</p>
				<p>Para adicionar cor ao alerta recém criado podem ser usadas as <a href="./classes-gerais.php">"classes gerais"</a>, adicionando a classe 
				<strong><em>.btn-[nome da classe]</em></strong>. 
				<br><br>
				<span class="tituloExemplificacao"> Exemplos </span> 
				<br/>

				<div class="container">
					<table class="table table-bordered">
						<thead class="thead-dark">
							<th>Tipo</th>
							<th>Demonstração</th>
							<th>Código</th>
						</thead>

						<tbody>
							<tr>
								<td>Sucesso</td>
								<td>
									<button class="btn btn-success form-control"> Botão de sucesso </button>
								</td>
								<td>
									<div class="codeDivList">
										<span class="tag" >button class="btn btn-success"</span> 
										Botão de sucesso
										<span class="tag">/button</span> 
									</div>
								</td>
							</tr>

							<tr>
								<td>Perigo</td>
								<td>
									<button class="btn btn-danger form-control"> Botão de perigo </button>
								</td>
								<td>
									<div class="codeDivList">
										<span class="tag" >button class="btn btn-danger"</span> 
										Botão de perigo
										<span class="tag">/button</span> 
									</div>
								</td>
							</tr>

							<tr>
								<td>Informação</td>
								<td>
									<button class="btn btn-info form-control"> Botão de informação </button>
								</td>
								<td>
									<div class="codeDivList">
										<span class="tag" >button class="btn btn-info"</span> 
										Botão de informação
										<span class="tag">/button</span> 
									</div>
								</td>
							</tr>

							<tr>
								<td>Primário</td>
								<td>
									<button class="btn btn-primary form-control"> Botão primário </button>
								</td>
								<td>
									<div class="codeDivList">
										<span class="tag" >button class="btn btn-primary"</span> 
										Botão primário
										<span class="tag">/button</span> 
									</div>
								</td>
							</tr>

							<tr>
								<td>Secundário</td>
								<td>
									<button class="btn btn-secondary form-control"> Botão secundário </button>
								</td>
								<td>
									<div class="codeDivList">
										<span class="tag" >button class="btn btn-secundary"</span> 
										Botão secundário
										<span class="tag">/button</span> 
									</div>
								</td>
							</tr>

							<tr>
								<td>Aviso</td>
								<td>
									<button class="btn btn-warning form-control"> Botão de aviso </button>
								</td>
								<td>
									<div class="codeDivList">
										<span class="tag" >button class="btn btn-warning"</span> 
										Botão de aviso
										<span class="tag">/button</span> 
									</div>
								</td>
							</tr>

							<tr>
								<td>Claro</td>
								<td>
									<button class="btn btn-light form-control"> Botão claro </button>
								</td>
								<td>
									<div class="codeDivList">
										<span class="tag" >button class="btn btn-light"</span> 
										Botão claro
										<span class="tag">/button</span> 
									</div>
								</td>
							</tr>

							<tr>
								<td>Escuro</td>
								<td>
									<button class="btn btn-dark form-control"> Botão escuro </button>
								</td>
								<td>
									<div class="codeDivList">
										<span class="tag" >button class="btn btn-dark"</span> 
										Botão escuro
										<span class="tag">/button</span> 
									</div>
								</td>
							</tr>

							<tr>
								<td>Padrão</td>
								<td>
									<button class="btn form-control"> Botão padrão</button>
								</td>
								<td>
									<div class="codeDivList">
										<span class="tag" >button class="btn"</span> 
										Botão padrão
										<span class="tag">/button</span> 
									</div>
								</td>
							</tr>

							<tr>
								<td>Link</td>
								<td>
									<button class="btn btn-link form-control"> Botão link </button>
								</td>
								<td>
									<div class="codeDivList">
										<span class="tag" >button class="btn btn-link"</span> 
										Botão link
										<span class="tag">/button</span> 
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<br>
				<br>
				
				<div>
					<p>É possível deixar o botão apenas com o contorno e com um efeito, que a cor de fundo só aparece quando o botão está em foco, 
						apenas adicionando a classe <strong><em>.btn-outline-[classe para dar cor]</em></strong>.</p>
					<br>

					<div class="container">
						<table class="table table-bordered table-striped">
							<thead class="thead-dark">
								<th>Tipo</th>
								<th>Demonstração</th>
								<th>Código</th>
							</thead>

							<tbody>
								<tr>
									<td>Sucesso</td>
									<td>
										<button class="btn btn-outline-success form-control"> Botão </button>
									</td>
									<td>
										<div class="codeDivList">
											<span class="tag" >button class="btn btn-outline-success"</span> 
											Botão
											<span class="tag">/button</span> 
										</div>
									</td>
								</tr>


								<tr>
									<td>Perigo</td>
									<td>
										<button class="btn btn-outline-danger form-control"> Botão </button>
									</td>
									<td>
										<div class="codeDivList">
											<span class="tag" >button class="btn btn-outline-danger"</span> 
											Botão
											<span class="tag">/button</span> 
										</div>
									</td>
								</tr>


								<tr>
									<td>Alerta</td>
									<td>
										<button class="btn btn-outline-warning form-control"> Botão </button>
									</td>
									<td>
										<div class="codeDivList">
											<span class="tag" >button class="btn btn-outline-warning"</span> 
											Botão
											<span class="tag">/button</span> 
										</div>
									</td>
								</tr>

								<tr>
									<td>Primário</td>
									<td>
										<button class="btn btn-outline-primary form-control"> Botão </button>
									</td>
									<td>
										<div class="codeDivList">
											<span class="tag" >button class="btn btn-outline-primary"</span> 
											Botão
											<span class="tag">/button</span> 
										</div>
									</td>
								</tr>

								<tr>
									<td>Secundário</td>
									<td>
										<button class="btn btn-outline-secondary form-control"> Botão </button>
									</td>
									<td>
										<div class="codeDivList">
											<span class="tag" >button class="btn btn-outline-secondary"</span> 
											Botão
											<span class="tag">/button</span> 
										</div>
									</td>
								</tr>

								<tr>
									<td>Escuro</td>
									<td>
										<button class="btn btn-outline-dark form-control"> Botão </button>
									</td>
									<td>
										<div class="codeDivList">
											<span class="tag" >button class="btn btn-outline-dark"</span> 
											Botão
											<span class="tag">/button</span> 
										</div>
									</td>
								</tr>
								<tr>
									<td>Claro</td>
									<td>
										<button class="btn btn-outline-light form-control"> Botão </button>
									</td>
									<td>
										<div class="codeDivList">
											<span class="tag" >button class="btn btn-outline-light"</span> 
											Botão
											<span class="tag">/button</span> 
										</div>
									</td>
								</tr>

								<tr>
									<td>Informação</td>
									<td>
										<button class="btn btn-outline-info form-control"> Botão </button>
									</td>
									<td>
										<div class="codeDivList">
											<span class="tag" >button class="btn btn-outline-info"</span> 
											Botão
											<span class="tag">/button</span> 
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				</div>

			</div>
		</div>

<?php include("./rodapeExplicacoes.php");?>