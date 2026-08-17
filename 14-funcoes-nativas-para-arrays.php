<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funçoes para arrays</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Funçoes nativas para arrays</h1>
        <hr>
        <h2>implode()</h2>
        <p>Transforma arraynem uma string</p>
<?php 
$arrayBandas = ["Pink Floyd","Genesis","Yes"];
$textBanadas = implode( "-", $arrayBandas);
?>
      <pre><?php var_dump($arrayBandas) ?></pre>
      <pre><?php var_dump($textBanadas) ?></pre>

      <hr>

      <h2>extract()</h2>
      <p>Extrai chaves associativas para variaveis.</p>
<?php 
$nome = "Beltrano";
$aluno = ["id" => 1, "nome" =>"Fulano", "idade" => 25];
extract($aluno , EXTR_PREFIX_ALL, "chave");
//Usamos o segundo parametro para definir um prefixo para os nomes
//Isso evita conflito/sobrescrita de outras variaveis
?>
     <ul>
        <li>ID: <?= $chave_id ?></li>
        <li>Nome <?= $chave_nome ?></li>
        <li>Idade: <?= $chave_idade ?></li>
     </ul>


    </div>

    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</body>
</html>