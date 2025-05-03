<?php

    if (isset($_GET['page'])) {
        $page = $_GET['page'] ?? 'defalut';
        switch ($page){
            case 'cadastro_usuario':
            include 'viewer/coordenador/cadastro_usuario.php';
            break;
            case 'cadastro_curso':
            include 'viewer/coordenador/cadastro_curso.php'; 
            break;
            case 'cadastro';
            include 'viewer/coordenador/cadastro.php'; 
            break;
            case 'cadastro_aluno';
            include 'viewer/coordenador/cadastro_aluno.php'; 
            break;
            default:
            echo "<p>Página não encontrada!</p>";
            break;
        }
    }
?>