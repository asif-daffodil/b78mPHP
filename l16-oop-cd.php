<?php
class mokles
{
    public function __destruct()
    {
        echo "<br>Bye bye";
    }

    public function abul($name)
    {
        echo $name;
    }

    public function kabul()
    {
        echo "Rakib abar kobul bolte chay! nijer dhol nije petano! taulla/naira mathay tel deoya<br>";
    }


    public function __construct()
    {
        echo "Hello world<br>";
    }
}

class jobles extends mokles
{
    public $abdullah = "Hopeless";
}

/* 
$obj = new mokles;
$obj->kabul();
$obj->abul("Babul"); 
*/

$obj = new jobles;
echo $obj->abdullah;
