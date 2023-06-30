<?php
	include_once("conexao.php");

	
	if(isset($_GET['id']) && $_GET['id'] != ''){
        $id = $_GET['id'];
        $result_usuario = "SELECT nome FROM usuarios WHERE id=$id";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
    }
	
	if(isset($_POST['exclui']) && $_POST['exclui'] == 'exclui_usuario'){
        $id = $_POST['id'];
        
    
        if(isset($_POST['excluir']) && $_POST['excluir'] == 'SIM'){
            $sql = "DELETE FROM usuarios WHERE id='$id'";
    
            
            if(mysqli_query($conn,$sql)){
                header('Location:usuarios.php');
            }
            else{
                echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
            } 
        }  
        else{
            header('Location:usuarios.php');
        }
    }
    
	
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão de Usuários</title>
</head>
<body>
    <p>
        Você confirma a exclusão do usuário:
        <?php echo $resultado['nome'] ?>
    </p>
        <form action="" method="post">
            <input type="hidden" name="exclui" value="exclui_usuario">
            <input type="hidden" name="id" value="<?php echo $id ?>">

            <input type="submit" name="excluir" value="SIM">
            <input type="submit" name="excluir" value="NÃO">
        </form>
</body>
</html>