<!DOCTYPE html>
<html lang="pt-BR">
     <head>
          <title>Projetos</title>
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

             <div class="projetos--intro__imagem-fundo"></div>

             <!-- Título -->
            <div class="geral--titulo__container">
                <div class="geral--item__inteiro--100">
                    <h1 class="geral--titulo__container--h1">PROJETOS</h1>
                </div>
            </div> <!-- Fim: Título -->

            <div class="geral--intro__container">
                <div class="geral--item__inteiro--100">
                   <h2>Texto sobre projetos. Texto sobre projetos. Texto sobre projetos. Texto sobre projetos.</h2>
                </div>
            </div>

            <div class="projetos--galeria__container">
                <div class="geral--item__lado--10">
                   <img src="../assets/imagens/projeto-02-02.jpg" class="ImgThumbnail">
                </div>

                <div class="geral--item__lado--50">
                   <img src="../assets/imagens/projeto-02-01.jpg" class="ImgThumbnail">
                </div>
            </div>

            <div class="projetos--galeria__container">
                <div class="geral--item__lado--50">
                   <img src="../assets/imagens/projeto-03-01.jpg" class="ImgThumbnail">
                </div>

                <div class="geral--item__lado--10">
                   <img src="../assets/imagens/projeto-03-02.jpg" class="ImgThumbnail">
                </div>
            </div>

            <div class="projetos--galeria__container">
                <div class="geral--item__lado--33">
                   <img src="../assets/imagens/projeto-04-01.jpg" class="ImgThumbnail">
                </div>

                <div class="geral--item__lado--33">
                   <img src="../assets/imagens/projeto-04-02.jpg" class="ImgThumbnail">
                </div>

                <div class="geral--item__lado--33">
                   <img src="../assets/imagens/projeto-04-03.jpg" class="ImgThumbnail">
                </div>
            </div>

            <div class="projetos--galeria__container">
                <div class="geral--item__lado--10">
                   <img src="../assets/imagens/projeto-06-01.jpg" class="ImgThumbnail">
                </div>

                <div class="geral--item__lado--50">
                   <img src="../assets/imagens/projeto-05-01.jpg" class="ImgThumbnail">
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
