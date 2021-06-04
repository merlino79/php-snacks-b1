
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
  'nome' => 'alessandro',
  'cognome' => 'ciancio',
  'via' => 'desiderio 15',
];
var_dump($mioArr);
var_dump($mioArr['nome'] . ' ' . $mioArr['cognome']);
?>
<p>
<?php
echo $mioArr[nome] . ' ' . $mioArr[cognome];



?>
</p>
<p>
via:
<?php
echo $mioArr[via];
?>
</p>






  
</body>
</html>