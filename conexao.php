<?php

    $conn = mysqli_connect('localhost', 'root', '', 'produto');

    if(!$conn){
        die('erro' . mysqli_connect_error());
    }

?>