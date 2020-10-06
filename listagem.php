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
    <table>
         
        <tr id ="titulo">
            <td>id_cadastro</td>
            <td>Nome</td>
            <td>CPF</td>
            <td>Estado</td>
            <td>Telefone</td>
            <td>Endereço</td>
            <td><a id = "a-list" href ="update.php">Editar</a><a id = "a-list" href="delete.php">Excluir</a></td>
            
        </tr>
      
        <?php
        
        require('conexao.inc.php');
        $resultado = mysqli_query($conexao,"SELECT * from cadastro");
        while($linha = mysqli_fetch_assoc($resultado)){

        echo "<br><br><tr>
        <th>{$linha['id_cadastro']}</th>
        <th>{$linha['nome']}</th>
        <th>{$linha['cpf']}</th>
        <th>{$linha['estado']}</th>
        <th>{$linha['telefone']}</th>
        <th>{$linha['endereco']}</th>
        <th>";
        }
   
        ?>

</table>
<a id = "retorna-cadastro" href ="areaPrivada.php"><strong>Clique e retorne ao cadastro de informações...</strong></a>
</head>
</body>
</html>