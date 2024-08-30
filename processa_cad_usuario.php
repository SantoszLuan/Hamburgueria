<?php
    include_once("conexao.php");
    $nome_usuario = $_POST['Nome'];
    $tel_usuario = $_POST['Telefone'];
    $email_usuario = $_POST['Email'];
    $senha_usuario = $_POST['Senha'];
    //echo "$nome_usuario - $email_usuario";
    
    $result_usuario = "INSERT INTO usuarios(Nome, Telefone, Email, Senha) VALUES ('$nome_usuario', '$tel_usuario', $email_usuario', 'senha_usuario')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
    if(mysqli_affected_rows($conn) != 0){
                echo "
                    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/hamburguer/cadastro.php'>
                    <script type="text/javascript">
                        alert("Usuario cadastrado com Sucesso.");
                    </script>
                ";    
            }else{
                echo "
                    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/hamburguer/cadastro.php'>
                    <script type="text/javascript">
                        alert("O Usuario não foi cadastrado com Sucesso.");
                    </script>
                ";    
            }
?>