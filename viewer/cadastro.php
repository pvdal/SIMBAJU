
<div class="container">
    <h1>Cadastro Acadêmico</h1>
    
    <div class="tabs">
        <button class="tab-button active" data-tab="alunos">Alunos</button>
        <button class="tab-button" data-tab="docentes">Docentes</button>
        <button class="tab-button" data-tab="cursos">Cursos</button>
    </div>
    
    <!-- Alunos Tab -->
    <div class="tab-content active" id="alunos-tab">
        <div class="card">
            <div class="card-header">
                <h2>Alunos Cadastrados</h2>
                <p class="sub-titulo">Lista de todos os alunos cadastrados no sistema.</p>
                <button class="showOverlay">Novo cadastro</button>

                <div class="overlayBackground"></div>

                <div class="overlay">
                    <?php include 'viewer/cadastro_usuario.php'; ?>
                </div>
            </div>
            <div class="search-container">
                <input type="text" id="busca-aluno" placeholder="Buscar aluno..." class="search-input">
                <button id="buscar-aluno-btn" class="btn-search">Buscar</button>
            </div>
            <div class="table-container">
                <table id="alunos-table">
                    <thead>
                        <tr>
                            <th>RA</th>
                            <th>Nome</th>
                            <th>Semestre</th>
                            <th>Email</th>
                            <th>Senha</th>
                            <th>Estado</th>
                            <th>Nível de acesso</th>
                            <th>Grupo</th>
                            <th>Curso</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Dados serão inseridos via JavaScript -->
                    </tbody>
                </table>
                <p id="alunos-empty-message" class="empty-message">Nenhum aluno cadastrado ainda.</p>
            </div>
            <div class="pagination">
                <button id="alunos-prev-page" class="btn-outline" disabled>Anterior</button>
                <span id="alunos-page-info">Página 1 de 1</span>
                <button id="alunos-next-page" class="btn-outline" disabled>Próximo</button>
            </div>
        </div>
    </div>
    
    <!-- Docentes Tab -->
    <div class="tab-content" id="docentes-tab">
        <div class="grid-container">            
            <div class="card">
                <div class="card-header">
                    <h2>Docentes Cadastrados</h2>
                    <p>Lista de todos os docentes cadastrados no sistema.</p>
                </div>
            
                <div class="search-container">
                    <input type="text" id="busca-docente" placeholder="Buscar docente..." class="search-input">
                    <button id="buscar-docente-btn" class="btn-search">Buscar</button>
                </div>
                <div class="table-container">
                    <table id="docentes-table">
                        <thead>
                            <tr>
                                <th>CPF</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Senha</th>
                                <th>Estado</th>
                                <th>Nível de acesso</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Dados serão inseridos via JavaScript -->
                        </tbody>
                    </table>
                    <p id="docentes-empty-message" class="empty-message">Nenhum docente cadastrado ainda.</p>
                </div>
                <div class="pagination">
                    <button id="docentes-prev-page" class="btn-outline" disabled>Anterior</button>
                    <span id="docentes-page-info">Página 1 de 1</span>
                    <button id="docentes-next-page" class="btn-outline" disabled>Próximo</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Cursos Tab -->
    <div class="tab-content" id="cursos-tab">
            <div class="card">
                <div class="card-header">
                    <h2>Cursos Cadastrados</h2>
                    <p>Lista de todos os cursos cadastrados no sistema.</p>
                    <button class="showOverlay">Novo cadastro</button>

                    <div class="overlayBackground"></div>

                    <div class="overlay">
                    <?php include 'viewer/cadastro_curso.php'; ?>
                </div>
                <div class="search-container">
                    <input type="text" id="busca-curso" placeholder="Buscar curso..." class="search-input">
                    <button id="buscar-curso-btn" class="btn-search">Buscar</button>
                </div>
                <div class="table-container">
                    <table id="cursos-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Turno</th>
                                <th>Estado</th>
                                <th>Coordenador</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Dados serão inseridos via JavaScript -->
                        </tbody>
                    </table>
                    <p id="cursos-empty-message" class="empty-message">Nenhum curso cadastrado ainda.</p>
                </div>
                <div class="pagination">
                    <button id="cursos-prev-page" class="btn-outline" disabled>Anterior</button>
                    <span id="cursos-page-info">Página 1 de 1</span>
                    <button id="cursos-next-page" class="btn-outline" disabled>Próximo</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/cadastros.js?v=<?php echo time(); ?>"></script>

<script src="js/novo_cadastro.js?v=<?php echo time(); ?>"></script>
