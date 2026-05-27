<!DOCTYPE html>
<html lang="pt-br">
 <head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="style.css"> <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <title>Painel de Administração</title>
 <style> body, h1, h2, h3, h4, h5, h6 { font-family: “Montserrat”, sans-serif }
</style>
 </head>
 <body class=”w3-light-grey”>
    <?php
    include_once '../Controller/Navegacao.php';
if(!isset($_SESSION))
{
session_start();
}
?>
<div class="w3-content" style="max-width:1200px">

    <!-- CABEÇALHO -->
    <header class="w3-container w3-padding-32 w3-center" id="home">

        <h1 class="w3-text-white w3-panel w3-cyan w3-round-large">
            ADMINISTRAÇÃO
        </h1>

        <h2 class="w3-text-white w3-panel w3-cyan w3-round-large">
            SISTEMA DE CURRÍCULOS
        </h2>

    </header>


    <!-- ========================================CARDS======================================================== -->
    <div class="w3-row-padding w3-margin-top">

        <!-- ========================================CARD USUÁRIOS=========================== -->
        <div class="w3-third">

            <form action="../Controller/Navegacao.php"
            method="post"
            class="w3-center">

                <input type="hidden"
                name="nome_form"
                value="frmLoginADM" />

                <button name="btnListarCadastrados"

                class="w3-button
                w3-white
                w3-card-4
                w3-round-large
                w3-padding-32
                w3-hover-cyan"

                style="width:100%;">

                    <i class="fa fa-address-book-o w3-xxxlarge"></i>

                    <p class="w3-xlarge">
                        Usuários<br>
                        Cadastrados
                    </p>

                </button>

            </form>

        </div>



        <!-- ===================================CARD Administradores============================== -->
        <div class="w3-third">

            <form action="../Controller/Navegacao.php"
            method="post"
            class="w3-center">

                <input type="hidden"
                name="nome_form"
                value="frmLoginADM" />

                <button name="btnListarADM"

                class="w3-button
                w3-white
                w3-card-4
                w3-round-large
                w3-padding-32
                w3-hover-cyan"

                style="width:100%;">

                    <i class="fa fa-address-book-o w3-xxxlarge"></i>

                    <p class="w3-xlarge">
                        Administradores<br>
                        Cadastrados
                    </p>

                </button>

            </form>

        </div>

    </div>

</div>

</body>
</html>