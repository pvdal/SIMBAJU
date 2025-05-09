<?php
    $host = 'localhost';
    $user = 'root';
    $senha = '';
    $banco = 'SIMBAJU';

    $con = new mysqli($host,$user,$senha,$banco);

    if($con->connect_error){
        die('Não foi possível conectar: '.$con->connect_error);
    }

    $con->set_charset("UTF8");
    echo "Conexão bem sucedida";
    $alunos = "SELECT * FROM ALUNO";
    $request = $con->query($alunos);

    if ($request->num_rows > 0) {
        
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
                echo "<tr>";

        // Mostra os nomes das colunas
        while ($col = $request->fetch_field()) {
            echo "<th>{$col->name}</th>";
        }
        echo "</tr>";

        // Mostra os dados linha por linha
        $request->data_seek(0); // Reinicia ponteiro
        while ($row = $request->fetch_assoc()) {
            echo "<tr>";
            foreach ($row as $valor) {
                echo "<td>{$valor}</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Nenhum aluno encontrado.</p>";
    }


    $con->close();
?>