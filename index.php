<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style_login.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div id="cabeçalho">
        <img id="Logo_FATEC" src="imagens/logo_FATEC.svg" alt="Logo_FATEC">
        <img id="Logo_CPS" src="imagens/Logo_CPS.png" alt="Logo_CPS">
        <img id="Logotipo_SIRUS" src="imagens/Logotipo_SIRUS.png" alt="logo SIRUS">
    </div>
    
    <div id="login">
        <img id="Logo_SIRUS" src="imagens/Logo_SIRUS.png" alt="logo SIRUS">
        <h1 id="titulo">Entrar</h1>
        <p>Insira suas credenciais</p>

        <div class="input_group">
            <label for="usuario">Usuário</label>
            <input class="input_box" id="usuario" name="usuario" type="text" placeholder="Digite seu usuário">
        </div>
    
        <div class="input_group">
            <label for="senha" style="margin-left: 5px;">Senha</label>
            <div id="input_senha">
                <input class="input_box" id="senha" name="senha" type="password" placeholder="Digite sua senha">
                <button type="button" id="visualizar_senha" onclick="togglePasswordVisibility()">
                    <i id="icone_olho" class="bi bi-eye-fill"></i>
                </button>
            </div>
            
        </div>
        
        <a href="esqueciasenha.html" id="esqueci_senha">Esqueci a senha</a>

        <button id="botao" onclick="entrar()">Entrar</button> <!-- A função entrar() será escrita com o javascript para definir o nível de acesso-->
    </div>
    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('senha');
            const eyeIcon = document.getElementById('icone_olho');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('bi-eye-fill');
                eyeIcon.classList.add('bi-eye-slash-fill');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('bi-eye-slash-fill');
                eyeIcon.classList.add('bi-eye-fill');
            }
        }
    </script>
</body>
</html>