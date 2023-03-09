<?php  
    $amarVar = "ABCDEFFGHIJKLMOPQRSTUVWXYZabcdefghijklmmnopqrstuvwxyz0123456789";
    echo "$amarVar <br>";
    $amarVar = str_shuffle($amarVar);
    echo "$amarVar <br>";
    $amarVar = strrev($amarVar);
    echo "$amarVar <br>";
    $amarVar =  substr($amarVar, -6);
    uniqid("a").str_shuffle($amarVar.rand().date("FdYDlhisHaA"));
?>