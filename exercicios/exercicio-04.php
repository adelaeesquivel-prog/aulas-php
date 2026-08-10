<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04</title>

</head>
<body>
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
    ["numero" => 1,
     "nome" => "HTML",
     "descricao"=> "Estruturação" 
    ],
    ["numero" => 2,
     "nome" => "CSS",
     "descricao"=> "Estilos" 
    ],
    ["numero" => 3,
     "nome" => "JS",
     "descricao"=> "Comportamentos" 
    ],
    ["numero" => 4,
     "nome" => "PHP",
     "descricao"=> "Back-End" 
    ],
    ["numero" => 5,
     "nome" => "SQL",
     "descricao"=> "Manipulação de dados" 
    ]
  ];
  foreach($linguagens as $linguagem):
?>  

 
<p><b> ID</b> <?=$linguagem["numero"] ?></p>
<p><b>Linguagem</b> <?= $linguagem ["nome"] ?></p>
<p><b>Descrição</b> <?= $linguagem ["descricao"] ?></p>

<?php 
endforeach;
 ?>

 




    
</body>
</html>