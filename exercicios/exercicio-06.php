<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 06 - </title>
</head>

<body>
    <h1> Funções de Data e Hora</h1>
    <h2>Função time()</h2>

    <p> A função time() mostra o tempo atual em formato de timestamp.Ela não precisa de nenhum parâmetro.Ela retorna um número que representa os segundos desde 1º de janeiro de 1970.
    </p>
<?php
   $tempo = time();

   echo "O timestamp atual é: $tempo";
?>
    <hr>
    <h2>Função getdate()</h2>

    <p> A função getdate() mostra informações sobre a data atual, como dia, mês, ano, hora, minuto e segundo.
    Ela pode receber um timestamp, mas também podemos usar sem colocar nada. Ela retorna várias informações dentro de um array.
    </p>
<?php
  $data = getdate();
  ?>
   <p>Dia <?= $data["mday"] ?>. <br></p>
   <p>Mes <?= $data["mon"] ?>. <br></p>
   <p>Ano <?= $data["year"] ?>. <br></p>
   <p>Hora <?= $data["hours"] ?>. <br></p>
   <p>Minuto <?= $data["minutes"] ?>. <br></p>
   <p>Segundos <?= $data["seconds"] ?>. <br></p>

    <hr> 

    <h2>Função mktime()</h2>

    <p>A função mktime() serve para criar uma data e hora que nós escolhermos.
       Ela recebe hora, minuto, segundo, mês, dia e ano. Ela retorna um timestamp da data escolhida.
    </p>
<?php
  $data = mktime(10, 30, 0, 12, 25, 2026);
?>
  <p>A data escolhida é: <?= date("d/m/Y H:i", $data) ?></p>
   
    <hr>

    <h2> Função checkdate()</h2>
    <p> A função checkdate() serve para verificar se uma data é válida.
    Ela recebe mês, dia e ano. Ela retorna true se a data for válida e false se for inválida.
    </p>
<?php
 $dia = 17;
 $mes = 8;
 $ano = 2026;
 ?>

    <?php if  (checkdate($mes, $dia, $ano)):?>
        <p>A data é válida!</p> 
    <?php else: ?> 
       <p>A data é inválida!</p> 
     <?php endif; ?>

    <hr>
    <h2> Desafio</h2>
    <p> Neste exemplo vamos usar checkdate() para verificar a data e mktime() para criar essa data.
    </p>
<?php
  $dia = 25;
  $mes = 12;
  $ano = 2026;
  ?>
<?php if (checkdate($mes, $dia, $ano)) : ?>
<?php $data = mktime(10, 30, 0, $mes, $dia, $ano); ?>

 <p>A data é válida!</p>
 <p>Data: <?= date("d/m/Y H:i", $data) ?></p>
 
<?php else : ?>
  <p>A data é inválida!</p>
<?php endif; ?>

</body>

</html>