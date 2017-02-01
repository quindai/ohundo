<!DOCTYPE html>
<html>
    <head>
        <title>Ohundo - Seu local de treinamento e cultura angolana</title>
        <meta charset="UTF-8">
        <!-- Suporte a mobile -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="mobile-web-app-capable" content="yes">
        
        <link rel="stylesheet" href="../css/reset.css"/>
        <!-- normalize por Nicolas Gallagher-->
<!--        <link rel="stylesheet" href="../css/node_modules/normalize.css"/>-->
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
        <link rel="icon" sizes="128x128" type="image/png" href="../img/ohundo_cloud.png"/>
    </head>
    
    <body>
       <header>
          <div class="banner">
              <p><a class="btn-lang" href="" ng-click="">Português</a></p>
               <h1>Ohundo
               <span class="glyphicon glyphicon-cloud"></span></h1>
                <summary>Angola na nuvem <span class="glyphicon glyphicon-cloud"></span></summary>
          </div>
        </header>

       <div class="jumbotron" align="center">
            <img src="../img/ko.png"/>
            <h3>Conclusão do pagamento</h3>
            <p style="text-align:center;">Curso de HTML5/CSS3/AngularJS + Phonegap</p>
            
            <p style="text-align:center;">A pagar: <b>38.000,00 AKz</b></p>
            <p style="text-align:center;">Quantidade: 1</p>
            <a href="controllerPagar.php?cliente=<?php echo $_GET['cliente']; ?>&email=<?php echo $_GET['email']; ?>"><p class="btn btn-primary btn-lg" role="button">Concluir Pagamento</p></a>
       </div>
<!--
        <div class="tudo">
            <header></header>
            <div id="produto">
                <div id="prod" class="venda"></div>
                <div id="preco" class="venda">
                    <p>Curso de HTML5/CSS3/AngularJS + Phonegap</p>
                    <p>Ano: 2014</p>
                    <p>A pagar: 38.000,00 KZ</p>
                    <p>Quantidade: 1</p>
                    <p>Cor: Vermelho</p>
                    <p>Tipo: Brinquedo</p>
                </div>
                <div id="botaoGeral" class="venda">
                    <a href="controllerPagar.php?cliente=<php echo $_GET['cliente']; ?>&email=<php echo $_GET['email']; ?>" id="botao">Concluir Pagamento</a>
                </div>
            </div>
        </div>
-->
    </body>
</html>