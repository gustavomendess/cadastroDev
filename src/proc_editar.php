<?php	
	  session_start();
      include_once("conexao.php");
	  
      $nome = $_POST ['nome'];
      $cpf = $_POST ['cpf'];
      $rg = $_POST ['rg'];
      $email = $_POST ['email'];
      $telefone = $_POST ['telefone'];
      $cidade = $_POST ['cidade'];  
      $id = $_POST['id'];

      $sql = "update dados SET nome= '$nome', cpf= '$cpf', rg= '$rg', email= '$email', telefone= '$telefone', cidade= '$cidade' where id = '$id'";
      
      if (mysqli_query($conn, $sql)) {
            echo "<script>
            alert('Dados atualizados com sucesso!');
            window.location.href='index.php';
            </script>";
      } else {
            echo "<script>
            alert('Erro ao atualizar os dados!');
            window.location.href='editar.php';
            </script>";
      }
      mysqli_close($conn);
?>