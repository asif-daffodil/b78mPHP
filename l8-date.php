<?php  
    date_default_timezone_set("asia/dhaka");
    echo date("d/m/y h:i:s a D")."<br>";
    echo date("d/M/Y h:i:s A l")."<br>";
    echo date("d/F/Y H:i:s A l")."<br>";

    // mktime
    // hour minute second month day year

    $myTime = mktime(0, 0, 0, 9, 10, 2030);
    echo date("d/F/Y H:i:s A l", $myTime)."<br>";

    //strtotime
    $agamiShukrobar = strtotime("Next Friday");
    echo date("d/F/Y H:i:s A l", $agamiShukrobar)."<br>";

    $Lamsam = strtotime("+5 years +4 months +3 weeks +2 days 1 hours");
    echo date("d/F/Y H:i:s A l", $Lamsam)."<br>";

    $startDate = strtotime("next friday");
    $endTime = strtotime("+6 weeks", $startDate);

    /* while ($startDate <= $endTime) {
        echo date("d/F/Y l", $startDate)."<br>";
        $startDate = strtotime("+1 week", $startDate);
    } */

    
    /* 
    $nf = strtotime("next friday");
    $et = strtotime("+6 weeks", $nf);
    for ($i = $nf; $i <= $et;) { 
        echo date("d/F/Y l", $i)."<br>";
        $i = strtotime("+1 week", $i);
    }  
    */
   
?>