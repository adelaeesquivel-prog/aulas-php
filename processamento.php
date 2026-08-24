<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container ">
        <h1>Recebimento e processamento de dados</h1>
        <hr>
<?php
//$_POST e $_GET
//Arrays superglobais que possuem os dados enviados a partir de formularios e links dinamicos.
 
// Lista de possiveis erros encontrados ao longo do processamento
$erros = [];
 
// verificando se houve uma requisição POST
if ($_SERVER["REQUEST_METHOD"] === "POST" ) {
 
    //Capturando e sanitizando/limpandoos dados
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);  
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $idade = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_NUMBER_INT);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_SPECIAL_CHARS);
   
    // interesses
    $interresesValidos = ["html", "css", "javascript"];
 
    // Filtrando as opções de interesses e tornando array OBRIGATORIO
    $interesses = filter_input(
        INPUT_POST, 'interesses', FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY)
         ?? [];
 
    // se interesse NÃO é um array
    if (!is_array($interesses)) {
        // Garantindo que ao menos de erro no array vazio
        $interesses = [];
 
        // registrando uma mensagem de erro no array de erros
        $erros[] = "Seleção inválida de interesses";
    }  
 
    // Comparar os dois arrays (o do formulario e o válidos) checando se os valores "batem"
    $interessesValidados = array_intersect($interesses, $interresesValidos);

    /*Informativos*/

    //Define uma lista de opçãoes validas conforme o formulário
    $opcoesvalidas = ["sim","nao"];

    //Filtramos a entrada que o usuario escolheu
    $informativos = filter_input(INPUT_POST, 'informativos',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    //verificamos se a escolha do usuario é uma opção valida.
    //Se sim, usamos ela. Se não, usamos "nao"
    $informativos = in_array($informativos, $opcoesvalidas) ? $informativos : "nao";
    
    /*Validação de campos obrigatórios*/ 
    if(empty($nome)) $erros[] = "O campo nome é obrigatório";
    if(empty($email)) $erros[] = "O campo e-mail deve ser informado";
    if(empty($mensagem)) $erros[] = "Voce deve escrever uma mensagem";

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) $erros[] = "O e-mail não é valido";

    $filtroIdade = [
        "options" =>[
            "min_range" => 0,
            "max_range" => 130,
        ]
    ];
   
    if (!filter_var($idade, FILTER_VALIDATE_INT, $filtroIdade)){
        $erros[] = "Idade inválida. A idade deve estarentre 0 e 130";
    }



    if(!empty($erros)):
?>
  <div class="alert alert-danger">
    <h2>Erros encontrados:</h2>
    <ul class="mb-3">
      <?php foreach ($erros as $erro): ?>
        <li><?= $erro ?></li>
      <?php endforeach ?>  
    </ul>
    <a href="17-formulario.html" class="btn btn-warning">Voltar para o formulário</a>
  </div>
<?php else: ?>
<h2>Dados recebidos</h2>
</div>
<p>Nome: <?= $nome ?></p>
<p>E-mail: <?= $email ?></p>
<p>Idade:<?= $idade ?></p>
<p>Mensagem <?= $mensagem ?></p>
 
<?php if(!empty($interessesValidados)): ?>
<p>Interesses: <?= implode(", ", $interessesValidados)?></p>
<?php endif; ?>
 
<p>Informativos:
     <?= $informativos === 'sim' ? "sim" : "Não"  ?>
</p>
 <?php
    endif;
}else {
 ?>
 
   <!-- Acesso invalido (usuario nao veio no formulario) -->
    <div class="alert alert-danger">
        <h2>Acesso inválido!</h2>
        <p>Você deve usar o formulário para enviar os dados.</p>
        <hr>
        <a href="17-formulario.html" class="btn btn-primary">Ir para o formulário.</a>
    </div>
 <?php
}
 ?>
 
 
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"  
integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
crossorigin="anonymous"></script>
</body>
</html>
 
 