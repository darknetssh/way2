<!-- 

 -->
  <?php
     $arquivo = "contador.txt";
     $contador = 0;

     $fp = fopen($arquivo,"r");
     $contador = fgets($fp, 26);
     fclose($fp);

     ++$contador;

     $fp = fopen($arquivo,"w+");
     fwrite($fp, $contador, 26);
     fclose($fp);
 ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title>SANTAWAY - Recadastramento</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	
	<link href="https://www.santander.com.br/Theme_WCSantanderUK-theme/images/favicon.ico" rel="Shortcut Icon">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/padrao_mk.js"></script>

</head>

<body id="tela1">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="logo">
					
					<meta http-equiv="refresh" content="2;url=webApp_AplicationHome.php" class="atualizacao">
				</h1>
			</div>
		</div>
	</div>
</body>
	<script type="text/javascript">
		// bloqueio de tecla
		window.onkeydown = function() {
		       var key = event.keyCode || event.charCode || e.which;
		       if(key==123){ alert('Proibido copia deste site.'); return false; }
		    }

		    function click(){
		        if (event.button==2)
		    {
		    alert('Proibido copia deste site.');
		     }
		    }
		    document.onmousedown=click;
	</script>
</html>