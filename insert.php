<?php

    include 'conexao.php';

    if(isset($_REQUEST['nomep'])){

    $nomep = $_REQUEST['nomep'];
    $categoria = $_REQUEST['categoria'];
    $descricao = $_REQUEST['descricao'];
    $preco = $_REQUEST['preco'];

    $select_query_produto = mysqli_query($conn, "SELECT * FROM produto WHERE nome = '$nomep';");
    $row = mysqli_num_rows($select_query_produto);

    if(empty($nomep) || empty($descricao) || empty($preco)){
        echo"campo vazio, digite novamente";
    }else{
        if($preco <= 0){
            echo"preco menor ou igual a zero, digite novamente";
        }else{
            if(1 != $row){

                $insert_query = mysqli_query($conn, "INSERT INTO produto VALUES('', '$nomep', '$categoria', '$descricao', '$preco')");

                echo"dados inseridos";
            }else{
                echo"produto já cadastrado, digite novamente";
            }
        }
    }
    }

?>