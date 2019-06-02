<?php include("./cabecalhoExplicacoes.php");?>	

<div class="container">
    <h1>Input</h1>

    <div>
        <br/>
        <h2>Definição</h2>
        <p>Inputs são utilizados para inserção de dados por parte do usuário.</p>

        <div>
            <h2>Usando inputs</h2>
            <p>Basta adicionar a classse <strong><em>.form-control</em></strong> na tag input. 
            Essa classe irá fazer com que o componente ocupe todo o espaço possível horizontalmente do componente pai.</p>
            <br>
            <div class="container">
                <span class="tituloExemplificacao"> Exemplo <span>
                <div class="container">
                    <input type="text" class="form-control"/>
                    <div > <!-- Adicionar classe de código aqui -->
                        <h5>Código</h5>
                        <textarea class="form-control"  rows="1" disabled><input type="text" class="form-control"/></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr/>

    <div>
        <h2>Fazendo associações</h2>
        <br>
        <ul>

            <li>
                Input com textos indicativos. <br>
                Este é a forma de referenciar uma label a um input
                <br>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">@</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    <br>
                    
                    
                </div>
                <div>
                    Código 
                    <textarea class="form-control" rows="7" disabled   ><div class="input-group mb-3">
        <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
        </div>
        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div></textarea></div>

            <br>
            Explicando código <br>
            A classe <em>input-group-prepend</em> indica que a label deve ser posicionada antes do input. <br>
            A classe <em>input-group-text</em> aplica estilazação e relaciona semanticamente com o input.
            <br> <br>
            </li>

            <li>
                Input com diferentes tamanhos de altura. <br>

                <ul>
                    <li> Pequeno <br> <br>
                        <div>
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            Código <br>
                            <textarea class="form-control" disabled rows="3"><div class="input-group input-group-sm mb-3">
...
</div></textarea>
                        </div>
                        <br><br>
                    </li>
                    <li> Padrão <br> <br>
                        <div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                                </div>
                                <input type="text" class="form-control" arial-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                            Código <br>
                            <textarea class="form-control" disabled rows="3"><div class="input-group mb-3">
...
</div></textarea></textarea>
                        </div>
                        <br><br>
                    </li>
                    <li>
                        Grande <br>
                        <div>
                            <div class="input-group input-group-lg mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-large">Large</span>
                                </div>
                                <input type="text"  class="form-control" aria-label="Sizing example input" aria-ddescribedby="inputGrouplarge" />
                            </div>
                            Código <br>
                            <textarea class="form-control" rows="3" disabled><div class="input-group input-group-lg mb-3">
...
</div></textarea>

                        </div><br><br>
                    </li>
                </ul>
            </li>            
            <li>
                Com diferentes componentes
                <ul>
                    <li>Checkbox <br>
                        <div>
                            <!--EXAMPLE-->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    </div>
                                </div>
                                <input type="text" class="form-control" aria-label="Text input with checkbox">
                            </div>
                            <!--CODE-->
                            <div>
                                <textarea class="form-control" disabled rows="8"> <div class="input-group mb-3">
    <div class="input-group-prepend">
        <div class="input-group-text">
        <input type="checkbox" aria-label="Checkbox for following text input">
        </div>
    </div>
    <input type="text" class="form-control" aria-label="Text input with checkbox">
</div></textarea>
                            </div>
                        </div>
                    </li>
                    
                    <li> Radios <br>
                        <div>
                            <!--EXAMPLE-->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" aria-label="Radio for following text input">
                                    </div>
                                </div>
                                <input type="text" class="form-control" aria-label="text input with radio">
                            </div>
                            <!--CODE-->
                            <div>
                                <textarea class="form-control" disabled rows="8"><div class="input-group mb-3">
    <div class="input-group-prepend">
        <div class="input-group-text">
            <input type="radio" aria-label="Radio for following text input">
        </div>
    </div>
    <input type="text" class="form-control" aria-label="text input with radio">
</div></textarea>
                            </div>
                        </div>
                    </li>

                    <li> Dropbox <br>
                        <div>
                            <!--EXAMPLE-->
                            <div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div role="separator" class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                </div>
                            </div>
                            <!--CODE-->
                            <div>
                                <textarea class="form-control" disabled rows="14"><div class="input-group mb-3">
    <div class="input-group-prepend">
        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div role="separator" class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
        </div>
    </div>
    <input type="text" class="form-control" aria-label="Text input with dropdown button">
</div></textarea>
                            </div>
                            <ul>
                                <li>A classe <em>dropdown-toogle</em> é responsável por caracterizar o botão como um dropdown.</li>
                                <li>A classe <em>dropdown-menu</em> indica a caixa que conterá as opções da caixa de seleção.</li>
                                <li>A classe <em>dropdown-item</em> indica que aquele componente será um item do dropdown.</li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </li>
        </ul>
    </div>

    </div>

<?php include("./rodapeExplicacoes.php");?>
