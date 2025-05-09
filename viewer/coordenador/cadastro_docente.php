<div id="novo_cadastro"> <!--Contêiner principal, onde fica todos os elementos necessários para novo cadastro de usuário -->
    <button class="cancelar_cadastro"><i class="bi bi-box-arrow-right"></i> Calcelar</button>
    <img id="Logo_SIRUS" src="imagens/Logo_SIRUS.png" alt="logo SIRUS"> <!--Logotipo-->
    <h1 class="titulo-novo-cadastro">Cadastro do docente</h1>
    <p class="subtitulo-novo-cadastro">Informações cadastrais do docente</p>
    <!--======================
        FORMULÁRIO DO DOCENTE
        ======================-->
    <form id="campos_docente" class="campos">
        <!--Campos de input do docente-->
        <div class="input_group">
            <label for="CPF_docente">CPF</label>
            <input class="input_box" type="text" id="CPF_docente" name="CPF_docente" required>
        </div>

        <div class="input_group">
            <label for="estado_docente">Estado</label>
            <select class="input_box" id="estado_docente" name="estado_docente" required>
                <option value="" selected disabled></option>
                <option value="1">Ativo</option>
                <option value="0">Inativo</option>
            </select>
        </div>

        <div class="input_group grupo_nome">
            <label for="nome_docente">Nome</label>
            <input class="input_box" type="text" id="nome_docente" name="nome_docente" required>
        </div>

        <div class="input_group grupo_email">
            <label for="email_docente">E-mail</label>
            <input class="input_box" type="email" id="email_docente" name="email_docente" required>
        </div>

        <div class="input_group grupo_senha">
            <label for="senha_docente">Senha</label>
            <input class="input_box senha" type="password" id="senha_docente" name="senha_docente" required>
        </div>

        <div class="input_group grupo_senha">
            <label for="confirmar_senhadoc">Repetir senha</label>
            <input class="input_box senha" type="password" id="confirmar_senhadoc" name="senha_docente" required>
        </div>
        
        <!--Checkbox de visualizar senha-->
        <div class="visualizar_senha">
            <input type="checkbox" class="visualizar_btn" id="visualizar_senhadoc">
            <label for="visualizar_senhadoc">Visualizar senha</label>
        </div>
        <p class="pass-info">*A senha deve possuir no mínimo 8 caracteres alpha-numéricos e especiais. </p>
        <!--Botão de cadastrar docente-->
        <button id="cadastrar_docente" class="cadastrar_btn" type="submit">Cadastrar</button>
    </form>
</div>