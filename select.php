<?php

    include 'conexao.php';

    if(isset($_GET['nomep'])){

        $nome = $_GET['nomep'];

        $select_query_produto = mysqli_query($conn, "SELECT * FROM produto WHERE nome = '$nome';");
        $row = mysqli_num_rows($select_query_produto);

        if(empty($nome)){
            echo"campo vazio, digite novamente";
        }else{
            if(1 == $row){

                echo"$nome cadastrado";
            }else{
    
                echo"$nome não encontrado";
            }
        }
    }
?>