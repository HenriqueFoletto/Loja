<?php

    include 'conexao.php';

    $select_query_categoria = mysqli_query($conn, "SELECT * FROM categoria");

?>
    Categoria:
    <select name="categoria">
        <?php 
        while($receber_categoria = mysqli_fetch_assoc($select_query_categoria)){
            $id_categ = $receber_categoria['id_categ'];
            $categoria = $receber_categoria['nome_categ'];
        ?>
        <p><option value="<?php echo $id_categ; ?>"><?php echo $categoria; ?></option></p>

        <?php }?>
    </select>