
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>prove</title>
</head>
<body>
<p>array</p>
<?php
$mioArr = [
  'nome' => 'nome: alessandro',
  'cognome' => 'cognome: ciancio',
  'via' => 'via, desiderio 15',
];

var_dump($mioArr);
$mioArr['age'] =  41;
var_dump($mioArr);
var_dump($mioArr['nome'] . ' ' . $mioArr['cognome']);

?>

<p>
<?php
echo $mioArr[nome] . ' ' . $mioArr[cognome];
?>
</p>

<p>
indirizzo: 
<?php

echo $mioArr[via];
?>
</p>

<ul>
  <?php
  foreach ($mioArr as $utente) {


  ?>
  <li>
  <?php
    echo $utente;
     }
  ?>
 
  </li>
 

</ul>
<p>
<?php
echo ($mioArr['nome'] . ' / ' . $mioArr['cognome']);
?>
</p>







  
</body>
</html>