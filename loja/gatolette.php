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

              <div class="produto-container">
         <div class="produto-item-esquerda">
            <div class="prod-container">
               <div class="mySlides">
                  <img src="../assets/imagens/produto-01-gatolette-chamada.jpg" class="ImgThumbnail">
               </div>
               <div class="mySlides">
                  <img src="../assets/imagens/produto-01-gatolette-lateral.jpg" class="ImgThumbnail">
               </div>
               <div class="mySlides">
                  <img src="../assets/imagens/produto-01-gatolette-interno.jpg" class="ImgThumbnail">
               </div>

               <div class="row">
                  <div class="column">
                     <img class="demo-image cursor" src="../assets/imagens/produto-01-gatolette-chamada.jpg" style="width:100%" onclick="currentSlide(1)">
                  </div>
                  <div class="column">
                     <img class="demo-image cursor" src="../assets/imagens/produto-01-gatolette-lateral.jpg" style="width:100%" onclick="currentSlide(2)">
                  </div>
                  <div class="column">
                     <img class="demo-image cursor" src="../assets/imagens/produto-01-gatolette-interno.jpg" style="width:100%" onclick="currentSlide(3)">
                  </div>
               </div>

               <div class="modal">
                    <div class="container-modal"> 
                        <div><span class="closeImage"> × </span></div>
                        <div><img class="modalImage" id="img01"/></div>                    
                    </div>
               </div>

            </div>
         </div>
         <div class="produto-item-direita">
            <h1>GATOLETTE COM HALL</h1>
            <h2>a partir de R$: 899,00</h2>
            <p>Pensando no conforto do bichano aliado à praticidade da limpeza, desenvolvemos o Gatolette com hall, um armário cheio de charme, que comporta a bandeja de areia (liteira) dentro. Não é o máximo? Seu gatinho pode fazer suas necessidades tranquilamente e a areia não se espalha pela casa... um verdadeiro Toilette para gatos.</p>
            <p>Desse jeito, dá até para adotar mais alguns, não é?</p>
            <p>O móvel é confeccionado com madeira de qualidade, e é dividido em duas partes: uma onde fica a caixa de areia e um hall onde seu bichano vai limpar as patinhas antes de sair. Por isso, o Gatolette conta com duas tocas, que ainda poderão divertir seus gatinhos, já que eles adoram passar por essas fendas e se esconder em caixas. Conta, ainda, com um gancho na parte interna da porta para pendurar a pá de limpeza.</p>
            <p>Isso tudo com o charme de um móvel que pode ser colocado em qualquer lugar de sua casa.</p>
                        
            <a href="https://github.com/saralima001"><button class="geral--botao geral--botao__card">COMPRAR COM A STRIPE</button></a>
           <br>

            <a href="https://github.com/saralima001"><button class="geral--botao geral--botao__card">COMPRAR COM A CARTX</button></a>
            <br>

            <a href="https://github.com/saralima001"><button class="geral--botao geral--botao__card">COMPRAR NA OLX</button></a>

         </div>
      </div>

      <div class="produto-container-descricao">
        <div class="produto-item-tudo">
            <h2>DESCRIÇÃO</h2>
            <p><b>Produção e entrega:</b> 35 dias após confirmação de pagamento.</p>
            <p><b>Recomendação:</b> Não deixar em locais que recebem chuva diretamente.</p>
            <p><b>Material:</b> MDF</p>
            <p><b>Garantia:</b> 12 meses</p>
            <p>O produto <b>não vai montado</b> e acompanha <b>manual de instruções</b>.</p>
            <br>
            <h2>Medidas</h2>
            <p><b>Altura:</b> 40 cm</p>
            <p><b>Largura:</b> 90 cm</p>
            <p><b>Profundidade:</b> 41 cm</p> 
        </div>
      </div>

      <div class="produto-container-descricao">
        <div class="produto-item-esquerda-descricao">
            <img src="../assets/imagens/produto-01-gatolette-tirinha.jpg">
        </div>
        <div class="produto-item-centro-descricao">
            <p>Na Lugar Seguro, os bichanos continuam sendo venerados como deuses, mas até nós ficamos desanimados cada vez que a areia deles fica espalhada pela casa. É uma dificuldade real manter a casa limpa! Ainda que existam algumas liteiras fechadas, nem todo gato se adapta a elas.</p>
            <p>A venda de todos os Gatolettes irá ajudar os protetores da Lugar Seguro a salvarem mais gatinhos como a Fofinha e o Galego, que foram resgatados ontem(25/07/21), já fizeram exames de FIV e FELV (deu negativo! Ufa!) e foram castrados. Agora, eles esperam que você compre o Gatolette, para que possamos continuar cuidando deles e de outros gatinhos.</p>
        </div>
        <div class="produto-item-direita-descricao">
            <img src="../assets/imagens/resgates-lugar.jpg">
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
