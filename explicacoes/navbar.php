<?php include("cabecalhoExplicacoes.php");?>

	<div class="container">
            <h1>Navbar</h1>
            <br/>
            
            <h2>Definição</h2>
            <p> Barrar utilizada para navegação pelo site, ou seja, nela estará contida todas as opções principais do site. O bootstrap para 
            navbar é composto por algumas classes, entre elas:</p>
            <ul>
                <li><b>.navbar</b>: Classe geral usada para estilização básica e indicação semântica do componente como uma barra de navegação.</li>
                <li><b>.navbar-expand</b>: Serve para formar uma barra de navegação horizontal.</li>
                <li><b>.navbar-brand</b>: Utilizada para destacar a logo/nome da sua página.</li>
                <li><b>.nav-item</b>: Indicações de estilo para cada item de navegação.</li>
                <li><b>.nav-link</b>: Indicações para o redirecionamento de cada item.</li>
                <li><b>.navbar-toogle</b>: Utilizada para esconder as opções em um botão, como um dropbox. Muito comum em versões mobile.</li>
            </ul> 
            <br/>

            <h5>Demonstração</h5>
            <br/>
            <div class="">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <a class="navbar-brand" href="#">Navbar</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                      </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                  </div>
                </nav>
            </div>
            <br>
            <h5>Código</h5>
            <div class="">
                <textarea rows="25" class="form-control" disabled>
1.<nav class="navbar navbar-expand-lg navbar-light bg-light">
2.    <a class="navbar-brand" href="#">Navbar</a>
3.    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
4.        <span class="navbar-toggler-icon"></span>
5.    </button>
6.
7.    <div class="collapse navbar-collapse" id="navbarSupportedContent">
8.        <ul class="navbar-nav mr-auto">
9.            <li class="nav-item active">
10.                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
11.            </li>
12.            <li class="nav-item">
13.                <a class="nav-link" href="#">Link</a>
14.            </li>
15.            <li class="nav-item">
16.                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
17.            </li>
18.        </ul>
19.        <form class="form-inline my-2 my-lg-0">
20.            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
21.            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
22.        </form>
23.    </div>
24.</nav></textarea>
            </div>
            <br>
            <div>
                <span class="tituloExemplificacao">Explicando código</span> <br> <br>

                <p>Na primeira linha declaramos que temos uma barra de navegação com a classe <em>.navbar</em> e que ela deve ser formatada na horizontal por 
                conta da classe <em>.navbar-expand</em>. As classes <em>.navbar-light</em> e <em>.bg-light</em> são apenas estilização de tons de cores.</p>  
                <p>Da segunda linha temos apenas a declaração da nossa logo com a classe <em>.navbar-brand</em>.</p>
                <p>Nas linhas quatro, cinco e seis fazemos as configurações para versão mobile. Com a classe <em>.navbar-toggle</em> indicamos que esse botão servirá 
                como nossa dropbox. o <em>data-target</em> referencia ao conjunto de opções da navegação. Por fim, a clase <em>.navbar-toggler-icon</em> dá ao botão 
                a aparência de uma dropbox.</p>

                <div class="codeDivList">
                    <pre>
                        <code>
                                                    3. <span class="tag">button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
                                                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"</span>
                                                    4.          <span class="tag">span class="navbar-toggler-icon"</span> <span class="tag">/span</span>
                                                    5. <span class="tag">/button</span></code></pre>
                    </div>
                <br>
                <p>Entre as linhas oito e dezoito estamos declarando as opções de navegação com a classe <em>.nav-item</em> em cada item.</p>

            </div>
            <hr>
            <br>
            <h2>Trocando tema</h2>
            <br>
            <p>Para trocar o tema da navbar basta que troque a palavra <em>light</em> por  <em>dark</em> nas classes da tag <em>nav</em>, 
            ou então colocar o tema desejado de acordo com as <a href="./classes-gerais.php">classes gerais</a> de cores do bootstrap.</p>
            <br/>
            <table class="table">
                <thead class="thead-dark">
                    <th> Tema </th>
                    <th> Código </th>
                    <th> Resultado </th>
                </thead>
                <tbody>
                    <tr>
                        <td> Claro </td>
                        <td>
                            <textarea rows="4" class="form-control" disabled>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
</nav></textarea>
                        </td>
                        <td>
                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                              <a class="navbar-brand" href="#">Navbar</a>
                            </nav>
                        </td>
                    </tr>
                    <tr>
                        <td> Escuro</td>
                        <td>
                            <textarea rows="4" class="form-control" disabled>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
</nav></textarea>
                        </td>
                        <td>
                            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                              <a class="navbar-brand" href="#">Navbar</a>
                            </nav>
                        </td>
                    </tr>
                    <tr>
                        <td> Primário</td>
                        <td>
                            <textarea rows="4" class="form-control" disabled>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Navbar</a>
</nav></textarea>
                        </td>
                        <td>
                            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                              <a class="navbar-brand" href="#">Navbar</a>
                            </nav>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>

<?php include("rodapeExplicacoes.php");?>
