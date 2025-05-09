<div id="novo_cadastro"> <!--Contêiner principal, onde fica todos os elementos necessários para novo cadastro de usuário -->
    <button class="cancelar_cadastro"><i class="bi bi-box-arrow-right"></i> Calcelar</button>
    <img id="Logo_SIRUS" src="imagens/Logo_SIRUS.png" alt="logo SIRUS"> <!--Logotipo-->
    <h1 class="titulo-novo-cadastro">Cadastre um curso</h1>
    <p class="subtitulo-novo-cadastro">Informações cadastrais do curso</p>
    <!--======================
        FORMULÁRIO DO CURSO
        ======================-->
    <form id="campos_curso" class="campos" >
        <!--Campos de input do curso-->
        <div class="input_group grupo_nome">
            <label for="nome_curso">Nome</label>
            <input class="input_box" type="text" id="nome_curso" name="nome_curso" required>
        </div>

        <div class="input_group">
            <label for="turno_curso">Turno</label>
            <input class="input_box" type="text" id="turno_curso" name="turno_curso" required>
        </div>

        <div class="input_group">
            <label for="coordenador_curso">Coordenador</label>
            <select class="input_box" name="coordenador_curso" id="coordenador_curso" none>
                <option value="" selected disabled>Selecione um coordenador</option>
                <option value="1">Silvia</option>
                <option value="2">Rodrigo</option>
                <!--Consulta ao banco
                <php
                    // Conectar ao banco de dados (substitua pelos seus dados)
                    $conn = new mysqli("localhost", "usuario", "senha", "nome_do_banco");

                    // Verificar a conexão
                    if ($conn->connect_error) {
                        die("Falha na conexão: " . $conn->connect_error);
                    }

                    // Buscar coordenadores do banco de dados
                    $sql = "SELECT id, nome FROM coordenadores"; // Ajuste a tabela conforme seu banco
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row["id"] . "'>" . $row["nome"] . "</option>";
                        }
                    } else {
                        echo "<option value=''>Nenhum coordenador encontrado</option>";
                    }

                    // Fechar conexão
                    $conn->close();
                ?>
                -->
            </select>
        </div>

        <div class="input_group">
            <label for="estado_docente">Estado</label>
            <select class="input_box" name="estado_docente" required>
                <option value="1">Ativo</option>
                <option value="0">Inativo</option>
            </select>
        </div>
        <!--Botão de cadastrar curso-->
        <button id="cadastrar_curso" class="cadastrar_btn" type="submit">Cadastrar</button>
    </form>
</div>