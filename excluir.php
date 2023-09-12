<?php
include 'conecta.php'
    $id = filter_input(INPUT_GET,'id');
    $slq = "DELETE FROM usuario WHERE id='$id' ";
    
    $conn->query($sql); 
    $conn->close();
