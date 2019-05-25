<?php include("./cabecalhoExplicacoes.php");?>

	<div class="container">
		<style type="text/css">
			.col-sm, .col, .col-5{
				border: 1px solid black;
			}
		</style>
		<h1> Grid </h1>
		<br/>
		<p>É um gerenciador de layout.</p>
		<br/>

		<div class="container">
		  <div class="row">
		    <div class="col-sm">
		      One of three columns
		    </div>
		    <div class="col-sm">
		      One of three columns
		    </div>
		    <div class="col-sm">
		      One of three columns
		    </div>
		  </div>
		</div>
		<br/>
		<textarea class="form-control vresize" disabled rows="14">
<div class="container">
	<div class="row">
    	<div class="col-sm">
      		One of three columns
    	</div>
    	<div class="col-sm">
      		One of three columns
    	</div>
    	<div class="col-sm">
    		One of three columns
    	</div>
	</div>
</div>
		</textarea>

		<div>
			<br>
			<h3>Opções de grid</h3>
			<br>
		
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th></th>
						<th class="text-center">
							Extra small<br>
							<small>&lt;576px</small>
						</th>
						<th class="text-center">
							Small<br>
							<small>≥576px</small>
						</th>
						<th class="text-center">
							Medium<br>
							<small>≥768px</small>
						</th>
						<th class="text-center">
							Large<br>
							<small>≥992px</small>
						</th>
						<th class="text-center">
							Extra large<br>
							<small>≥1200px</small>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th class="text-nowrap" scope="row">Max container width</th>
						<td>None (auto)</td>
						<td>540px</td>
						<td>720px</td>
						<td>960px</td>
						<td>1140px</td>
					</tr>
					<tr>
						<th class="text-nowrap" scope="row">Class prefix</th>
							<td>.col-</td>
							<td>.col-sm-</td>
							<td>.col-md-</td>
							<td>.col-lg-</td>
						<td>.col-xl-</td>
					</tr>
					<tr>
						<th class="text-nowrap" scope="row"># of columns</th>
						<td colspan="5">12</td>
					</tr>
					<tr>
						<th class="text-nowrap" scope="row">Gutter width</th>
						<td colspan="5">30px (15px on each side of a column)</td>
					</tr>
					<tr>
						<th class="text-nowrap" scope="row">Nestable</th>
						<td colspan="5">Yes</td>
					</tr>
					<tr>
						<th class="text-nowrap" scope="row">Column ordering</th>
						<td colspan="5">Yes</td>
					</tr>
				</tbody>
			</table>
		</div>
		<br>

			<div>
				<h3>Alterando tamanho das colunas</h3>
				<br>

						<div class="row">
							<div class="col">
								One of three columns
							</div>
							<div class="col-5">
								One of three columns
							</div>
							<div class="col">
								One of three columns
							</div>				
						</div>

					<br>
					<p>Para alterar o tamanho, basta colocar a numeração após o hífen da classes <em>.col-</em>. Como demonstrado logo abaixo.</p>
					<br>
						
						<textarea  class="form-control vresize" rows="13" disabled>						
<div class="row">
	<div class="col">
		One of three columns
	</div>
	<div class="col-5">
		One of three columns
	</div>
	<div class="col">
		One of three columns
	</div>				
</div>
						</textarea>
			</div>
	
			<br>
			<br>

			<div>
				<h3>Configurações de posicionamento</h3>
				<br>
				<div class="container">
					<div class="row">
						<div class="col align-self-start"> One of three columns </div>
						<div class="col align-self-center"> One of three columns </div>
						<div class="col align-self-end"> One of three columns </div>
					</div>
				</div>

			</div>
	
			<br><br><br>
	
	</div>

<?php include("./rodapeExplicacoes.php");?>