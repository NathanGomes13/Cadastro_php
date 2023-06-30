<?php
	include_once("conexao.php");
	
	$result_usuario = "SELECT * FROM usuarios";
	$resultado_usuario = mysqli_query($conn, $result_usuario);	
    $linha = mysqli_fetch_assoc($resultado_usuario);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de usuários</title>
</head>
<body>
<div id=tabela>
    <table border="1px" cellpadding="6px" cellspacing="0">
       
        <tr>
            <th>ID</th>
            <th>USUÁRIO</th>
            <th>EMAIL</th>
            <th colspan="2">SELECIONE</th>
        </tr>
        
        <?php do { ?>

        <tr>
            <td><?php echo $linha['id'] ?></td>
            <td><?php echo $linha['nome'] ?></td>
            <td><?php echo $linha['email'] ?></td>
            <td><a href="alterar.php?id=<?php echo $linha['id'] ?>">Alterar</a></td>
            <td><a href="excluir.php?id=<?php echo $linha['id'] ?>">Excluir</a></td>
        </tr>

        <!-- Retorna uma matriz associativa que corresponde a linha obtida, ou null se não houverem mais linhas. -->
        <?php } while($linha =  mysqli_fetch_assoc($resultado_usuario)); ?> 

    </table>
    <br>
    <button><a href="index.php">Inserir novo</a></button>
   
</div>
    
</body>
</html>

