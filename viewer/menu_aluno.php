
<!--menu do aluno-->
<nav class="menu-superior">
    <ul class="professores">
        <li class="professor1" href="#"><a>Professor Pedro</a></li>
        <li class="professor2" href="#"><a>Professor Lucas</a></li>
        <li class="professor3" href="#"><a>Professor Thiago</a></li>
        <li class="professor4" href="#"><a>Professor João</a></li>
        <li class="professor5" href="#"><a>Professor Tomé</a></li>
    </ul>

    <script>
        // Definir uma velocidade de rolagem mais rápida
        let scrollSpeed = 0.5; // Quanto maior o valor, mais rápido

        document.querySelector('.professores').addEventListener('wheel', function(e) {
            if (e.deltaY !== 0) {
                // Aumenta a velocidade da rolagem horizontal
                this.scrollLeft += e.deltaY * scrollSpeed;  // Mover o conteúdo horizontalmente
                e.preventDefault();  // Previne o comportamento padrão da rolagem vertical
            }
        });
    </script>
    
    <ul class="search-bar">
        <li>
            <form action="/search" method="get">
                <input type="text" name="pesquisar" placeholder="Pesquisar" />
                <button type="submit"><i class="bi bi-search"></i></button>
            </form>
        </li>
    </ul>
        
    <ul class="avaliacao-aluno">
        <li>
        <a class="exibir-rubrica" href="#"><i class="bi bi-columns"></i> Avaliação</a>
        </li>
    </ul>

    <ul class="Sair">
        <li>
        <a class="icon"><i class="bi bi-box-arrow-right"></i> Sair</i></a>
        </li>
    </ul>
    
</nav>

<!--menu-lateral-->
<nav class="menu-lateral">

    <div class="btn-expandir">
        <i class="bi bi-list"></i>
    </div><!--btn-expandir-->

    <ul class="perfil">
        <li class="perfil-menu">
            <a href="#">
                <i class="bi bi-person-circle"></i>
                <div class="texto-perfil">
                    <span>Pedro Lima</span>
                    <span>2º Semestre</span>
                </div>
            </a>
        </li>
    </ul>

    <ul class="semestres">
        <li class="item-menu">
            <a href="#">
                <span class="icon"><i class="bi bi-2-square"></i></i></span>
                <span class="txt-link"> Semestre</span>
            </a>
        </li>
        <li class="item-menu">
            <a href="#">
                <span class="icon"><i class="bi bi-3-square"></i></span>
                <span class="txt-link">Semestre</span>
            </a>
        </li>
        <li class="item-menu">
            <a href="#">
                <span class="icon"><i class="bi bi-4-square"></i></span>
                <span class="txt-link">Semestre</span>
            </a>
        </li>

        <li class="item-menu">
            <a href="#">
                <span class="icon"><i class="bi bi-5-square"></i></span>
                <span class="txt-link">Semestre</span>
            </a>
        </li>
        <li class="item-menu">
            <a href="#">
                <span class="icon"><i class="bi bi-6-square"></i></span>
                <span class="txt-link">Semestre</span>
            </a>
        </li>
    </ul>
</nav>