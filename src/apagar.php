<?php	
      session_start();
      include_once("conexao.php");
      $id= $_GET["id"];

      $sql = "delete from dados where id= '$id' ";

      if (mysqli_query($conn, $sql)) {
            echo "<script>
            alert('Apagado com Sucesso!');
            window.location.href='lista.php';
            </script>";
      } else {
            echo "<script>
            alert('Erro ao apagar!');
            window.location.href='lista.php';
            </script>";
      }     
?>