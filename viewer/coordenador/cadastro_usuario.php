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

<script>
    document.addEventListener("DOMContentLoaded", function () {
    // Constantes de alterar campos de usuário
    const aluno_btn = document.getElementById("aluno_btn"); //Botão aluno
    const campos_aluno = document.getElementById("campos_aluno");
    const docente_btn = document.getElementById("docente_btn"); //Botão docente
    const campos_docente = document.getElementById("campos_docente");
    // Constantes de visualizar senha
    const senha_aluno = document.getElementById('senha_aluno'); //Aluno
    const confirmar_senhaal = document.getElementById('confirmar_senhaal');
    const visualizar_senhaal = document.getElementById('visualizar_senhaal');
    const senha_docente = document.getElementById('senha_docente'); //Docente
    const confirmar_senhadoc = document.getElementById('confirmar_senhadoc');
    const visualizar_senhadoc = document.getElementById('visualizar_senhadoc');

    
    /*
    Função para mostrar os campos do aluno e ocultar os do docente.
    Também altera o foco dos botões de tipo de usuário.
    */
    aluno_btn.addEventListener("click", visualizarCamposal);
    function visualizarCamposal(){
        campos_aluno.style.display = "grid";
        campos_docente.style.display = "none";

        aluno_btn.classList.add('focus');
        docente_btn.classList.remove('focus');
    }
        
    /*
    Função para mostrar os campos do docente e ocultar os do aluno.
    Também altera o foco dos botões de tipo de usuário.
    */
    docente_btn.addEventListener("click", visualizarCamposdoc);
    function visualizarCamposdoc(){
        campos_docente.style.display = "grid";
        campos_aluno.style.display = "none";

        aluno_btn.classList.remove('focus');
        docente_btn.classList.add('focus');
    }

    /*
    Função anônima que garante que o botão "aluno" receba "focus" no carregamento inicial da página.
    Isso é importante porque são os campos do aluno que aparecerão inicialmente, e quando um campo está 
    ativo, o respectivo botão deve estar em "focus". Também torna visível campos_aluno e não visível
    campos_docente
    */
    window.onload = function (){
        campos_aluno.style.display = "grid";
        campos_docente.style.display = "none";

        aluno_btn.classList.add('focus');
    }
    // Função para visualizar a senha do aluno
    visualizar_senhaal.addEventListener("click", visualizarSenhaal);
    function visualizarSenhaal(){
        if(visualizar_senhaal.checked){ //Se a checkbox estiver marcada, os campos de senha e confirmar senha serão exibidos
            senha_aluno.type = "text";
            confirmar_senhaal.type = "text";
        } else { //Se a checkbox não estiver marcada, os campos de senha e confirmar senha serão ocultados
            senha_aluno.type = "password";
            confirmar_senhaal.type = "password";
        }
    }
    // Função para visualizar a senha do docente
    visualizar_senhadoc.addEventListener("click", visualizarSenhadoc);
    function visualizarSenhadoc(){
        if(visualizar_senhadoc.checked){ // Caso a checkbox de visualizar a senha do docente esteja marcada,
            senha_docente.type = "text"; // O type altera para text para tornar visível,
            confirmar_senhadoc.type = "text";
        } else {
            senha_docente.type = "password"; // caso contrário o type altera para password para tornar invisível
            confirmar_senhadoc.type = "password";
        }
    }

    //JS do elemento sobreposto

    document.querySelectorAll('.showOverlay').forEach(btn => {
        btn.addEventListener('click', () => {
            const abaAtiva = btn.closest('.tab-content.active');
    
            // Verificar o valor de abaAtiva
            console.log(abaAtiva);
    
            if (!abaAtiva) return;
                
            const overlay = abaAtiva.querySelector('.overlay');
            const overlayBg = abaAtiva.querySelector('.overlayBackground');

            console.log('Overlay:', overlay); // Verificando se encontrou o overlay
            console.log('Overlay Background:', overlayBg); // Verificando se encontrou o overlayBackground
    
            if (overlay && overlayBg) {
                overlay.style.display = 'flex';
                overlayBg.style.display = 'block';
            }

            const cancelarBtn = abaAtiva.querySelector('.cancelar_cadastro');
            if (cancelarBtn) {
                cancelarBtn.addEventListener('click', () => {
                    overlay.style.display = 'none';
                    overlayBg.style.display = 'none';
                });
            }

        });
    });
});
    
</script>