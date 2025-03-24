document.addEventListener("DOMContentLoaded", function () {
    // Selecionando os botões e os campos de "cadastro.php"
    const aluno_btn = document.getElementById("aluno_btn");
    const campos_aluno = document.getElementById("campos_aluno");
    const docente_btn = document.getElementById("docente_btn");
    const campos_docente = document.getElementById("campos_docente");
    /*
    Função para mostrar os campos do aluno e ocultar os do docente.
    Também altera o foco dos botões de tipo de usuário.
    */
    aluno_btn.addEventListener("click", () => {
        campos_aluno.style.display = "grid";
        campos_docente.style.display = "none";

        aluno_btn.classList.add('focus');
        docente_btn.classList.remove('focus');
    });
    /*
    Função para mostrar os campos do docente e ocultar os do aluno.
    Também altera o foco dos botões de tipo de usuário.
    */
    docente_btn.addEventListener("click", () => {
        campos_docente.style.display = "grid";
        campos_aluno.style.display = "none";

        aluno_btn.classList.remove('focus');
        docente_btn.classList.add('focus');
    });
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
});