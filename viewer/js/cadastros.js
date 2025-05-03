// Elementos DOM
document.addEventListener('DOMContentLoaded', function() {
    // Tabs
    const tabButtons = document.querySelectorAll('.tab-button');
    const tabContents = document.querySelectorAll('.tab-content');
    
    // Busca
    const buscaAluno = document.getElementById('busca-aluno');
    const buscaDocente = document.getElementById('busca-docente');
    const buscaCurso = document.getElementById('busca-curso');
    const buscaCoordenador = document.getElementById('busca-coordenador');
    const buscarAlunoBtn = document.getElementById('buscar-aluno-btn');
    const buscarDocenteBtn = document.getElementById('buscar-docente-btn');
    const buscarCursoBtn = document.getElementById('buscar-curso-btn');
    const buscarCoordenadorBtn = document.getElementById('buscar-coordenador-btn');

    // Paginação
    const alunosPrevPage = document.getElementById('alunos-prev-page');
    const alunosNextPage = document.getElementById('alunos-next-page');
    const docentesPrevPage = document.getElementById('docentes-prev-page');
    const docentesNextPage = document.getElementById('docentes-next-page');
    const cursosPrevPage = document.getElementById('cursos-prev-page');
    const cursosNextPage = document.getElementById('cursos-next-page');
    const coordenadoresPrevPage = document.getElementById('coordenador-prev-page');
    const coordenadoresNextPage = document.getElementById('coordenador-next-page');
    
    // Estado da paginação
    const paginationState = {
        alunos: { currentPage: 1 },
        docentes: { currentPage: 1 },
        cursos: { currentPage: 1 },
        coordenador: { cuurentPage: 1}
    };
    
    // Event Listeners
    
    // Tabs
    tabButtons.forEach(button => { //Para cada tab.button, adiciona o evento de escuta 'click'. 
        button.addEventListener('click', () => { //Quando o botão for clicado...
            const tabName = button.getAttribute('data-tab'); // Define a constante tabName que será usada como parâmetro para switchTab()
            switchTab(tabName); //Executa essa função -linha100-
        });
    });
    
    // Busca
    buscarAlunoBtn.addEventListener('click', () => {
        buscarRegistros('alunos', buscaAluno.value);
    });
    
    buscarDocenteBtn.addEventListener('click', () => {
        buscarRegistros('docentes', buscaDocente.value);
    });

    buscarCoordenadorBtn.addEventListener('click', () => {
        buscarRegistros('coordenadores', buscaCoordenador.value);
    });
    
    buscarCursoBtn.addEventListener('click', () => {
        buscarRegistros('cursos', buscaCurso.value);
    });
    
    // Tecla Enter nos campos de busca
    buscaAluno.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            buscarRegistros('alunos', buscaAluno.value);
        }
    });
    
    buscaDocente.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            buscarRegistros('docentes', buscaDocente.value);
        }
    });

    buscaCoordenador.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            buscarRegistros('coordenadores', buscaCoordenador.value);
        }
    });
    
    buscaCurso.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            buscarRegistros('cursos', buscaCurso.value);
        }
    });
    
    // Paginação
    alunosPrevPage.addEventListener('click', () => {
        mudarPagina('alunos', -1);
    });
    
    alunosNextPage.addEventListener('click', () => {
        mudarPagina('alunos', 1);
    });
    
    docentesPrevPage.addEventListener('click', () => {
        mudarPagina('docentes', -1);
    });
    
    docentesNextPage.addEventListener('click', () => {
        mudarPagina('docentes', 1);
    });
    
    coordenadoresPrevPage.addEventListener('click', () => {
        mudarPagina('coordenadores', -1);
    });
    
    coordenadoresNextPage.addEventListener('click', () => {
        mudarPagina('coordenadores', 1);
    });

    cursosPrevPage.addEventListener('click', () => {
        mudarPagina('cursos', -1);
    });
    
    cursosNextPage.addEventListener('click', () => {
        mudarPagina('cursos', 1);
    });
    
    // Funções
    
    // Trocar de tab
    function switchTab(tabName) { //Define a função usada na troca de tabelas com o parâmetro tabName, que recebe valors de data-tab
        /*Caso o usuário clique no botão de alunos, pelo html esse botão tem o atributo data-tab="alunos", e o javascript recebe o valor desse atributo
        e adiciona a tabName*/
        tabContents.forEach(content => {
            content.classList.remove('active'); /*A classe 'active' é removida de cada div onde há a outra classe 'tabContent'*/
        });
        
        tabButtons.forEach(button => {
            button.classList.remove('active'); /*A classe 'active' é removida de cada button onde há a outra classe 'tabButton'*/
        });
        //Depois de remover active de todos os elementos, tornando o  tab-content não visível e o tabButton com estilo base, é definido quais elementos serão ativados
        document.getElementById(`${tabName}-tab`).classList.add('active'); // No caso de tabName ter recebido o valor 'aluno', (`${tabName}-tab`) = (`aluno-tab`)
        document.querySelector(`[data-tab="${tabName}"]`).classList.add('active'); // O respectivo botão ativado, aluno, bem como sua respectiva tabela recebrão a classe 'active'
        // Após receber a classe active, ambos são atualizados com os estilos de ativo. A tabela com 'active' recebe a regra .css 'block' e o resto, 'none'
    }
    
    /* Buscar registros (AJAX). Pode ser usado se for identificado lentidão no uso apenas do php, já que ele reseta a página inteira quando busca as informações
    e o AJAX não. No caso de demora no carregamento será necssário optar pelo AJAX para a atualização dos dados na aba de cadastrados*/
    function buscarRegistros(tipo, termo) {
        // Resetar para a primeira página
        paginationState[tipo].currentPage = 1;
        
        // Fazer requisição AJAX para buscar os dados
        const xhr = new XMLHttpRequest();
        xhr.open('GET', `${tipo}.php?action=buscar&termo=${encodeURIComponent(termo)}&pagina=1`, true);
        
        xhr.onload = function() {
            if (this.status === 200) {
                try {
                    const response = JSON.parse(this.responseText);
                    atualizarTabela(tipo, response.dados, response.total_paginas);
                } catch (e) {
                    console.error('Erro ao processar resposta:', e);
                }
            }
        };
        
        xhr.send();
    }
    
    // Mudar página
    function mudarPagina(tipo, direcao) {
        const state = paginationState[tipo];
        state.currentPage += direcao;
        
        // Fazer requisição AJAX para buscar os dados da nova página
        const termo = document.getElementById(`busca-${tipo}`).value;
        const xhr = new XMLHttpRequest();
        xhr.open('GET', `${tipo}.php?action=buscar&termo=${encodeURIComponent(termo)}&pagina=${state.currentPage}`, true);
        
        xhr.onload = function() {
            if (this.status === 200) {
                try {
                    const response = JSON.parse(this.responseText);
                    atualizarTabela(tipo, response.dados, response.total_paginas);
                } catch (e) {
                    console.error('Erro ao processar resposta:', e);
                }
            }
        };
        
        xhr.send();
    }
    
    // Atualizar tabela com os dados recebidos
    function atualizarTabela(tipo, dados, totalPaginas) {
        const state = paginationState[tipo];
        const table = document.getElementById(`${tipo}-table`);
        const tbody = table.querySelector('tbody');
        const emptyMessage = document.getElementById(`${tipo}-empty-message`);
        const pageInfo = document.getElementById(`${tipo}-page-info`);
        const prevButton = document.getElementById(`${tipo}-prev-page`);
        const nextButton = document.getElementById(`${tipo}-next-page`);
        
        // Limpar tabela
        tbody.innerHTML = '';
        
        // Verificar se há dados
        if (dados.length === 0) {
            table.style.display = 'none';
            emptyMessage.style.display = 'block';
            pageInfo.textContent = 'Página 0 de 0';
            prevButton.disabled = true;
            nextButton.disabled = true;
            return;
        }
        
        // Mostrar tabela e esconder mensagem vazia
        table.style.display = 'table';
        emptyMessage.style.display = 'none';
        
        // Atualizar informações de página
        pageInfo.textContent = `Página ${state.currentPage} de ${totalPaginas}`;
        
        // Atualizar estado dos botões de paginação
        prevButton.disabled = state.currentPage <= 1;
        nextButton.disabled = state.currentPage >= totalPaginas;
        
        // Renderizar linhas da tabela
        dados.forEach(item => {
            const row = document.createElement('tr');
            
            if (tipo === 'alunos') {
                row.innerHTML = `
                    <td>${item.RA}</td>
                    <td>${item.NOME}</td>
                    <td>${item.SEMESTRE}</td>
                    <td>${item.EMAIL}</td>
                    <td>${item.SENHA}</td>
                    <td>${item.ESTADO}</td>
                    <td>${item.NIVEL_ACESSO}</td>
                    <td>${item.GRUPO}</td>
                    <td>${item.CURSO}</td>
                `;
            } else if (tipo === 'docentes') {
                row.innerHTML = `
                    <td>${item.CPF}</td>
                    <td>${item.NOME}</td>
                    <td>${item.EMAIL}</td>
                    <td>${item.SENHA}</td>
                    <td>${item.ESTADO}</td>
                    <td>${item.NIVEL_ACESSO}</td>
                `;
            } else if (tipo === 'coordenadores') {
                row.innerHTML = `
                    <td>${item.CPF}</td>
                    <td>${item.NOME}</td>
                    <td>${item.EMAIL}</td>
                    <td>${item.SENHA}</td>
                    <td>${item.ESTADO}</td>
                    <td>${item.NIVEL_ACESSO}</td>
                `;
            } else if (tipo === 'cursos') {
                row.innerHTML = `
                    <td>${item.ID}</td>
                    <td>${item.NOME}</td>
                    <td>${item.TURNO}</td>
                    <td>${item.ESTADO}</td>
                    <td>${item.COORDENADOR}</td>
                `;
            }
            
            tbody.appendChild(row);
        });
    }
});