document.addEventListener('DOMContentLoaded', () => {
   
    const btnMenu = document.querySelectorAll('.side-item');
    const container = document.getElementById('conteudo_coordenador');
    const paginas = {}; // Cache das páginas já carregadas

    
    

    function mostrarPagina(page) {
        for (const nome in paginas) {
            paginas[nome].style.display = 'none';
        }
        paginas[page].style.display = 'block';
    }

    function carregarPagina(page, adicionarHistorico = true) {
        if (paginas[page]) {
            mostrarPagina(page);
            if (adicionarHistorico) {
                history.pushState({ page }, '', `?page=${page}`);
            }
            
            return;
        }

        fetch(`viewer/coordenador/${page}.php`)
            .then(response => {
                if (!response.ok) throw new Error('Erro ao carregar a página');
                return response.text();
            })
            .then(html => {
                const div = document.createElement('div');
                div.innerHTML = html;
                div.id = `pagina-${page}`;
                div.style.display = 'none'; // Inicia oculto
                container.appendChild(div);
                paginas[page] = div;

                mostrarPagina(page);

                if (adicionarHistorico) {
                    history.pushState({ page }, '', `?page=${page}`);
                }

                if(page ==='cadastro') {
                    cadastroAcademico();
                    novoCadastroAcademico();
                }
            })
            .catch(() => {
                container.innerHTML = '<p>Página não encontrada</p>';
            });
    }

    btnMenu.forEach(item => {
        item.addEventListener('click', e => {
          e.preventDefault();
    
          const link = item.querySelector('a');
          if (!link) return;
    
          const page = new URL(link.href, window.location.origin).searchParams.get('page');
          if (page) carregarPagina(page);
        });
    });
    
    window.addEventListener('popstate', () => {
        const page = new URL(location.href).searchParams.get('page') || 'agenda';
        carregarPagina(page, false);
    });

    // Carregamento inicial
    const paginaInicial = new URL(window.location.href).searchParams.get('page') || 'cadastro';
    carregarPagina(paginaInicial);
});
