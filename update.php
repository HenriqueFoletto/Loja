<?php

    include 'conexao.php';

    $nome = $_REQUEST['nome']; 
    $categoria = $_REQUEST['categoria']; 
    $descricao = $_REQUEST['descricao']; 
    $preco = $_REQUEST['preco'];

    if(empty($descricao) || empty($preco)){
        echo"campo vazio, digite novamente";
    }else{
        if($preco <= 0){
            echo"preco menor ou igual a zero, digite novamente";
        }else{
            $update_query = mysqli_query($conn, "UPDATE produto SET id_categ = $categoria, descricao = '$descricao', preco = $preco WHERE nome = '$nome';");

            echo"dados alterados";
        }
    }
?>