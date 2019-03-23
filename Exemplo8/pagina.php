<!DOCTYPE html>
<html>
  <head>
    <?php
      session_start();
      if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
      {
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        header('location:login.php');
      }
      
      $logado = $_SESSION['login'];
    ?>
    <meta charset="utf-8">
    <title>SISTEMA WEB</title>
  </head>
  
  <body>
    <?php
      echo" Bem vindo $logado"."<br>";
    ?>
    <?php
      print_r($_SESSION);
    ?>
    <br>
    <a href="logout.php"><button>Sair</button></a>
  </body>
</html>