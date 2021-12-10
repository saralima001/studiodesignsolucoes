<!DOCTYPE html>
<html lang="pt-BR">
     <head>
          <title>Envio</title>
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
                    <h1 class="geral--titulo__container--h1">ENVIADO</h1>
                </div>
            </div> <!-- Fim: Título -->

            <div class="envio__container">
              <img src="../assets/imagens/enviado.png"><br><br>
              <h4>Obrigado! Seu formulário foi enviado com sucesso.</h4><br>
              <a href="../index.php"><button type="reset" class="geral--botao geral--botao__formulario">INÍCIO</button></a>
            </div>

         <!-- Rodapé -->
            <?php include '../assets/includes/rodape.php';?>
         <!-- Fim: Rodapé -->

          <!-- Scripts -->
          <script src="../assets/js/menu.js"></script>
          <!-- Fim: Scripts -->
     </body>
</html>
