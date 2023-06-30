<?php
	include_once("conexao.php");
	$nome_usuario = $_POST['nome'];
	$email_usuario = $_POST['email'];
	
	
	$result_usuario = "INSERT INTO usuarios(nome, email) VALUES ('$nome_usuario','$email_usuario')";
	$resultado_usuario = mysqli_query($conn, $result_usuario);

	
	
	if(mysqli_affected_rows($conn) != 0){
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/php01/index.php'>
			<script type=\"text/javascript\">
				alert(\"Usuario cadastrado com Sucesso.\");
			</script>
		";	
	}else{
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/php01/index.php'>
			<script type=\"text/javascript\">
				alert(\"O Usuario não foi cadastrado com Sucesso.\");
			</script>
		";	
	}
?>