<!--menu do coordenador-->
<!-- MENU SUPERIOR (FOI TEMPORARIAMENTE)
<nav class="menu-superior">
        <button id="btn-expandir">
            <i class="bi bi-list"></i>
        </button>
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
-->
<!--MENU LATERAL-->
<nav id="side-bar">
        <button id="btn-expandir">
            <i class="bi bi-list"></i>
        </button>
    <div id="side-bar-contents">
        <ul id="side-itens">
            <li class="side-item active">
                <a href="?page=cadastro">
                    <i class="bi bi-mortarboard"></i>
                    <span class="item-description">
                        Cadastro Acadêmico
                    </span>
                </a>
            </li>
            <li class="side-item">
                <a href="?page=avaliacao">
                    <i class="bi-clipboard-check"></i>
                    <span class="item-description">
                        Avaliações
                    </span>
                </a>
            </li>
            <li class="side-item">
                <a href="?page=rubrica">
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
            <li class="side-item">
                <a href="#">
                    <i class="bi bi-calendar-week"></i>
                    <span class="item-description">
                        Agenda
                    </span>
                </a>
            </li>

            <li class="side-item">
                <a href="#">
                    <i class="bi bi-people"></i></i>
                    <span class="item-description">
                        Grupo
                    </span>
                </a>
            </li>

            <li class="side-item">
                <a href="#">
                    <i class="bi bi-person-lines-fill"></i>
                    <span class="item-description">
                        Banca
                    </span>
                </a>
            </li>
        </ul>
    </div>
    <hr>
    <div class="user-menu">
            <a href="#" id="user" >
                <img src="https://img.freepik.com/fotos-gratis/retrato-de-homem-branco-isolado_53876-40306.jpg" id="user-avatar" alt="Avatar">
                <p id="user-infos">
                    <span class="item-description">
                        Pedro Victor de Aquino Lima Oliveira
                    </span>
                    <span class="item-description">
                        3º Semestre
                    </span>
                </p>
            </a>
            <ul id="user-options">
                <li><button class="user-option">Perfil</button></li>
                <hr>
                <li><button class="user-option">Sair</button></li>
            </ul>
        </div>
</nav>

<main id="conteudo_coordenador">
    
</main>
<!--
<php include 'controller/controller.php'; ?>
<script src="controller/menu_coord.js?v=<php echo time(); ?>"></script>-->

</nav>