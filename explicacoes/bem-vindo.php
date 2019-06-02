<?php include("./cabecalhoExplicacoes.php"); ?>

    <div class="container">
        <br>
        <h1 style="text-align: center;">Bem-vindo!</h1>
       
        <div>
            <div>
                <h2>O que é Bootstrap?</h2>
                <p><strong>Bootstrap</strong> é uma biblioteca voltada para a estilização das suas páginas web. Tendo um grande <span style="font-style:italic;">"arsenal"</span> 
                para personalização de componentes e efeitos.
                </p>
            </div>
            
            <div>
                <br>
                <h2>Como coloco Bootstrap em minhas páginas?</h2>
                <!--br-->
                <p>Para poder usar aparato de Bootstrap, há dois caminhos possíveis.</p>
                <div class="container">
                    <h6>1. Utilizando links de CDN (content delivery network).</h6>
                    <br>
                    No Head, você deve colocar as seguintes linhas:
                    <textarea class="form-control" disabled rows="3">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</textarea>
                    <br>
                    E no final da tag Body incluir o seguinte código.

                    <textarea class="form-control" disabled rows="11">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>                       
</textarea>
                </div>
                <br>
                <br>
                <h6>2. Baixando os arquivos. </h6>
                <br>
                Você pode baixar o Bootstrap <a href="https://github.com/twbs/bootstrap/releases/download/v4.3.1/bootstrap-4.3.1-dist.zip">clicando aqui</a>, ou, se preferir, através do <a href="https://getbootstrap.com/docs/4.3/getting-started/download/" target="_blank">site oficial</a>.
                <br>
                <br>
                <br>
                <br>


            </div>

        </div>

    </div>

<?php include("./rodapeExplicacoes.php"); ?>