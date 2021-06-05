<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>snack2 email</title>
</head>
<body>
<h2>email</h2>

<?php

$data = $_GET;
if(empty($data['name']) ) {
  echo "errore: inserire i dati";
}elseif(strlen($data['name']) <=2) {
  echo "errore troppo corto";
  
}elseif(strpos($data['mail'], '@') === false || strpos($data['mail'], '.' === false)){
  echo "indirizzo email non vaildo";
}
else {
  echo "accesso riuscito";
}


?>
  

  
</body>
</html>