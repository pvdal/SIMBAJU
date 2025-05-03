<div id="novo_cadastro"> <!--Contêiner principal, onde fica todos os elementos necessários para novo cadastro de usuário -->
    <button class="cancelar_cadastro"><i class="bi bi-box-arrow-right"></i> Calcelar</button>
    <img id="Logo_SIRUS" src="imagens/Logo_SIRUS.png" alt="logo SIRUS"> <!--Logotipo-->
    <h1 class="titulo-novo-cadastro">Cadastro do coordenador</h1>
    <p class="subtitulo-novo-cadastro">Informações cadastrais do coordenador</p>
    <!--======================
        FORMULÁRIO DO COORDENADOR
        ======================-->
    <form id="campos_coordenador" class="campos">
        <!--Campos de input do docente-->
        <div class="input_group">
            <label for="CPF_coordenador">CPF</label>
            <input class="input_box" type="text" id="CPF_coordenador" name="CPF_coordenador" required>
        </div>

        <div class="input_group">
            <label for="estado_coordenador">Estado</label>
            <select class="input_box" id="estado_coordenador" name="estado_coordenador" required>
                <option value="1">Ativo</option>
                <option value="0">Inativo</option>
            </select>
        </div>

        <div class="input_group grupo_nome">
            <label for="nome_coordenador">Nome</label>
            <input class="input_box" type="text" id="nome_coordenador" name="nome_coordenador" required>
        </div>

        <div class="input_group grupo_email">
            <label for="email_coordenador">E-mail</label>
            <input class="input_box" type="email" id="email_coordenador" name="email_coordenador" required>
        </div>

        <div class="input_group grupo_senha">
            <label for="senha_coordenador">Senha</label>
            <input class="input_box senha" type="password" id="senha_coordenador" name="senha_coordenador" required>
        </div>

        <div class="input_group grupo_senha">
            <label for="confirmar_senhacoord">Repetir senha</label>
            <input class="input_box senha" type="password" id="confirmar_senhacoord" name="senha_coordenador" required>
        </div>
        
        <!--Checkbox de visualizar senha-->
        <div class="visualizar_senha">
            <input type="checkbox" class="visualizar_btn" id="visualizar_senhacoord">
            <label for="visualizar_senhacoord">Visualizar senha</label>
        </div>
        <p class="pass-info">*A senha deve possuir no mínimo 8 caracteres alpha-numéricos e especiais. </p>
        <!--Botão de cadastrar docente-->
        <button id="cadastrar_coordenador" class="cadastrar_btn" type="submit">Cadastrar</button>
    </form>
</div>