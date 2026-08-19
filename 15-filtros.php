<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Filtros para validação e sanitização</h1>
        <hr>
        <p>Filtros são recursos de análise e limpeza de dados aplicados atravás de funções especiais, normalmente  as funçoes <code>filter_var</code> e <code>filter_imput()</code> e também com o uso de <b>constantes</b> de validação/sanitização.</p>

        <h2>Validação</h2>
        <h3>FILTER_VALIDATE_EMAIL</h3>
<?php 
$email = "email@provedor.com";
$emailValido = filter_var($email , FILTER_VALIDATE_EMAIL)
?>
       <pre><?php var_dump($emailValido) ?></pre>

<?php if ($emailValido): ?>
    <p class="text-success">E-mail correto!</p>
<?php else: ?>
    <p class="text-danger">E-mail incorreto!</p>
<?php endif; ?>

      <h3>FILTER_VALIDATE_URL</h3>
<?php 
$redeSocial = "https://linkedin.com/in/tiagobsantos"; 
$redeSocialValida = filter_var($redeSocial, FILTER_VALIDATE_URL);
?>
      <pre><?php var_dump($redeSocialValida) ?></pre>

<?php if ($redeSocialValida): ?>
    <a href="<?= $redeSocial ?>" class="bnt btn-inf">Me siga no LinkedIN</a>
<?php  endif; ?>
     
     <hr>
     <h2>Sanitização</h2>
     <h3>FILTER_SANITIZE_EMAIL</h3>
<?php 
$contato = "/adelae esquivel0 38@ gmail;com";
$contatoSanitizado = filter_var($contato, FILTER_SANITIZE_EMAIL);
?>
     <p>Contato <b>sem </b>sanitização: <?= $contato ?></p>
     <p>Contato <b>com </b>sanitização: <?= $contatoSanitizado ?></p>

     <h3>FILTER_SANITIZE_FULL_CHARS</h3>
<?php 
//Simulando uma entrada de dados codigo HTML
$nomeCompleto ="<img src='https://ogimg.infoglobo.com.br/rioshow/25088054-e75-c90/FT1086A/pacoca-caseira.jpg'>";

$nomeCompletoSanitizado =filter_var(
    $nomeCompleto , FILTER_SANITIZE_FULL_SPECIAL_CHARS);
?>
     <p>Nome informado: <?= $nomeCompletoSanitizado ?></p>

<?php 
//Simulação de um ataque  de injeção de codigo JS  (XSS - Cross Site Scripting)
$ataqueXSS = "<script>location = 'https://sp.senac.br'</script>";
?>
      <p>Teste:
        <?= filter_var($ataqueXSS ,FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?>
      </p>

      <h3>htmlspecialchars()</h3>
<?php 
$nomeCompletoCorrigido = htmlspecialchars($nomeCompleto);
$AtaqueEvitado = htmlspecialchars($ataqueXSS)
?>
      <p>Nome completo corrigido: <?= $nomeCompletoCorrigido ?></p>
      <p>Ataque evitado: <?= $AtaqueEvitado ?></p> 
</div>








    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</body>
</html>