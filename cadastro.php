<?php 

$Nome = $_POST['Nome']; 
$Telefone = $_POST['Telefone'];
$Email = $_POST['Email'];
$senha = MD5($_POST['senha']);
$connect = mysql_connect('nome_do_servidor','nome_de_usuario','senha');
$db = mysql_select_db('nome_do_banco_de_dados');
$query_select = "SELECT Email FROM usuarios WHERE Email = '$Email'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['Email'];
 
  if($Email == "" || $Email == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo login deve ser preenchido');window.location.href='
    cadastro.html';</script>";
 
    }else{
      if($logarray == $Email){
 
        echo"<script language='javascript' type='text/javascript'>
        alert('Esse login já existe');window.location.href='
        cadastro.html';</script>";
        die();
 
      }else{
        $query = "INSERT INTO usuarios (Nome, Telefone, Email,senha) VALUES ('$Nome', '$Telefone', '$Email','$senha')";
        $insert = mysql_query($query,$connect);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='login.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário');window.location
          .href='cadastro.html'</script>";
        }
      }
    }
?>