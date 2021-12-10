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

$nomeerro = $emailerro = $telefoneerro = $areaerro = $instagramerro = $pinteresterro = $psegurancaerro = "";
$nome = $email = $telefone = $area = $instagram = $pinterest = $pseguranca = "";

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

    if(empty($_POST["telefone"])) {
        $telefoneerro = "Por favor, insira seu telefone.";     
    } else {
        $telefone = filterInt($_POST["telefone"]);
        if($telefone == FALSE) {
            $telefoneerro = "Por favor, insira um telefone válido (apenas números (ex: 11123456789)).";
        }

        if(preg_match("/^[11]{2}[0-9]{9}$/", ($_POST["telefone"]))) {
            $telefoneerro = "";
        } else {
            $telefoneerro = "Por favor, insira um telefone válido (apenas números (ex: 11123456789)).";
        }
    }

    if(empty($_POST["area"])) {
        $areaerro = "Por favor, insira sua área de atuação.";
    } else {
        $area = filterName($_POST["area"]);
        if($area == FALSE) {
            $areaerro = "Por favor, insira uma área de atuação válida (apenas letras).";
        }
    }
    
    if(empty($_POST["instagram"])) {
        $instagramerro = "Por favor, insira seu Instagram.";     
    } else {
        $instagram = filterString($_POST["instagram"]);
        if($instagram == FALSE) {
            $instagramerro = "Por favor, insira um Instagram válido (apenas letras e números).";
        }
    }

    if(empty($_POST["pinterest"])) {
        $pinteresterro = "Por favor, insira seu Pinterest.";     
    } else {
        $pinterest = filterString($_POST["pinterest"]);
        if($pinterest == FALSE) {
            $pinteresterro = "Por favor, insira um Pinterest válido (apenas letras e números).";
        }
    }

    if(empty($_POST["pseguranca"])) {
        $psegurancaerro = "Por favor, insira sua resposta.";     
    } else {
        $pseguranca = filterInt($_POST["pseguranca"]);
        if($pseguranca == FALSE) {
            $psegurancaerro = "Por favor, insira uma resposta válida (apenas números (ex: 00)).";
        }

        if(preg_match("/^[10]{2}$/", ($_POST["pseguranca"]))) {
            $psegurancaerro = "";
        } else {
            $psegurancaerro = "Por favor, insira uma resposta válida (apenas números (ex: 00)).";
        }
    }
    
    if(empty($nomeerro) && empty($emailerro) && empty($telefoneerro) && empty($areaerro) && empty($instagramerro) && empty($pinteresterro) && empty($psegurancaerro)) {

        $to = 'contato@xn--studiodesignsoluoes-lyb.com';

        $subject = "Consultoria";
        
        $message = "
        <html>
            <head>
            <title>Consultoria</title>
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
                        <td>Telefone</td>
                        <td>$telefone</td>
                    </tr>
                    <tr>
                        <td>Área de Atuação</td>
                        <td>$area</td>
                    </tr>
                    <tr>
                        <td>Instagram</td>
                        <td>$instagram</td>
                    </tr>
                    <tr>
                        <td>Pinterest</td>
                        <td>$pinterest</td>
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
          <title>Consultoria</title>
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
                    <h1 class="geral--titulo__container--h1">CONSULTORIA</h1>
                </div>
            </div> <!-- Fim: Título -->

            <div class="contato__container contato__container-box">
                <div class="geral--item__lado--50 contato__container-box--form">
                    <h4>OLÁ, É MUITO BOM TER VOCÊ POR AQUI!</h4>
                    <h4>Queremos te ajudar a tirar seus projetos do papel. Por favor, preencha o formulário abaixo para entrar em contato conosco através do nosso e-mail. Todos os campos são obrigatórios.</h4>
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
                          <label for="telefone">TELEFONE</label><br>
                          <input type="text" id="telefone" name="telefone" value="<?php echo $telefone;?>"><br>
                          <span class="geral-erro"><?php echo $telefoneerro;?></span>
                      </div>

                      <div class="contato__container-box--form--input">
                          <label for="area">ÁREA DE ATUAÇÃO</label><br>
                          <input type="text" id="area" name="area" value="<?php echo $area;?>"><br>
                          <span class="geral-erro"><?php echo $areaerro;?></span>
                      </div>

                      <div class="contato__container-box--form--input">
                          <label for="instagram">INSTAGRAM</label><br>
                          <input type="text" id="instagram" name="instagram" value="<?php echo $instagram;?>"><br>
                          <span class="geral-erro"><?php echo $instagramerro;?></span>
                      </div>

                      <div class="contato__container-box--form--input">
                          <label for="pinterest">PINTEREST</label><br>
                          <input type="text" id="pinterest" name="pinterest" value="<?php echo $pinterest;?>"><br>
                          <span class="geral-erro"><?php echo $pinteresterro;?></span>
                      </div>

                      <div class="contato__container-box--form--input">
                          <label for="pseguranca">8 + 2</label><br>
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
