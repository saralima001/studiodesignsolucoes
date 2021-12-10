<!DOCTYPE html>
<html lang="pt-BR">
     <head>
          <title>Eventos</title>
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

             <div class="eventos--intro__imagem-fundo"></div>

             <!-- Título -->
            <div class="geral--titulo__container">
                <div class="geral--item__inteiro--100">
                    <h1 class="geral--titulo__container--h1">EVENTOS</h1>
                </div>
            </div> <!-- Fim: Título -->

            <div class="geral--intro__container">
                <div class="geral--item__inteiro--100">
                   <h2>Texto sobre eventos. Texto sobre eventos. Texto sobre eventos. Texto sobre eventos.</h2>
                </div>
            </div>

            <div class="projetos--galeria__container">
                <div class="geral--item__lado--10">
                   <img src="../assets/imagens/eventos-01-02.jpg" class="ImgThumbnail">
                </div>

                <div class="geral--item__lado--50">
                   <img src="../assets/imagens/eventos-01-03.jpg" class="ImgThumbnail">
                </div>
            </div>

            <div class="projetos--galeria__container">
                <div class="geral--item__lado--50">
                   <img src="../assets/imagens/eventos-01-04.jpg" class="ImgThumbnail">
                </div>

                <div class="geral--item__lado--50">
                   <img src="../assets/imagens/eventos-01-05.jpg" class="ImgThumbnail">
                </div>
            </div>

            <div class="modal">
                <div class="container-modal"> 
                    <div><span class="closeImage"> × </span></div>
                    <div><img class="modalImage" id="img01"/></div>                    
                </div>
            </div>

         <!-- Rodapé -->
            <?php include '../assets/includes/rodape.php';?>
         <!-- Fim: Rodapé -->

          <!-- Scripts -->
          <script src="../assets/js/menu.js"></script>
          <script src="../assets/js/modal-image.js"></script>
          <!-- Fim: Scripts -->
     </body>
</html>
