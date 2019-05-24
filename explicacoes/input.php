	<?php include("./cabecalhoExplicacoes.php");?>
	<!--style>
	textarea:disabled{
		resize: none;
	}
	</style-->

	<div class="container">
      <h1>Input</h1>

      <div>
        <br/>
        <p>
          Inputs são utilizados para inserção de dados por parte do usuário
        </p>

        <span> Exemplo <span>

        <div class="container">
          <br/>
          <input type="text" class="form-control"/>
          <br/>
          <div > <!-- Adicionar classe de código aqui -->
            <h5>Código</h5>
            <textarea class="form-control"  disabled>
<input type="text" class="form-control"/>
            </textarea>
          </div>

        </div>
      </div>
      <hr/>

      <div>
        <p>Também é possível fazer associações com grupos de inputs, veja as exemplificações abaixo</p>

        <!-- -->
        <div>
            <span> Com textos indicativos. </span>   <!-- Colocar classe de exemplo-->
            <br/><br/>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
              </div>
              <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <!-- -->
            <div>
                <textarea rows="7" class="form-control vresize" disabled>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">@</span>
                      </div>
                      <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </textarea>
            </div>
        </div>
        <div>
            <br/>
            <span>Com diferentes tamanhos</span> <br/><br/>

            <div class="container">
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
            <div class="container">
                <textarea rows="7" class="form-control vresize" disabled>
<div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
        </div>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>
                </textarea>

                <br/>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <textarea rows="8" class="form-control vresize" disabled>
<div class="input-group mb-3">
        <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
        </div>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
                </textarea>

                <br/>
                <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                </div>
                <br/>
                <textarea rows="7" class="form-control vresize" disabled>
<div class="input-group input-group-lg">
        <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
        </div>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
</div>
                </textarea>

            </div>
        </div>



        <br/><br/><br/>
      </div>



    </div>

<?php include("./rodapeExplicacoes.php");?>
