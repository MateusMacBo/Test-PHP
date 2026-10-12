<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../css/visu_cadastro.css">
</head>
<body>
    <form action="../controllers/controller_cadastro_user.php" method="POST">
        <label class="nome" for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome..." required>
        
        <label class="email" for="email">E-mail:</label>
        <input type="email" name="email" id="email" placeholder="Digite seu e-mail..." required>

        <label class="password" for="password">Senha:</label>
        <input type="password" name="senha" id="senha" placeholder="Digite uma senha..." required>

        <div class="as">
            <a class="not">Já tem conta?</a>
            <a href=".." class="cria">Fazer Login</a>
        </div>
        
        <button type="submit" class="bnt">Cadastrar</button>
    </form>
</body>
</html>