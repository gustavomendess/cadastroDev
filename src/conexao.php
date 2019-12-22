<?php
    $servername = "localhost";
    $database = "cadastros";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);
    mysqli_set_charset($conn,"utf8");

    if (!$conn) {
        echo "<script>
            alert('Conexão falhou!');
            window.location.href='index.php';
            </script>";
    }
?>
