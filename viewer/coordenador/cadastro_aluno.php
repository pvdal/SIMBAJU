<div id="novo_cadastro"> <!--Contêiner principal, onde fica todos os elementos necessários para novo cadastro de usuário -->
    <button class="cancelar_cadastro"><i class="bi bi-box-arrow-right"></i> Calcelar</button>
    <img id="Logo_SIRUS" src="imagens/Logo_SIRUS.png" alt="logo SIRUS"> <!--Logotipo-->
    <h1 class="titulo-novo-cadastro">Cadastro do aluno</h1>
    <p class="subtitulo-novo-cadastro">Informações cadastrais do aluno</p>
    <!--======================
        FORMULÁRIO DO ALUNO
        ======================-->
    <form id="campos_aluno" class="campos">
        <!--Campos de input do aluno-->
        <div class="input_group">
            <label for="RA_aluno">RA</label>
            <input class="input_box" type="number" id="RA_aluno" name="RA_aluno" required>
        </div>
            
        <div class="input_group" id="grupo_curso">
            <label for="curso_aluno">Curso</label>
            <input class="input_box" type="text" id="curso_aluno" name="curso_aluno" required>
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
            <label for="semestre_aluno">Semestre</label>
            <select id="semestre_aluno" class="input_box" name="semestre_aluno" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </div>

        <div class="input_group">
            <label for="estado_aluno">Estado</label>
            <select id="estado_aluno" class="input_box" name="estado_aluno" required>
                <option value="1">Ativo</option>
                <option value="0">Inativo</option>
            </select>
        </div>
        
        <div class="input_group grupo_senha">
            <label for="senha_aluno">Senha</label>
            <input class="input_box senha" type="password" id="senha_aluno" name="senha_aluno" required>
        </div>

        <div class="input_group grupo_senha">
            <label for="confirmar_senhaal">Repetir senha</label>
            <input class="input_box senha" type="password" id="confirmar_senhaal" name="senha_aluno" required>
        </div>
        
        <!--Checkbox de visualizar senha-->
        <div class="visualizar_senha">
            <input type="checkbox" class="visualizar_btn" id="visualizar_senhaal">
            <label for="visualizar_senhaal">Visualizar senha</label>
        </div>
        <p class="pass-info">*A senha deve possuir no mínimo 8 caracteres alpha-numéricos, e especiais. </p>
        <!--Botão de cadastrar aluno-->
        <button id="cadastrar_aluno" class="cadastrar_btn" type="submit">Cadastrar</button>
    </form>
</div>