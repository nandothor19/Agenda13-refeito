<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Visualizar Cadastro</title>
</head>
<body>
<div class="w3-light-grey">
<?php
include_once '../Controller/UsuarioController.php';
include_once '../Model/Usuario.php';
include_once '../Controller/formacaoAcadController.php';
include_once '../Controller/OutrasFormacoesController.php';
include_once '../Controller/ExperienciaProfissionalController.php';
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
<div class="w3-content" style="max-width:800px">
            <!-----------------------------------------DADOS DO USUÁRIO----------------------------->
    <header class="w3-container w3-padding-32 w3-center ">
        <h1 class="w3-text-white w3-panel w3-cyan w3-round-large">
           Dados do Usuário
        </h1>
    </header>
 <table>
    <thead>
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

</div></thead>
</table>
<br>


                        <!--========================FORMAÇÃO================================-->
 <!-- FORMAÇÃO -->

    <header class="w3-container w3-center">

        <h2 class="w3-text-white w3-panel w3-blue w3-round-large">
            Formação Acadêmica
        </h2>

    </header>

    <?php

    $fCon = new FormacaoAcadController();

    $results = $fCon->gerarLista($usuario->getID());

    ?>

    <table class="w3-table-all w3-centered">

        <thead>

            <tr class="w3-blue">
                <th>Início</th>
                <th>Fim</th>
                <th>Descrição</th>
            </tr>

        </thead>
        <tbody>

        <?php

        if($results != null)
        {
            while($row = $results->fetch_object())
            {
                echo '<tr>';

                echo '<td>'.$row->inicio.'</td>';

                echo '<td>'.$row->fim.'</td>';

                echo '<td>'.$row->descricao.'</td>';

                echo '</tr>';
            }
        }

        ?>

        </tbody>

    </table>

    <br>

    <!-- EXPERIÊNCIA -->

    <header class="w3-container w3-center">

        <h2 class="w3-text-white w3-panel w3-blue w3-round-large">
            Experiência Profissional
        </h2>

    </header>

    <?php

    $eCon = new ExperienciaProfissionalController();

    $resultsEP = $eCon->gerarLista($usuario->getID());

    ?>

    <table class="w3-table-all w3-centered">

        <thead>

            <tr class="w3-blue">
                <th>Início</th>
                <th>Fim</th>
                <th>Empresa</th>
                <th>Descrição</th>
            </tr>

        </thead>

        <tbody>

        <?php

        if($resultsEP != null)
        {
            while($row = $resultsEP->fetch_object())
            {
                echo '<tr>';

                echo '<td>'.$row->inicio.'</td>';

                echo '<td>'.$row->fim.'</td>';

                echo '<td>'.$row->empresa.'</td>';

                echo '<td>'.$row->descricao.'</td>';

                echo '</tr>';
            }
        }

        ?>

        </tbody>

    </table>

    <br>
    
   <form action="../Controller/Navegacao.php"
method="post">

<button name="btnVoltar"
class="w3-button w3-blue w3-round">

Voltar

</button>

</form>
    <!-----===============================================Outras Formações============================================================= ----->
    <!--    <header class="w3-container w3-center">

        <h2 class="w3-text-white w3-panel w3-blue w3-round-large">
            Outras Formações
        </h2>

    </header>

    <?php
include_once '../Controller/OutrasFormacoesController.php';
    $ofCon  = new OutrasFormacoesController();
    $resultsOF  = $ofCon->gerarLista($usuario->getID());

    ?>

    <table class="w3-table-all w3-centered">

        <thead>

            <tr class="w3-blue">
                <th>Início</th>
                <th>Fim</th>
                <th>Descrição</th>
            </tr>

        </thead>

        <tbody>

        <?php
/*
        if($resultsOF != null)
        {
            while($row = $resultsOF->fetch_object())
            {
                echo '<tr>';

                echo '<td>'.$row->inicio.'</td>';

                echo '<td>'.$row->fim.'</td>';

                echo '<td>'.$row->descricao.'</td>';

                echo '</tr>';
            }
        }
*/
        ?>

        </tbody>

    </table>

    <br>
-->

    </div>

 
</body>
</html>
