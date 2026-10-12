<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/visu_cadastro.css">
</head>
<body>
    <form action="controllers/controller_login_user.php" method="POST">
        <label class="email" for="email">E-mail:</label>
        <input type="email" name="email" id="email" placeholder="Digite seu e-mail..." required>

        <label class="password" for="password">Senha:</label>
        <input type="password" name="senha" id="senha" placeholder="Digite sua senha..." required>

        <div class="as">
            <a class="not">Não tem conta?</a>
            <a href="views/visu_cadastro.php" class="cria">Criar conta</a>
        </div>
        
        <button type="submit" class="bnt">Entrar</button>
        <?php
        session_start();

        if (isset($_SESSION['erro_login'])):
        ?>

            <div class="aviso-erro" id="avisoErro">
                <span class="icone-erro">!</span>

                <span>
                    <?= htmlspecialchars($_SESSION['erro_login']) ?>
                </span>

                <button type="button"
                        onclick="fecharAviso()"
                        aria-label="Fechar aviso">
                    &times;
                </button>
            </div>

            <?php unset($_SESSION['erro_login']); ?>

        <?php endif; ?>
    </form>
    
    <script>
        function fecharAviso() {
            const aviso = document.getElementById("avisoErro");

            if (aviso) {
                aviso.remove();
            }
        }

        const aviso = document.getElementById("avisoErro");

        if (aviso) {
            setTimeout(() => {
                aviso.remove();
            }, 4000);
        }
    </script>
</body>
</html>