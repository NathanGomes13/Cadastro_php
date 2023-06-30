<!DOCTYPE html>
<html>
	<head>
		<title> Cadastro</title>


		<!-- Função em javascript para validar cadastro	 -->
		<script type="text/javascript">
            function validar_form(){
                var nome = form_cadastro.nome.value;
                var email = form_cadastro.email.value;
                if(nome == ""){
                    alert ("Campo nome obrigatório");
                    form_cadastro.nome.focus();
                    return false;
                }
                if(email == ""){
                    alert ("Campo email obrigatório");
                    form_cadastro.email.focus();
                    return false;
                }
                
                if(form_cadastro.email.value.indexOf("@") == -1 ||
                form_cadastro.email.valueOf.indexOf(".") == -1 ||
                form_cadastro.email.value == "" ||
                form_cadastro.email.value == null) {
                alert("Por favor, indique um e-mail válido.");
                form_cadastro.email.focus();
                return false;
            }
        }
    </script> 
    <!-- Fim da função -->
        <link rel="stylesheet" href="style.css">
	</head>
	<body>
        <div class="container">
            <form name="form_cadastro" method="POST" action="cadastro.php">
                <div class="input">
                    <input class="write" type="text" name="nome" placeholder="Digite o nome completo">
                    <label for="nome">Nome</label>
                </div>
                
                <div class="input">
                    <input class="write" type="email" name="email" placeholder="Digite o email">
                    <label for="email">Email</label>
                </div>
                
                <input class="submit" type="submit" value="Cadastrar" onclick="return validar_form()">
            </form><br>
		
            <div style="text-align: center;" class="center">
                <br><br>
                <button style="max-width: 250px;" class="submit"><a href="usuarios.php">Listar usuários</a></button>

            </div>

        </div>

	</body>
</html>

