<html>
 <head>
  <title>Date2</title>
 </head>
 <body>
 <form action="" method="get">
  Dia<input type="text" name="day" /><br />
  Mês<input type="text" name="month" /><br />
  Ano<input type="text" name="year" /><br />
  <input type="submit" name="submit" value="Testar" />
 </form> 
 <?php
  $dia = $_GET['day'];
  $mes = $_GET['month'];
  $ano = $_GET['year'];
  
  if(checkdate($mes, $dia, $ano))
   echo 'Data válida';
  else
   echo 'Data inválida';
 ?>
 </body>
</html>
