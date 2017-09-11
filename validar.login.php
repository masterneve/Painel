<?php 
 include '../model/conexao.php';
 session_start();
 
 $username = $_POST['username'];
 $pass     = $_POST['pass'];
 
     if($username == 'admin'){
       $_SESSION['username'] = $username;
       header("location:admin.php");
       }
      else{
         $_SESSION['username'] = $username;
         header("location:user.panel.php");
        }
           
?>