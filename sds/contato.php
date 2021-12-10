<?php

function filterName($field) {
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    if(filter_var($field, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))) {
        return $field;
    } else {
        return FALSE;
    }
}
   
function filterEmail($field) {
    $field = filter_var(trim($field), FILTER_SANITIZE_EMAIL);
    if(filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return $field;
    } else {
        return FALSE;
    }
}

function filterString($field) {
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    if(!empty($field)) {
        return $field;
    } else {
        return FALSE;
    }
}

function filterInt($field) {
    $field = filter_var(trim($field), FILTER_VALIDATE_INT);
    if(!empty($field)) {
        return $field;
    } else {
        return FALSE;
    }
}

$nomeerro = $emailerro = $assuntoerro = $mensagemerro = $psegurancaerro = "";
$nome = $email = $assunto = $mensagem = $pseguranca = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty($_POST["nome"])) {
        $nomeerro = "Por favor, insira seu nome.";
    } else {
        $nome = filterName($_POST["nome"]);
        if($nome == FALSE) {
            $nomeerro = "Por favor, insira um nome válido (apenas letras).";
        }
    }
    
    if(empty($_POST["email"])) {
        $emailerro = "Por favor, insira seu e-mail.";     
    } else {
        $email = filterEmail($_POST["email"]);
        if($email == FALSE) {
            $emailerro = "Por favor, insira um e-mail válido.";
        }
    }

    if(empty($_POST["assunto"])) {
        $assuntoerro = "Por favor, insira seu assunto.";     
    } else {
        $assunto = filterString($_POST["assunto"]);
        if($assunto == FALSE) {
            $assuntoerro = "Por favor, insira um assunto válido (apenas letras e números).";
        }
    }
    
    if(empty($_POST["mensagem"])) {
        $mensagemerro = "Por favor, insira sua mensagem.";     
    } else {
        $mensagem = filterString($_POST["mensagem"]);
        if($mensagem == FALSE) {
            $mensagemerro = "Por favor, insira uma mensagem válida (apenas letras e números).";
        }
    }

    if(empty($_POST["pseguranca"])) {
        $psegurancaerro = "Por favor, insira sua resposta.";     
    } else {
        $pseguranca = filterInt($_POST["pseguranca"]);
        if($pseguranca == FALSE) {
            $psegurancaerro = "Por favor, insira uma resposta válida (apenas números (ex: 00)).";
        }

        if(preg_match("/^[50]{2}$/", ($_POST["pseguranca"]))) {
            $psegurancaerro = "";
        } else {
            $psegurancaerro = "Por favor, insira uma resposta válida (apenas números (ex: 00)).";
        }
    }
    
    if(empty($nomeerro) && empty($emailerro) && empty($assuntoerro) && empty($mensagemerro) && empty($psegurancaerro)) {

        $to = 'contato@xn--studiodesignsoluoes-lyb.com';

        $subject = "Contato";
        
        $message = "
        <html>
            <head>
            <title>Contato</title>
            </head>
            
            <body>
                <table>
                    <tr>
                        <td>Nome</td>
                        <td>$nome</td>
                    </tr>
                    <tr>
                        <td>E-mail</td>
                        <td>$email</td>
                    </tr>
                    <tr>
                        <td>Assunto</td>
                        <td>$assunto</td>
                    </tr>
                    <tr>
                        <td>Mensagem</td>
                        <td>$mensagem</td>
                    </tr>
                </table>
            </body>
        </html>
        ";

        $headers = "MIME-Version: 1.0" . "\r\n" . 
        'Content-type:text/html;charset=UTF-8' . "\r\n" . 
        'From: <contato@xn--studiodesignsoluoes-lyb.com>' . "\r\n" . 
        'Cc: contato@xn--studiodesignsoluoes-lyb.com' . "\r\n";
        
        if(mail($to, $subject, $message, $headers)) {
          header("Location: ../sds/envios.php"); 
          exit();
        } 

        else {
          header("Location: ../sds/envion.php"); 
          exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
     <head>
          <title>Contato</title>
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
                    <h1 class="geral--titulo__container--h1">CONTATO</h1>
                </div>
            </div> <!-- Fim: Título -->

            <div class="contato__container contato__container-box">
                <div class="geral--item__lado--10 contato__container-box--redes">
                    <h4>ONDE NOS ENCONTRAR</h4>  
                    <h4>Aqui estão todas as maneiras que você poderá entrar em contato conosco.</h4>        

                    <div class="contato__redes-container">    
                        <img class="contato__redes-icone" src="../assets/imagens/ic-endereco-br.png">
                        <a href="https://www.google.com/maps/place/Av.+Reg.+Feij%C3%B3,+944+-+Vila+Formosa,+S%C3%A3o+Paulo+-+SP,+03342-000,+Brasil/@-23.559071,-46.569743,12z/data=!4m5!3m4!1s0x94ce5e9954a955bf:0x54468dc816840c93!8m2!3d-23.559071!4d-46.5697429?hl=pt-BR">
                          <span class="contato__redes-texto">Av. Reg. Feijó, 944 - Vila Formosa - São Paulo </span>
                        </a>
                    </div>

                    <div class="contato__redes-container">    
                        <img class="contato__redes-icone" src="../assets/imagens/ic-email-br.png">
                        <a href="../sds/contato.php">
                          <span class="contato__redes-texto">contato@studiodesignsolucoes.com</span>
                        </a>
                    </div>

                    <div class="contato__redes-container">    
                        <img class="contato__redes-icone" src="../assets/imagens/ic-whatsapp-br.png">
                        <a href="https://api.whatsapp.com/message/IJB5NI27IF3GK1">
                          <span class="contato__redes-texto">11 97826-2880</span>
                        </a>
                    </div>

                    <hr>

                    <div class="contato__redes-container">    
                        <img class="contato__redes-icone" src="../assets/imagens/ic-facebook-br.png">
                        <a href="https://www.facebook.com/Studio-Design-Solu%C3%A7%C3%B5es-107179707380529/">
                          <span class="contato__redes-texto">Studio Design Soluções</span>
                        </a>
                    </div>

                    <div class="contato__redes-container">    
                        <img class="contato__redes-icone" src="../assets/imagens/ic-instagram-br.png">
                        <a href="https://www.instagram.com/studiodesign.solu/">
                          <span class="contato__redes-texto">@studiodesign.solu</span>
                        </a>
                    </div>

                    <div class="form-esconder">    
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    </div>

                </div>

                <div class="geral--item__lado--50 contato__container-box--form">
                    <h4>OLÁ, É MUITO BOM TER VOCÊ POR AQUI!</h4>
                    <h4>Por favor, preencha o formulário abaixo para entrar em contato conosco através do nosso e-mail. Todos os campos são obrigatórios.</h4>
                    <br>

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">  
                      <div class="contato__container-box--form--input">
                          <label for="nome">NOME</label><br>
                          <input type="text" id="nome" name="nome" value="<?php echo $nome;?>"><br>
                          <span class="geral-erro"><?php echo $nomeerro;?></span>
                      </div>

                      <div class="contato__container-box--form--input">
                          <label for="email">EMAIL</label><br>
                          <input type="email" id="email" name="email" value="<?php echo $email;?>"><br>
                          <span class="geral-erro"><?php echo $emailerro;?></span>
                      </div>

                      <div class="contato__container-box--form--input">
                          <label for="assunto">ASSUNTO</label><br>
                          <input type="text" id="assunto" name="assunto" value="<?php echo $assunto;?>"><br>
                          <span class="geral-erro"><?php echo $assuntoerro;?></span>
                      </div>

                      <div class="contato__container-box--form--input">
                          <label for="mensagem">MENSAGEM</label><br>
                          <textarea rows="4" id="mensagem" name="mensagem"><?php echo $mensagem;?></textarea><br>
                          <span class="geral-erro"><?php echo $mensagemerro;?></span>
                      </div>

                      <div class="contato__container-box--form--input">
                          <label for="pseguranca">45 + 5</label><br>
                          <input type="text" id="pseguranca" name="pseguranca" value="<?php echo $pseguranca;?>"><br>
                          <span class="geral-erro"><?php echo $psegurancaerro;?></span>
                      </div>

                      <div class="contato__container-box--form--input">
                          <!-- Política de Privacidade -->
                            <?php include '../sds/politica.php';?>
                          <!-- Fim: Política de Privacidade -->
                          <p>Ao informar seus dados, você concorda com a <a id="myBtn"><b>Política de Privacidade</b></a>.</p>
                      </div>
                      <div class="contato__container-box--form--input">
                          <button type="submit" class="geral--botao geral--botao__formulario">ENVIAR</button>
                          <button type="reset" class="geral--botao geral--botao__formulario">LIMPAR</button>
                      </div>
                </form>    
                </div>
            </div>

         <!-- Rodapé -->
            <?php include '../assets/includes/rodape.php';?>
         <!-- Fim: Rodapé -->

          <!-- Scripts -->
          <script src="../assets/js/menu.js"></script>
          <script src="../assets/js/modal.js"></script>
          <!-- Fim: Scripts -->
     </body>
</html>
