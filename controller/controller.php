<?php

    if (isset($_GET['page'])) {
        $page = $_GET['page'] ?? 'defalut';
        switch ($page){
            case 'cadastro_usuario':
            include 'viewer/cadastro_usuario.php';
            break;
            case 'cadastro_curso':
            include 'viewer/cadastro_curso.php'; 
            break;
            case 'cadastro';
            include 'viewer/cadastro.php'; 
            break;
            default:
            echo "<p>Página não encontrada!</p>";
            break;
        }
    }
?>