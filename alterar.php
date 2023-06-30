<?php
	include_once("conexao.php");

	
	if(isset($_GET['id']) && $_GET['id'] != ''){
        $id = $_GET['id'];
        $result_usuario = "SELECT * FROM usuarios WHERE id=$id";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
    }
	
	if(isset($_POST['altera']) && $_POST['altera'] == 'altera_usuario'){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        
        $sql = "UPDATE usuarios SET nome='$nome', email='$email' WHERE id='$id'";
        if(mysqli_query($conn,$sql)){
            header('Location:usuarios.php');
        }
        else{
            echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
        } 
    }
    
	
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Usuários</title>
</head>
<body>
        <form action="" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" value="<?php echo $resultado['nome'] ?>">
            <br>
            <label for="email">Email</label>
            <input type="text" name="email" value="<?php echo $resultado['email'] ?>">
            <br>
            <br>
            
            <input type="hidden" name="altera" value="altera_usuario">
            <input type="hidden" name="id" value="<?php echo $id ?>">

            <input type="submit" name="alterar" value="alterar">
        </form>
</body>
</html>