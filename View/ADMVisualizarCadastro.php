
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Visualizar Cadastro</title>
</head>
<body class="w3-light-grey">
<?php
include_once '../Controller/UsuarioController.php';
echo "<br>";
if(!isset($_SESSION))
{
    session_start();
}
echo "<br>";
$controller = new UsuarioController();
echo "<br>";
$usuario = $controller->visualizarCadastro($_POST["id"]);
echo "<br>";
?>
<div class="w3-content"
style="max-width:800px">

<header class="w3-container w3-cyan w3-center w3-padding">

<h1>Dados do Usuário</h1>

</header>

<div class="w3-card-4 w3-white w3-padding">

<p>
<b>ID:</b>
<?php echo $usuario->getID(); ?>
</p>

<p>
<b>Nome:</b>
<?php echo $usuario->getNome(); ?>
</p>

<p>
<b>CPF:</b>
<?php echo $usuario->getCPF(); ?>
</p>

<p>
<b>Email:</b>
<?php echo $usuario->getEmail(); ?>
</p>

<p>
<b>Data de Nascimento:</b>
<?php echo $usuario->getDataNascimento(); ?>
</p>

</div>

<br>

<form action="../Controller/Navegacao.php"
method="post">

<button name="btnVoltarPrincipal"
class="w3-button w3-blue w3-round">

Voltar

</button>

</form>

</div>

</body>
</html>
