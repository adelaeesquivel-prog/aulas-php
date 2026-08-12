<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio 04</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
 
   //css em cada linha
   <style>
    tr:nth-child(3) td {background-color: pink;
       }
   </style>

</head>

<body>
   <div class="container">
    <h1>Diferentes linguagens</h1>
     <div>
       <ol>
         <li> HTML: Estruturação</li>
         <li>CSS: Estilos</li>
         <li>JS: Comportamentos</li>
         <li>PHP: Back-End</li>
         <li>SQL: Manipulação de dados</li>
       </ol>
     </div>
 

  <?php
  $linguagens = [
    [
      "numero" => 1,
      "nome" => "HTML",
      "descricao" => "Estruturação"
    ],
    [
      "numero" => 2,
      "nome" => "CSS",
      "descricao" => "Estilos"
    ],
    [
      "numero" => 3,
      "nome" => "JS",
      "descricao" => "Comportamentos"
    ],
    [
      "numero" => 4,
      "nome" => "PHP",
      "descricao" => "Back-End"
    ],
    [
      "numero" => 5,
      "nome" => "SQL",
      "descricao" => "Manipulação de dados"
    ]
  ];
  foreach ($linguagens as $linguagem):
  ?>

    <!-- <p><b> ID</b> <?= $linguagem["numero"] ?></p> -->
    <!-- <p><b>Linguagem</b> <?= $linguagem["nome"] ?></p> -->
    <!-- <p><b>Descrição</b> <?= $linguagem["descricao"] ?></p> -->

  <?php
  endforeach;
  ?>
  <hr>


  <table class="table table-striped table-bordered table-hover"> 
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Linguagem</th>
        <th>Descrição</th>
      </tr>
      </thead>
      <tbody>
      <?php foreach ($linguagens as $linguagem): ?>
        <tr>
          <td ><?= $linguagem["numero"] ?></td>
          <td><?= $linguagem["nome"] ?></td>
          <td><?= $linguagem["descricao"] ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
 </div>
</body>

</html>