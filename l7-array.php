<?php  
    //indexed array

    /**
     * how to ddefine an array?
     * first use $ sign
     * then use a valid name
     */
    
    /**
     * how to declare a valid variable name?
     * we can use carrecters (uppercase and lowercase)
     * we can use _
     * we can use number at the end part or ther middle part od variable name
     * we can't use number at the beginning
     * we cart use special carecters (i.e. @#^) 
     */
     
    $yusuf = ["Md. Yusuf Ali", 37, "Male", 69, "Islam"];

    echo "$yusuf[0] - $yusuf[1]";

    echo "<pre>";
    var_dump($yusuf);
    echo "</pre>";

    echo "<pre>";
    print_r($yusuf);
    echo "</pre>";

    array_push($yusuf, "Dhaka", "Bangladesh");
    array_pop($yusuf);
    array_unshift($yusuf, "Mr.", "Thailandian");
    array_shift($yusuf);
    // to find the index number a perticular array
    array_search("Male", $yusuf);

    for($i = 0; $i < count($yusuf); $i++){
        echo $yusuf[$i]."<br>";
    }

    //associative array

    $yusufInfo = [
        "Name" => "Md. Yusuf Ali", 
        "Age" => 37, 
        "Gender" => "Male", 
        "Weight" => 69, 
        "Religion" => "Islam"
    ];
    
    $yusufInfo["Name"] = "Dr. Md. Yusuf Ali";
    $yusufInfo["City"] = "Dhaka";
    array_pop($yusufInfo);
    // array_unshift($yusufInfo, "Demo");

    unset($yusufInfo["Age"]);

    echo "<pre>";
    print_r($yusufInfo);
    echo "</pre>";

    echo $yusufInfo["Name"]."<br>Gender :".$yusufInfo["Gender"]."<br><hr>";


    foreach($yusufInfo as $key => $val){
        echo "$key : $val<br>";
    }
    echo "<hr>";
    //multi dimontional array
    $siamPeople = [
        ["Asif", "Barishal", 37],
        ["Rakib", "Dhaka", 30],
        ["Yusuf", "Thailand", 37],
    ]; 

    echo "<pre>";
    print_r($siamPeople);
    echo "</pre>";

    echo $siamPeople[0][0]."<br><hr>";

    $words = [" lives in ", " and his age is ", "."];

    for ($i=0; $i < count($siamPeople); $i++) { 
        for ($j=0; $j < count($siamPeople[$i]); $j++) { 
            echo $siamPeople[$i][$j].$words[$j];
        }
        echo "<br>";
    }

    echo "<hr>";
    foreach($siamPeople as $sPeople){
        $x = 0;
        foreach($sPeople as $sp){
            echo $sp." ".$words[$x];
            $x++;
        }
        echo "<br>";
    }
?>