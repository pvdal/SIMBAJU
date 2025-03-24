<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro</title>
        <link rel="stylesheet" href="css/style_cadastro.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="css/style_aluno.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
    <body>
    
        <?php include 'viewer/menu_aluno.php'; ?>
     
        <div id="cadastro"> <!--Contêiner principal, onde fica todos os elementos necessários para novo cadastro de usuário -->
            <img id="Logo_SIRUS" src="imagens/Logo_SIRUS.png" alt="logo SIRUS"> <!--Logotipo-->
            <div id="selecionar_usuario"> <!--Alterna entre os campos de cadastro de aluno e usuário-->
                <button class="tipo_usuario" id="aluno_btn"> <!--Botão do aluno-->
                    <p>Cadastrar aluno</p>
                </button>
                <button class="tipo_usuario" id="docente_btn"> <!--Botão do docente-->
                    <p>Cadastrar docente</p>
                </button>
            </div>

            <!--Formulário do aluno-->
            <form id="campos_aluno" class="campos">
                <!--Campos de input do aluno-->
                <div class="input_group">
                    <label for="RA">RA</label>
                    <input class="input_box" type="number" id="RA" name="RA">
                </div>
                    
                <div class="input_group" id="grupo_curso">
                    <label for="curso">Curso</label>
                    <input class="input_box" type="text" id="curso" name="curso">
                </div>
                
                <div class="input_group grupo_nome">
                    <label for="nome_aluno">Nome</label>
                    <input class="input_box" type="text" id="nome_aluno" name="nome_aluno">
                </div>

                <div class="input_group grupo_email">
                    <label for="email_aluno">E-mail</label>
                    <input class="input_box" type="email" id="email_aluno" name="email_aluno">
                </div>

                <div class="input_group">
                    <label for="semestre">Semestre</label>
                    <input class="input_box" type="number" id="semestre" name="semestre">
                </div>
                
                <div class="input_group grupo_senhaal">
                    <label for="senha_aluno">Senha</label>
                    <input class="input_box" type="password" id="senha_aluno" name="senha_aluno">
                </div>

                <div class="input_group grupo_senhaal">
                    <label for="confirmar_senhaal">Repetir senha</label>
                    <input class="input_box" type="password" id="confirmar_senhaal" name="confirmar_senhaal">
                </div>
                
                <!--Checkbox de visualizar senha-->
                <div class="visualizar_senha">
                    <input type="checkbox" id="visualizar_senhaal" onclick="visualizarAluno()">
                    <label for="visualizar_senhaal">Visualizar senha</label>
                </div>

                <!--Botão de cadastrar aluno-->
                <button id="cadastrar_aluno" class="cadastrar_btn" type="submit">Cadastrar</button>
            </form>

            <!--======================
                FORMULÁRIO DO DOCENTE
                ======================-->
            <form id="campos_docente" class="campos">
                <div class="input_group">
                    <label for="CPF">CPF</label>
                    <input class="input_box" type="text" id="CPF" name="CPF">
                </div>

                <div class="input_group grupo_nome">
                    <label for="nome_docente">Nome</label>
                    <input class="input_box" type="text" id="nome_docente" name="nome_docente">
                </div>

                <div class="input_group grupo_email">
                    <label for="email_docente">E-mail</label>
                    <input class="input_box" type="email" id="email_docente" name="email_docente">
                </div>

                <div class="input_group grupo_senhadoc">
                    <label for="senha_docente">Senha</label>
                    <input class="input_box" type="password" id="senha_docente" name="senha">
                </div>

                <div class="input_group grupo_senhadoc">
                    <label for="confirmar_senhadoc">Repetir senha</label>
                    <input class="input_box" type="password" id="confirmar_senhadoc" name="confirmar_senhadoc">
                </div>
                
                <!--Checkbox de visualizar senha-->
                <div class="visualizar_senha">
                    <input type="checkbox" id="visualizar_senhadoc" onclick="visualizarDocente()">
                    <label for="visualizar_senhadoc">Visualizar senha</label>
                </div>

                <label id="tipo_docente">Tipo de docente:</label>
                <div id="selecionar_docente">
                    <div class="radio_item">
                        <input type="radio" class="radio_item" id="tipo_professor" name="tipo_docente" value="professor" checked>
                        <label for="tipo_professor">Professor</label>
                    </div>
                    
                    <div class="radio_item">
                        <input type="radio" class="radio_item" id="tipo_coordenador" name="tipo_docente" value="coordenador">
                        <label for="tipo_coordenador">Coordenador</label>
                    </div>
                </div>
                <!--Botão de cadastrar docente-->
                <button id="cadastrar_docente" class="cadastrar_btn" type="submit">Cadastrar</button>
            </form>
        </div>
  
        <!--Funções para visualizar os campos de "senha" e "repetir senha"-->
        <script>
            function visualizarAluno(){
                const senha_aluno = document.getElementById('senha_aluno')
                const confirmar_senhaal = document.getElementById('confirmar_senhaal')
                const visualizar_senhaal = document.getElementById('visualizar_senhaal')
                
                if(visualizar_senhaal.checked){ //Se a checkbox estiver marcada, os campos de senha e confirmar senha serão exibidos
                    senha_aluno.type = "text";
                    confirmar_senhaal.type = "text";
                } else { //Se a checkbox não estiver marcada, os campos de senha e confirmar senha serão ocultados
                    senha_aluno.type = "password";
                    confirmar_senhaal.type = "password";
                }
            }

            function visualizarDocente(){
                const senha_docente = document.getElementById('senha_docente')
                const confirmar_senhadoc = document.getElementById('confirmar_senhadoc')
                const visualizar_senhadoc = document.getElementById('visualizar_senhadoc')
                
                if(visualizar_senhadoc.checked){
                    senha_docente.type = "text";
                    confirmar_senhadoc.type = "text";
                } else {
                    senha_docente.type = "password";
                    confirmar_senhadoc.type = "password";
                }
            }
        </script>

        <!--Chamo o arquivo que possibilita alternar entre os campos de input-->
        <script src="js/cadastro.js?v=<?php echo time(); ?>"></script>
    </body>
</html>