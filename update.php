<?php
 require_once 'CLASSES/usuarios.php';
 $u = new Usuario;

?>
<html lang="pt-br">
<head>
<body>
    <meta charset="utf-8"/>
    <title>Listagem de Cadastros</title>
    <link rel="stylesheet"  href="CSS/estilos.css">


    <?php
    //$novo_usuario = $_POST['nome'];
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "login";

    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    $nome_usuario = "cristiano";
    $result_usuario = "UPDATE cadastro SET  nome = '$nome_usuario' WHERE id_cadastro = 19";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
    ?>

</head>
</body>
</html>
