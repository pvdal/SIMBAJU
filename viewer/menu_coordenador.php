<!--menu do coordenador-->
<nav class="menu-superior">
    <div>
        <a href="#"><i class="bi bi-calendar-week"></i>Agenda</a>
    </div>
        
    <div>
        <a href="#">Criar grupo</a>
    </div>
    <div>
        <a href="#">Criar banca</a>
    </div>
    
    <ul class="search-bar">
        <li>
            <form action="/search" method="get">
                <input type="text" name="pesquisar" placeholder="Pesquisar" />
                <button type="submit"><i class="bi bi-search"></i></button>
            </form>
        </li>
    </ul>

    <ul class="Sair">
        <li>
        <a class="icon" href="#"><i class="bi bi-box-arrow-right"></i> Sair</a>
        </li>
    </ul>
    
</nav>

<!--menu-lateral-->
<nav class="menu-lateral">

    <div class="btn-expandir">
        <i class="bi bi-list"></i>
    </div><!--btn-expandir-->

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
        <button onclick="window.location.href='?page=cadastro_usuario'">Cadastro de Usuários</button>
    </div>
</nav>