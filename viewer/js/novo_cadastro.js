document.addEventListener("DOMContentLoaded", function () {
    // Constantes de visualizar senha
    /*
    const senha_aluno = document.getElementById('senha_aluno'); //Aluno
    const confirmar_senhaal = document.getElementById('confirmar_senhaal');
    const visualizar_senhaal = document.getElementById('visualizar_senhaal');

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
        */
    //JS do elemento sobreposto
    document.querySelectorAll('.showOverlay').forEach(btn => {
        btn.addEventListener('click', () => {
            const abaAtiva = btn.closest('.tab-content.active');
    
            if (!abaAtiva) return;
                
            const overlay = abaAtiva.querySelector('.overlay');
            const overlayBg = abaAtiva.querySelector('.overlayBackground');
    
            if (overlay && overlayBg) {
                overlay.style.display = 'flex';
                overlayBg.style.display = 'block';
            }

            const cancelarBtn = abaAtiva.querySelector('.cancelar_cadastro');
            if (cancelarBtn) {
                cancelarBtn.addEventListener('click', () => {
                    console.log("cancelarBtn");
                    overlay.style.display = 'none';
                    overlayBg.style.display = 'none';
                    document.querySelectorAll('.input_box').forEach(input =>{input.value="";})
                });
            }

            const visualizarBtn = abaAtiva.querySelector('.visualizar_btn');
            const senhaInput = abaAtiva.querySelectorAll('.senha');
            if (!visualizarBtn || !senhaInput) return;

            visualizarBtn.addEventListener('click', () =>{
                if(visualizarBtn.checked){
                    senhaInput.forEach(senha => {
                        senha.type = "text"
                    })
                } else {
                    senhaInput.forEach(senha => {
                        senha.type = "password"
                    })
                };
            });
        });
    });
});
    