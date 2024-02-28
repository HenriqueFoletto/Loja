<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <!--------------------------------------------->
    <p><b>Campo select</b></p>
    <form action="select.php">

    Nome do produto: <input type="text" name="nomep">
    <input type="submit" value="Verificar">

    <?php include 'select.php';?>

    </form><br>
    <!--------------------------------------------->

    <!--------------------------------------------->
    <p><b>Campo insert</b></p>
    <form action="insert.php" method="request">

    Nome do produto: <input type="text" name="nomep"> 

    <?php include 'select_categ.php';?>

    <p>Descrição: <input type="text" name="descricao">
    Preço: <input type="number" name="preco" step=".01"></p>
    
    <input type="submit" value="Adicionar">
    </form><br>
    <!--------------------------------------------->

    <!--------------------------------------------->
    <p><b>Campo delete</b></p>
    <form action="delete.php" method="request">

    <?php $select_query_produto = mysqli_query($conn, "SELECT * FROM produto"); ?>

    Nome do produto:
    <select name="nome">
        <?php 
        while($receber_produto = mysqli_fetch_assoc($select_query_produto)){
            $nome = $receber_produto['nome'];
        ?>

        <option value="<?php echo $nome; ?>"><?php echo $nome; ?></option>

        <?php }?>

    </select>
    <input type="submit" value="Excluir">
    </form><br>
    <!--------------------------------------------->

    <!--------------------------------------------->
    <p><b>Campo de update</b></p>
    <form action="update.php" method="request">

    <?php $select_query_produto = mysqli_query($conn, "SELECT * FROM produto"); ?>

    Nome do produto: 
    <select name="nome">
    <?php 
        while($receber_produto = mysqli_fetch_assoc($select_query_produto)){
            $nome = $receber_produto['nome'];
        ?>

        <option value="<?php echo $nome; ?>"><?php echo $nome; ?></option>

    <?php }?>
    </select>

    <?php include 'select_categ.php';?>

    <p>Descrição: <input type="text" name="descricao">
    Preço: <input type="number" name="preco" step=".01"></p>
    <input type="submit" value="Atualizar">
    </form>
    <!--------------------------------------------->
</body>
</html>