<?php

require_once 'funcoes.php';

$contasCorrentes= [
  '123.456.789-01'=> [
    'titular'=>'Maria',
    'saldo'=>'10000'
  ],
  '123.456.789-02'=> [
    'titular'=>'Alberto',
    'saldo'=>'300'
  ],
  '123.456.789-03'=> [
    'titular'=>'Vinicius',
    'saldo'=>'100'
  ]
];

//$contasCorrentes['123.456.789-01']=sacar($contasCorrentes['123.456.789-01'], 500);
//$contasCorrentes['123.456.789-02']=sacar($contasCorrentes['123.456.789-02'], 500);
//$contasCorreappntes['123.456.789-03']=depositar($contasCorrentes['123.456.789-03'], -500);

unset ($contasCorrentes['123.456.789-03']);

titularComLetrasMaiusculas($contasCorrentes['123.456.789-03']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Contas Correntes</h1>
</body>
</html>