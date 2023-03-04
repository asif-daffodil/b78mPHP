<?php  
    // string related
    $str = "Siam and Yufsuf vai will get married on same days!!!";
    echo strlen($str)."<br>";
    echo str_word_count($str)."<br>";
    echo strrev($str)."<br>";
    $x = str_replace("will", "will not", $str);
    echo  str_replace(" on same days", "", $x)."<br>";
    echo str_shuffle($str)."<br>";
    echo substr($str, 0, 4);
    echo "<hr>";

    // math related
    echo min(100, 3, 99, 81, 2, 6)."<br>";
    echo max(100, 3, 99, 81, 2, 6)."<br>";
    echo abs(-6)."<br>";

    $y = 2.4;
    echo round($y)."<br>";
    echo ceil($y)."<br>";
    echo floor($y)."<br>";
?>