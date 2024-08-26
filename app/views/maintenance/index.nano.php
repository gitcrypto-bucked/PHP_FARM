<!DOCTYPE html>
<?php
date_default_timezone_set('America/Sao_Paulo');
?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Em Manutenção</title>
  <link rel="stylesheet" href="<?=$_SERVER['assets'];?>css/maintenance.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="vh">
  <div>
   <div class="wrap">
	<h1>Em Manutenção</h1>
	<h2><p>Desculpa pela inconveniencia.<br>Nosso Website está em manutenção agendada.<br><br></p></h2>
	<p>Obrigado pela compreenção.</p>
  <br>
  <p><?php  echo date('d/m/Y');?></p>
	</div>
  </div>
</div>
<!-- partial -->
  
</body>
</html>
