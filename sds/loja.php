<!DOCTYPE html>
<html lang="pt-BR">
     <head>
          <title>Loja</title>
          <?php include '../assets/includes/head.php';?>
     </head>

     <body>
             <!-- Menu -->
             <header>
                  <nav>
                     <ul class="menu menu-geral">
                        <?php include '../assets/includes/menu.php';?>
                  </nav>
             </header>
             <!-- Fim: Menu -->

             <!-- Título -->
            <div class="geral--titulo__container">
                <div class="geral--item__inteiro--100">
                    <h1 class="geral--titulo__container--h1">LOJA</h1>
                </div>
            </div> <!-- Fim: Título -->

            <div class="geral--intro__container">
                <div class="geral--item__inteiro--100">
                   <h2>Aqui você encontra os melhores produtos.</h2>
                </div>
            </div>

            <div class="loja--produtos__container">
                <div class="loja--produtos__container-box">
                   <h2>GATOLETTE COM HALL</h2>
                   <img src="../assets/imagens/produto-01-gatolette-lateral.jpg">
                   <h2>R$: 899,00</h2>
                   <a href="../loja/gatolette.php"><button class="geral--botao geral--botao__card">VISUALIZAR</button></a>
                </div>
            </div>

         <!-- Rodapé -->
            <?php include '../assets/includes/rodape.php';?>
         <!-- Fim: Rodapé -->

          <!-- Scripts -->
          <script src="../assets/js/menu.js"></script>
          <!-- Fim: Scripts -->
     </body>
</html>
