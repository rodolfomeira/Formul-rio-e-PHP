<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="container">

    <div class="containerForm">
        <div class="imgForm">
            <img src="./mobile.svg" alt="Sign in">
        </div>
        <form action="processa.php" method="post" enctype="multipart/form-data" class="containerForm1">
            <div class="containerForm2">
                <div class="formLabel">
                    <label>Nome:</label>
                    <input class="input" type="text" id="nome" name="nome"/>
                    <?php
                        if(isset($_GET['erro']) && ($_GET['erro']) == "nome"){
                            echo "<script>alert('Por favor informar o nome do usuário')</script>";
                            echo"<span style=\"color:red\">*</span>";
                        }
                    ?> 
                </div>
                <div class="formLabel">
                    <label>CPF:</label>
                    <input class="input" type="text" id="cpf" name="cpf"/>
                    <?php
                        if(isset($_GET['erro']) && ($_GET['erro']) == "cpf"){
                            echo "<script>alert('Por favor informar o CPF')</script>";
                            echo"<span style=\"color:red\">*</span>";
                        }
                    ?>                   
                </div>
                <div class="formLabel">
                    <label>Data de Nascimento:</label>
                    <input class="input" type="text" id="dataNascimento" name="dataNascimento"/>
                    <?php
                        if(isset($_GET['erro']) && ($_GET['erro']) == "dataNascimento"){
                            echo "<script>alert('Por favor informar o Data de Nascimento')</script>";
                            echo"<span style=\"color:red\">*</span>";
                        }
                    ?>           
                </div>
                <div class="formLabel">
                    <label for="x">Cadastrar Senha:</label>
                    <input class="input" type="password" id="" name="senha" />
                    <?php
                        if(isset($_GET['erro']) && ($_GET['erro']) == "senha"){
                            echo "<script>alert('A senha tem que ter no mínimo 6 dígitos')</script>";
                            echo"<span style=\"color:red\">*</span>";
                        }
                    ?>           
                </div>
                <div class="formLabel">
                    <label for="x">Confirmar Senha:</label>
                    <input class="input" type="password" id="" name="ConfirmarSenha" />
                    <?php
                        if(isset($_GET['erro']) && ($_GET['erro']) == "ConfirmarSenha"){
                            echo "<script>alert('A senha tem que ter no mínimo 6 dígitos')</script>";
                            echo"<span style=\"color:red\">*</span>";
                        }
                    ?>
                </div>
            </div>            
            <div class="container-botao">
                <input class="botao" type="submit" value="Cadastro"/>
            </div>

            <div>
                <label>Upload arquivo</label>
                <input type="file" name="arquivo"/>
            </div>
        </form>
    </div>
    
<?php

?>
</body>
</html>