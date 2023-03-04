<?php  
    //starting point
    //ending point
    //conndition
    //work
    //increment

    //while loop
    $sp = 0;
    $ep = 10;
    while ($sp < $ep) {
        echo "$sp<br>";
        ++$sp;
    }

    $ghor = 599;
    $gunitok = 1;
    $end = 10;
    
    while ($gunitok <= $end) {
        $gunfol = $ghor * $gunitok;
        echo "$ghor x $gunitok = $gunfol <br>";
        $gunitok++;
    }

    //for loop
    for ($i=0; $i < 10; $i++) { 
        echo "$i<br>";
    }

?>