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

    /*
    const cancelar_cadastro = document.querySelectorAll('.cancelar_cadastro');
    const novo_cadastro = document.getElementById('overlay');
    const fundo_cadastro = document.getElementById('overlayBackground');
    const showBtn = document.getElementById('showOverlay');

    showBtn.addEventListener('click', () => {
        novo_cadastro.style.display = 'flex';
        fundo_cadastro.style.display = 'block';
    });
    
    //Fechar janela
    cancelar_cadastro.forEach(fecharJanela =>{
        fecharJanela.addEventListener("click", () =>{
            novo_cadastro.style.display = "none";
            fundo_cadastro.style.display ="none";
        })
    });
    */
});
    