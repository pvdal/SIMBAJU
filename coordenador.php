<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Coordenador</title>
        <link rel="stylesheet" href="viewer/css/style_coordenador.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
    <body>

        <?php include 'viewer/coordenador/menu_coordenador.php'; ?>
        <!--
        <div id="conteudo">
            <php include 'controler/controller.php'; ?>
        </div>
        -->
    </body>
    <script src="controller/controller.js?v=<?php echo time(); ?>"></script>
    
    <script src="viewer/js/menu_coord.js?v=<?php echo time(); ?>"></script>

    <script src="viewer/js/cadastros.js?v=<?php echo time(); ?>"></script>
    
    <script src="viewer/js/novo_cadastro.js?v=<?php echo time(); ?>"></script>
</html>