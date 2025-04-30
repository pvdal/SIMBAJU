<!--menu do coordenador-->
<nav class="menu-superior">
        <button id="btn-expandir">
            <i class="bi bi-list"></i>
        </button>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const btnExpandir = document.getElementById('btn-expandir');
                const menuLateral = document.querySelector('.menu-lateral');

                    btnExpandir.addEventListener('click', () => {
                        menuLateral.classList.toggle('expandir');
                    });
            });
        </script>
    <ul id="itens-menu-superior">
        <li>
            <a href="?page=agenda" class="iten-btn">
                <i class="bi bi-calendar-week"></i>
                Agenda
            </a>
        </li>

        <li>
            <a href="?page=grupo" class="iten-btn">
                <i class="bi bi-people"></i></i>
                Grupo
            </a>
        </li>

        <li>
            <a href="?page=banca" class="iten-btn">
                <i class="bi bi-person-lines-fill"></i>
                Banca
            </a>
        </li>

        <li id="search-bar">
            <form action="/search" method="get">
                <input type="text" name="pesquisar" placeholder="Pesquisar" />
                <button type="submit"><i class="bi bi-search"></i></button>
            </form>
        </li>

        <li>
            <a href="#" class="iten-btn">
                <i class="bi bi-box-arrow-right"></i> 
                Sair
            </a>
        </li>
    </ul>
</nav>

<!--MENU LATERAL-->
<nav id="side-bar">
    <div id="side-bar-contents">
        
        <ul id="side-itens">
            <li class="side-item active">
                <a href="#">
                    <i class="bi bi-mortarboard"></i>
                    <span class="item-description">
                        Cadastro Acadêmico
                    </span>
                </a>
            </li>
            <li class="side-item">
                <a href="#">
                    <i class="bi-clipboard-check"></i>
                    <span class="item-description">
                        Avaliações
                    </span>
                </a>
            </li>
            <li class="side-item">
                <a href="#">
                    <i class="bi-filter-square"></i>
                    <span class="item-description">
                        Rubrica
                    </span>
                </a>
            </li>
            <li class="side-item">
                <a href="#">
                    <i class="bi-list-check"></i>
                    <span class="item-description">
                        Critérios
                    </span>
                </a>
            </li>
        </ul>

        <div id="user">
            <img src="https://img.freepik.com/fotos-gratis/retrato-de-homem-branco-isolado_53876-40306.jpg" id="user-avatar" alt="Avatar">
            <p id="user-infos">
                <span class="item-description">
                    Pedro Victor de Aquino Lima
                </span>
                <span class="item-description">
                    3º Semestre
                </span>
            </p>
        </div>
    </div>
</nav>

<main id="conteudo">
    <?php include 'controller/controller.php'; ?>
</main>
<!--menu-lateral
<nav class="menu-lateral">
    <div class="perfil">
        <div class="perfil-menu">
            <a href="#">
                <i class="bi bi-person-circle"></i>
                <div class="texto-perfil">
                    <span>Pedro Lima</span>
                    <span>2º Semestre</span>
                </div>
            </a>
        </div>
    </div>

    <div id="menu_lat_Coord">
        <button id="novo-cadastro" onclick="window.location.href='?page=cadastro'">
            <i class="bi bi-card-list"></i>
            <span>Cadastro acadêmico</span>
        </button>
    </div>
    -->
</nav>