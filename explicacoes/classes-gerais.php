<?php include("./cabecalhoExplicacoes.php");?>

<div class="container">
    <h1>Classes gerais</h1>

    <div>
        <h2>Definição</h2>
        <p>Estas classes são consideradas "gerais" pois não se restringem a um único componente, pelo contrário, são compartilhadas por vários
        componentes. Muitas das vezes, são caracteristicas como cores, tamanhos, estilo de fontes, entre outros.</p>

        <h2>Cores</h2>
        Comumente vistas em botões e alertas, apresentam uma relação associativa com suas cores. Sendo estas as seguintes:
        <br><br>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Classe</th>
                    <th scope="col">Cor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><b>-success</b></td>
                    <td>
                        <div class="form-control bg-success">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><b>-danger</b></td>
                    <td>
                        <div class="form-control bg-danger">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><b>-warning</b></td>
                    <td>
                        <div class="form-control bg-warning">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><b>-info</b></td>
                    <td>
                        <div class="form-control bg-info">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><b>-primary</b></td>
                    <td>
                        <div class="form-control bg-primary">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><b>-secondary</b></td>
                    <td>
                        <div class="form-control bg-secondary">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><b>-link</b></td>
                    <td>
                        <div class="form-control bg-link">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><b>-dark</b></td>
                    <td>
                        <div class="form-control bg-dark">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><b>-light</b></td>
                    <td>
                        <div class="form-control bg-light">
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <br>
        <b>Observação:</b> Essas classes devem ser usadas juntamente com a classe do componente que se deseja estilizar. Da seguinte maneira:
        <br> <br>
                <div style="font-size: 20px; background-color: gray; font-weight: bold; text-align: center; border-radius: 10px; height: 30px; vertical-align:center; ">
                    classe do componente + classe da cor
                </div>
        <br>
        Por exemplo, se o componente for um botão e quisermos colocar o vermelho, então colocariamos assim: "btn-danger" e teriamos como resultado o seguinte.
        <br> <br>
        <div style="margin-left:auto;margin-right:auto; width:50px;">
            <button class="btn btn-danger">Botão</button>
        </div>

        <br>
        <br>
        <h2>Tamanho</h2>
        <p>Normalmente usadas com configarações de <a href="./grid.php">grids</a> e <a href="./input.php">inputs</a>. Estas configurações se aplicam à altura e largura.</p>
        <p>São categorizados em:</p>
        <br>
        <table class="table table-bordered table-dark">
            <thead class="thead-dark">
                <tr>
                    <td scope="col">Tamanho</td>
                    <td scope="col">Classe</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Small</td>
                    <td>-sm</td> 
                </tr>
                <tr>
                    <td>Medium</td>
                    <td>-md</td>
                </tr>
                <tr>
                    <td>Large</td>
                    <td>-lg</td>
                </tr>
                <tr>
                    <td>Extra large</td>
                    <td>-xl</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include("./rodapeExplicacoes.php");?>