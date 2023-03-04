<?php  
    /**
     * must be devided by 400
     * must not be devided by 100
     * must be devided by 4
     */

     $kopaSmasu = 2000;
     $palaSobahan = 1900;

     function myFunc ($year) {
         if($year % 400 === 0){
             return "$year is a leapyear";
         }elseif($year % 100 === 0){
             return "$year is not a leapyear";
         }elseif ($year % 4 === 0) {
             return "$year is a leapyear";
         }else{
             return "$year is not a leapyear";
         }
     }

     echo myFunc($kopaSmasu)."<br>";
     echo myFunc($palaSobahan)."<br>";


     $age = 33;

     switch ($age) {
        case ($age < 12):
            echo "You are a baby";
            break;

        case ($age < 19):
            echo "You are a teeanger";
            break;

        case ($age < 30):
            echo "You are a young person";
            break;

        case ($age < 50):
            echo "You are a middle aged person";
            break;
        
        default:
            echo "You are a old person";
            break;
     }
?>