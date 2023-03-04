<?php  

    function dipti ($fname = "Hero", $lname = "Alom") {
        return "Your Full name is : $fname $lname<br>";
    }

    echo dipti ("Asif", "Abir");
    echo dipti ("Md.", "Yusuf");
    echo dipti ();
    echo dipti ("Siam");
    echo dipti (lname:"Said Mirja", fname:"Amader");

    function kachaBadam ($n1, $n2){
        if(is_int($n1) && is_int($n2)){
            return $n1 + $n2;
        }
        return "Please write a number!";
    }

    echo kachaBadam(5, 6)."<br>";

    $myFunc = fn($b) => $b;
    echo $myFunc("Babago");
?>