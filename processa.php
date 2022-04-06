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
      <?php

         $nome = $_POST['nome'];
         $cpf = $_POST['cpf'];
         $dataNascimento = $_POST['dataNascimento'];
         $senha = $_POST['senha'];
         $confirmarSenha = $_POST['ConfirmarSenha'];
         
         echo"<p><strong style=\"color:white\">Nome: ".$nome."</strong></p>";
         echo"<p><strong style=\"color:white\">CPF: ".$cpf."</strong></p>";
         echo"<p><strong style=\"color:white\">Data Nascimento: ".$dataNascimento."</strong></p>";

         if(empty($nome)){
         header("location:index.php?erro=nome");
         }
         if(empty($cpf)){
         header("location:index.php?erro=cpf");
         }
         if(empty($dataNascimento)){
         header("location:index.php?erro=dataNascimento");
         }

         if(strlen($senha)< 6){
            header("location:index.php?erro=senha");
         }
         if(strlen($confirmarSenha)< 6){
            header("location:index.php?erro=ConfirmarSenha");
         }

         //upload
         $tmp = $_FILES['arquivo']['tmp_name'];
         $pastaDeArquivo = "Arquivo/".$_FILES['arquivo']['name'];
         $upload = (int) move_uploaded_file($tmp, $pastaDeArquivo);
         if($upload == 1)
         {
            echo"<span style=\"color:blue\">Upload efetuado com sucesso!</span>";
         }
         else
         {
            echo"<span style=\"color:red\">Erro</span>";
         }

      ?>

   </div>
   
</body>
</html>