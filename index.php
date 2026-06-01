<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>AnuncIO</title>
</head>
<body>

    <main>

        <form method="post" action="server/login.php" class="login-form">
            <div class="logo">
                <div class="icon"><i class="bi bi-megaphone"></i></div>
                Anunc<span>IO</span>
            </div>

            <div class="field">
                <div class="icon"><i class="bi bi-person"></i></div>
                <input type="text" name="usuario" id="usuario" placeholder="Usuário" required>
            </div>
            <div class="field">
                <div class="icon"><i class="bi bi-lock"></i></div>
                <input type="password" name="senha" id="senha" placeholder="Senha" required>
            </div>

            <input type="submit" value="Entrar">

            <p class="register">Ainda não possui cadastro? <a href="#">Registre-se</a></p>
        </form><!-- FORMULÁRIO DE LOGIN -->

    </main>    

</body>
</html>