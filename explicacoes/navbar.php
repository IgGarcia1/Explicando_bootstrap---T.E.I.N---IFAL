<?php include("cabecalhoExplicacoes.php");?>

	<div class="container">
            <h1>Navbar</h1>
            <br/>
            <p> Barrar de navegação pelo site.</p>
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
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
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
            <br><br>
            <h5>Código</h5>
            <div class="">
                <textarea rows="38" class="form-control" disabled>
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
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
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
                </textarea>
            </div>
            <hr>
            <br>
            <h2>Trocando tema</h2>
            <br>
            <p>Para trocar o tema da navbar basta que troque a palavra <em>light</em> por  <em>dark</em> nas classes da tag <em>nav</em>, ou então colocar o tema desejado. </p>
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
</nav>
                            </textarea>
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
</nav>
                            </textarea>
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
</nav>
                            </textarea>
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
