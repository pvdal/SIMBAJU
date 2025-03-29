
    <div class="container">
        <h1>Cadastro Acadêmico</h1>
        
        <div class="tabs">
            <button class="tab-button active" data-tab="alunos">Alunos</button>
            <button class="tab-button" data-tab="docentes">Docentes</button>
            <button class="tab-button" data-tab="cursos">Cursos</button>
        </div>
        
        <!-- Alunos Tab -->
        <div class="tab-content active" id="alunos-tab">
            <div class="grid-container">
                <button id="showOverlay">Mostrar Sobreposição</button>

                <div id="overlayBackground"></div>

                <div id="overlay">
                    <?php include 'viewer/cadastro_usuario.php'; ?>
                </div>
        
                <div class="card">
                    <div class="card-header">
                        <h2>Alunos Cadastrados</h2>
                        <p>Lista de todos os alunos cadastrados no sistema.</p>
                    </div>
                    <div class="search-container">
                        <input type="text" id="busca-aluno" placeholder="Buscar aluno..." class="search-input">
                        <button id="buscar-aluno-btn" class="btn-search">Buscar</button>
                    </div>
                    <div class="table-container">
                        <table id="alunos-table">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Matrícula</th>
                                    <th>Email</th>
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
        </div>
        
        <!-- Docentes Tab -->
        <div class="tab-content" id="docentes-tab">
            <div class="grid-container">
                <div class="card">
                    <div class="card-header">
                        <h2>Cadastrar Docente</h2>
                        <p>Preencha os dados para cadastrar um novo docente no sistema.</p>
                    </div>
                    <form id="docente-form">
                        <div class="form-group">
                            <label for="docente-nome">Nome Completo</label>
                            <input type="text" id="docente-nome" placeholder="Digite o nome completo" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="docente-id">ID Funcional</label>
                            <input type="text" id="docente-id" placeholder="Digite o ID funcional" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="docente-email">Email</label>
                            <input type="email" id="docente-email" placeholder="Digite o email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="docente-departamento">Departamento</label>
                            <input type="text" id="docente-departamento" placeholder="Digite o departamento" required>
                        </div>
                        
                        <button type="submit" class="btn">Cadastrar Docente</button>
                    </form>
                </div>
                
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
                                    <th>Nome</th>
                                    <th>ID Funcional</th>
                                    <th>Email</th>
                                    <th>Departamento</th>
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
            <div class="grid-container">
                <div class="card">
                    <div class="card-header">
                        <h2>Cadastrar Curso</h2>
                        <p>Preencha os dados para cadastrar um novo curso no sistema.</p>
                    </div>
                    <form id="curso-form">
                        <div class="form-group">
                            <label for="curso-nome">Nome do Curso</label>
                            <input type="text" id="curso-nome" placeholder="Digite o nome do curso" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="curso-codigo">Código do Curso</label>
                            <input type="text" id="curso-codigo" placeholder="Digite o código do curso" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="curso-duracao">Duração (semestres)</label>
                            <input type="number" id="curso-duracao" placeholder="Digite a duração em semestres" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="curso-departamento">Departamento</label>
                            <input type="text" id="curso-departamento" placeholder="Digite o departamento" required>
                        </div>
                        
                        <button type="submit" class="btn">Cadastrar Curso</button>
                    </form>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        <h2>Cursos Cadastrados</h2>
                        <p>Lista de todos os cursos cadastrados no sistema.</p>
                    </div>
                    <div class="search-container">
                        <input type="text" id="busca-curso" placeholder="Buscar curso..." class="search-input">
                        <button id="buscar-curso-btn" class="btn-search">Buscar</button>
                    </div>
                    <div class="table-container">
                        <table id="cursos-table">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Código</th>
                                    <th>Duração</th>
                                    <th>Departamento</th>
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
</body>
