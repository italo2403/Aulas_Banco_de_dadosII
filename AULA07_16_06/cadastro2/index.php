<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
<link rel="stylesheet" href="style2.css">
    
    <title>Cadastro</title>
</head>
<body>
    <h1 class="cont">Faça seu cadastro</h1>
<form action="processar_cadastro.php" method="POST" class="forms">
        <label for="username">Nome de usuário</label>
        <input type="text" name="logi" id="login">
        <label for="password">Senha</label>
        <input type="password" name="senha" id="senha">
        <button class="bnt">Cadastrar</button>
    </form>

    
</body>
</html>
