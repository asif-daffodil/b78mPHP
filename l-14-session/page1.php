<?php  
    session_start();

    $x = 15;
    echo $x;

    echo "<br>";
    
    $_SESSION['city'] = "Dhaka";
    echo $_SESSION['city'];
?>