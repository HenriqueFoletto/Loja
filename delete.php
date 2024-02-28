<?php

    include 'conexao.php';

    $nome = $_REQUEST['nome'];
    $delete_query = mysqli_query($conn, "DELETE FROM produto WHERE nome = '$nome';");
    echo"dados excluidos";
?>