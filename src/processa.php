<?php	
      header ('Content-type: text/html; charset=UTF-8'); 
      include_once("conexao.php");
      
      $nome = $_POST ['nome'];
      $cpf = $_POST ['cpf'];
      $rg = $_POST ['rg'];
      $email = $_POST ['email'];
      $telefone = $_POST ['telefone'];
      $cidade = $_POST ['cidade'];  

      $sql = "INSERT INTO dados(nome, cpf, rg, email, telefone, cidade, criada) VALUES ('$nome', '$cpf', '$rg', '$email', '$telefone', '$cidade', NOW() )" ;
	 
      if (mysqli_query($conn, $sql)) {
            echo "<script>
            alert('Desenvolvedor cadastrado com sucesso!');
            window.location.href='index.php';
            </script>";
      } else {
            echo "<script>
            alert('Erro no cadastro!');
            window.location.href='index.php';
            </script>";
      }

      mysqli_close($conn);
?>