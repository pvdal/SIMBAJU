<div id="novo_cadastro"> <!--Contêiner principal, onde fica todos os elementos necessários para novo cadastro de usuário -->
    <button class="cancelar_cadastro"><i class="bi bi-box-arrow-right"></i> Calcelar</button>
    <img id="Logo_SIRUS" src="imagens/Logo_SIRUS.png" alt="logo SIRUS"> <!--Logotipo-->
    <div id="selecionar_usuario"> <!--Alterna entre os campos de cadastro de aluno e usuário-->
        <button class="tipo_usuario" id="aluno_btn"> <!--Botão do aluno-->
            <p>Cadastrar aluno</p>
        </button>
        <button class="tipo_usuario" id="docente_btn"> <!--Botão do docente-->
            <p>Cadastrar docente</p>
        </button>
    </div>

    <!--======================
        FORMULÁRIO DO ALUNO
        ======================-->
    <form id="campos_aluno" class="campos">
        <!--Campos de input do aluno-->
        <div class="input_group">
            <label for="RA">RA</label>
            <input class="input_box" type="number" id="RA" name="RA" required>
        </div>
            
        <div class="input_group" id="grupo_curso">
            <label for="curso">Curso</label>
            <input class="input_box" type="text" id="curso" name="curso" required>
        </div>
        
        <div class="input_group grupo_nome">
            <label for="nome_aluno">Nome</label>
            <input class="input_box" type="text" id="nome_aluno" name="nome_aluno" required>
        </div>

        <div class="input_group grupo_email">
            <label for="email_aluno">E-mail</label>
            <input class="input_box" type="email" id="email_aluno" name="email_aluno" required>
        </div>

        <div class="input_group">
            <label for="semestre">Semestre</label>
            <input class="input_box" type="number" id="semestre" name="semestre" required>
        </div>
        
        <div class="input_group grupo_senhaal">
            <label for="senha_aluno">Senha</label>
            <input class="input_box" type="password" id="senha_aluno" name="senha_aluno" required>
        </div>

        <div class="input_group grupo_senhaal">
            <label for="confirmar_senhaal">Repetir senha</label>
            <input class="input_box" type="password" id="confirmar_senhaal" name="confirmar_senhaal" required>
        </div>
        
        <!--Checkbox de visualizar senha-->
        <div class="visualizar_senha">
            <input type="checkbox" id="visualizar_senhaal">
            <label for="visualizar_senhaal">Visualizar senha</label>
        </div>

        <!--Botão de cadastrar aluno-->
        <button id="cadastrar_aluno" class="cadastrar_btn" type="submit">Cadastrar</button>
    </form>

    <!--======================
        FORMULÁRIO DO DOCENTE
        ======================-->
    <form id="campos_docente" class="campos">
        <div class="input_group">
            <label for="CPF">CPF</label>
            <input class="input_box" type="text" id="CPF" name="CPF" required>
        </div>

        <div class="input_group grupo_nome">
            <label for="nome_docente">Nome</label>
            <input class="input_box" type="text" id="nome_docente" name="nome_docente" required>
        </div>

        <div class="input_group grupo_email">
            <label for="email_docente">E-mail</label>
            <input class="input_box" type="email" id="email_docente" name="email_docente" required>
        </div>

        <div class="input_group grupo_senhadoc">
            <label for="senha_docente">Senha</label>
            <input class="input_box" type="password" id="senha_docente" name="senha" required>
        </div>

        <div class="input_group grupo_senhadoc">
            <label for="confirmar_senhadoc">Repetir senha</label>
            <input class="input_box" type="password" id="confirmar_senhadoc" name="confirmar_senhadoc" required>
        </div>
        
        <!--Checkbox de visualizar senha-->
        <div class="visualizar_senha">
            <input type="checkbox" id="visualizar_senhadoc">
            <label for="visualizar_senhadoc">Visualizar senha</label>
        </div>

        <label id="tipo_docente">Tipo de docente:</label>
        <div id="selecionar_docente">
            <div class="radio_item">
                <input type="radio" class="radio_item" id="tipo_professor" name="tipo_docente" value="professor" required>
                <label for="tipo_professor">Professor</label>
            </div>
            
            <div class="radio_item">
                <input type="radio" class="radio_item" id="tipo_coordenador" name="tipo_docente" value="coordenador">
                <label for="tipo_coordenador">Coordenador</label>
            </div>
        </div>
        <!--Botão de cadastrar docente-->
        <button id="cadastrar_docente" class="cadastrar_btn" type="submit">Cadastrar</button>
    </form>
</div>

